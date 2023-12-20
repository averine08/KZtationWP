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
          regis : '#809BCE', //untuk login
        },
        'putih' : {
          DEFAULT : '#FFFFFF',
        },
        'pink' :{
          DEFAULT: '#ECA3C3', // untuk button
          dark : '#CF95AF', // untuk teks
          regis : '#EAC4D5', // untuk login
        },
        'merah' :{
          DEFAULT : '#EE5F5F',
        }
      }
    },
  },
  plugins: [require("daisyui")],
  daisyui: {
    themes: [], // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
    darkTheme: "dark", // name of one of the included themes for dark mode
    base: true, // applies background color and foreground color for root element by default
    styled: true, // include daisyUI colors and design decisions for all components
    utils: true, // adds responsive and modifier utility classes
    prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
    logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
    themeRoot: ":root", // The element that receives theme color CSS variables
  },
  safelist : [
    /(bg|text|border)-(ungu|putih|pink|merah)/,
    /(bg|text|border)-(pink)-(DEFAULT|dark)/,
  ],
}


