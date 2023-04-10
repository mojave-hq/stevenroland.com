const defaultTheme = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin');

module.exports = {
 content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*' // exclude temporary files
  ],{ dot: true }),
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [
    plugin(function({ addBase }) {
      addBase({
        // Used to hide alpine elements before being rendered.
        '[x-cloak]': {
          display: 'none !important'
        },
      })
    }),
  ],
};
