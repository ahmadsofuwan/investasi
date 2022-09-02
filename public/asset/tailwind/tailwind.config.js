/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["../../../app/Views/**/*.{html,js,php}","./node_modules/tw-elements/dist/js/**/*.js","../js/**/*.{js}",
             "./node_modules/flowbite/**/*.js"
      ],
  theme: {
    extend: {},
  },
  plugins: [
    require('tw-elements/dist/plugin'),
    require('flowbite/plugin')
  ],
}
