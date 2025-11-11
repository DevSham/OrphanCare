class ButtonTracker {
    constructor() {
        this.endpoint = '/track-button-click';
        this.initialized = false;
    }

    init() {
        if (this.initialized) return;

        // Wait for DOM to be ready before initializing
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => {
                this.setupTracking();
            });
        } else {
            // DOM is already ready
            this.setupTracking();
        }

        this.initialized = true;
    }

    setupTracking() {
        // Track existing buttons
        this.attachTrackingToButtons();

        // Setup mutation observer for dynamically added buttons
        if (document.body) {
            const observer = new MutationObserver((mutations) => {
                mutations.forEach((mutation) => {
                    if (mutation.addedNodes.length) {
                        this.attachTrackingToButtons();
                    }
                });
            });

            observer.observe(document.body, {
                childList: true,
                subtree: true
            });
        }
    }

    attachTrackingToButtons() {
        const buttons = document.querySelectorAll('[data-track-button]');
        buttons.forEach(button => {
            if (!button.hasAttribute('data-tracking-attached')) {
                button.addEventListener('click', this.handleButtonClick.bind(this));
                button.setAttribute('data-tracking-attached', 'true');
            }
        });
    }

    async handleButtonClick(event) {
        const button = event.currentTarget;
        const campaign = button.getAttribute('data-campaign') || this.getDefaultCampaign();
        const buttonId = button.getAttribute('data-button-id') || this.generateButtonId(button);
        const buttonText = button.getAttribute('data-button-text') || button.textContent.trim();
        const pageUrl = window.location.href;

        // Debug logging
        console.log('Tracking button click:', {
            campaign,
            buttonId,
            buttonText,
            pageUrl
        });

        try {
            await this.trackClick(campaign, buttonId, buttonText, pageUrl);
            console.log('✅ Button click tracked successfully');
        } catch (error) {
            console.warn('Button tracking failed:', error);
        }
    }

    generateButtonId(button) {
        // Generate a unique ID based on button content and position
        const text = button.textContent.trim().replace(/\s+/g, '_').toLowerCase();
        const classes = Array.from(button.classList).join('_');
        return `${text}_${classes}_${this.hashCode(button.outerHTML)}`;
    }

    hashCode(str) {
        let hash = 0;
        for (let i = 0; i < str.length; i++) {
            const char = str.charCodeAt(i);
            hash = ((hash << 5) - hash) + char;
            hash = hash & hash; // Convert to 32bit integer
        }
        return Math.abs(hash).toString(36).substring(0, 8);
    }

    getDefaultCampaign() {
        // Extract campaign from URL or use default
        const path = window.location.pathname;
        if (path.includes('street-kids-christmas-ride')) {
            return 'street-kids-christmas-ride';
        } else if (path.includes('street-kids-christmas')) {
            return 'street-kids-christmas';
        }
        return 'unknown-campaign';
    }

    async trackClick(campaign, buttonId, buttonText, pageUrl) {
        try {
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
            console.log('Sending tracking request:', {
                campaign,
                buttonId,
                buttonText,
                pageUrl,
                csrfToken: csrfToken ? 'present' : 'missing'
            });

            const response = await fetch('/track-button-click', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken || '',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                    campaign: campaign,
                    button_id: buttonId,
                    button_text: buttonText,
                    page_url: pageUrl
                })
            });

            if (!response.ok) {
                // Get the full error response
                const errorData = await response.json().catch(() => null);
                console.error('Validation failed:', errorData);

                if (errorData?.errors) {
                    console.error('Validation errors:', errorData.errors);
                }

                throw new Error(`HTTP error! status: ${response.status}`);
            }

            const result = await response.json();
            console.log('✅ Tracking successful:', result);
            return result;
        } catch (error) {
            console.error('Button tracking failed:', error);
            throw error;
        }
    }

    // Manual tracking for special cases
    trackManual(campaign, buttonId, buttonText, pageUrl = null) {
        return this.trackClick(
            campaign,
            buttonId,
            buttonText,
            pageUrl || window.location.href
        );
    }
}

// Initialize globally - wait for DOM to be ready
if (typeof window !== 'undefined') {
    window.buttonTracker = new ButtonTracker();

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
            window.buttonTracker.init();
        });
    } else {
        // DOM already loaded
        window.buttonTracker.init();
    }
}
