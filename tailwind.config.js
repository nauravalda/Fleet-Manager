/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'primary': '#171717',
        'secondary': '#B03D0C',
        'tertiary': '#C1C1C1',
        'accepted': '#FF9A9A',
        'rejected': '#B7FF9A',
      }
    },
  },
  plugins: [],
}

