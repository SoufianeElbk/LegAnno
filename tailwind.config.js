/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    darkMode: 'class',
    theme: {
      extend: {
        colors: {
            'customPurple': '#4535C1',
            'customBleu': '#64CCC5',
        },
        fontFamily : {
            Poppins : 'Poppins',
            Roboto : 'Roboto',
        },
      },
    },
    plugins: [],
  }
