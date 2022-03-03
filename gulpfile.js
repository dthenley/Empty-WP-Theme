const postcss = require('gulp-postcss')
const gulp = require('gulp')
const autoprefixer = require('autoprefixer')
const atImport = require("postcss-import")
// const cssnano = require('cssnano')


gulp.task('css', () => {
  
  const plugins = [
    atImport(),
    autoprefixer(),
    // cssnano()
  ];
    
  
    return gulp.src('assets/css/src/**/*.css')
      .pipe( postcss(plugins) )
      .pipe( gulp.dest('assets/css/') )
})

