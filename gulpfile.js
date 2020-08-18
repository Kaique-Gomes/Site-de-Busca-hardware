var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', gulp.series (function(){
    return gulp.src(['node_modules/bootstrap/scss/*', 'src/scss/*.scss']) 
    .pipe(sass()) //converter o sass em css
    .pipe(gulp.dest('css'));
}));
