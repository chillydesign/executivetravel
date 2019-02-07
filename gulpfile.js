var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var minify = require('gulp-minify');
var watch = require('gulp-watch');
//var browserSync = require('browser-sync');


gulp.task('heya', function(done) {
  console.log('I live! Gulp is alive!');
      done();
});


gulp.task('sass', function(done){
  return gulp.src('scss/global.scss')
    .pipe(watch('scss/*.scss' , function(){
        console.log('Made CSS File');
    } ))
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(autoprefixer({
        cascade: false
    }))
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('css'));
    done();

});


// gulp.task('watch', function () {
//     return watch('scss/**/*.scss', { ignoreInitial: false })
//         .pipe(
//             gulp.dest('sass')
//         );
// });


// Run all Gulp tasks and serve application
gulp.task('default', gulp.series( 'sass'), function() {
  // gulp.watch('scss/*.scss', ['sass']);

});
