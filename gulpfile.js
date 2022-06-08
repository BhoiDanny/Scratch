const gulp = require("gulp"),
      browserSync = require("browser-sync"),
      connect = require("gulp-connect-php");

let paths = {
    php: "./**/*.php",
}

gulp.task("watch", function(){
    connect.server({
        base: "./",
        hostname: "127.0.0.1",
        port: 5000,
        stdio: "ignore",
        keepalive: true,
        open: false,
    }, () => {
        browserSync({
            baseDir: "./",
            proxy: "localhost:5000",
            open: true,
            logPrefix: "Sanny Tech",
            notify: true,
        })
    })

    gulp.watch(paths.php).on("change", function(){
        browserSync.reload();
    });

})

gulp.task("connect", gulp.series("watch"));

gulp.task("default", gulp.series("connect"));
