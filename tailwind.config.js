module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: theme => ({
        'banner-bg': "url('./banner-bg.jpg')"
      })
    },
  },
  variants: {
    display: ['responsive', 'group-hover', 'group-focus'],
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}