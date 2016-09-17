'use strict';

var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    jshint = require('gulp-jshint'),
    notify = require('gulp-notify'),
    stylish = require('jshint-stylish'),
    imageop = require('gulp-image-optimization'),
    sourcemaps = require('gulp-sourcemaps'),
    sass = require('gulp-sass'),
    minifycss = require('gulp-minify-css'),
    hologram = require('gulp-hologram'),
    plumber = require('gulp-plumber');

var sources = {
    images: 'app/img/**/*',
    fonts: 'dist/fonts/**/*',
    sass: 'app/sass/screen.scss',
    sourcesass: './app/sass/**/*',
    js: [
        'app/components/jquery/dist/jquery.js',
        'app/components/modernizr/modernizr.js',
        'app/components/fancybox/jquery.fancybox.js',
        'app/components/fancybox/helpers/jquery.fancybox-thumbs.js',
        'app/components/lazyload.js',
        'app/js/main.js'
    ]
};

var destinations = {
    images: 'dist/img',
    fonts: 'dist/fonts',
    css: 'dist/css',
    js: 'dist/js'
};


gulp.task('css', function () {
    gulp.src('./app/sass/screen.scss')
        .pipe(sourcemaps.init())
        .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
        .pipe(sass())
        .pipe(plumber.stop())
        .pipe(sourcemaps.write(''))
        .pipe(gulp.dest('./dist/css'))
        .pipe(notify('Sass compiled & minified'));

});


gulp.task('css_production', function () {
    gulp.src('./app/sass/screen.scss')
        .pipe(sourcemaps.init())
        .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
        .pipe(sass())
        .pipe(minifycss())
        .pipe(plumber.stop())
        .pipe(gulp.dest('./dist/css'))
        .pipe(notify('Sass compiled & minified'));

});


gulp.task('js', function () {
    gulp.src(sources.js)
        .pipe(jshint())
        .pipe(jshint.reporter('jshint-stylish'))
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(gulp.dest(destinations.js))
        .pipe(notify('JS concatenated & uglified'));
});


gulp.task('js_vendors', function () {
    gulp.src([
        'add-here-a-path-to-your-vendors-script',
        'add-here-a-second-path-to-your-vendors-script'
    ])
        .pipe(concat('vendors.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(destinations.js))
        .pipe(notify('Vendors JS concatenated & uglified'))

});


gulp.task('imgop', function () {
    gulp.src([sources.images]).pipe(imageop({
        optimizationLevel: 5,
        progressive: true,
        interlaced: true
    }))
        .pipe(gulp.dest(destinations.images))
        .pipe(notify('Images minified'));
});


gulp.task('fonts', function () {
    gulp.src(sources.fonts)
        .pipe(gulp.dest(destinations.fonts))
});


gulp.task('hologram', function () {
    gulp.src(sources.hologram)
        .pipe(hologram())
        .pipe(notify('Hologram generated'));
});


gulp.task('watch', function () {
    gulp.watch(sources.sourcesass, ['css']);
    gulp.watch(sources.js, ['js']);
    gulp.watch(sources.images, ['imgop']);
    //gulp.watch(sources.sass, ['hologram']);
});


gulp.task('default', ['css', 'js', 'hologram', 'imgop', 'css_vendors', 'js_vendors', 'sync', 'watch']);