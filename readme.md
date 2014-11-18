#Purpose
- Provide a common workplace for developing applications using the laravel framework.
- Provide documented strategies and bootstrapping for dealing with common needs.
- Provide a consistent workflow for developing new features
- Couple the most modern technologies with the most modern frameworks

#Working with Modules
- You may create your own modules/ modify exiting modules or disable modules at any time without impacting other modules that are not dependant

##Creating a Module
- php artisan workbench vendor/package --resources
- navigate to your directory
- Within workbench/<namespace>/<package>/src/<package> create ControllerServiceProvider.php , EventServiceProvider.php, ModelServiceProvider.php, RepositoryServiceProvider @todo override workbench method to create these
- Within workbench/<namespace>/<package>/src/package/<PackageServiceProvider>.php update boot and provides methods to alias the packages service, and include the above mentioned service providers
- Within workbench/<namespace>/<package>/composer.json add autoload classmap for "src/controllers", "src/migrations , "src/models", and "src/repositories",
- Within workbench/<namespace>/<package>/src add the folders "models", "repositories",
- Navigate to workbench/<namespace>/<package> within shell and run "composer dumpautoload"
- Update app/config/app.php and add your modules primary service provider to the providers array
- Navigate to the root directory of your application; within shell run the command php-artisan dump-autoload





##Starting Modules
- user - see workbench/larangular/user
This module is designed to handle common user tasks such as login, logout, register, reset
- page - see workbench/larangular/page
This module is designed to house page related values such as layout, content, meta information,etc.



###Grunt setup and initialization
Grunt is a javascript task runner well equipped to work with bower.

##Installation
1) Install node.js http://nodejs.org/
2) within your bash/shell "npm install -g grunt"

##Usage
We use a laravel package for managing grunt operations which also ties into Bower.
Please refer to: https://github.com/JasonMortonNZ/laravel-grunt

To configure please complete composer update and then modify


### Bower setup and initialization
Bower "a package manager for the web" is a package manager.
It is designed to make adding css and javascript packages easy to install to your project.

##Installation
1) Install node.js http://nodejs.org/
2) within your bash/shell "npm install -g bower"

##Finding Packages
use the command bower search <package name> to do a text search for a given package

##Adding Packages
you can either modify the bower.json file or do one of the following commands:
bower install <package name> -S
bower install <package name> -D

the -D is for the development environment only





### Vagrant Setup and Initialization
a vagrant file is included with this package to make development easier for everyone involved.
You should add Vagrantfile and the puphpet directory to your .gitignore if you wish not to share your build file with everyone

To configure your build further please refer to puphpet/config.yml and Vagrantfile

By default your package ip will be 192.168.56.101

you MUST modify your host file to point larangular.dev to 192.168.56 for local development

You may modify these variables within phuphpet/config.yml



## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
