module.exports = {
  main: {
    files: {
      "../<%= app.slug %>.php": "../<%= app.slug %>.php",
    },
    actions: [
      {
        search: new RegExp(/\* Plugin Name: ([0-9a-zA-Z%. ]+)/),
        replace: "* Plugin Name: <%= app.name %>",
        flags: "",
      },
      {
        search: new RegExp(/\* Version: ([0-9a-zA-Z%.]+)/),
        replace: "* Version: <%= app.version %>",
        flags: "",
      },
      {
        search: new RegExp(/\* Requires at least: ([0-9a-zA-Z%.]+)/),
        replace: "* Requires at least: <%= required %>",
        flags: "",
      },
      {
        search: new RegExp(/\* Tested up to: ([0-9a-zA-Z%.]+)/),
        replace: "* Tested up to: <%= tested %>",
        flags: "",
      },
      {
        search: new RegExp(/\* Description: ([a-zA-Z0-9. ]+)/),
        replace: "* Description: <%= app.description %>",
        flags: "",
      },
      {
        search: new RegExp(/public \$version = '([0-9a-zA-Z%.]+)';/),
        replace: "public $version = '<%= app.version %>';",
        flags: "",
      },
      {
        search: new RegExp(/\* @version ([0-9a-zA-Z%.]+)/),
        replace: "* @version <%= app.version %>",
        flags: "",
      },
    ],
  },
};
