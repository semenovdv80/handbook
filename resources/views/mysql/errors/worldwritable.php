@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Warning: World-writable config file '/etc/mysql/my.cnf' is ignored</h2>
        <div class="alert alert-warning"><strong>Важно:</strong> Файлу конфигурации <strong>my.cnf</strong> нельзя назначать права доступа 777
            на чтение и запись для  любого пользователя. В таком случае сервер mysql будет игнорировать файл my.cnf</strong>.
        </div>
        <p>Можно проверить статус запуска сервера MySQL введя команду:</p>
        <pre class="terminal">systemctl status mysql.service</pre>
        <p>В случае если файл общедоступен, в строке состояния вы получите сообщение</p>
        <pre class="terminal">Warning: World-writable config file '/etc/mysql/my.cnf' is ignored</pre>
        <p>После внесения изменений в файл <strong>my.cnf</strong> перезапустите сервер:</p>
        <pre class="terminal">sudo service mysql restart</pre>
    </div>
    <div class="col-sm-2">
        @include('mysql.menu')
    </div>
</div>
@endsection