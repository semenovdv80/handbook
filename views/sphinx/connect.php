@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Поисковый движок Sphinx от Sphinx Technologies Inc.</h2>
        <h3>3. Запуск и подключение к серверу Sphinx</h3>
        <p>Для запуска сервера Sphinx наберите в терминале команду:</p>
        <div class="well well-sm">
            sudo searchd
        </div>
        <p>Для остановки сервера:</p>
        <div class="well well-sm">
            sudo searchd --stop
        </div>
        <p>Информацию о текущей установленной версии можно получить так:</p>
        <div class="well well-sm">
            sudo searchd --help
        </div>
        <p>После запуска сервера к нему можно осуществить подключение из терминала указав соответствующий хост и
            порт. Для подключения в системе должен быть установлен стандартный клиент mysql:
        </p>
        <div class="well well-sm">
            mysql -h 127.0.0.1 -P 9306
        </div>
        <p>Чтобы просмотреть текущие индексы в клиенте наберите команду:
        </p>
        <div class="well well-sm">
            SHOW TABLES;
        </div>
        <p>Для создания таблиц с проиндексированным содержимым по которым в дальнейшем будет осуществляться
        полнотекстовый поиск необходимо выполнить <a href="/sphinx/indexes">индексацию.</a></p>
    </div>
    <div class="col-sm-2">
        @include('sphinx.menu')
    </div>
</div>
@endsection