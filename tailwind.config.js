/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './templates/**/*.php',
  ],
  theme: {
    extend: {
      colors: {
        'black': '#161616',
        'white': '#f0f0f0'
      }
    },
  },
  plugins: [],
}

