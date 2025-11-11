<?php

namespace App\Http\Controllers;

use App\Models\ButtonClick;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Jenssegers\Agent\Agent;

class ButtonTrackingController extends Controller
{
    public function track(Request $request)
    {
        // ✅ Validation (use Rule::in; remove spaces around comma-separated items)
        $validated = $request->validate([
            'campaign' => [
                'required', 'string', 'alpha_dash', 'max:100',
                Rule::in(['street-kids-christmas-ride', 'street-kids-christmas']),
            ],
            'button_id' => [
                'required', 'string', 'alpha_dash', 'max:100',
                Rule::in(['monthly_supporter_35', 'sponsor_christmas_party_10', 'join_mission_feed_hope']),
            ],
            'button_text' => ['required', 'string', 'max:255'],
            'page_url' => [
                'required', 'url', 'max:500',
                Rule::in([
                    'http://161.35.142.182/support',
                    'http://161.35.142.182/',
                    'https://helpkidsup.org/support',
                    'https://helpkidsup.org/',
                ]),
            ],
        ]);

        // ✅ Sanitize: strip HTML/JS and normalize whitespace
        $buttonText = trim(preg_replace('/\s+/u', ' ', strip_tags($validated['button_text'])));

        // ✅ Lightweight anomaly logging
        if (mb_strlen($buttonText) > 200) {
            Log::warning('Suspicious button text length', [
                'ip' => $request->ip(),
                'len' => mb_strlen($buttonText),
            ]);
        }

        // ✅ Paranoid pattern checks (quick wins against obvious XSS-y input)
        $suspiciousPatterns = ['<script', 'javascript:', 'onerror=', 'onclick=', '<iframe', 'srcdoc='];
        foreach ($suspiciousPatterns as $pattern) {
            if (stripos($buttonText, $pattern) !== false) {
                Log::warning('Suspicious pattern detected', [
                    'ip'      => $request->ip(),
                    'pattern' => $pattern,
                ]);
                return response()->json(['success' => false, 'message' => 'Invalid input'], 400);
            }
        }

        // ✅ Device/UA parsing
        $agent = new Agent();
        $agent->setUserAgent($request->userAgent());

        $deviceType = $agent->isTablet() ? 'tablet' : ($agent->isMobile() ? 'mobile' : 'desktop');

        // ✅ Persist (use sanitized $buttonText)
        ButtonClick::create([
            'campaign'    => $validated['campaign'],
            'button_id'   => $validated['button_id'],
            'button_text' => $buttonText,
            'page_url'    => $validated['page_url'],
            'ip_address'  => $request->ip(),
            'user_agent'  => $request->userAgent(),
            'device_type' => $deviceType,
            'browser'     => $agent->browser(),
            'platform'    => $agent->platform(),
            'clicked_at'  => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Button click tracked successfully',
        ]);
    }
}
