/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    fontFamily: {
      'bebas': ['Bebas Neue'],
      'montserrat': ['Montserrat'],
    },
    fontSize: {
      '2xs': '8px',
      sm: '0.8rem',
      base: '1rem',
      xl: '1.25rem',
      '2xl': '1.563rem',
      '3xl': '1.953rem',
      '4xl': '2.441rem',
      '5xl': '3.052rem',
    },
    extend: {
      colors: {
        dark: "#444444",
        primary: "#E1E1E1",
      },
    },
  },
  plugins: [],
};
