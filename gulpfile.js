'use strict';


// Importing modules

let gulp         =  require('gulp'),
    minifycss    =  require('gulp-minify-css'),
    uglify       =  require('gulp-uglify'),
    rename       =  require('gulp-rename'),
    autoprefixer =  require('gulp-autoprefixer'),
    concat       =  require('gulp-concat'),
    babel        =  require('gulp-babel'),
    riot         =  require('gulp-riot'),
    runSequence  =  require('run-sequence'),
    path         =  require('path'),
    del          =  require('del');


// Setting base paths
// (you can edit at will but remember to change system folders accordingly)

let opts = {
    path: {
           assets: 'assets',
   riotComponents: 'assets/js/tags',
        promiseJs:'node_modules/promise-polyfill/Promise.js',
               js: 'src/js',
             dist: 'assets',
    genComponents: 'assets/js',
    },
         basename: 'tags',
        minSuffix: '.min',
      debugSuffix: '.debug',
    lineSeparator: "\n\n//-----\n\n"
};


// Function responsible for error handling

function handleError(err) {
    console.log(err);
    this.emit('end');
}


// Gulp tasks

gulp.task('compile:riot', () => {
    return gulp.src(opts.path.riotComponents + '/*.tag.html')
        .pipe(riot())

        .on('error', handleError)
		.pipe(concat(opts.basename + '.js', {newLine: opts.lineSeparator}))
		.pipe(rename({suffix: opts.debugSuffix}))
        .pipe(gulp.dest(opts.path.genComponents))
		
		 // Give you machine a break, enable this only for production
        .pipe(uglify())

        .pipe(rename({basename: opts.basename, suffix: opts.minSuffix}))
		.pipe(gulp.dest(opts.path.genComponents));
});


// Gulp watchers

gulp.task('watch:all', () => {
    gulp.watch([opts.path.assets + '/js/**/*.tag.html'], ['compile:riot']);
});
