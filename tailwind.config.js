const colors = require("tailwindcss/colors");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: 'media',
    theme: {
        fontFamily: {
            'sans': [ '"Roboto"', 'sans-serif' ],
            'serif': [ '"Roboto Slab"', 'serif' ],
            'mono': [ '"Space Mono"', 'monospace' ],
        },
        colors: {
            'transparent': 'transparent',
            'current': 'currentColor',
            'primary': '#1e3a8a',
            'secondary': '#4ade80',
            'black': '#000000',
            'white': '#FFFFFF',
            'green': colors.green,
            'blue': colors.blue,
            'slate': colors.slate,
            'yellow': colors.yellow,
        },
        extend: {},
    },
    plugins: [],
}
