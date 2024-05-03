import preset from './vendor/filament/support/tailwind.config.preset'
/** @type {import('tailwindcss').Config} */
module.exports = {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors:{
                Mainpink : '#f472b6'
            }
        },
    },
    plugins: [],
}

