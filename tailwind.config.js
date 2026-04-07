/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#8BC34A', // Nature Green
        secondary: '#002633', // Navy Marine
        background: '#ffffff',
        surface: '#f8f9fa',
      }
    },
  },
  plugins: [],
}
