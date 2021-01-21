module.exports = {
  build: {
    src: ["<%= root %>/pack/<%= app.slug %>"],
    options: {
      force: true,
    },
  },
};
