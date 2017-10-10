Base Symfony project
=====================

The purpose is to gather some bundles I need to start a project: 

* [Sonata Admin](https://sonata-project.org/bundles/admin/3-x/doc/index.html) for the admin dashboard
* [Sonata User](https://sonata-project.org/bundles/user/3-x/doc/index.html) for user access management
* [FOS User Bundle](https://symfony.com/doc/current/bundles/FOSUserBundle/index.html) for user management
* [Doctrine Migrations](https://symfony.com/doc/master/bundles/DoctrineMigrationsBundle/index.html) For database migrations (local to staging/prod)
* [Nelmio Alice](https://github.com/nelmio/alice) for fixtures generation
* [Var Dumper](https://symfony.com/doc/current/components/var_dumper.html) for better debug messages
* Symfony 2.8 (as soon as Sonata admin is compatible with Symfony 3.0 I will switch to it)

# How to use

* clone the repo
* go inside de repo
* delete the .git directory ```rm -rf .git```
* install vendors : ```composer install``` or ```php composer.phar install``` (you must have composer of course)
* start the server ```app/console server:start```
* go to the page [http://localhost:8000](http://localhost:8000)
