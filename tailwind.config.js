import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                ubuntu: ['Ubuntu', 'sans-serif'],
            },
        },
    },

    plugins: [forms],
};

//npx tailwindcss build -i resources/css/app.css -o public/build/assets/app-49a0a1d1.css
