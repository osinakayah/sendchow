/**
 * Created by osindex on 11/19/17.
 */
const concat = require('gulp-concat');
const  gulp        = require('gulp');
const babel = require('gulp-babel');

gulp.task('scripts', function() {
    return gulp.src([
        'public/assets/js/autoload.js',
        'public/assets/js/dev/modules/**/*.js',

    ])
        // .pipe(babel({
        //     presets: ['env']
        // }))
        .pipe(concat('scripts-bundle.min.js'))
        .pipe(gulp.dest('public/assets/js/dist/'))

});

gulp.task('default', ['scripts'], function () {
    gulp.watch([
        'public/assets/js/autoload.js',
        'public/assets/js/dev/modules/**/*.js',

    ], function () {
        gulp.run('scripts');
    })
});