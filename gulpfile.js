const gulp = require('gulp');
const globby = require('globby');
const buffer = require('vinyl-buffer');
const through = require('through2');
const gutil = require('gulp-util');
const concat  = require('gulp-concat');
const clean   = require('gulp-clean');
const concatCss = require('gulp-concat-css');
const browserSync = require('browser-sync').create();

/**
 * Register gulp tasks.
 */
gulp.task('default', ['typescript', 'sass-all', 'js-libs'], function() {});

/** TypeScript / EcmaScript **/
gulp.task('typescript', function() {
    gulp.watch(TypeScript.lint, [
        'tslint',
        'browserify'
    ]);
});

const browserify = require('browserify');
const source = require('vinyl-source-stream');
const tsify = require('tsify');
const sourcemaps = require('gulp-sourcemaps');
const tslint = require('gulp-tslint');

const TypeScript = {
    'entries': './src/scripts/**/*.ts',
    'lint': ['./src/scripts/**/*.ts'],
    'concat': './src/dest/**/*.ts',
    'output_path': './public/static/js/'
};

gulp.task('tslint', function() {
    return gulp.src(TypeScript.lint).pipe(tslint({
        formatter: 'verbose'
    })).pipe(tslint.report())
});

gulp.task('browserify', ['tslint'], function() {
    const bundledStream = through();

    bundledStream
        .pipe(source('scripts.min.js'))
        .pipe(buffer())
        .pipe(sourcemaps.init({loadMaps: true}))
        .on('error', gutil.log)
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./public/static/js/'));

    globby([TypeScript.entries]).then(function(entries) {
        const b = browserify({
            entries: entries,
            debug: true
        });

        b.plugin(tsify).bundle().pipe(bundledStream);
    }).catch(function(err) {
        bundledStream.emit('error', err);
    });

    return bundledStream;
});

/** JS libraries **/
const Lib = {
    'source': [
        './node_modules/systemjs/dist/system.js',
        './node_modules/systemjs/dist/system-polyfills.js',
        './node_modules/es6-shim/es6-shim.js',
        './node_modules/jquery/dist/jquery.js',
    ],

    'name': 'vendor.min.js',

    'out': './public/static/js/'
};

gulp.task('js-libs', function() {
    gulp.watch(TypeScript.lint, [
        'gather'
    ]);
});

gulp.task('gather', function() {
    return gulp.src(Lib.source)
        .pipe(concat(Lib.name))
        .pipe(gulp.dest(Lib.out));
});

/** Minify JS **/
const pump = require('pump');
const uglify = require('gulp-uglify');
const composer = require('gulp-uglify/composer');
const uglifyjs = require('uglify-js');
const minify = composer(uglifyjs, console);

gulp.task('ts-minify', ['gather', 'browserify'], function (cb) {
    const options = {
        mangle: false,
        compress: {
            drop_console: false
        }
    };

    pump([gulp.src(TypeScript.output_path + '*.js'), minify(options), uglify(), gulp.dest(TypeScript.output_path)],
        cb
    );
});

/** SASS / CSS **/
const cleanCSS   = require('gulp-clean-css');
const sassLint   = require('gulp-sass-lint');
const sass       = require('gulp-sass');
const autoprefix = require('gulp-autoprefixer');
const base64     = require('gulp-base64');

const Sass = {
    'lint': [
        './src/sass/mixins.sass',
        './src/sass/base.sass',
        './src/sass/partials/**/*.sass',
        '!./src/sass/external/*.sass'
    ],

    'base': ['./src/sass/base.sass'],
    'sass_temp': './src/temp/',
    'name': 'styles.min.css',
    'output': './public/static/css/'

};

gulp.task('sass-all', function() {
    return gulp.watch([Sass.lint], [
        'gather-external-css',
        'sass-linter',
        'sass',
        'sass-concat',
        'sass-autoprefix',
        'sass-minify',
        'base64',
        'clean-files-sass'
    ]);
});

gulp.task('gather-external-css', function () {
    return gulp.src('')
});

gulp.task('sass-linter', ['gather-external-css'], function () {
    return gulp.src(Sass.lint).pipe(sassLint({
        configFile: '.sass-lint.yml'
    }))
        .pipe(sassLint.format())
        .pipe(sassLint.failOnError())
});

gulp.task('sass', ['sass-linter'], function() {
    return gulp.src(Sass.base)
        .pipe(sass())
        .on('error', gutil.log)
        .pipe(gulp.dest(Sass.sass_temp))
});

gulp.task('sass-concat', ['sass'], function() {
    return gulp.src([Sass.sass_temp + 'external.css', Sass.sass_temp + 'base.css'])
        .pipe(concat(Sass.name))
        .pipe(gulp.dest(Sass.output))
});

gulp.task('sass-autoprefix', ['sass-concat'], function() {
    return gulp.src(Sass.output + '*.css')
        .pipe(autoprefix({
            browsers: ['last 2 versions', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'],
            cascade: false
        }))
        .pipe(gulp.dest(Sass.output))
});

gulp.task('sass-minify', ['sass-autoprefix'], function() {
    return gulp.src(Sass.output + '*.css')
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest(Sass.output))
});

gulp.task('base64', ['sass-minify'], function () {
    return gulp.src(Sass.output + '*.css')
        .pipe(base64({
            baseDir: Sass.output,
            extensions: ['png', /\.jpg#datauri$/i],
            maxImageSize: 8*1024, // bytes
            debug: false
        }))
        .pipe(concat(Sass.name))
        .pipe(gulp.dest(Sass.output));
});

gulp.task('clean-files-sass', ['base64'], function () {
    return gulp.src('./src/temp/', {read: false})
        .pipe(clean());
});
