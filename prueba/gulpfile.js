//*****************************************
//require('laravel-elixir-vue-2');
require ('laravel-elixir-pug')

//*****************************************


"use strict"
//*****************************************
const elixir = require('laravel-elixir');

//*****************************************

var  gulp         = require("gulp"),
      browserSync  = require("browser-sync").create(),
      autoprefixer = require("gulp-autoprefixer"),
      babel        = require("gulp-babel"),
      cleanCss     = require("gulp-clean-css"),
      concat       = require("gulp-concat"),
      htmlmin      = require("gulp-htmlmin"),
      imagemin     = require("gulp-imagemin"),
      plumber      = require("gulp-plumber"),
      pug          = require("gulp-pug"),
      sass         = require("gulp-sass"),
      svgmin       = require("gulp-svgmin"),
      uglify       = require("gulp-uglify"),
      useref       = require("gulp-useref"),
      webp         = require("gulp-webp"),
      sourcemaps   = require("gulp-sourcemaps"),
      cssnano      = require("gulp-cssnano"),
      concat       = require ("gulp-concat"),
      pngquant     = require("imagemin-pngquant");


 var  dir = {
        src         : 'ProyectoBienestarCusur-master',
        development : '/resources/views/apartments/',
        production  : '/public',

        nm          : '/node_modules',
        assetsDir   : './resources/assets/sass/apartments/main.scss',
        resultDir   : './public/css/apartments',
        jsDir       : './resources/assets/js/medics',
        jsResulDir  : './public/js/medics/',
        pugDir      : './resources/assets/pug/apartments',
        resulPugDir : './resources/views/apartments'
      };

   var   files = {
        CSS : [
          '${dir.nm}/font-awesome/css/font-awesome.min.css',
          '${dir.nm}/animate.css/animate.min.css',
          '${dir.nm}/owl.carousel/dist/assets/owl.carousel.min.css',
          '${dir.nm}/owl.carousel/dist/assets/owl.theme.default.min.css',
          '${dir.nm}/bootstrap/dist/css/bootstrap.min.css',
          "public/css/medics/main.css"
        ],
        mCSS : "main.min.css",
        JS : [
          '${dir.nm}/jquery/dist/jquery.min.js',
          '${dir.nm}/owl.carousel/dist/owl.carousel.min.js',
          '${dir.nm}/bootstrap/dist/js/bootstrap.min.js',
          '${dir.nm}/wow.js/dist/wow.min.js',
          "public/js/app.js",
          "public/js/_carousel.js",
          "public/js/heredofamiliar.js",
          "public/js/scroll.js",
          "public/js/patologicos.js",
          "public/js/noPatologicos.js",
          "public/js/gineco-obstetrico.js",
          "public/js/wow.js",
        ],
        mJS : "main.min.js",
      },
      opts = {
        pug : {
          pretty : true,
          locals : {
            files : files,
          }
        },
        es6 : { presets : ["es2015"] },
        sass : { outputStyle : "compressed" },
        imagemin : {
          progressive : true,
          use : [pngquant()],
        },
      };
//




/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */









//Task Pug
//return gulp.src("src/templates/**/*.pug")
//no necesario ??
gulp.task('pug',() => {
   return gulp.src( dir.pugDir + '*.pug')
  .pipe(plumber())
  .pipe(pug())

  .pipe(pug(opts.pug))
  .pipe(gulp.dest(dir.resulPugDir))
  .pipe(browserSync.reload({ stream : true }));
});

//Task JS    '${dir.src}/js/**/*.js')    '${dir.development}/js')
gulp.task('js',() => {
  return gulp.src(dir.jsDir + '/*.js')
  .pipe(concat('misScrips.js'))
  .pipe(gulp.dest(dir.jsResulDir))


  //.pipe(plumber())
  //.pipe(babel(opts.es6))
  //.pipe(gulp.dest(dir.jsResulDir))
  //.pipe(browserSync.reload({ stream : true }));
});

//Taks SASS
gulp.task('sass',() => {
  //return gulp.src('${dir.bienestarcusur.assetsDir}/sass/medics/**/*.scss')
 // gulp.src(dir.assetsDir + '**/*.scss')
 return gulp.src(dir.assetsDir)
//  .pipe(sourcemaps.init())
  .pipe(plumber())
  .pipe(sass(opts.sass))
  .pipe(sass())
 // .pipe(cssnano())
//  .pipe(sourcemaps.write('maps'))
  .pipe(gulp.dest(dir.resultDir))
  .pipe(browserSync.reload({ stream : true }));
});

//Taks image
gulp.task("img",() => {
  return gulp.src('${dir.src}/img/**/*.+(png|jpg|jpeg|gif)')
  .pipe(plumber())
  .pipe(imagemin(opts.imagemin))
  .pipe(gulp.dest(`${dir.development}/img`))
});

//Taks webp
gulp.task("webp",() => {
  return gulp.src('${dir.src}/img/**/*.+(png|jpg|jpeg|gif)')
  .pipe(plumber())
  .pipe(webp())
  .pipe(gulp.dest('${dir.development}/img/webp'))
});

//Task server
gulp.task("server", () => {
  browserSync.init({
    server : {
      baseDir           : '${dir.development}',
      routes            : {
        "/node_modules" : '${dir.nm}'
      }
    }
  });
});

//task watchers
gulp.task("watch", () => {
  gulp.watch("src/templates/**/*.pug", ["pug"]);
  gulp.watch('${dir.src}/js/**/*.js', ["js"]);
  gulp.watch('${dir.src}/sass/**/*.scss', ["sass"]);
});

// Task defuult
gulp.task("default", ["pug", "js", "sass", "watch", "server"]);
gulp.task("images", ["img", "webp"]);


elixir((mix) => {
    mix.scripts('medics/*.js','public/js/medics/miApp.js')
       //.webpack('./app/resources/assets/js/medics/app.js','./public/js/medics')

       //.pug('resources/assets/pug/medics');
});

/*elixir((mix) => {
    mix.sass('medics/main.scss','css/medics')
       //.webpack('./app/resources/assets/js/medics/app.js','./public/js/medics')

       .pug('resources/assets/pug/medics');
});*/
