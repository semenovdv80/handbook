@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Ошибки MySQL</h2>
        <ol>
            <li><a href="/mysql/errors/mysqldsock">ERROR 2002 (HY000): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock'</a></li>
            <li><a href="/mysql/errors/worldwritable">Warning: World-writable config file '/etc/mysql/my.cnf' is ignored</a></li>
        </ol>
    </div>
    <div class="col-sm-2">
        @include('mysql.menu')
    </div>
</div>
@endsection