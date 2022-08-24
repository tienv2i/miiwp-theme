const purgecss = require('@fullhuman/postcss-purgecss');
const purgecssWordpress = require('purgecss-with-wordpress');
module.exports = {
    plugins: [
      require('autoprefixer'),
      // purgecss({
      //   content: ['./**/*.html','./**/*.php','./**/*.js'],
      //   safelist: purgecssWordpress.safelist
      // })
    ]
  }