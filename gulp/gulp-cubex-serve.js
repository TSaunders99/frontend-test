module.exports = function (gulp, exec, conf, errorHandler) {
  gulp.task(
    "cubex-serve",
    function (done) {
      let child = exec("./cubex serve -d -c\"www.totalav\" --port=" + conf.cubex.port);

      child.stdout.on(
        'data',
        function (data) { console.log(data); }
      );

      child.stderr.on(
        'data',
        function (data) { console.log(data); }
      );

      child.on(
        'close',
        function (code) { console.log('Closing code: ' + code); }
      );

      done();
    }
  );
};
