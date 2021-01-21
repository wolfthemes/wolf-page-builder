module.exports = {

	assets: {                       
		files: [{
			expand: true,
			cwd: '<%= imagesPath %>/',
			src: ['**/*.{png,jpg,gif}'],
			dest: '<%= root %>pack/<%= app.slug %>/assets/img/'
		}]
	}	

};