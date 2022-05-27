let mix = require('laravel-mix')

mix.js("resources/js/admin.js", "js")
    .js("resources/js/site.js", "js")
    .postCss("resources/css/admin.css", "css", [
        require("tailwindcss"),
    ])
    .postCss("resources/css/site.css", "css", [
        require("tailwindcss"),
    ])
    .options({
        processCssUrls: false
    })
    .setPublicPath('dist')
    .browserSync({
        files: [
            './resources/assets/**/*.{js,css}',
            './templates/admin/**/*.php',
            './templates/**/*.php',
        ],
        proxy: 'http://getonecms.wsl/',
        port: 3000
    })
    .copyDirectory('resources/images', 'dist/images')
    .copy('node_modules/bootstrap-icons/bootstrap-icons.svg', 'dist/images/icons.svg')
