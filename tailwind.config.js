import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'deep-forest-green': '#2F4F4F',
                'warm-beige': '#F5DEB3',
                'terracotta': '#D2691E',
                'soft-cream': '#FFF8E1',
                'charcoal-gray': '#333333',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'heading': ['Lora', 'serif'],        // For headings
                'body': ['Poppins', 'sans-serif'],   // For body text
                'nunito': ['Nunito', 'sans-serif'],  // For buttons
            },
        },
    },

    plugins: [forms, typography],
};
