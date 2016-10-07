var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync').create();

// Set paths for tasks
var paths = {
    html: ['*.php', '*.html'],
    scss: ['assets/sass/*.scss', 'assets/sass/**/*.scss']
};

// Extension filter for gulp-filter
var filterByExtension = function(extension) {  
    return filter(function(file) {
        return file.path.match(new RegExp('.' + extension + '$'));
    });
};

gulp.task('scss', function() {
    gulp.src(paths.scss)
    .pipe(sass())
  .pipe(autoprefixer({ 
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(gulp.dest('assets/css/.'))
    .pipe(browserSync.stream());
});

// Static server
gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: 'localhost' // Add your own domain here
    });
});

gulp.task('watch', function() {
    gulp.watch(paths.scss, ['scss']);
    gulp.watch(paths.html).on('change', browserSync.reload);
});

//gulp.task('default', ['watch', 'scss', 'browser-sync']);
gulp.task('default', ['watch', 'scss']);