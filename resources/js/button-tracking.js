class ButtonTracker {
    constructor() {
        this.endpoint = '/track-button-click';
        this.initialized = false;
    }

    init() {
        if (this.initialized) return;

        // Track existing buttons with data-track-button attribute
        document.addEventListener('DOMContentLoaded', () => {
            this.attachTrackingToButtons();
        });

        // Also track dynamically added buttons
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

        this.initialized = true;
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

        try {
            await this.trackClick(campaign, buttonId, buttonText, pageUrl);
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
        const response = await fetch(this.endpoint, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
            },
            body: JSON.stringify({
                campaign,
                button_id: buttonId,
                button_text: buttonText,
                page_url: pageUrl
            })
        });

        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }

        return await response.json();
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

// Initialize globally
window.buttonTracker = new ButtonTracker();
window.buttonTracker.init();
