<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_admin' => 'boolean',
        ];
    }

    /**
     * Determine if the user can access the Filament panel.
     *
     * SECURITY: Restrict admin panel access to authorized users only.
     */
    public function canAccessPanel(Panel $panel): bool
    {
        // Option 1: Check specific admin emails from config
        $adminEmails = config('auth.admin_emails', []);
        if (in_array($this->email, $adminEmails, true)) {
            return true;
        }

        // Option 2: Check is_admin column (recommended)
        // Add migration: $table->boolean('is_admin')->default(false);
        // return $this->is_admin === true;

        // Option 3: Check email domain
        // return str_ends_with($this->email, '@helpkidsup.org');

        return false;
    }
}
