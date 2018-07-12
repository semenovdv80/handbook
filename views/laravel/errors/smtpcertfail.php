@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Как отключить SSL TLS шифрование на Laravel для SMTP. SSL routines certificate verify failed.</h2>
        <p>Если для отправки почты используется драйвер stmp и настройки в файле .env имеют такой вид:</p>
        <pre>MAIL_DRIVER=smtp
MAIL_HOST=mail.zakupki.ru
MAIL_PORT=25
MAIL_USERNAME=info@zakupki.ru
MAIL_PASSWORD=yourpass
MAIL_ENCRYPTION=tls</pre>
        <div class="alert alert-warning">Если при отправке почтовых сообщений по SMTP не используется ни шифрование, ни процедура аутентификации,
            любое сообщение становится доступным для просмотра. Для обеспечения безопасности почтового трафика
            используется Secure Sockets Layer (SSL). Для того, чтобы использовать SSL/TLS шифрование на почтовом сервере
        должен быть установлен SSL-сертификат полученный в центре сертификации.</div>
        <p>В случае, если на почтовом сервере, с которым идет соединение, сертификат отсутствует, то при попытке установить
        соединение будет получена ошибка вида <b>certificate verify failed</b></p>
        <p>Для того, чтобы установить соединение с сервером не имеющим сертификата, в файл конфигурации
            <b>/config/mail.php</b> необходимо добавить следующий раздел:</p>
        <pre>'stream' => [
'ssl' => [
    'allow_self_signed' => true,
    'verify_peer' => false,
    'verify_peer_name' => false,
   ],
],</pre>
    </div>
    <div class="col-sm-2">
        @include('laravel.menu')
    </div>
</div>
@endsection