@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Сервер MySQL</h2>
        <p>Получить информацию о работе сервера, произвести анализ его производительности и выявить
            ошибки можно настроив логирование.</p>
        <h3>6. Логи MySQL</h3>
        <p><strong>1. Лог ошибок</strong></p>
        <p>Одним из ключевых логов MySQL сервера является <strong>лог ошибок</strong></p>
        <p>Для того, чтобы включить логирование ошибок необходимо в секцию mysqld файла конфигурации
            добавить переменную, которая будет содержать путь к файлу <strong>лога ошибок</strong>.
        </p>
        <div class="well well-sm">
            [mysqld]<br/>
            log_error = /var/log/mysql/error.log
        </div>
        <p><strong>2. Лог запросов</strong></p>
        <p>Кроме лога ошибок можно настроить также <strong>лог запросов</strong>, в который будут попадать
            все запросы к серверу.<br/>
            По умолчанию файл лога запросов находится в директории <strong>/var/lib/mysql/PC.log</strong>
        </p>
        <p>Для того, чтобы включить логирование запросов необходимо в секцию mysqld файла конфигурации добавить:</p>
        <div class="well well-sm">
            [mysqld]<br/>
            general_log = ON<br/>
            general_log_file = /var/log/mysql/general.log
        </div>
        <p><strong>3. Лог медленных запросов</strong></p>
        <p>Важным для оценки производительности сервера является возможность получить <strong>лог
                медленных запросов</strong>. По умолчанию данный лог находится в директории <strong>/var/lib/mysql/PC-slow.log</strong>.<br/>
            Для определения медленных запросов задается переменная <strong>long_query_time</strong>,
            содержащая допустимое время выполнения запроса в секундах.
        </p>
        <p>Чтобы включить логирование медленных запросов необходимо в секцию mysqld файла конфигурации
            добавить:</p>
        <div class="well well-sm">
            [mysqld]<br/>
            slow_query_log = ON<br/>
            long_query_time = 10<br/>
            slow_query_log_file = var/log/mysql/slow.log
        </div>
    </div>
    <div class="col-sm-2">
        @include('mysql.menu')
    </div>
</div>
@endsection