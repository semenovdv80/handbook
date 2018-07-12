@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Поисковый движок Sphinx от Sphinx Technologies Inc.</h2>
        <p>Система для полнотекстового поиска с открытым исходным кодом.</p>
        <p>Разработана для осуществления эффективного релевантного поиска и обладает простотой интеграции.</p>
        <p>Sphinx индексирует содержимое базы данных и в дальнейшем принимает и обрабатывает все поисковые запросы.</p>
        <p>Это позволяет снизить нагрузку на сервер БД и существенно ускорить быстродействие системы в целом.</p>
        <div id="install">
            <h3>1. Установка Sphinx</h3>
            <h5>Установка Sphinx под Ubuntu. В консоли Ubuntu выполните команду:</h5>
            <pre class="html4strict" style="font-family:monospace;">sudo apt-get install sphinxsearch</pre>
            <p>Данная команда загрузит все необходимые пакеты и произведет установку Sphinx на вашем сервере.</p>
        </div>
        <div id="settings">
            <h3>2. Настройки конфигурации Sphinx</h3>
            <p>Файлы конфигурации сервера лежат в директории /etc/sphinxsearch. После установки тут находятся файлы с
                примерами конфигурации системы:</p>
            <pre>/etc/sphinxsearch/sphinx.conf.sample<br/>/etc/sphinxsearch/sphinx.conf.dist<br/>/etc/sphinxsearch/sphinx-min.conf.dist</pre>
            <p>После внесения всех необходимых изменений файл конфигурации должен быть переименован в
                <strong>sphinx.conf</strong></p>
            <p>В этой же директории находится файл <strong>example.sql</strong> для создания тестовой базы данных</p>
            <p>Ниже приведен файл <strong>sphinx.conf</strong> содержащий минимальную возможную конфигурацию поискового сервера:
            </p>
<pre class="properties" style="font-family:monospace;"><span style="color: #808080; font-style: italic;">#источник для построения индекса</span>
source src1
<span style="">&#123;</span>
	<span style="color: #000080; font-weight:bold;">type</span>			<span style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> mysql </span><span style="color: #808080; font-style: italic;">#тип бд, к которой идет подключение</span>
&nbsp;
	<span style="color: #000080; font-weight:bold;">sql_host</span>		<span style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> localhost </span><span style="color: #808080; font-style: italic;">#хост бд</span>
	<span style="color: #000080; font-weight:bold;">sql_user</span>		<span style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> test</span>
	<span style="color: #000080; font-weight:bold;">sql_pass</span>		<span style="color: #000000;">=</span>
	<span style="color: #000080; font-weight:bold;">sql_db</span>			<span style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> test</span>
	<span style="color: #000080; font-weight:bold;">sql_port</span>		<span style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> 3306	</span><span style="color: #808080; font-style: italic;"># optional, default is 3306</span>
&nbsp;
	<span style="color: #000080; font-weight:bold;">sql_query</span>		<span style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> \</span>
		SELECT id, group_id, UNIX_TIMESTAMP<span style="">&#40;</span>date_added<span style="">&#41;</span> AS date_added, title, content \
		FROM documents
&nbsp;
	<span style="color: #000080; font-weight:bold;">sql_attr_uint</span>		<span
        style="color: #000000;">=</span><span style="color: #008000; font-weight:bold;"> group_id</span>
	<span style="color: #000080; font-weight:bold;">sql_attr_timestamp</span>	<span
        style="color: #000000;">=</span><span style="color: #008000; font-weight:bold;"> date_added</span>
<span style="">&#125;</span>
&nbsp;
<span style="color: #808080; font-style: italic;">#непосредственно сам индекс</span>
index test1
<span style="">&#123;</span>
	<span style="color: #000080; font-weight:bold;">source</span>			<span style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> src1 </span><span style="color: #808080; font-style: italic;">#источник для построения индекса (подключение и запрос)</span>
	<span style="color: #000080; font-weight:bold;">path</span>			<span style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> /var/lib/sphinxsearch/data/test1 </span><span
        style="color: #808080; font-style: italic;">#путь на сервере, где лежит файл индекса</span>
<span style="">&#125;</span>
&nbsp;
indexer
<span style="">&#123;</span>
	<span style="color: #000080; font-weight:bold;">mem_limit</span>		<span style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> 128M </span><span style="color: #808080; font-style: italic;">#количество памяти, которое выделяется процессу индексации</span>
