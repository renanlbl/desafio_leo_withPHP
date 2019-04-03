const gulp = require('gulp')
const sass = require('gulp-sass')

gulp.task('sass', () => {
  return gulp.src('./src/sass/*.sass')
  .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
  .pipe(gulp.dest('./src/css'));
})

gulp.task('watch', function () {
  gulp.watch('./src/sass/*.sass', gulp.series('sass'));
})

gulp.task('default', () => {
  console.log("Running...")
})