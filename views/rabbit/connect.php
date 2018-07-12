@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Сервер очередей RabbitMQ</h2>
        <h3>Подключение к серверу RabbitMQ из PHP</h3>
        <p>В начале необходимо установить библиотеку с клиентом <strong>RabbitMQ C library</strong>,
            более известную как <strong>librabbitmq</strong>. В терминале выполните команду:</p>
        <pre class="terminal">sudo apt-get install librabbitmq4</pre>
        <p>Далее для работы с протоколом <b>amqp</b> необходимо установить расширение для php. Есть два варианта:
        <p>1) установить пакет php-amqp:</p>
        <pre class="terminal">sudo apt-get install php-amqp</pre>
        <p>2) установить и скомпилировать расширение из репозитория PECL предварительно установив dev библиотеку
            для разработчиков:
        </p>
        <pre class="terminal">sudo apt-get install librabbitmq-dev
sudo pecl install amqp</pre>
        <p>Во втором случае будет скомпилировано расширение <strong>amqp.so</strong> в директории по умолчанию<strong>'/usr/lib/php/.../amqp.so'</strong>.
            После чего его нужно подключить прописав в соответствующих <b>php.ini</b> для веб-сервера
            (/etc/php/5.6/apache2/php.ini) и командной строки
            (/etc/php/5.6/cli/php.ini):</p>
        <pre>extension=/path/to/extension/amqp.so</pre>
        <p>Код php для подключения к серверу RabbitMQ выглядит так:</p>
        <!--sunburst http://pinetools.com/syntax-highlighter -->
<pre class="hljs" style="display: block; overflow-x: auto; padding: 0.5em; background: rgb(0, 0, 0); color: rgb(248, 248, 248);">$connection = <span class="hljs-keyword" style="color: rgb(226, 137, 100);">new</span> \AMQPConnection([
    <span class="hljs-string" style="color: rgb(101, 176, 66);">'host'</span> =&gt; <span class="hljs-string" style="color: rgb(101, 176, 66);">'localhost'</span>,    <span class="hljs-comment" style="color: rgb(174, 174, 174); font-style: italic;">#host - имя хоста, на котором запущен сервер RabbitMQ</span>
    <span class="hljs-string" style="color: rgb(101, 176, 66);">'port'</span> =&gt; <span class="hljs-number" style="color: rgb(51, 135, 204);">5672</span>,           <span class="hljs-comment" style="color: rgb(174, 174, 174); font-style: italic;">#port - номер порта сервиса, по умолчанию - 5672</span>
    <span class="hljs-string" style="color: rgb(101, 176, 66);">'vhost'</span> =&gt; <span class="hljs-string" style="color: rgb(101, 176, 66);">'/'</span>,           <span class="hljs-comment" style="color: rgb(174, 174, 174); font-style: italic;">#адрес хоста на сервере RabbitMQ</span>
    <span class="hljs-string" style="color: rgb(101, 176, 66);">'login'</span> =&gt; <span class="hljs-string" style="color: rgb(101, 176, 66);">'user'</span>,        <span class="hljs-comment" style="color: rgb(174, 174, 174); font-style: italic;">#user - имя пользователя для соединения с сервером</span>
    <span class="hljs-string" style="color: rgb(101, 176, 66);">'password'</span> =&gt; <span class="hljs-string" style="color: rgb(101, 176, 66);">'qwerty'</span>    <span class="hljs-comment" style="color: rgb(174, 174, 174); font-style: italic;">#пароль пользователя</span>
]);
$connection-&gt;connect();</pre>
        <p>После установки соединения необходимо создать канал:</p>
        <pre class="hljs" style="display: block; overflow-x: auto; padding: 0.5em; background: rgb(0, 0, 0); color: rgb(248, 248, 248);">$channel = <span class="hljs-keyword" style="color: rgb(226, 137, 100);">new</span> \AMQPChannel($connection);</pre>
        <p>Далее создаем точку обмена (обменник):</p>
        <pre class="hljs" style="display: block; overflow-x: auto; padding: 0.5em; background: rgb(0, 0, 0); color: rgb(248, 248, 248);">$exchange = $exchange = <span class="hljs-keyword" style="color: rgb(226, 137, 100);">new</span> \AMQPExchange($channel);
