/** @type {import('tailwindcss').Config} */

const {colors: defaultColors} = require('tailwindcss/defaultTheme')

const colors = {
    ...defaultColors,
    ...{
        "app-primary-dark": "#EA580C",
        "app-primary": "#e26828",
        "app-primary-light": "#fe842e",
        "app-white": "#FDFDFD",
        "app-gray-light": "#F7F7F7",
        "app-gray-dark": "#B4B4B4",
        "app-red-light": "#FF6363",
        "app-text-black": "#2B2F42",
        "app-text-gray": "#8C8C8C",
        "app-border-gray": "#E1E1E1",
    },
}

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.[t|j]sx",
    ],
    theme: {
        extend: {
            colors: colors,
        },
    },
    plugins: [],
}
