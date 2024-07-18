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
        fontFamily: {
            canela: ["Canela", "sans-serif"],
            ghothic: ["trade-ghtic", "sans-serif"],
        },
        extend: {
            screens: { xxs: "320px", xs: "420px" },
            colors: {
              primary_orange: "#f8961f",
              primary: "#1E1E1E",
              secondary: "#656f77",
              light: "#f3f4f4",
              gray_one: "#8996a0",
              dark: "#1e1e1e",
              crimson: "#A41034",
              dark_light: "#181818",
              yellow: "#FFD575",
              navy: "#000435",
            },
        },
    },

    plugins: [forms],
};
