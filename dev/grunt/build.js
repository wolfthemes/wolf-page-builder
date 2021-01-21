module.exports = function (grunt) {
  grunt.registerTask("build", function () {
    grunt.task.run([
      "write",
      "clean:build",
      "copyto:build",
      "compress:build",
      "notify:build",
    ]);
  });
};
