/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    fontFamily: {
      'bebas': ['Bebas Neue'],
      'montserrat': ['Montserrat']
    },
    extend: {
      colors: {
        'dark': '#444444'
      }
    },
  },
  plugins: [],
}