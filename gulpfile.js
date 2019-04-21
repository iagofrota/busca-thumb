'use strict';

var autoprefixer = require('gulp-autoprefixer');
var csso = require('gulp-csso');
var del = require('del');
var gulp = require('gulp');
var htmlmin = require('gulp-htmlmin');
var runSequence = require('run-sequence');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

// Set the browser that you want to support
const AUTOPREFIXER_BROWSERS = [
    'ie >= 10',
    'ie_mob >= 10',
    'ff >= 30',
    'chrome >= 34',
    'safari >= 7',
    'opera >= 23',
    'ios >= 7',
    'android >= 4.4',
    'bb >= 10'
  ];

gulp.task('scripts', function () {
    return gulp.src('./src/js/**/*.js')
        // Minify the file
        .pipe(concat('app.js'))
        .pipe(uglify())
        // Output
        .pipe(gulp.dest('./dist/js'))
});

// Gulp task to minify CSS files
gulp.task('styles', function () {
    return gulp.src(['./src/css/**/*.css'])
        .pipe(concat('app.css'))
        // Auto-prefix css styles for cross browser compatibility
        .pipe(autoprefixer({
            browsers: AUTOPREFIXER_BROWSERS
        }))
        // Minify the file
        .pipe(csso())
        // Output
        .pipe(gulp.dest('./dist/css'))
});

// Gulp task to minify HTML files
gulp.task('pages', function () {
    return gulp.src(['./src/**/*.html'])
        .pipe(htmlmin({
            collapseWhitespace: true,
            removeComments: true
        }))
        .pipe(gulp.dest('./dist'));
});

// Clean output directory
gulp.task('clean', () => del(['dist']));

// Gulp task to minify all files
gulp.task('default',
  gulp.series('clean', gulp.parallel('scripts', 'styles'), function () {
  runSequence(
    'styles',
    'scripts',
    'pages'
  );
}));