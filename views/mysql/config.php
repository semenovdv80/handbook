@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Сервер MySQL</h2>
        <p>Конфигурация сервера MySQL. Файл конфигурации my.cnf</p>
        <h3>2. Конфигурирование MySQL</h3>
        <h5>Настройки описаны на примере версии MySQL 5.6 в Ubuntu 16.04.</h5>
        <p>В Ubuntu 16.04 конфигурация сервера MySQL находится в файле
            <pre>/etc/mysql/my.cnf</pre>
            <div class="alert alert-warning"><strong>Важно:</strong> В Ubuntu 16.04 изначально по данному пути находится не
            сам файл конфигурации а символическая ссылка на него. При запуске сервера версии 5.6 процесс
            <strong>mysqld</strong> не распознает данную ссылку как файл конфигурации и
            <strong>не видит my.cnf</strong>.
                </div>
        </p>
        <p>Для того, чтобы сервер мог прочесть данный файл и принять внесенные в него директивы,
            скопируйте содержимое данной ссылки и создайте вместо нее в директории обычный файл /etc/mysql/my.cnf
        </p>
        <p>Задайте владельцем файла mysql:</p>
        <pre class="terminal">sudo chown mysql /etc/mysql/my.cnf</pre>
        <div class="alert alert-warning"><strong>Важно:</strong> Нельзя давать полные права 777 на чтение и запись всем.
            В таком случае сервер тоже будет игнорировать файл my.cnf</strong>.
        </div>
        <p>Можно проверить статус запуска сервера введя команду:</p>
        <pre class="terminal">systemctl status mysql.service</pre>
        <p>В случае если файл общедоступен, в строке состояния вы получите сообщение</p>
        <pre><a href="/mysql/errors/worldwritable">Warning: World-writable config file '/etc/mysql/my.cnf' is ignored</a></pre>
        <p>После внесения изменений в файл <strong>my.cnf</strong> перезапустите сервер:</p>
        <pre class="terminal">sudo service mysql restart</pre>
        <p>Чтобы изменить пароль <b>root</b> пользователя необходимо подключиться к серверу и выполнить запрос:</p>
        <pre class="terminal">SET PASSWORD FOR 'root'@'localhost' = PASSWORD('пароль');</pre>
        <div class="alert alert-warning"><strong>Важно:</strong> Если утерян пароль пользователя <b>root</b>:</strong>.
        </div>
        <p>1) останавливаем mysql-сервер</p>
        <pre class="terminal">/etc/init.d/mysql stop</pre>
        <p>2) запускаем сервер в безопасном режиме, выполняем команду:</p>
        <pre class="terminal">sudo mysqld_safe --skip-grant-tables &</pre>
        <p>3) прерываем Ctrl+C и переводим задачу в фоновый режим:</p>
        <pre class="terminal">bg %1</pre>
        <p>4) подключаемся к серверу, в безопасном режиме пароль не  требуется:</p>
        <pre class="terminal">mysql -u root</pre>
        <p>5) вводим запрос и задаем новый пароль:</p>
        <pre class="terminal">update user set password=PASSWORD("новый_пароль") where User='root';</pre>
        <p>5) очищаем таблицу привелегий и выходим:</p>
        <pre class="terminal">flush privileges;</pre>
    </div>
    <div class="col-sm-2">
        @include('mysql.menu')
    </div>
</div>
@endsection