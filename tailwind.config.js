import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                myyellowcolor: "#FDCD0E",
                myyellowlight: "#fdd94a",
                mygreen: "#235203",
                mygreenlight: "#E0F0F6",

                mygray: "#9B9896",
                mygrayfull: "#BAAAAA",
                mygraylight: "#D9D9D9",
                myredish: "#FF7401",
            },
        },
    },

    plugins: [forms],
};
