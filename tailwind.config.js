/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      sans: ['Poppins', 'sans-serif'],
    },
    extend: {
      colors: {
        'orange': '#DE690E',
        'orange-hover':'C65E0D',
        'red':'E83737',
        'red-hover':'C73131',
        'green':'3FAC6B',
        'green-hover':'38985F',

      }
    },
  },
  plugins: [],
}