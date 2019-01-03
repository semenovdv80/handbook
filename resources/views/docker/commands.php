@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Docker</h2>
        <p>Для просмотра списка комманд вводим в терминале:</p>
        <pre class="terminal">docker</pre>
        <p>Базовый синтаксис команды выглядит так:</p>
        <pre class="terminal">docker [option] [command] [arguments]</pre>
        <p>Для запуска первого виртуального контейнера наберите:</p>
        <pre class="terminal">docker run hello-world</pre>
        <p>Данная команда выполнит следующие действия:</p>
        <pre> 1. Docker клиент соединится с процессом-демоном Docker.
 2. Процесс Docker вытянет образ "hello-world" с узла Docker Hub.
 3. Процесс Docker создаст новый контейнер из этого образа и запустит скрипт, который выведет на экран текст этапов его работы.
 4. Процесс Docker направит вывод в Docker клиент, который отправит содержимое в наш терминал.
</pre>
        <p>Чтобы найти необходимый образ на Docker Hub вводим команду:</p>
        <pre class="terminal">docker search ubuntu</pre>
        <p>Если в столбце OFFICIAL содержится OK, это значит, что
            данный образ поддерживается командой разработчиков
            проекта.
        </p>
        <p>Чтобы загрузить образ с Вocker Hub набираем:</p>
        <pre class="terminal">docker pull ubuntu</pre>
        <p>Список загруженных образов можно получить введя команду:</p>
        <pre class="terminal">docker images</pre>
        <p>Для того чтобы запустить контейнер с содержимым полученного образа вводим:</p>
        <pre class="terminal">docker run -it ubuntu</pre>
                <pre>,где
<b>-i</b> подключение стандартного ввода STDIN;
<b>-t</b> создание виртуального терминального подключения;
</pre>
        <p>Если данный образ еще не был загружен в систему, то перед
            запуском контейнера он будет скачан автоматически</p>
        <p>Для просмотра всех активных контейнеров служит команда:</p>
        <pre class="terminal">docker ps</pre>
        <p>Для просмотра всех контейнеров:</p>
        <pre class="terminal">docker ps -a</pre>
        <p>Для того чтобы остановить или удалить определенный контейнер вводим:</p>
        <pre class="terminal">docker stop контейнер_id
docker rm контейнер_id</pre>
        <p>Для остановки или удаления всех контейнеров:</p>
        <pre class="terminal">docker stop $(docker ps -a -q)
docker rm $(docker ps -a -q)</pre>
        <p>Для того, чтобы войти в остановленный контейнер:</p>
        <pre class="terminal">docker start -ai контейнер_id</pre>
                        <pre>,где
<b>-a</b> подключение стандартного вывода и вывода ошибок STDOUT/STDERR;
<b>-i</b> подключение стандартного ввода STDIN;
</pre>
        <p>Чтобы выполнить команду в запущенном контейнере, вводим:</p>
        <pre class="terminal">docker exec -it контейнер_id bash</pre>
        <p>Для того, чтобы устанавливать приложения в запущенном контейнере
            необходимо обновить список доступных пакетов:</p>
        <pre class="terminal">apt-get update</pre>
        <p>Измененный контейнер отличается от исходного образа из которого он был запущен.
         Чтобы сохранить внесенные изменения в виде отдельного образа вводим в терминале:</p>
        <pre class="terminal">docker commit -m "added some soft" -a "My Author" контейнер_id имядляобраза</pre>
    </div>
    <div class="col-sm-2">
        @include('docker.menu')
    </div>
</div>
@endsection