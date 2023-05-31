/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.{blade.php,js,css,scss}"],

    theme: {
        screens: {
            xs: { max: "639px" },
            sm: { min: "640px" },
            md: { min: "768px" },
            lg: { min: "1024px" },
            xl: { min: "1280px" },
            "2xl": { min: "1536px" },
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
                custom_hospital: {
                    100: "#508D83",
                    200: "#508D83",
                    300: "#28655B",
                    400: "#145147",
                    500: "#003D33",
                },
            },
            fontFamily: {
                Roboto: ["Roboto", "sans-serif"],
            },
        },
    },
    plugins: [],
};
