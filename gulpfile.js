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
const rev = require('gulp-rev');

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
				.pipe(concat('app.min.js'))
				.pipe(uglify())
				// Output
				.pipe(rev())
				.pipe(gulp.dest('./dist/js'))
				.pipe(rev.manifest({
					base: 'dist',
					merge: true // Merge with the existing manifest if one exists
				}))
				.pipe(gulp.dest('./dist'))
});

// Gulp task to minify CSS files
gulp.task('styles', function () {
		return gulp.src(['./src/css/**/*.css'])
				.pipe(concat('app.min.css'))
				// Auto-prefix css styles for cross browser compatibility
				.pipe(autoprefixer({
						browsers: AUTOPREFIXER_BROWSERS
				}))
				// Minify the file
				.pipe(csso())
				// Output
				.pipe(rev())
				.pipe(gulp.dest('./dist/css'))
				.pipe(rev.manifest({
					base: 'dist',
					merge: true // Merge with the existing manifest if one exists
				}))
				.pipe(gulp.dest('./dist'))
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

	//  gulp.src(['./dist/css/*.css', './dist/js/*.js'], {base: 'dist'})
    //     .pipe(gulp.dest('./dist'))  // copy original assets to build dir
    //     .pipe(rev())
    //     .pipe(gulp.dest('./dist'))  // write rev'd assets to build dir
    //     .pipe(rev.manifest())
    //     .pipe(gulp.dest('./dist'))  // w
}));