$exchange-&gt;setName(<span class="hljs-string" style="color: rgb(101, 176, 66);">'MyExchange'</span>); <span class="hljs-comment" style="color: rgb(174, 174, 174); font-style: italic;">       #имя точки обмена</span>
$exchange-&gt;setType(AMQP_EX_TYPE_DIRECT); <span class="hljs-comment" style="color: rgb(174, 174, 174); font-style: italic;">#тип обмена продюсер-консьюмер</span>
$exchange-&gt;setFlags((AMQP_DURABLE); <span class="hljs-comment" style="color: rgb(174, 174, 174); font-style: italic;">      #обменник будет сохранен в случае остановки и перезапуска сервера</span>
$exchange-&gt;declare();</pre>
        <p>Создаем очередь:</p>
        <pre class="hljs" style="display: block; overflow-x: auto; padding: 0.5em; background: rgb(0, 0, 0); color: rgb(248, 248, 248);">$queue = <span class="hljs-keyword" style="color: rgb(226, 137, 100);">new</span> \AMQPQueue($channel);
$queue-&gt;setFlags((AMQP_DURABLE); <span class="hljs-comment" style="color: rgb(174, 174, 174); font-style: italic;">      #очередь будет сохранена в случае остановки и перезапуска сервера</span>
$queue-&gt;setName(<span class="hljs-string" style="color: rgb(101, 176, 66);">'MyQue'</span>); <span class="hljs-comment" style="color: rgb(174, 174, 174); font-style: italic;">#имя очереди</span>
$queue-&gt;declareQueue();</pre>
        <p>Чтобы привязать очередь к обменнику</p>
        <pre class="hljs" style="display: block; overflow-x: auto; padding: 0.5em; background: rgb(0, 0, 0); color: rgb(248, 248, 248);">$queue-&gt;bind(<span class="hljs-string" style="color: rgb(101, 176, 66);">'MyExchange'</span>, <span class="hljs-string" style="color: rgb(101, 176, 66);">'MyQue'</span>);</pre>
        <p>Отправляем сообщение в очередь:</p>
        <pre class="hljs" style="display: block; overflow-x: auto; padding: 0.5em; background: rgb(0, 0, 0); color: rgb(248, 248, 248);">$exchange-&gt;publish(json_encode(<span class="hljs-string" style="color: rgb(101, 176, 66);">'My Message'</span>), <span class="hljs-string" style="color: rgb(101, 176, 66);">'MyQue'</span>);</pre>
        <p>Для получения сообщений из очереди:</p>
        <pre class="hljs" style="display: block; overflow-x: auto; padding: 0.5em; background: rgb(0, 0, 0); color: rgb(248, 248, 248);"><span class="hljs-keyword" style="color: rgb(226, 137, 100);">while</span> ($envelope = $queue-&gt;get())
{
    <span class="hljs-keyword" style="color: rgb(226, 137, 100);">if</span> ($envelope) {
        $body = $envelope-&gt;getBody();
        <span class="hljs-keyword" style="color: rgb(226, 137, 100);">if</span> ($body) {
            $message = json_decode($body);
            <span class="hljs-keyword" style="color: rgb(226, 137, 100);">if</span> ($message) {
                $queue-&gt;ack($envelope-&gt;getDeliveryTag()); <span class="hljs-comment" style="color: rgb(174, 174, 174); font-style: italic;">#уведомляем брокер об успешном приеме сообщения</span>
            }
            <span class="hljs-keyword" style="color: rgb(226, 137, 100);">else</span>{
                $queue-&gt;nack($envelope-&gt;getDeliveryTag(), AMQP_REQUEUE); <span class="hljs-comment" style="color: rgb(174, 174, 174); font-style: italic;">#возврат сообщения назад в очередь в случае неудачи</span>
            }
        }
    }
}</pre>
    </div>
    <div class="col-sm-2">
        @include('rabbit.menu')
    </div>
</div>
@endsection