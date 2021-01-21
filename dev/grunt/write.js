module.exports = function (grunt) {
  grunt.registerTask("write", function () {
    grunt.task.run([
		"cssmin",
		"uglify",
		"regex-replace", // replace version in main file
		"markdown:log", // create XML changelog for old update system
		"string-replace", // create readme files
		"replace:build", // replace %VERSION% and other occurences
		"makepot",
    ]);
  });
};
