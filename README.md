# init
```
git init
composer init

  Welcome to the Composer config generator

This command will guide you through creating your composer.json config.

Package name (<vendor>/<name>) [yann/twig]:
Description []:
Author [bunkermaster <yann.le-scouarnec@hetic.net>, n to skip]:
Minimum Stability []:
Package Type (e.g. library, project, metapackage, composer-plugin) []:
License []:

Define your dependencies.

Would you like to define your dependencies (require) interactively [yes]? no
Would you like to define your dev dependencies (require-dev) interactively [yes]? no

{
    "name": "yann/twig",
    "authors": [
        {
            "name": "bunkermaster",
            "email": "yann.le-scouarnec@hetic.net"
        }
    ],
    "require": {}
}
```
Ensuite on rajoute twig!...
```
composer require twig/twig                yann@PHPBunker
Using version ^2.3 for twig/twig
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 2 installs, 0 updates, 0 removals
  - Installing symfony/polyfill-mbstring (v1.3.0): Downloading (100%)
  - Installing twig/twig (v2.3.2): Loading from cache
Writing lock file
Generating autoload files
```
Et démarrer le serveur HTTP de PHP!
```
php -S localhost:8003
```