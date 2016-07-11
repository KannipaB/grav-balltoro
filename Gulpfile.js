var gulp = require('gulp');
var gulpif = require('gulp-if');
var uglify = require('gulp-uglify');
var uglifycss = require('gulp-uglifycss');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var debug = require('gulp-debug');
var order = require('gulp-order');
var merge = require('merge-stream');
var gutil = require('gulp-util');

var env = gutil.env.env;
var rootPath = 'web/assets/';
var adminRootPath = rootPath + 'admin/';
var webRootPath = rootPath + 'web/';

var paths = {
    web: {
        js: [
            'node_modules/jquery/dist/jquery.min.js',
            'node_modules/tether/dist/js/tether.min.js',
            'node_modules/bootstrap/dist/js/bootstrap.min.js',
            'node_modules/bootstrap-notify/bootstrap-notify.min.js',
            'web/ui/web/js/main.js',
            'web/ui/web/app.js'
        ],
        sass: [
            'web/ui/web/sass/**'
        ],
        css: [
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/font-awesome/css/font-awesome.min.css',
            'web/ui/web/css/**'
        ],
        img: [
            'web/ui/web/img/**'
        ],
        fonts: [
            'node_modules/font-awesome/fonts/**'
        ],
        copy: [
        ]
    }
};

// WEB
gulp.task('web-js', function() {
    return gulp.src(paths.web.js)
        .pipe(concat('app.js'))
        .pipe(gulpif(env === 'prod', uglify()))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(webRootPath + 'js/'));
});

gulp.task('web-css', function() {
    var cssStream = gulp.src(paths.web.css)
        .pipe(concat('css-files.css'));

    var sassStream = gulp.src(paths.web.sass)
        .pipe(sass())
        .pipe(concat('sass-files.scss'));

    return merge(cssStream, sassStream)
        .pipe(order(['css-files.css', 'sass-files.scss']))
        .pipe(concat('style.css'))
        .pipe(gulpif(env === 'prod', uglifycss()))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(webRootPath + 'css/'))
        ;
});

gulp.task('web-copy', function() {
    gulp.src(paths.web.fonts)
        .pipe(gulp.dest(webRootPath + 'fonts/'))
    ;

    gulp.src(paths.web.img)
        .pipe(gulp.dest(webRootPath + 'img/'))
    ;

    gulp.src('node_modules/flag-icon-css/flags/**')
        .pipe(gulp.dest(webRootPath + 'flags/'))
    ;

    for (var i = 0; i < paths.web.copy.length; i++) {
        var copy = paths.web.copy[i];
        if (typeof copy === "object") {
            gulp.src(copy[1]).pipe(gulp.dest(webRootPath + '/' + copy[0]));
        } else {
            gulp.src(copy).pipe(gulp.dest(webRootPath))
        }
    }
});

gulp.task('web-watch', function() {
    gulp.watch(paths.web.js, ['web-js']);
    gulp.watch(paths.web.coffee, ['web-js']);
    gulp.watch(paths.web.sass, ['web-css']);
    gulp.watch(paths.web.css, ['web-css']);
});

gulp.task('admin', ['admin-copy', 'admin-watch', 'admin-js', 'admin-css']);
gulp.task('web', ['web-copy', 'web-watch', 'web-js', 'web-css']);

gulp.task('default', [
    'admin-copy', 'admin-watch', 'admin-js', 'admin-css',
    'web-copy', 'web-watch', 'web-js', 'web-css'
]);
