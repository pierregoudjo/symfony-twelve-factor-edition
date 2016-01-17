var gulp = require('gulp');
var postcss = require("gulp-postcss");
var cssnext = require("postcss-cssnext");
var csswring = require("csswring");
var concat = require("gulp-concat");

gulp.task('css', function() {
    var processors = [cssnext({browser : ['> 75%']}), csswring()];
    return gulp.src('./web/css/*')
        .pipe(postcss(processors))
        .pipe(concat("styles.css"))
        .pipe(gulp.dest('./web/build'))
        .pipe;
});

gulp.task('default', ['css'])
