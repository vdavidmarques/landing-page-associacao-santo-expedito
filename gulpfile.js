const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
const terser = require('gulp-terser');
const sass = require('gulp-sass')(require('sass'));

gulp.task('styles', function() {
return gulp.src('src/sass/**/*.scss') 
        .pipe(sass().on('error', sass.logError))
        .pipe(cleanCSS())
    .pipe(gulp.dest('library/css')); 
});

gulp.task('scripts', function() {
return gulp.src('src/js/**/*.js') 
        .pipe(terser())
    .pipe(gulp.dest('library/js')); 
});

gulp.task('default', gulp.parallel('styles', 'scripts'));
