module.exports = {
	
	lib : {
		files : {
			'<%= app.cssPath %>/icon-pack.min.css': [ '<%= app.cssPath %>/icon-pack.css' ],
			'<%= app.cssPath %>/lib/flexslider.min.css': [ '<%= app.cssPath %>/lib/flexslider.css' ],
		}
	},

	main : {
		options: {
			// noAdvanced: true,
			// compatibility : true,
			// debug : true
			// keepBreaks : true
		},
		files: {
			'<%= app.cssPath %>/wpb.min.css': ['<%= app.cssPath %>/wpb.css']
		}
	}
};