@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Поисковый движок Sphinx от Sphinx Technologies Inc.</h2>
        <h3>5. Аттрибуты Sphinx</h3>
        <p>В отличие от текстовых полей аттрибуты не подлежат полнотекстовой индексации.
            И хотя они также находятся в файлах индексов, но полнотекстовый поиск по ним невозможен.
        </p>
        <p>Аттрибуты используются для дополнительной фильтрации результатов поиска.</p>
        <p>В настоящее время используются следующие типы аттрибутов:</p>
        <ul>
            <li>Целочисленные - Unsigned integers (1-bit to 32-bit wide);</li>
            <li>Метки времени - UNIX timestamps;</li>
            <li>Числа с плавающей точкой - Floating point values (32-bit, IEEE 754 single precision);</li>
            <li>Строки - Strings;</li>
            <li> JSON;</li>
            <li>Многозначные - MVA, multi-value attributes (variable-length lists of 32-bit unsigned integers).</li>
        </ul>
        <p>
            Многозначные аттрибуты отличаются тем, что хранят в одном поле несколько значений
            которые разделяются запятой.
        </p>
        <p>Формат объявления многозначных аттрибутов следующий:</p>
        <pre>sql_attr_multi = ATTR-TYPE ATTR-NAME 'from' SOURCE-TYPE \ [;QUERY] \ [;RANGE-QUERY]</pre>
        ,где:
        <ul>
            <li>ATTR-TYPE это тип аттрибута 'uint', 'bigint' or 'timestamp'</li>
            <li>ATTR-NAME это имя аттрибута</li>
            <li>SOURCE-TYPE это источник 'field', 'query', or 'ranged-query'</li>
            <li>QUERY это один SQL запрос</li>
            <li>RANGE-QUERY это несколько SQL запросов</li>
        </ul>
        <p>Если в качестве источника выбрано <strong>field</strong>, то оно указывает на колонку,
            возвращаемую в основном запросе <strong>sql_query</strong>, как правило с использованием оператора GROUP_CONCAT
        </p>
        <p><strong>Например:</strong></p>
        <pre>sql_attr_multi = uint region from field;</pre>
        <p>При этом запрос может выглядеть так:</p>
        <pre>..., (SELECT GROUP_CONCAT(table.column) FROM table where table.column2 = 'N') AS region</pre>
        <p>В качестве источника могут быть также указаны запрос <strong>query</strong> или
        несколько запросов <strong>ranged-query</strong></p>
        <p>SQL запрос должен возвращать два столбца - ID и значение аттрибута.
            Результаты будут сгруппированы с соответствующими id строк документа.</p>
        <p><strong>Например:</strong></p>
			<pre>sql_attr_multi = uint tag from query; SELECT id, tag FROM tags
sql_attr_multi = bigint tag from ranged-query; \
    SELECT id, tag FROM tags WHERE id&gt;=$start AND id&lt;=$end; \
    SELECT MIN(id), MAX(id) FROM tags</pre>


    </div>
    <div class="col-sm-2">
        @include('sphinx.menu')
    </div>
</div>
@endsection