const {src, dest, series, parallel, watch} = require('gulp');
const del = require('del');
const browserSync = require('browser-sync');
//const browserSync = require('browser-sync').create();

// const sass = require('gulp-sass');
const sass = require('gulp-sass')(require('sass'));

const origin = 'assets';
const destination = 'build';

sass.compiler = require('node-sass');

async function clean(cb) {
    await del(destination);
    cb();
}

function css(cb) {
    src(`${origin}/scss/style.scss`)
    .pipe(sass({
        outputStyle: 'compressed'
    }))
    
    .pipe(dest(`${destination}/css`));

    cb();
}

function js(cb) {
    src(`${origin}/js/**/*.js`).pipe(dest(`${destination}/js`));
    cb();
}

function watcher(cb) {
    watch(`${origin}/**/**/*.scss`).on('change', series(css, browserSync.reload))
    watch(`${origin}/**/**/*.js`).on('change', series(js, browserSync.reload))
    cb();
}

function server(cb) {
    browserSync.init({
        notify: false,
        open: false,
        proxy: "http://localhost/biolab-website",
        port: 3000
    })
    cb();
}

//exports.default = series(clean, parallel(css, js));
exports.default = series(clean, parallel(css, js), server, watcher);