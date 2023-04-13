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
      "colors": {
        "primary": {
          50: "#E0F7FF",
          100: "#C2F0FF",
          200: "#85E0FF",
          300: "#47D1FF",
          400: "#0AC2FF",
          500: "#0099CC",
          600: "#007AA3",
          700: "#005C7A",
          800: "#003D52",
          900: "#001F29",
          950: "#000F14"
        },
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
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
