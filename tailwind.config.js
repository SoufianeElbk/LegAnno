import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
      extend: {
        colors: {
            'customPurple': '#4535C1',
            'customBleu': '#64CCC5',
        },
        fontFamily : {
            Poppins : 'Poppins',
            Roboto : 'Roboto',
        },
      },
    },

    plugins: [forms],
};
