/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './assets/css/tailwind.css'
  ],
  theme: {
    extend: {

      fontFamily: {
        manrope: ['Manrope', 'sans-serif'],
      },
      colors: {
        custom: {
          'green-100': "#00BC04",
          'green-200': "#0AE02D",
          'green-300': "#50E969",
          'green-400': "#0be02e",
          'green-500': "#4fe653",
          'orange-100': "#ff5a00",
          'green-600': "#56b947",
          'gray-100': "#D8D5E8",
          'gray-200': "#F2F6FA",
          'gray-300':"#b5b4b4",
          'gray-dark-100': "#304151",
          'gray-dark-200': "#384B5E",
          'purple-light-100': "#75638E",
          'purple-light-200': "#8D7BA6",
          'purple-light-300': "#CDC7D4",
          'blue-light-100': "#64B3FF",
          'white-100': "#F2F6FA",
          'white-200': "#A1B5C8",
          'dark-100': "#000000B2",
        },
      },
      screens: {
        '3xl': '1600px'
      },
      listStyleImage: {
        'bluelist': 'url("../images/h-icon-blue.svg")',
        'greenlist': 'url("../images/h-icon-green.svg")',
      },
      maxWidth: {
        'video-screen': '700px'
      },
      backgroundImage: {
        'banner': 'url(../images/banner.png)',
        'breaking-new-bg': 'url(../images/breaking-news-bg.png)',
        'arrow': 'url(../images/arrow.png)',
        'line': 'url(../images/Line.png)',
        'gardiant': 'url(../images/green-gradiant.png)',
        'gardiant-top': 'url(../images/investor-obj2.png)',
        'arrow-circle': 'url(../images/arrow-circle-right.png)',
        'faq-arrow': 'url(../images/arrow.svg)',
        'bluelist': 'url("../images/h-icon-blue.svg")',
        'greenlist': 'url("../images/h-icon-green.svg")',
      },

    },
  },
  plugins: [],

}

