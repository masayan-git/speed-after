const { src, dest, series, parallel, watch } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const sassGlob = require("gulp-sass-glob-use-forward");
const plumber = require("gulp-plumber");
const autoprefixer = require("gulp-autoprefixer");
const sourcemaps = require("gulp-sourcemaps");
const imagemin = require("gulp-imagemin");
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

function images() {
  return src("./dev/images/**/*")
    .pipe(
      imagemin([
        imageminMozJpeg({
          quality: 80,
        }),
        imageminPngQuant(),
        imageminSvgo({ plugins: [{ removeViewbox: false }] })
      ])
    )
    .pipe(dest("./images"));
}

function php() {
  return src("./**/*.php").pipe(browserSync.stream());
}

function serve() {
  browserSync.init({
    proxy: "localhost:10079", // ローカル開発URLを入力してください
  });

  watch("dev/scss/**/*.scss", styles);
  watch("dev/images/**/*", images);
  watch("./**/*.php", php).on("change", browserSync.reload);
}

exports.default = series(parallel(styles, images), serve);
