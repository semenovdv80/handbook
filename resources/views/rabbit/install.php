@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Сервер очередей RabbitMQ</h2>
        <p>RabbitMQ - это брокер очередей или сервер осуществляющий обмен сообщениями между компонентами
            программной системы. Взаимодействие между компонентами происходит на основании протокола AMQP
            (Advanced Message Queuing Protocol)
        </p>
            <h3>1. Установка RabbitMQ в Ubuntu 16.04</h3>
            <p>Сервер написан на языке Erlang, поэтому вначале необходимо загрузить и распаковать пакеты поддержки данного языка:</p>
            <pre class="terminal">wget https://packages.erlang-solutions.com/erlang-solutions_1.0_all.deb
sudo dpkg -i erlang-solutions_1.0_all.deb</pre>
        <p>Далее производим обновление репозиториев и установку:</p>
            <pre class="terminal">sudo apt-get update
sudo apt-get install erlang erlang-nox</pre>
        <p>Теперь подключаем репозиторий с сервером RabbitMQ. Также необходимо импортировать ключ с цифровой подписью:</p>
            <pre class="terminal">echo "deb https://dl.bintray.com/rabbitmq/debian xenial main" | sudo tee /etc/apt/sources.list.d/bintray.rabbitmq.list
wget -O- https://dl.bintray.com/rabbitmq/Keys/rabbitmq-release-signing-key.asc | sudo apt-key add -</pre>
        <p>Обновляем репозитории и производим установку сервера:</p>
            <pre class="terminal">sudo apt-get update
sudo apt-get install rabbitmq-server</pre>
        <p>Запуск и остановка сервера выполняются следующими командами:</p>
            <pre class="terminal">sudo service rabbitmq-server start
sudo service rabbitmq-server stop
sudo service rabbitmq-server restart</pre>
        <p>Чтобы добавить сервер в автозагрузку выполните:</p>
            <pre class="terminal">sudo systemctl enable rabbitmq-server</pre>
        <p>Для того, чтобы создать учетную запись администратора со всеми правами выполните:</p>
                    <pre class="terminal">sudo rabbitmqctl add_user admin пароль
sudo rabbitmqctl set_user_tags admin administrator
sudo rabbitmqctl set_permissions -p / admin ".*" ".*" ".*"</pre>
        <p>Сервер RabbitMQ имеет встроенный web-интерфейс для осуществления администрирования. Для его активации наберите:</p>
        <pre class="terminal">sudo rabbitmq-plugins enable rabbitmq_management</pre>
        <p>По умолчанию доступ к веб-интерфейсу происходит через порт 15672. В браузере введите:<strong>http://localhost:15672</strong></p>
        <p>В браузере откроется окно входа в панель управления сервером:</p>
        <img border="1" src="/public/img/rabbit/webint.jpeg">
    </div>
    <div class="col-sm-2">
        @include('rabbit.menu')
    </div>
</div>
@endsection