@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Сервер MySQL</h2>
        <p>MySQL -  это система управления реляционными базами данных. Под базой данных понимается
            структурированная совокупность данных. В реляционных базах все данные хранятся не в одном месте,
            а в отдельных таблицах.
        </p>
        <h3>1. Установка MySQL</h3>
        <h5>Будет описана установка на примере версии MySQL 5.6 в Ubuntu 16.04.</h5>
        <p>Перед установкой необходимо проверить наличие в системе существующих зависимостей пакета MySQL.
        Для этого в термимнале необходимо выполнить команду:
        </p>
        <pre class="terminal">dpkg -l | grep mysql</pre>
        <p>Если в системе присутствуют связанные пакеты, их необходимо удалить выполнив команду:</p>
        <pre class="terminal">sudo apt-get purge имяпакета</pre>
        <p>В настоящее время актуальной версией MySQL, присутствующей в репозитории Ubuntu и устанавливаемой
        в систему по умолчанию является версия 5.7. Для того, чтобы установить версию 5.6 необходимо подключить
        отдельный дополнительный репозиторий. Для этого выполняем в терминале команду:</p>
        <pre class="terminal">sudo add-apt-repository 'deb http://archive.ubuntu.com/ubuntu trusty universe'</pre>
        <p>После подключения обновляем все репозитории вашей Ubuntu:</p>
        <pre class="terminal">sudo apt-get update</pre>
        <p>Для запуска установки MySQL выполняем команду:</p>
        <pre class="terminal">sudo apt install mysql-server-5.6</pre>
        <p>Для запуска сервера вводим:</p>
        <pre class="terminal">/etc/init.d/mysql start</pre>
        <p>При запуске возможно появление ошибки типа:</p>
        <pre><a href="/mysql/errors/mysqldsock">ERROR 2002 (HY000): Can't connect
to local MySQL server through
socket '/var/run/mysqld/mysqld.sock'</a></pre>
        <p>Необходимо проверить бы ли создан в процессе установки файл mysqld.sock, проверяем содержимое
        директории /var/run/mysqld
        </p>
        <p>Если файла сокета не существует, создаем его и назначаем владельцем файла mysql:</p>
        <pre class="terminal">sudo mkfifo /var/run/mysqld/mysqld.sock
sudo chown -R mysql /var/run/mysqld</pre>
        <p>Остановка и перезапуск сервера выполняются следующими командами:</p>
                <pre class="terminal">/etc/init.d/mysql stop
/etc/init.d/mysql restart</pre>
        <p>Чтобы сервер mysql стартовал при запуске системы, добавляем его в автозагрузку:</p>
                <pre class="terminal">sudo systemctl enable mysql</pre>

    </div>
    <div class="col-sm-2">
        @include('mysql.menu')
    </div>
</div>
@endsection