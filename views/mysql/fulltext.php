@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Сервер MySQL</h2>
        <p>Полнотекстовый full-text поиск</p>
        <h3>5. Полнотекстовый поиск в MySQL</h3>
        <h5>Описание на примере версии MySQL 5.6 в Ubuntu 16.04.</h5>
        <p>Для того чтобы использовать функцию полнотекстового поиска необходимо, чтобы соответствующая
            колонка, по которой будет осуществляться поиск, была проиндексирована как <strong>FULLTEXT</strong>.
        </p>
        <div class="alert alert-warning"><strong>Важно: </strong>До версии 5.6 полнотекстовый поиск и FULLTEXT
            индекс был возможен только в таблицах типа MyISAM.
        </div>
        <p>Индекс FULLTEXT может быть создан только для колонок типов TEXT и VARCHAR.</p>
        <p>Поиск по содержимому проиндексированных колонок осуществляется с помощью sql оператора
            <strong>MATCH()</strong></p>
        <p>Для того, чтобы создать индекс FULLTEXT подключитесь к базе и в клиенте mysql введите команду:</p>
        <pre class="terminal">ALTER TABLE `tablename` ADD INDEX `indexname` (`column`)</pre>
        ,где:
        <p>
            tablename - имя таблицы;<br/>
            indexname - имя индекса;<br/>
            column - имя соответствующей колонки в таблице.
        </p>
        <div class="alert alert-warning"><strong>Важно:</strong>Изначально, индексируются не все слова в полях
            соотвествующей
            колонки. Параметрами mysql задаются минимальное и максимальное количество символов, которое должно содержать
            каждое слово, которое будет подлежать индексации.
        </div>
        Для таблиц типа <strong>MyISAM</strong> это переменные со значениями по умолчанию:<br>
        <div class="well well-sm">
            ft_max_word_len = 84<br/>
            ft_min_word_len = 4<br/>
        </div>
        Для таблиц типа <strong>InnoDB</strong> это переменные:
        <div class="well well-sm">
            innodb_ft_max_token_size = 84<br/>
            innodb_ft_min_token_size = 3
        </div>
        <div class="alert alert-warning">Также настройки mysql по умолчанию содержат ссылку на словарь <strong>стоп-слов
                (stopwords)</strong>, которые тоже не будут проиндексированы.
        </div>
        Для таблиц типа <strong>MyISAM</strong> это переменная:<br>
        <pre>ft_stopword_file</pre>
        Для таблиц типа <strong>InnoDB</strong> это переменные:<br>
        <div class="well well-sm">
            innodb_ft_enable_stopword = ON<br/>
            innodb_ft_server_stopword_table<br/>
            innodb_ft_user_stopword_table
        </div>
        <p>Чтобы просмотеть текущие значения этих переменных подключитесь к базе и в клиенте mysql введите команду:</p>
        <pre class="terminal">SHOW VARIABLES LIKE '%ft%';</pre>
        <p>Для того, чтобы изменить значения количества букв или отключить словарь стоп-слов добавьте соответствующие
            директивы в секцию mysqld файла конфигурации my.cnf, например:</p>
        <div class="well well-sm">
            [mysqld]<br/>
            ft_min_word_len = 2<br/>
            ft_stopword_file=''
        </div>
        <p>Для таблиц типа <strong>InnoDB</strong></p>
        <div class="well well-sm">
            [mysqld]<br/>
            innodb_ft_min_token_size = 2<br/>
            innodb_ft_enable_stopword = OFF<br/>
            innodb_ft_server_stopword_table = ''<br/>
            innodb_ft_user_stopword_table = ''
        </div>
    </div>
    <div class="col-sm-2">
        @include('mysql.menu')
    </div>
</div>
@endsection