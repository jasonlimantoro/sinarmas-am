// gulp task command
var gulp = require('gulp');
gulp.task('hello', function(){
	console.log('hello Gulp');
});


// browser-sync!!!
var BrowserSync = require('browser-sync').create();
gulp.task('BrowserSync', function(){
	BrowserSync.init({
		proxy: 'localhost/sinarmas-am.co.id'
	})
});

gulp.task('watch-browser',['BrowserSync'], function(){
	gulp.watch('*.php', BrowserSync.reload);
	gulp.watch('modules/css/*.css', BrowserSync.reload);
	gulp.watch('modules/js/*.js', BrowserSync.reload);

});

// ------------------------------
// optimizing javascript files
// ------------------------------
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var jshint = require('gulp-jshint');
var jsMinify = 'modules/js';

// configure the jshint task

gulp.task('jshint', function() {
  return gulp.src('modules/js/**/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'));
});

gulp.task('minify-js', function(){
  return gulp.src(
	  	[
            // library
            'modules/js/library/jquery-3.2.1.min.js',
            'modules/js/library/jquery.smartmenus.js',
            'modules/js/library/*.js',

            // asset
            'modules/js/asset/table-update.js',
	  		'modules/js/asset/*.js'
	  	]
  	)
	    .pipe(uglify())
	    .pipe(concat('main.min.js'))
	    .pipe(gulp.dest(jsMinify))
});

// configure which files to watch and what tasks to use on file changes
gulp.task('watch-js', function() {
  gulp.watch('modules/js/**/*.js', ['jshint','minify-js']);
});



