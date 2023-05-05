const defaultTheme = require('tailwindcss/defaultTheme');
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
        fontFamily: {
            sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            normalMedieval: ['normal-medieval'],
            boldMedieval: ['bold-medieval'],
            outlineMedieval: ['outline-medieval'],
            titleMiddleAge: ['title-middle-age'],
            titleMiddleAgeOutlined: ['title-middle-age-outlined'],
        },
    },
  },
  plugins: [
      require('@tailwindcss/forms'),
      require('@tailwindcss/aspect-ratio'),
      require('@tailwindcss/typography'),
      require('flowbite/plugin')
  ],
}

