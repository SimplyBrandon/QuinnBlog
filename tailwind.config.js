module.exports = {
  purge: [],
  theme: {
    extend: {
      fontSize: {
        '7xl': '5rem',
        '8xl': '6rem',
        '9xl': '7rem',
        '10xl': '8rem'
      },
      fontFamily: {
        'manrope': ['Manrope', 'sans-serif'],
        'catamaran': ['Catamaran', 'sans-serif'],
        'faster-one': ['Faster One', 'sans-serif']
      },
      top: {
        'full': '100%'
      },
      height: {
        '128': '32rem',
        '256': '64rem',
        '500px': '500px'
      },
      boxShadow: {
        'darken': 'inset 0 0 10000px 1000px rgba(0, 0, 0, 0.45)'
      }
    },
    
  },
  variants: {},
  plugins: [
    require('tailwindcss'),
  ],
}
