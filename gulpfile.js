const gulp = require('gulp')
const sass = require('gulp-sass')

gulp.task('sass', () => {
  return gulp.src('./src/sass/*.sass')
  .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
  .pipe(gulp.dest('./src/css'));
})

gulp.task('sass_painel', () => {
  return gulp.src('./painel/sass/*.sass')
  .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
  .pipe(gulp.dest('./painel/css'));
})

gulp.task('watch', function () {
  gulp.watch('./src/sass/*.sass', gulp.series('sass'));
})

gulp.task('watch_painel', function () {
  gulp.watch('./painel/sass/*.sass', gulp.series('sass_painel'));
})

gulp.task('default', () => {
  console.log("Running...")
})