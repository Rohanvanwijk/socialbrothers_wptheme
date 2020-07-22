const gulp = require('gulp');
const sass = require('gulp-sass');

// compile scss to css
function style() {
    // location scss files
    return gulp.src('./scss/*.scss')
    //  pass to sass compiler
    .pipe(sass().on('error', sass.logError))
    // destination css file
    .pipe(gulp.dest('./css'))
}

function watch() {
    gulp.watch('./scss/*.scss', style);
}

exports.style = style;
exports.watch = watch;