<span style="">&#125;</span>
&nbsp;
searchd
<span style="">&#123;</span>
	<span style="color: #000080; font-weight:bold;">listen</span>			<span style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> 9312</span>
	<span style="color: #000080; font-weight:bold;">listen</span>			<span style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> 9306:mysql41</span>
	<span style="color: #000080; font-weight:bold;">log</span>			<span style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> /var/lib/sphinxsearch/log/searchd.log </span><span
        style="color: #808080; font-style: italic;"># путь к файлу лога ошибок</span>
	<span style="color: #000080; font-weight:bold;">query_log</span>		<span style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> /var/lib/sphinxsearch/log/query.log </span><span
        style="color: #808080; font-style: italic;"># путь к файлу лога запросов</span>
	<span style="color: #000080; font-weight:bold;">read_timeout</span>		<span
        style="color: #000000;">=</span><span style="color: #008000; font-weight:bold;"> 5 </span><span
        style="color: #808080; font-style: italic;">#время ожидания запроса от клиента, сек</span>
	<span style="color: #000080; font-weight:bold;">max_children</span>		<span
        style="color: #000000;">=</span><span style="color: #008000; font-weight:bold;"> 30 </span><span
        style="color: #808080; font-style: italic;">#количество одновременных поисковых запросов</span>
	<span style="color: #000080; font-weight:bold;">pid_file</span>		<span style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> /var/run/sphinxsearch/searchd.pid  </span><span
        style="color: #808080; font-style: italic;">#путь к файлу процесса</span>
	<span style="color: #000080; font-weight:bold;">seamless_rotate</span>		<span style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> 1 </span><span style="color: #808080; font-style: italic;">#тихий переход на новый индекс, старый и новый индекс существуют паралелльно до момента замены</span>
	<span style="color: #000080; font-weight:bold;">preopen_indexes</span>		<span style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> 1 </span><span style="color: #808080; font-style: italic;">#проверка всех индексов при запуске сервера</span>
	<span style="color: #000080; font-weight:bold;">unlink_old</span>		<span style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> 1 </span><span style="color: #808080; font-style: italic;"># удалять старые индексы после ротации</span>
	<span style="color: #000080; font-weight:bold;">workers</span>			<span
        style="color: #000000;">=</span><span style="color: #008000; font-weight:bold;"> threads </span><span
        style="color: #808080; font-style: italic;"># for RT to work режим обработки запросов, для каждого запроса создается новая очередь</span>
	<span style="color: #000080; font-weight:bold;">binlog_path</span>		<span
        style="color: #000000;">=</span><span
        style="color: #008000; font-weight:bold;"> /var/lib/sphinxsearch/data </span><span
        style="color: #808080; font-style: italic;">#используется для восстановления после сбоев RT индексов</span>
<span style="">&#125;</span></pre>
            <p>Блок <strong>source</strong> с именем <strong>src1</strong> содержит параметры подключения к базе данных,
                а также запрос
                <strong>sql_query</strong> на основании которого будет создана таблица данных на сервере sphinx.
                Данная таблица является отражением таблицы в БД. Кроме индексов текстовых полей, она может содержать
                также аттрибуты <strong>attributes</strong>, которые помимо основного поиска по индексированному
                содержимому, позволяют
                осуществлять дополнительную фильтрацию контента.</p>
            <p> Так, напимер в приведенном выше конфиге <strong>sql_attr_uint</strong>
                говорит о том, что результирующая таблица будет содержать аттрибут (столбец) group_id с типом uint -
                unsigned integer
                (целочисленный, без знака). А также аттрибут date_added с типом timestamp.
            <p> Так как синтаксис запросов к базе sphinx
                мало отличается от sql, то эти аттрибуты легко могут быть использованы при выборке данных, например в
                том же
                <strong>where</strong>.
            </p>
            <p>Блок <strong>index</strong> с именем <strong>test1</strong> содержит параметры источника данных
            <strong>source</strong> и пути <strong>path</strong> где будет лежать файл созданной таблицы.</p>
            <p>После внесения необходимых изменений и сохранения конфигурационного файла можно осуществить <a href="/sphinx/connect">запуск и
                    подключение</a> к серверу Sphinx.</p>
        </div>
    </div>
    <div class="col-sm-2">
        @include('sphinx.menu')
    </div>
</div>
@endsection