var gulp          = require('gulp');
var $             = require('gulp-load-plugins')();
var autoprefixer  = require('autoprefixer');
var concat        = require('gulp-concat');
var uglify        = require('gulp-uglify');
var rename        = require('gulp-rename');

var sassPaths = [
  'node_modules/foundation-sites/scss',
  'node_modules/motion-ui/src'
];

function sass() {
  return gulp.src('scss/app.scss')
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.postcss([
      autoprefixer({ browsers: ['last 2 versions', 'ie >= 9'] })
    ]))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('css'))
};

function scripts() {
  return gulp.src(
    [
      'node_modules/what-input/dist/what-input.js',
      'node_modules/foundation-sites/dist/js/foundation.js',
      'js/custom.js',
      'js/skip-link-focus-fix.js'
    ]
  )
    .pipe(concat('app.js'))
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('js'));
};

// Watch files
function watch() {
  gulp.watch('scss/**/*.scss', sass);
  gulp.watch('js/custom.js', scripts);
}

gulp.task('sass', sass);
gulp.task('scripts', scripts);
gulp.task('watch', watch);
gulp.task('default', gulp.series(scripts, sass, watch));
