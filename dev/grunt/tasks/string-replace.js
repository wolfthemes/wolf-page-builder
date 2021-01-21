/**
 * Replace one string
 */
module.exports = {
  build: {
    files: {
      "../pack/dist/changelog.xml": "../pack/dist/changelog.xml",
      "../README.md": "templates/README.md",
      "../languages/readme.txt": "templates/translation-readme.txt",
    },
    options: {
      replacements: [
        {
          pattern: "%VERSION%",
          replacement: "<%= app.version %>",
        },
        {
          pattern: "%NAME%",
          replacement: "<%= app.name %>",
        },
        {
          pattern: "%LINK%",
          replacement: "<%= app.link %>",
        },
        {
          pattern: "%SLUG%",
          replacement: "<%= app.slug %>",
        },
        {
          pattern: "%TEXTDOMAIN%",
          replacement: "<%= app.slug %>",
        },
        {
          pattern: "%CREATED%",
          replacement: "<%= app.created %>",
        },
        {
          pattern: "%CREATEDNICE%",
          replacement: "<%= app.createdNice %>",
        },
        {
          pattern: "%REQUIRES%",
          replacement: "<%= app.requires %>",
        },
        {
          pattern: "%TESTED%",
          replacement: "<%= app.tested %>",
        },
        {
          pattern: "%DESCRIPTION%",
          replacement: "<%= app.description %>",
        },
        {
          pattern: "%DATE%",
          replacement: "<%= app.updated %>",
        },
        {
          pattern: "%LINK%",
          replacement: "<%= app.link %>",
        },
        {
          pattern: "%SHORTLINK%",
          replacement: "<%= app.shortlink %>",
        },
        {
          pattern: "%TAGS%",
          replacement: "<%= app.tags %>",
        },
        {
          pattern: "%AUTHOR%",
          replacement: "<%= app.author %>",
        },
        {
          pattern: "%AUTHORURI%",
          replacement: "<%= app.authorURI %>",
        },
        {
          pattern: "%WARNING%",
          replacement: "<%= warning %>",
        },
        {
          pattern: "%INFO%",
          replacement: "<%= info %>",
        },
        {
          pattern: "%NEWS%",
          replacement: "<%= news %>",
        },
      ],
    },
  },
};
