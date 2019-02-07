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
        cascade: false,
        browsers: ['last 3 versions'],
    }))
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('css'));
    done();

});



// Run all Gulp tasks and serve application
gulp.task('default', gulp.series( 'sass'), function() {
    // sass function now incldes the watching of files

});
