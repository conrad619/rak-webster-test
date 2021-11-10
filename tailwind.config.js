module.exports = {
  mode: 'jit',
  purge: [
    './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    fontFamily:{
      'sans':'Arial, Sans Serif',
      'body': 'Open Sans'
    },
    screens: {
      'sm':'500px',
      'md':'600px',
      'lg':'1100px'
    },
    extend: {
      boxShadow:{
        'inner-light': 'inset 0 0 6px #fff',
        'glow': '0 0 16px #0081FE'
      },
      fontSize:{
        'd1':'3.5rem',
        'h1':'2.25rem',
        'h2':'2.125rem',
        'h3':'1.75rem',
        'h4':'1.5rem',
        'h5':'1.25rem',
        'h6':'1.0625rem',
        'c1':'1.75rem',
        'c2':'1.5rem',
        'c3':'1.375rem',
        'c4':'1.25rem',
        'c5':'1.125rem',
      },
      colors:{
        black: '#121212',
        light: {
          'primary':'#FFFFFF',
          'secondary':'#FFFFFF99',
          'tertiary':'#FFFFFF4D',
          'quarternary':'#FFFFFF2E'
        },
        dark: {
          'primary':'#121212',
          'secondary':'#12121299',
          'tertiary':'#1212124D',
          'quarternary':'#1212122E'
        },
        primary: {
          50: '#f2f8fc',
          100: '#dff1ff',
          200: '#bae0ff',
          300: '#9ed3ff',
          400: '#66baff',
          500: '#3ba2ff',
          600: '#0081fe',
          700: '#006ac6',
          800: '#004077',
          900: '#002a4f',
        },
        secondary: {
          50: '#fffaf3',
          100: '#fff7ed',
          200: '#ffeed6',
          300: '#ffdeb1',
          400: '#ffca83',
          500: '#ffb95b',
          600: '#ff9e1b',
          700: '#d17800',
          800: '#9a5800',
          900: '#472900',
        },
        neutral: {
          50: '#ececec',
          100: '#d9d9d9',
          200: '#c7c7c7',
          300: '#b8b8b8',
          400: '#a7a7a7',
          500: '#8c8c8c',
          600: '#747474',
          700: '#4e4e4e',
          800: '#323336',
          900: '#262A2B',
        },
        green: {
          50: '#effaf3',
          200: '#7bd99f',
          400: '#2db561',
          600: '#009a44',
        },
        red: {
          50: '#fff5f7',
          200: '#ffcbd4',
          400: '#ff5573',
          600: '#d51d3e',
        },
        yellow: {
          50: '#FFFEEA',
          200: '#FFF779',
          400: '#FFEF00',
          600: '#CEC200',
        },
        blue: {
          300: '#9ED3FF',
          600: '#0081FE',
          900: '#002A4F',
          'grad-1':'#006AC6',
          'grad-2':'#0081FE',
          'grad-3':'#3BA2FF',
        },
      }
    }
    
  },
  plugins: [],
}
