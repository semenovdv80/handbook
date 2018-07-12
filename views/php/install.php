@extends('layout.master')
@section('index')
<div class="row">
    <div class="col-sm-10">
        <h2>PHP</h2>
        <p>PHP (Hypertext Preprocessor) - язык программирования с открытым исходным кодом предназначенный для
            web-разработки.
        </p>
        <p>Интерпретатор PHP может быть установлен как модуль web-сервера или,
            если PHP не поддерживает интерфейс web-сервера, как обработчик CGI или FastCGI.
            Это означает, что сервер настраивается так, чтобы исполнять PHP файлы как CGI-скрипты.
        </p>
            <h3>1. Установка PHP5.6 в Ubuntu 16.04</h3>
            <p>Для того, чтобы установить php версии 5.6 необходимо подключить репозиторий содержащий пакет:</p>
            <pre class="terminal">sudo add-apt-repository ppa:ondrej/php
sudo apt-get update</pre>
        <p>Далее производим установку:</p>
            <pre class="terminal">sudo apt-get install php5.6</pre>
        <p>По умолчанию PHP подключается как модуль к установленному веб-серверу Apache.
            При этом настройки php находятся в файле:
        </p>
        <pre>/etc/php/5.6/apache2/php.ini</pre>
        <p>Интерпретатор PHP может быть установлен в нескольких вариантах для разных режимов запуска:</p>
        <p>1. Модуль для Apache (в этом случае каждый процесс веб-сервера будет включать в себя этот модуль)</p>
        <pre class="terminal">sudo apt-get install libapache2-mod-php5.6
sudo a2enmod php5.6</pre>
        <pre>путь к настройкам /etc/php/5.6/apache2/php.ini</pre>
        <p>2. СGI (интерпретатор вызывается в случае необходимости.
            Замедляет исполнение, т.к. при каждом запросе идет загрузка интерпретатора в память.
        </p>
        <pre class="terminal">sudo apt-get install php5.6-cgi
sudo a2enconf php5.6-cgi
sudo a2enmod cgi</pre>
        <pre>путь к настройкам /etc/php/5.6/cgi/php.ini</pre>
        <p>3. FastСGI (оптимальное быстродействие, отдельный процесс в памяти, который запущен постоянно)</p>
        <pre class="terminal">sudo apt-get install php5.6-fpm
sudo apt install libapache2-mod-fastcgi
a2enconf php5.6-fpm
sudo a2enmod fastcgi</pre>
        <pre>путь к настройкам /etc/php/5.6/fpm/php.ini</pre>
        <p>4. CLI (запуск скрипта из командной строки)</p>
        <pre class="terminal">sudo apt-get install php5.6-cli</pre>
        <pre>путь к настройкам /etc/php/5.6/cli/php.ini</pre>
        <p>Чтобы поменять версию php для командной строки в Ubuntu вводим:</p>
        <pre class="terminal">sudo update-alternatives --set php /usr/bin/php5.6</pre>
        <p>Текущий режим работы интерпретатора на сервере можно увидеть создав файл .php с функцией phpinfo()</p>
        <p>Установка дополнительных модулей расширений для интерпретатора осуществляется
            с помощью команд:</p>
            <pre class="terminal">sudo apt-get install php5.6-mysql
sudo apt-get install php5.6-mbstring
sudo apt-get install php5.6-imap
sudo apt-get install php5.6-zip
sudo apt-get install php5.6-xml
sudo apt-get install php5.6-dev</pre>
        <pre>путь к установленным модулям   /etc/php/5.6/mods-available
путь к активированным модулям  /etc/php/5.6/.../conf.d</pre>
        <p>Если модуль автоматически не активирован при установке, это можно сделать вручную
            создав ссылку в директории conf.d, например:</p>
        <pre>sudo ln -s /etc/php/5.6/mods-available/mcrypt.ini /etc/php/5.6/apache2/conf.d/20-mcrypt.ini</pre>
        <p>Информацию об установленных расширениях php можно получить введя команду:</p>
            <pre class="terminal">dpkg --list | grep php</pre>
    </div>
    <div class="col-sm-2">
        @include('php.menu')
    </div>
</div>
@endsection