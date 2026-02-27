import './bootstrap';
import 'aos/dist/aos.css';
import AOS from 'aos';

window.addEventListener('load', () => {
    // Hide loader smoothly
    const loader = document.getElementById('ftt-loader');
    if (loader) {
        loader.classList.add('opacity-0', 'pointer-events-none');
        setTimeout(() => {
            loader.style.display = 'none';
        }, 600);
    }

    // Initialize AOS animations
    AOS.init({
        duration: 900,
        easing: 'ease-out-cubic',
        once: true,
        offset: 80,
    });

    // Mobile navigation toggle
    const toggleButton = document.getElementById('mobile-nav-toggle');
    const closeButton = document.getElementById('mobile-nav-close');
    const overlay = document.getElementById('mobile-nav-overlay');
    const drawer = document.getElementById('mobile-nav');

    const closeNav = () => {
        if (!overlay || !drawer) return;
        overlay.classList.add('opacity-0', 'pointer-events-none');
        drawer.classList.add('translate-x-full');
    };

    const openNav = () => {
        if (!overlay || !drawer) return;
        overlay.classList.remove('opacity-0', 'pointer-events-none');
        drawer.classList.remove('translate-x-full');
    };

    if (toggleButton && overlay && drawer) {
        toggleButton.addEventListener('click', openNav);
    }

    if (closeButton) {
        closeButton.addEventListener('click', closeNav);
    }

    if (overlay) {
        overlay.addEventListener('click', (event) => {
            if (event.target === overlay) {
                closeNav();
            }
        });
    }

    document.querySelectorAll('[data-mobile-nav-link]').forEach((el) => {
        el.addEventListener('click', closeNav);
    });

    // Gallery photo/video toggle
    const galleryTabs = document.querySelectorAll('[data-gallery-tab]');
    const galleryPanels = document.querySelectorAll('[data-gallery-panel]');

    if (galleryTabs.length && galleryPanels.length) {
        galleryTabs.forEach((tab) => {
            tab.addEventListener('click', () => {
                const target = tab.getAttribute('data-gallery-tab');
                if (!target) return;

                // Update tab styles
                galleryTabs.forEach((otherTab) => {
                    const isActive = otherTab === tab;
                    otherTab.setAttribute('data-active', isActive ? 'true' : 'false');
                });

                // Show/hide panels
                galleryPanels.forEach((panel) => {
                    if (panel.getAttribute('data-gallery-panel') === target) {
                        panel.classList.remove('hidden');
                    } else {
                        panel.classList.add('hidden');
                    }
                });
            });
        });
    }
});