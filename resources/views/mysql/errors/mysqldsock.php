@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>ERROR 2002 (HY000): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock'</h2>
        <p>Необходимо проверить бы ли создан в процессе установки файл mysqld.sock, проверяем содержимое
            директории /var/run/mysqld
        </p>
        <p>Если файла сокета не существует, создаем его и назначаем владельцем файла пользователя mysql:</p>
        <pre class="terminal">sudo mkfifo /var/run/mysqld/mysqld.sock
sudo chown -R mysql /var/run/mysqld</pre>
    </div>
    <div class="col-sm-2">
        @include('mysql.menu')
    </div>
</div>
@endsection