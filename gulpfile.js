const postcss = require('gulp-postcss')
const gulp = require('gulp')
const autoprefixer = require('autoprefixer')
const atImport = require("postcss-import")
const postcssPresetEnv  = require('postcss-preset-env');
const browserSync = require('browser-sync').create();
// const cssnano = require('cssnano')


gulp.task('css', () => {
  
  const plugins = [
    atImport(),
    autoprefixer(),
    postcssPresetEnv({ stage: 1 }),
    // cssnano()
  ];
    
  
    return gulp.src('assets/css/src/**/*.css')
      .pipe( postcss(plugins) )
      .pipe( gulp.dest('assets/css/') )
      .pipe(browserSync.stream())
})

gulp.task('browser-sync', gulp.series( 'css', function() {
  browserSync.init({
      proxy: "darrin-hackney-photography.local"
  });

  gulp.watch('assets/css/src/**/*.css', gulp.series('css'));

}));