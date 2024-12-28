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
            "h": "Josefin Sans",
            "p": "Quicksand",
          },
          container: {
            padding: {
              DEFAULT: '.75rem',
              sm: '1.5rem',
              lg: '2.25rem',
              xl: '3rem',
              '2xl': '4rem',
            },
            center: true,
          },
        },
      },

    plugins: [require("@tailwindcss/typography"), require("daisyui")],
    daisyui: {
      themes: ["synthwave", "nord"],
    },
};
