/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      'sm': '0px',
      // => @media (min-width: 640px) { ... }

      'md': '576px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
    },
    extend: {
      colors:{
        'ungu':{
          DEFAULT : '#4E6DA9', // gelap navbar
        },
        'putih' : {
          DEFAULT : '#FFFFFF',
        },
        'pink' :{
          DEFAULT: '#ECA3C3', // untuk button
          dark : '#CF95AF', // untuk teks
        },
        'merah' :{
          DEFAULT : '#EE5F5F',
        }
      }
    },
  },
  plugins: [require("daisyui")],
  safelist : [
    /(bg|text|border)-(ungu|putih|pink|merah)/,
    /(bg|text|border)-(pink)-(DEFAULT|dark)/,
  ],
}


