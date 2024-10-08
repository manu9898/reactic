/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {
      container: {
        padding: {
          '274px': '274px',
        },
      },
      screens: {
        'sm': { 'min': '300px', 'max': '897px' },
        'md': { 'min': '898px', 'max': '1158px' },
        'xl': { 'min': '1159px', 'max': '1199px' },
        'lg': { 'min': '1200px', 'max': '1358px' },
        '2xl': { 'min': '1359px' },
      },
      translate: {
        '13': '13rem',
        '320px': '20rem',
      },
      width: {
        '822': '822px',
        '38': '38rem',
        '2000' : '2000px',
      },

      backgroundImage: theme => ({
        'hero-pattern': "url('/images/img-methodologie-oriente-croissance-etape-2.svg')",
      }),
      fontSize: {
        sm: '0.8rem',
        base: '1rem',
        xl: '1.25rem',
        '2xl': '1.563rem',
        '3xl': '1.953rem',
        '4xl': '2.441rem',
        '5xl': '3.052rem',
        '6xl' : '3.75rem',
        '7xl' : '4.5rem',
      },
      height: {
        '136': '136px',
        '944' : '944px',
        '529' : '529px',
        '108' : '108px',
      },
      inset: {
        '120' : "120px",
        '500px': '500px',
        '130px' : '130px',
      },

      colors: {
        'teal-900': '#29FADB',
        'tertiary' : '#2C2B46',
        'secondary' : '#B9B8C1',
        'primary' : '#141331',
        'primary-50' : '#E8E7EA'
      },
      lineHeight: {
        'extra-loose': '2.5',
        '12': '3rem',
      },
      spacing: {
        '440px': '440px',
      },

      fontFamily: {
        'poppins': ['Poppins', 'sans'],
      },
      maxWidth: {
        'widthMenu': '180px',
        'widthTitle': '732px'
      },
      objectPosition: {
        'center-bottom': 'center bottom',
      }
    },
  },
  plugins: [],
}
