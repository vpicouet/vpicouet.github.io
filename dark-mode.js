/**
 * Dark Mode Toggle
 * Automatically saves preference to localStorage
 */

(function() {
    'use strict';

    // Get saved theme or default to light
    const savedTheme = localStorage.getItem('theme') || 'light';

    // Apply saved theme immediately (before page renders)
    document.documentElement.setAttribute('data-theme', savedTheme);

    // Wait for DOM to load
    document.addEventListener('DOMContentLoaded', function() {

        // Create toggle button
        const toggleButton = document.createElement('button');
        toggleButton.className = 'theme-toggle';
        toggleButton.setAttribute('aria-label', 'Toggle dark mode');
        toggleButton.innerHTML = getCurrentThemeIcon();

        // Add to navigation
        const navLinks = document.querySelector('.nav-links');
        if (navLinks) {
            const li = document.createElement('li');
            li.appendChild(toggleButton);
            navLinks.appendChild(li);
        }

        // Toggle theme on click
        toggleButton.addEventListener('click', function() {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);

            toggleButton.innerHTML = getCurrentThemeIcon();
        });
    });

    function getCurrentThemeIcon() {
        const theme = document.documentElement.getAttribute('data-theme');
        if (theme === 'dark') {
            return '◐'; // Half circle for light mode
        } else {
            return '◑'; // Inverted half circle for dark mode
        }
    }
})();
