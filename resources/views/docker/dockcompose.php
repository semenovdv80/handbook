@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Docker Compose - это инструмент для создания и запуска
            мультиконтейнерных Docker приложений.</h2>
        <h4>Compose использет файл YAML для конфигурирования сервисов приложения.
            После чего запуск всех сервисов возможно осуществить всего одной командой.</h4>
            <h3>1. Установка Docker Compose в Ubuntu 16.04</h3>
            <p>Устанавливаем актуальную на данный момент версию пакета Docker Compose. В терминале вводим команду:</p>
            <pre class="terminal">sudo curl -L https://github.com/docker/compose/releases/download/1.20.0-rc1/docker-compose-`uname -s`-`uname -m` -o /usr/local/bin/docker-compose</pre>
        <p>Задаем разрешение на исполнение файла:</p>
            <pre class="terminal">sudo chmod +x /usr/local/bin/docker-compose</pre>
        <p>После установки проверяем версию пакета:</p>
            <pre class="terminal">docker-compose -v</pre>
    </div>
    <div class="col-sm-2">
        @include('docker.menu')
    </div>
</div>
@endsection