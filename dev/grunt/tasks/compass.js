module.exports = {
	options:{

		noLineComments : true
	},

	build:{
		options:{
			sassDir: '../scss',
			cssDir: '../assets/css',
			imagesDir : '../assets/img'
		}
	},

	admin:{
		options:{
			sassDir: '<%= root %>/scss-admin',
			cssDir: '../assets/css/admin/'
		}
	},
};