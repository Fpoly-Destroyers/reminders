/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            animation: {
                "toast-slide": "toast-slide 0.8s ease-in-out forwards",
            },
            keyframes: {
                "toast-slide": {
                    "0%": { transform: "translateX(100%)" },
                    "100%": { transform: "translateX(0)" },
                },
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
