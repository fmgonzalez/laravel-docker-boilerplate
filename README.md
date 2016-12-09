# laravel-docker-boilerplate

Laravel + Docker boilerplate project based on [Laradock project](https://github.com/laradock/laradock)

## Docker containers

Available containers:
  - web servers: `apache2`, `nginx`
  - PHP configs: `php-fpm` (5.6, 7.0), `hhvm`
  - Databases: `mysql`, `mariadb`, `postgres`
  - Cache: `memcached`, `redis`
  - Database tools: `phpmyadmin`, `pgadmin`

`Docker-compose` use examples:  

```
$ docker-compose up -d apache2 mysql
$ docker-compose build apache2
$ docker-compose down
$ docker-compose ps
$ docker exec --user=laradock -it workspace bash
$ docker ps
$ docker-machine ip
```
All data and logs will be stored in `data` and `logs` root directories. Source projects in `src` root directory.

## Laravel project

  * psr-4 autoload
  * RouteService Provider
  * Custom resource view

## Composer scripts

  * `$ composer run-script php-md` - Runs [PHP Mess Detector](https://phpmd.org) and generate a report at `src/reports/phpmd/phpmd.html` directory with `phpmd.rules.xml` config params (checks for unused variable, some naming and cyclomatic complexity).
  * `$ composer run-script php-doc` - Runs [PHP Documentor](https://phpdoc.org) and generate project documentation acording to `phpdoc.xml` config file (create a report at `src/reports/phpdoc` with `src` directory doc)
  * `$ composer run-script lint` - Runs [PHP Coding Standards Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) and *checks* coding standards (PSR-2)
  * `$ composer run-script lint-fix` - Runs [PHP Coding Standards Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) and *fix* coding standards (PSR-2)
