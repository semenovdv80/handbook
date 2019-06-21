<?php

self::get('/', 'IndexController@index');

self::get('/article/add', 'ArticleController@add');
self::post('/article/add', 'ArticleController@add');

self::get('/article/edit/{id}', 'ArticleController@edit');
self::post('/article/edit/{id}', 'ArticleController@edit');
self::post('/article/delete/{id}', 'ArticleController@delete');

#PHP
self::get('/php', 'ArticleController@index');

#NGINX
self::get('/nginx', 'ArticleController@index');

#MySQL
self::get('/mysql', 'ArticleController@index');

self::get('/apache', 'ApacheController@install');
self::get('/apache/config', 'ApacheController@config');
self::get('/apache/errors', 'ApacheController@errors');

#LARAVEL
self::get('/laravel', 'LaravelController@install');
self::get('/laravel/errors', 'LaravelController@errors');
self::get('/laravel/errors/smtpcertfail', 'LaravelController@error_smtpcertfail');

#DOCKER
self::get('/docker', 'DockerController@install');
self::get('/docker/commands', 'DockerController@commands');
self::get('/dockcompose', 'DockerController@dockcompose');
self::get('/docker-compose/apache-php5-mysql5', 'DockerController@ap2ph5my5');

self::get('/sphinx', 'SphinxController@install');
self::get('/sphinx/connect', 'SphinxController@connect');
self::get('/sphinx/indexes', 'SphinxController@indexes');
self::get('/sphinx/attributes', 'SphinxController@attributes');


self::get('/rabbitmq', 'RabbitController@install');
self::get('/rabbitmq/connect', 'RabbitController@connect');

self::get('/memcached', 'MemcachedController@install');
self::get('/memcached/connect', 'MemcachedController@connect');

self::get('/php/{section}', 'PhpController@index');

self::get('/subscribe/add/{id}/{code}/{var}','IndexController@add');

self::get('/login', 'AuthController@login');
self::post('/login', 'AuthController@login');
