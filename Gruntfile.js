module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        jshint: {
            options: {
                'validthis'     : true,
                'laxcomma'      : true,
                'laxbreak'      : true,
                'browser'       : true,
                'eqeqeq'        : false,
                'eqnull'        : true,
                'debug'         : true,
                'devel'         : true,
                'curly'         : false,
                'boss'          : true,
                'expr'          : true,
                'asi'           : true,
                'smarttabs'     : true,
                'globals': {
                    'jQuery'    : true
                }
            },
            files: {
                src: ['js/source/*.js']
            },
        },
        concat: {
            options: {
                separator: ';',
            },
            setup: {
                src: ['js/setup/modernizr-2.6.2.js', 'js/setup/respond.js'],
                dest: 'js/build/modernizr-respond.js',
                preserveComments: 'all'
            },
            plugins: {
                src: ['js/plugins/*.js'],
                dest: 'js/build/plugins.js',
                preserveComments: 'all'
            },
            scripts: {
                 src: ['js/scripts/*.js'],
                dest: 'js/build/scripts.js',
                preserveComments: 'all'
            },
        },
        uglify: {
            setup: {
                src: 'js/build/modernizr-respond.js',
                dest: 'js/build/modernizr-respond.min.js',
                preserveComments: 'none'
            },
            plugins: {
                src: 'js/build/plugins.js',
                dest: 'js/build/plugins.min.js',
                preserveComments: 'none'
            },
            source: {
                src: 'js/build/scripts.js',
                dest: 'js/build/scripts.min.js',
                preserveComments: 'none'
            },
        },
        compass: {
            options: {
                sassDir: 'style/source',
                cssDir: 'style/build',
                javascriptsDir: 'js/build',
                fontsDir: 'fonts',
                imageDir: 'img',
                environment: 'development',
                relativeAssets: true,
                noLineComments: true,
                force: true
            },
            dev: {
                options: {                  
                    outputStyle: 'expanded',
                }
            },
            prod: {
                options: {
                    outputStyle: 'compressed',
                }
            }
        },
        watch: {
            options: {
                livereload: true,
            },
            scripts: {
                files: ['js/scripts/**/*.js',
                        'js/setup/*.js',
                        'js/plugins/**/*.js'],
                tasks: ['jshint', 'concat'],
                options: {
                    spawn: false,
                }
            },
            css: {
                files: ['style/source/**/*.scss'],
                tasks: ['compass:dev'],
                options: {
                    spawn: false,
                }
            }
        },
    });

    // Load the plugins
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-livereload');
    grunt.loadNpmTasks('grunt-combine-media-queries');

    // Set base path
    grunt.file.setBase('.');

    // Tasks
    grunt.registerTask('default', ['jshint', 'concat', 'compass:dev']);
    grunt.registerTask('dev', ['jshint', 'concat', 'compass:dev']);
    grunt.registerTask('prod', ['jshint', 'concat', 'uglify', 'compass:prod']);
};