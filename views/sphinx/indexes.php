@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Поисковый движок Sphinx от Sphinx Technologies Inc.</h2>
        <h3>4. Индексация</h3>
        <p>При установке сервера Sphinx помимо основного приложения <strong>searchd</strong> в систему также устанавливается
            приложение <strong>indexer</strong>. С помощью данного приложения и осуществляется построение таблиц с
            проиндексированным содержимым.
        </p>
        <p>Для создания определенного индекса необходимо выполнить команду:</p>
        <pre>sudo indexer <имя индекса></pre>
        <p>Для создания всех индексов описанных в конфиге:</p>
        <pre>sudo indexer --all</pre>
        <p>Для индексов, не real-time (rt) обновление содержимого можно осуществлять по крону. При этом используется
            специальный ключ --rotate:
        </p>
        <div class="well well-sm">
            sudo indexer --rotate --all<br/>
            sudo indexer --rotate <имя индекса><br/>
        </div>
        <p>При этом рядом со старым  файлом индекса, создается новый, который заменяет старый индекс по завершению
            процесса индексации.</p>
    </div>
    <div class="col-sm-2">
        @include('sphinx.menu')
    </div>
</div>
@endsection