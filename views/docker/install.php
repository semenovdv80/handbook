@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Docker - это программное обеспечение, которое позволяет
            осуществить виртуализацию работы приложений и процессов.</h2>
            <h3>1. Установка Docker в Ubuntu 16.04</h3>
            <p>В начале необходимо добавить в систему ключ GPG для загрузки пакета из официального репозитория Docker.
                В терминале вводим команду:</p>
            <pre class="terminal">sudo apt-key adv --keyserver hkp://p80.pool.sks-keyservers.net:80 --recv-keys 58118E89F3A912897C070ADBF76221572C52609D</pre>
        <p>Далее добавляем репозиторий Docker в систему:</p>
            <pre class="terminal">sudo apt-add-repository 'deb https://apt.dockerproject.org/repo ubuntu-xenial main'</pre>
        <p>Обновляем список доступных из репозиториев пакетов:</p>
            <pre class="terminal">sudo apt-get update</pre>
        <p>Запускаем установку Docker:</p>
        <pre class="terminal">sudo apt-get install docker-engine</pre>
        <p>Проверить, что приложение установлено и процесс запущен можно командой:</p>
        <pre class="terminal">sudo systemctl status docker</pre>
        <p>Для управления Docker без прав суперпользователя рекоммендуется добавить
            польлзователя в группу <b>docker</b>:</p>
        <pre class="terminal">sudo usermod -aG docker $(whoami)</pre>
        <p>Группы пользователя можно посмотреть командой:</p>
        <pre class="terminal">groups имя_пользователя</pre>
        <p>Чтобы удалить пользователя из группы вводим:</p>
        <pre class="terminal">sudo deluser имя_пользователя группа</pre>
    </div>
    <div class="col-sm-2">
        @include('docker.menu')
    </div>
</div>
@endsection