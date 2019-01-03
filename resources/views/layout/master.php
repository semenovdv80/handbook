<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo $page_keywords;?>" />
    <meta name="description" content="<?php echo $page_description;?>" />
    <title><?php echo $page_title;?></title>
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&subset=cyrillic,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/app.css">
    <!-- jQuery -->
    <script src="/public/js/jquery/jquery.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-78950534-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-78950534-2');
    </script>
</head>
<body>
<div class="container-fluid">
<header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">ITsGOOD</a>
                </div>
                <ul class="nav navbar-nav">
                 <!--
                    <li><a href="/php/index">PHP</a></li>
                    <li><a href="/jq">jQuery</a></li>
                    <li><a href="/js">JavaScript</a></li>
                    <li><a href="/html">HTML</a></li>
                    <li><a href="/css">CSS</a></li>
                    <li><a href="/boot">Bootstrap</a></li>
                    <li><a href="/linux">Linux</a></li>
                    <li><a href="/apahe">Apache</a></li>
                    <li><a href="/git">Git</a></li>
                    <li><a href="/design">Design Patterns</a></li>
                    -->
                    <li><a href="/php">PHP</a></li>
                    <li><a href="/mysql">MySQL</a></li>
                    <li><a href="/laravel">Laravel</a></li>
                    <li><a href="/docker">Docker</a></li>
                    <li><a href="/sphinx">Sphinx</a></li>
                    <li><a href="/rabbitmq">RabbitMQ</a></li>
                    <li><a href="/memcached">Memcached</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li></li>
                </ul>
            </div>
        </nav>
</header>
<div class="container-fluid content">
    <div class="row">
        <div class="main-content">
            <?php if (session()->has('result', 'success')) {
                echo '<div class="alert alert-success text-center">Запись сохранена</div>';
            }?>
            @yield('index')
        </div>
    </div>
</div>
</div>
<footer class="container-fluid">
    <div class="copyright">
        <div class="wrapper wrapper_copyright">
            <p>© 2017-2018. Все права защищены. Использование материалов сайта только с разрешения владельца</p>
        </div>
    </div>
</footer>
<script src="/public/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
@yield('page.scripts')
</body>
</html>