/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./views/**.twig', './assets/**/*.js'],
  theme: {
    colors:{
      blue:'rgb(0,0,255)',
      cream:'rgb(255,255,150)'
    }
},
  plugins: [
    require('@tailwindcss/typography')
  ],
}

