/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './templates/**/*.php',
    './includes/**/*.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        'black': '#000000',
        'white': '#ffffff',
        'blue': {
          'light': '#5c5cff',
          'DEFAULT': '#0000ee',
          'dark': '#5200d6',
        },
        'primary': {
          'light': '#404040',
          'DEFAULT': '#161616',
          'dark': '#000000',
        },
        'secondary': {
          'light': '#f6f6f6',
          'DEFAULT': '#f0f0f0',
          'dark': '#eaeaea',
        },
        'tertiary': {
          'light': '#ffd5bd',
          'DEFAULT': '#ffbe98',
          'dark': '#ffb488',
        },
      },
      fontFamily: {
        'sans': ['Open Sans, sans-serif'],
        'serif': ['Abril Fatface, serif'],
      },
      fontSize: {
        'xs': '0.875rem', // 14px
        'sm': '1rem', // 16px
        'base': '1.125rem', // 18px
        'lg': '1.25rem', // 20px
        'xl': '1.5rem', // 24px
        '2xl': '1.75rem', // 28px
        '3xl': '2rem', // 32px
        '4xl': '2.25rem', // 36px
        '5xl': '2.5rem', // 40px
        '6xl': '2.75rem', // 44px
        '7xl': '3rem', // 48px
        '8xl': '3.25rem', // 52px
        '9xl': '3.5rem', // 56px
        '10xl': '3.75rem', // 60px
        '11xl': '4rem', // 64px
      }
    },
  },
  plugins: [
    require('postcss-import'),
    require('postcss-nested'),
    require('tailwindcss'),
    require('autoprefixer')
  ],
}

