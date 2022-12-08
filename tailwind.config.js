/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.{blade.php,js,css,scss}"],

    theme: {
        extend: {
            colors: {
                transparent: "transparent",
                current: "currentColor",
                green: {
                    100: "#EAF9DE",
                    200: "#CBFFAE",
                    300: "#A6F787",
                    400: "#7DF75A",
                    500: "#18BB0C",
                    600: "#008A00",
                    700: "#067306",
                    800: "#07540A",
                    900: "#002101",
                },
            },
        },
    },
    plugins: [],
};
