var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var cache = require('gulp-cache');

var $    = require('gulp-load-plugins')();

var sassPaths = [
  'bower_components/foundation-sites/scss',
  'bower_components/motion-ui/src'
];

gulp.task('sass', function() {
  return gulp.src('scss/app.scss')
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(gulp.dest('css'));
});

// This task take do the concat of the .js files
gulp.task('scripts', function() {
    // if some script depends on other you can choose what file import first  
    return gulp.src(
          [
            'bower_components/what-input/what-input.js',
            'bower_components/foundation-sites/dist/foundation.min.js',
            'bower_components/foundation-sites/dist/plugins/*.js',
            'js/*.js'
          ]
        )
      // here i concat all the files i read
      .pipe(concat('app.js'))
      .pipe(rename({suffix: '.min'}))
      //.pipe(uglify())
      // then i save it in the scripts folder
      .pipe(gulp.dest('scripts'));
});



gulp.task('default', ['sass', 'scripts'], function() {
  gulp.watch(['scss/**/*.scss'], ['sass']);
  gulp.watch(['js/**/*.js'], ['scripts']);
});