
//Gruntfile
module.exports = function(grunt) {

    //Initializing the configuration object
    grunt.initConfig({

        // Task configuration
        concat: {
            options: {
                separator: ';'
            },
            js_jquery: {
                src: [
                    './bower_components/jquery/dist/jquery.js'
                ],
                dest: './public/js/jquery.js'
            },
            js_angular: {
                src: [
                    './bower_components/angular/angular.js'
                ],
                dest: './public/js/angular.js'
            },
            js_bootstrap: {
                src: [
                    './bower_components/bootstrap/dist/js/bootstrap.js',
                    './bower_components/bootstrap/js/affix.js',
                    './bower_components/bootstrap/js/alert.js',
                    './bower_components/bootstrap/js/button.js',
                    './bower_components/bootstrap/js/carousel.js',
                    './bower_components/bootstrap/js/colapse.js',
                    './bower_components/bootstrap/js/dropdown.js',
                    './bower_components/bootstrap/js/modal.js',
                    './bower_components/bootstrap/js/popover.js',
                    './bower_components/bootstrap/js/scrollspy.js',
                    './bower_components/bootstrap/js/tab.js',
                    './bower_components/bootstrap/js/tooltip.js',
                    './bower_components/bootstrap/js/transition.js'
                ],
                dest: './public/js/bootstrap.js'
            },
            font_bootstrap: {
                src: [
                    './bower_components/fonts/glyphicons-halflings-regular.eot',
                    './bower_components/bootstrap/js/affix.js',
                    './bower_components/bootstrap/js/alert.js',
                    './bower_components/bootstrap/js/button.js',
                    './bower_components/bootstrap/js/carousel.js',
                    './bower_components/bootstrap/js/colapse.js',
                    './bower_components/bootstrap/js/dropdown.js',
                    './bower_components/bootstrap/js/modal.js',
                    './bower_components/bootstrap/js/popover.js',
                    './bower_components/bootstrap/js/scrollspy.js',
                    './bower_components/bootstrap/js/tab.js',
                    './bower_components/bootstrap/js/tooltip.js',
                    './bower_components/bootstrap/js/transition.js'
                ],
                dest: './public/js/bootstrap.js'
            }
        },
        less: {
            development: {
                options: {
                    compress: true  //minifying the result
                },
                files: {
                    //compiling frontend.less into frontend.css
                    "./public/css/bootstrap.css":"./bower_components/bootstrap/less/bootstrap.less"
                }
            }
        },
        uglify: {
            js_jquery: {
                files: {
                    './public/js/jquery.js': './public/js/jquery-dev.js'
                }
            },
            js_bootstrap: {
                files: {
                    './public/assets/javascript/backend.js': './public/assets/javascript/backend.js'
                }
            }
        },
        phpunit: {
            classes: {
                dir: 'app/tests/'   //location of the tests
            },
            options: {
                bin: 'vendor/bin/phpunit',
                colors: true
            }
        },
        watch: {
            js_jquery: {
                files: [
                    //watched files
                    './bower_components/jquery/dist/jquery.js'
                ],
                tasks: ['concat:js_jquery','uglify:js_jquery'],     //tasks to run
                options: {
                    livereload: true                        //reloads the browser
                }
            },
            js_angular: {
                files: [
                    //watched files
                    './bower_components/angular/angular.js'
                ],
                tasks: ['concat:js_angular'],     //tasks to run
                options: {
                    livereload: true                        //reloads the browser
                }
            },
            js_bootstrap: {
                files: [
                    //watched files
                    './bower_components/bootstrap/dist/js/bootstrap.js',
                    './bower_components/bootstrap/js/affix.js',
                    './bower_components/bootstrap/js/affix.js',
                    './bower_components/bootstrap/js/alert.js',
                    './bower_components/bootstrap/js/button.js',
                    './bower_components/bootstrap/js/carousel.js',
                    './bower_components/bootstrap/js/colapse.js',
                    './bower_components/bootstrap/js/dropdown.js',
                    './bower_components/bootstrap/js/modal.js',
                    './bower_components/bootstrap/js/popover.js',
                    './bower_components/bootstrap/js/scrollspy.js',
                    './bower_components/bootstrap/js/tab.js',
                    './bower_components/bootstrap/js/tooltip.js',
                    './bower_components/bootstrap/js/transition.js'

                ],
                tasks: ['concat:js_bootstrap','uglify:js_bootstrap'],     //tasks to run
                options: {
                    livereload: true                        //reloads the browser
                }
            },
            bootstrap_less: {
                files: ['./bower_components/bootstrap/less/*.less'],  //watched files
                tasks: ['less'],                          //tasks to run
                options: {
                    livereload: true                        //reloads the browser
                }
            },
            tests: {
                files: ['app/controllers/*.php','app/models/*.php'],  //the task will run only when you save files in this location
                tasks: ['phpunit']
            }
        }
    });

    // Plugin loading
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-coffee');
    grunt.loadNpmTasks('grunt-contrib-connect');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-phpunit');
    // Task definition
    grunt.registerTask('init', ['concat','less','uglify']);
    grunt.registerTask('default', ['watch']);

};

