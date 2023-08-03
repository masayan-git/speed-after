const { src, dest, series, parallel, watch } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const sassGlob = require("gulp-sass-glob-use-forward");
const plumber = require("gulp-plumber");
const autoprefixer = require("gulp-autoprefixer");
const sourcemaps = require("gulp-sourcemaps");
const imagemin = require("gulp-imagemin");
const webp = require('gulp-webp');
const imageminMozJpeg = require("imagemin-mozjpeg");
const imageminPngQuant = require("imagemin-pngquant");
const imageminSvgo = require("imagemin-svgo");
const postcss = require("gulp-postcss");
const presetEnv = require("postcss-preset-env");
const browserSync = require("browser-sync").create();

function styles() {
  return src("dev/scss/**/*.scss")
    .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(sassGlob())
    .pipe(
      sass
        .sync({
          includePaths: ["dev/scss"],
          outputStyle: "expanded",
        })
        .on("error", sass.logError)
    )
    .pipe(postcss([presetEnv({ stage: 3 })]))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write("./"))
    .pipe(dest("./css"))
    .pipe(browserSync.stream());
}

const gulpIf = require('gulp-if');
const isWebp = file => !/\.no-webp\.jpg$/i.test(file.path);
function images() {
  return src("./dev/images/**/*")
    .pipe(gulpIf(isWebp, 
      imagemin([
        imageminMozJpeg({
          quality: 80,
        }),
        imageminPngQuant(),
        imageminSvgo({ plugins: [{ removeViewbox: false }] })
      ])
    ))
    .pipe(gulpIf(isWebp, webp({ quality: 50 }))) // png, jpg を webpに変換
    .pipe(dest("./images"));
}

function php() {
  return src("./**/*.php").pipe(browserSync.stream());
}

function serve() {
  browserSync.init({
    proxy: "localhost:10085", // ローカル開発URLを入力してください
  });

  watch("dev/scss/**/*.scss", styles);
  watch("dev/images/**/*", images);
  watch("./**/*.php", php).on("change", browserSync.reload);
}

exports.default = series(parallel(styles, images), serve);
