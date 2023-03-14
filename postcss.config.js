module.exports = {
	plugins: {
		'postcss-nested': {},
        'postcss-import': {},
        'postcss-prefix-selector': {
            prefix: '.wp-block.multi-block'
        },
		tailwindcss: {},
		autoprefixer: {},
	},
};
