const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'media',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        fontFamily: {
            sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            normalMedieval: ['normal-medieval'],
            boldMedieval: ['bold-medieval'],
            outlineMedieval: ['outline-medieval'],
            titleMiddleAge : ['title-middle-age'],
            titleMiddleAgeOutlined : ['title-middle-age-outlined'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin')
    ],
};
