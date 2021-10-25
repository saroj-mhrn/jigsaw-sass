const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

const ImageminWebpWebpackPlugin = require('imagemin-webp-webpack-plugin');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.webpackConfig((webpack) => {
    return {
        plugins: [
            new ImageminWebpWebpackPlugin(),
        ],

        module: {
            rules: [
                {
                    test: /\.(jpe?g|png)$/i,
                    loader: 'responsive-loader',
                    options: {
                        sizes: [150, 300, 600, 900, 1200, 1800, 2400, 3600],
                        name: '[name]-[width].[ext]',
                        outputPath: 'images/sizes',
                    },
                },
            ],
        },
    };
});

mix.jigsaw()
    .js('source/_assets/js/app.js', 'js')
    .sass('source/_assets/sass/app.scss', 'css/app.css')
    .options({
        processCssUrls: false,
    })
    .version();
