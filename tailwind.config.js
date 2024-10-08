/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',
    './Modules/**/*.blade.php'
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('preline/plugin'),
    require('@tailwindcss/forms'),
  ],
}
