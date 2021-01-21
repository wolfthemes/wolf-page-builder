module.exports = function (grunt) {
  // load dependencies
  require("load-grunt-tasks")(grunt);

  function loadConfig(path) {
    var glob = require("glob");
    var object = {};
    var key;

    glob.sync("*", { cwd: path }).forEach(function (option) {
      key = option.replace(/\.js$/, "");
      object[key] = require(path + option);
    });

    return object;
  }

  var config = {
    pkg: grunt.file.readJSON("package.json"),
    app: grunt.file.readJSON("../app.config.json"),
    root: "..",
    required: "5.0",
	tested: "5.5",
    buildIgnoreFiles: ["../dev{,/**/*}", "../pack{,/**/*}", "../bak{,/**/*}", "../node_modules{,/**/*}", "../vendor{,/**/*}"],
  };

  grunt.util._.extend(config, loadConfig("./grunt/tasks/"));

  grunt.initConfig(config);

  grunt.loadTasks("grunt");

  grunt.registerTask("default", function () {
    // grunt.log.writeln("Hello world!");
	grunt.task.run(["compass", "cssmin",
	//"jshint",
	"uglify"]);
  });

  grunt.registerTask("dev", function () {
	grunt.task.run(["compass", "cssmin",
	//"jshint",
	"uglify", "watch"]);
  });
};
