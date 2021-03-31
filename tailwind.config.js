const { colors } = require("tailwindcss/defaultTheme");
const defaultTheme = require("tailwindcss/defaultTheme");
module.exports = {
    purge: [
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ["Manrope", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "dark-purple": {
                    50: "#f4f4f6",
                    100: "#eaeaed",
                    200: "#c9c9d1",
                    300: "#a9a9b5",
                    400: "#69697e",
                    500: "#282846",
                    600: "#24243f",
                    700: "#1e1e35",
                    800: "#18182a",
                    900: "#141422",
                },
            },
            scale: {
                300: "3",
            },
            width: {
                "sm-container": "60rem",
            },
        },
    },
    variants: {
        extend: {
            scale: ["active"],
        },
    },
    plugins: [require("@tailwindcss/aspect-ratio")],
};
