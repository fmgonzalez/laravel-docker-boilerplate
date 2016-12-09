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
