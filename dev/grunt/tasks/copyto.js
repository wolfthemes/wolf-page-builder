module.exports = {
  // create a clean theme folder without the junk
  build: {
    files: [
      {
        cwd: "<%= root %>/",
        src: ["**/*"],
        dest: "<%= root %>/pack/<%= app.slug %>/",
      },
    ],
    options: {
      ignore: "<%= buildIgnoreFiles %>",
    },
  },

  test: {
    files: [
      {
        cwd: "<%= root %>/pack/<%= app.slug %>",
        src: ["**/*"],
        dest: "<%= app.testPath %>/wp-content/plugins/<%= app.slug %>/",
      },
    ],
  },
};
