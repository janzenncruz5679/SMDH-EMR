/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.{blade.php,js,css,scss}"],

    theme: {
        screens: {
            ssm: { max: "639px" },

            sm: { min: "640px", max: "767px" },
            // => @media (min-width: 640px and max-width: 767px) { ... }

            md: { min: "768px", max: "1023px" },
            // => @media (min-width: 768px and max-width: 1023px) { ... }

            lg: { min: "1024px", max: "1279px" },
            // => @media (min-width: 1024px and max-width: 1279px) { ... }

            xl: { min: "1280px", max: "1535px" },
            // => @media (min-width: 1280px and max-width: 1535px) { ... }

            "2xl": { min: "1536px" },
            // => @media (min-width: 1536px) { ... }
        },
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
                blue: {
                    100: "#C9F2F8",
                    200: "#005551",
                    300: "#028090",
                },
            },
            fontFamily: {
                Roboto: ["Roboto", "sans-serif"],
            },
        },
    },
    plugins: [],
};
