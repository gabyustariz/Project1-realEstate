const { series, src, dest, watch, parallel } = require('gulp'); // multiples funciones Importas lo que requires 
const sass = require('gulp-dart-sass'); // una sola funcion 
const imagenmin = require('gulp-imagemin');
//const notify = require('gulp-notify');
const webp = require('gulp-webp');
const concat = require('gulp-concat');


//Utilidades CSS
const autoprexifer = require('autoprefixer');
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const sourcemap = require('gulp-sourcemaps');

//Utilidades JS
const terser = require('gulp-terser-js');
const rename = require('gulp-rename');
const gulpTerser = require('gulp-terser-js');

const paths = {
    imagenes: 'src/img/**/*',
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js'
}

function css() {
    return src(paths.scss)
        .pipe(sourcemap.init())
        .pipe(sass())
        .pipe(postcss([autoprexifer(), cssnano()]))
        //Para saber donde esta todo del codigo original
        .pipe(sourcemap.write('.'))
        .pipe(dest('./build/css'));
}

function javascript() {
    return src(paths.js)
        .pipe(sourcemap.init())
        .pipe(concat('bundle.js'))
        .pipe(terser())
        .pipe(sourcemap.write('.'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(dest('./build/js'));
}

function imagenes() {
    return src(paths.imagenes)
        .pipe(imagenmin())
        .pipe(dest('./build/img'));
    // .pipe(notify({ message: 'Imagen Minificada' }));
}

function versionWebp() {
    return src(paths.imagenes)
        .pipe(webp())
        .pipe(dest('./build/img'));
}

function watchArchivos() {
    watch(paths.scss, css);
    watch(paths.js, javascript);
    // * = La carpeta actual 
    // **/* = todos los archivos dentro de esa carpeta si importad en nivel de profundidad que tengan esa extension
}

exports.minimg = imagenes;
exports.css = css;
exports.default = series(css, javascript, imagenes, versionWebp, watchArchivos);