const gulp = require('gulp');   // packete einbinden, damit man sie nutzen kann
const autoprefixer = require('autoprefixer');
const jshint = require('gulp-jshint');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');


gulp.task('browserSync', function() {
    browserSync.init({
        server: {
            baseDir: 'app'
        },
    })
});

gulp.task('lint', function() {
    return gulp.src('app/**/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

gulp.task('sass', function() {
    return gulp.src('app/scss/**/*.scss')  //kompiliert alle files vom folder scss zu css
        .pipe(sass())
        // .pipe(autoprefixer({'browsers': ['last 2 versions']}))
        .pipe(gulp.dest('app/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('watch', ['browserSync', 'sass'], function(){
    gulp.watch('app/scss/**/*.scss', ['sass']);    //ruft [sass]-gulp.task auf // wenn die Änderungen gemacht werden
    gulp.watch('app/*.html', browserSync.reload);
    gulp.watch('app/js/**/*.js', browserSync.reload);
});