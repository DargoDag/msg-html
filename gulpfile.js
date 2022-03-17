"use strict";

let gulp            = require('gulp'),
    concat          = require('gulp-concat'), // Подключаем gulp-concat (для конкатенации js файлов)
    uglify          = require('gulp-uglify-es').default, // Подключаем gulp-uglifyjs (для сжатия JS)
    cleanCSS        = require('gulp-clean-css'), // минифицирует css
    purge           = require('gulp-css-purge'), // минифицирует css
    del             = require('del'), // удаляет дирректории
    prefixer        = require('gulp-autoprefixer'), // автоматическая расстановка вендорных префиксов
    babel           = require('gulp-babel'), // переводит js-файлы в формат, понятный даже тупому ослику(IE
    newer           = require('gulp-newer'), // переводит js-файлы в формат, понятный даже тупому ослику(IE
    svgcss          = require('gulp-svg-css'), // конвертирует свг в цсс
    image           = require('gulp-image'),
    webp            = require('gulp-webp');

// удалить в дирректории "gulp-svg-css" index.js заменить "options.cssPrefix = 'icon-';" на "options.cssPrefix = '';"
gulp.task('svg', function () {
    return gulp
        .src('template/img/--svg__*.svg')
        // .pipe(svgmin())
        .pipe(svgcss({
            fileName: 'svg',
            cssPrefix: '',
            addSize: false
        }))
        .pipe(gulp.dest('template/css/'));
});
gulp.task('svgcomp', function () {
    return gulp
        .src('template/img/comp/--svg__*.svg')
        // .pipe(svgmin())
        .pipe(svgcss({
            fileName: 'svg',
            cssPrefix: '',
            addSize: false
        }))
        .pipe(gulp.dest('template/img/comp/'));
});

gulp.task('css', function () {
    return gulp.src(
        [
            'template/core/atoms/**/*.css',
            'template/core/molecules/**/*.css',
            'template/core/organism/**/*.css',
            'template/css/*.css',
            'template/comp/**/*.css', 
            'template/libs/*.css', 
            'template/libs/**/*.css', 
            'template/libs/feedback/**/*.css', 
        ]
    )
    .pipe(
        prefixer({
            overrideBrowserslist: ["last 8 versions"],
            browsers: [
                "Android >= 4",
                "Chrome >= 20",
                "Firefox >= 24",
                "Explorer >= 11",
                "iOS >= 6",
                "Opera >= 12",
                "Safari >= 6",
            ],
        })
    )
    .pipe(concat("css/__all.min.css"))
    .pipe(cleanCSS())
    .pipe(gulp.dest('template/dist/'));
});

gulp.task('js', function() {
    return gulp.src(
        [
            'template/core/atoms/**/*.js',
            'template/core/molecules/**/*.js',
            'template/core/organism/**/*.js',
            'template/js/*.js', 
            'template/comp/**/*.js', 
            'template/libs/**/*.js',
            'template/libs/feedback/**/*.js', 
        ]
    )
    .pipe(babel())
    .pipe(concat('js/__all.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('template/dist/'));
});

gulp.task('img', function() {
    return gulp.src('template/img/*')
    .pipe(newer('template/dist/img'))
    .pipe(image({
        pngquant: true,
        optipng: false,
        zopflipng: true,
        jpegRecompress: true,
        mozjpeg: true,
        gifsicle: true,
        svgo: true,
        concurrent: 12,
        quiet: true // defaults to false
    }))
    .pipe(gulp.dest('template/dist/img'));
});

gulp.task('webp', function() {
    return gulp.src(
    [
        'template/img/*.jpg',
        'template/img/*.png'
    ]
    )
    .pipe(newer('template/dist/img'))
    .pipe(webp())
    .pipe(gulp.dest('template/dist/img'));
});



gulp.task('default', gulp.series('svg', 'css', 'js', 'img', 'webp')); 