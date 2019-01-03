@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Сервер Memcached</h2>
        <h3>Подключение к серверу Memcached из PHP</h3>
        <p>Вначале необходимо установить расширение PHP для работы с Memcached. В терминале выполните команду:</p>
        <pre class="terminal">sudo apt-get install php-memcached</pre>
        <p>Скрипт подключения, установки и получения значения приведен ниже:</p>
        <pre class="hljs" style="display: block; overflow-x: auto; padding: 0.5em; background: rgb(0, 0, 0); color: rgb(248, 248, 248);"><span class="hljs-meta" style="color: rgb(137, 150, 168);">&lt;?php</span>
$memcache = <span class="hljs-keyword" style="color: rgb(226, 137, 100);">new</span> Memcached();
$memcache-&gt;addServer(<span class="hljs-string" style="color: rgb(101, 176, 66);">"127.0.0.1"</span>, <span class="hljs-number" style="color: rgb(51, 135, 204);">11211</span>);

$connect = mysqli_connect(<span class="hljs-string" style="color: rgb(101, 176, 66);">"localhost"</span>, <span class="hljs-string" style="color: rgb(101, 176, 66);">"root"</span>, <span class="hljs-string" style="color: rgb(101, 176, 66);">""</span>) <span class="hljs-keyword" style="color: rgb(226, 137, 100);">or</span> <span class="hljs-keyword" style="color: rgb(226, 137, 100);">die</span>(mysqli_error($connect));
mysqli_select_db($connect, <span class="hljs-string" style="color: rgb(101, 176, 66);">'crm_base'</span>) <span class="hljs-keyword" style="color: rgb(226, 137, 100);">or</span> <span class="hljs-keyword" style="color: rgb(226, 137, 100);">die</span>(mysqli_error($connect));
$query = <span class="hljs-string" style="color: rgb(101, 176, 66);">"SELECT * FROM users WHERE id = 1"</span>;
$ret = mysqli_query($connect, $query);
$result = mysqli_fetch_assoc($ret);
$querykey = <span class="hljs-string" style="color: rgb(101, 176, 66);">"KEY"</span> . md5($query);
$memcache-&gt;set($querykey, $result);
$result2 = $memcache-&gt;get($querykey);
<span class="hljs-keyword" style="color: rgb(226, 137, 100);">if</span> ($result2) {
    <span class="hljs-keyword" style="color: rgb(226, 137, 100);">echo</span> <span class="hljs-string" style="color: rgb(101, 176, 66);">"&lt;p&gt;Значение: "</span> . $result2[<span class="hljs-string" style="color: rgb(101, 176, 66);">'id'</span>] . <span class="hljs-string" style="color: rgb(101, 176, 66);">" получено из Memcached&lt;/p&gt;"</span>;
}
<span class="hljs-meta" style="color: rgb(137, 150, 168);">?&gt;</span></pre>
    </div>
    <div class="col-sm-2">
        @include('memcached.menu')
    </div>
</div>
@endsection