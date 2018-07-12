@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>PEAR</h2>
        <p>PEAR (PHP Extension and Application Repository) -  репозиторий, содержащий расширения и приложения
            для PHP.
        </p>
            <h3>1. Установка PEAR в Ubuntu 16.04</h3>
            <p>Для того, чтобы установить PEAR необходимо ввести команду:</p>
            <pre class="terminal">sudo apt install php-pear</pre>
        <p>Для работы с модулями необходимо, чтобы в системе был установлен пакет php5.6-dev:</p>
            <pre class="terminal">sudo apt install php5.6-dev</pre>
        <p>Вместе с пакетом <strong>PEAR</strong> в систему также устанавливается <strong>PECL
                (PHP Extension Community Library)</strong> - репозиторий
            модулей для PHP. Просмотреть информацию о пакетах, установленных через PEAR и PECL можно
            командами:</p>
            <pre class="terminal">pear list
pecl list</pre>
        <p>Установка пакета из репозитория осуществляется следующей командой:</p>
        <pre class="terminal">sudo pecl install amqp</pre>
        <p>Чтобы удалить пакет:</p>
        <pre class="terminal">sudo pecl uninstall amqp</pre>
    </div>
    <div class="col-sm-2">
        @include('php.menu')
    </div>
</div>
@endsection