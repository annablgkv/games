const mix = require('laravel-mix');

mix
  .js('resources/src/main.js', 'public/js')
  .sass('resources/src/assets/sass/global.scss', 'public/css')
  .copy('resources/src/assets/img', 'public/img')

mix.options({
  extractVueStyles: 'public/css/vue-style.css'
})

mix.webpackConfig({
  resolve: {
    alias: { '@': path.resolve(__dirname, 'resources/src') } 
  }
})

mix.setPublicPath('public')
