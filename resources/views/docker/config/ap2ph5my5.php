@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Docker Compose - конфигурация Apache2+PHP5+MySQL5</h2>
        <p>Основной конфигурационный файл docker-compose.yml должен находиться в корневой папке:</p>
            <pre>version: '3'
services:
  mysql:  <i>#описание сервиса субд mysql</i>
    build: ./mysql  <i>#локальная папка '/mysql' с файлом конфигурации Dockerfile для mysql</i>
    ports:
        - 3306:3306  <i>#перенаправление порта локальный - виртуальный</i>
    environment:
       - MYSQL_ROOT_PASSWORD=admin
    volumes:
        - ./db:/var/lib/mysql  <i>#создание тома виртуальная папка /var/lib/mysql будет дублироваться в локальную /db</i>
  web: <i>#описание сервиса веб-сервер (apache2)</i>
    build: ./web  #локальная папка '/web' с файлом конфигурации Dockerfile для веб-сервера (apache2)</i>
                hostname: virtualhost
    domainname: virtualhost.com
    ports:
          - 80:80 #local/virtual
    volumes:
      - ./apache2/sites-enabled:/etc/apache2/sites-enabled
      - ./apache2/sites-available:/etc/apache2/sites-available
      - ./apache2/log:/var/log/apache2
      - /var/www:/var/www
    restart: always
    environment:
           - DB_HOST=mysql:3306
    depends_on:
          - mysql  <i>#сервис web загрузится не раньше mysql</i></pre>
        <p>Содержимое файла /mysql/Dockerfile</p>
        <pre>FROM mysql:5.6</pre>
        <p>Содержимое файла /web/Dockerfile</p>
        <pre>FROM php:5.6-apache
# Workaround for permission to volumes
#RUN usermod -u 1000 www-data
#RUN groupmod -g 33 www-data
# Enable Apache mod_rewrite
RUN a2enmod rewrite

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

# Install packages
RUN apt-get update
RUN apt-get install -y libpng-dev libc-client-dev libkrb5-dev
RUN apt-get install -y libmcrypt-dev
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl
RUN docker-php-ext-install imap
RUN docker-php-ext-install pdo_mysql mysqli gd
RUN docker-php-ext-install mysql</pre>
        <p>Для того чтобы сконфигурировать и запустить контейнеры в корневой папке выполняем:</p>
        <pre class="terminal">docker-compose up</pre>
        <p>Данная команда скачает указанные образы с docker hub, сконфигурирует и запустит
            контейнеры. В дальнейшем при вводе данной команды будут запускаться уже сконфигурированные
            контейнеры.</p>
        <p>При необходимости внесения изменений в конфигурацию, для того чтобы пересобрать контейнеры
            выполняем:</p>
        <pre class="terminal">docker-compose up --build</pre>
    </div>
    <div class="col-sm-2">
        @include('docker.menu')
    </div>
</div>
@endsection