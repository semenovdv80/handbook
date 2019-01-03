@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Memcached - это сервер, используемый для кеширования данных в оперативной памяти.</h2>
            <h3>1. Установка Memcached в Ubuntu 16.04</h3>
            <p>Для запуска установки наберите в терминале команду:</p>
            <pre class="terminal">sudo apt-get install memcached</pre>
        <p>Основной файл конфигурации находится в директории:</p>
            <pre>/etc/memcached.conf</pre>
        <p>Для того, чтобы добавить memcached в автозагрузку выполняем:</p>
            <pre class="terminal">sudo systemctl enable memcached</pre>
    </div>
    <div class="col-sm-2">
        @include('memcached.menu')
    </div>
</div>
@endsection