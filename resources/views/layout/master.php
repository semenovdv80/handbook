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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">ITsGOOD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/php">PHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mysql">MySQL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/laravel">Laravel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/docker">Docker</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sphinx">Sphinx</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/rabbitmq">RabbitMQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/memcached">Memcached</a>
                </li>
                <!--
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                -->
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" name="q" value="<?= !empty(request()->q) ? request()->q : ''?>">
                <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Найти">
            </form>
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
<footer>
    <div class="copyright">
        <div class="wrapper wrapper_copyright">
            <p>© 2017-2018. Все права защищены. Использование материалов сайта только с разрешения владельца</p>
        </div>
    </div>
</footer>
@include('layout.modals')
<script src="/public/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
@yield('page.scripts')
</div>
</body>
</html>