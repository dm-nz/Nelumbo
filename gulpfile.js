var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

var $    = require('gulp-load-plugins')();

var sassPaths = [
  'bower_components/normalize.scss/sass',
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
            'bower_components/what-input/dist/what-input.js',
            'bower_components/foundation-sites/dist/js/foundation.min.js',
            //'bower_components/foundation-sites/dist/js/plugins/*.min.js',
            'js/custom.js',
            //'js/navigation.js',
            'js/skip-link-focus-fix.js'
          ]
        )
      .pipe(concat('app.js'))
      .pipe(uglify())
      .pipe(gulp.dest('js'));
});

gulp.task('default', ['sass', 'scripts'], function() {
  gulp.watch(['scss/**/*.scss'], ['sass']);
  gulp.watch(['js/custom.js'], ['scripts']);
});