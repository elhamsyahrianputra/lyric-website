/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        negative: {
          light: '#f47961',
          DEFAULT: '#ea4f30',
          dark: '#d72f0f',
        },

        positive: {
          light: '#35df90',
          DEFAULT: '#1eb971',
          dark: '#188f57',
        },

        warning: {
          light: '#fac661',
          DEFAULT: '#f1ae2d',
          dark: '#e49807',
        },

        accent: {
          light: '#33a9ff',
          DEFAULT: '#0090f7',
          dark: '#0071c2',
        },

        lake: {
          100: '#5b728c',
          200: '#2f4765',
          300: '#2a405b',
          400: '#253850',
          500: '#203145',
          600: '#1c2a3b',
          700: '#172331',
          800: '#131e2a',
        },
      },
    },
  },
  plugins: [],
}
