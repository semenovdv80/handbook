<?php

namespace App\controllers;

use App\base\Controller;

class MemcachedController extends Controller
{
    public function install()
    {
        $aData['page_title'] = 'Memcached - Установка и Настройка в Ubuntu 16.04';
        $aData['page_keywords'] = 'memcached, ubuntu, install, установка';
        $aData['page_description'] = 'memcached - установка и настройка, memcached install and settings';
        view('memcached.install', $aData);
    }

    public function connect()
    {
        $aData['page_title'] = 'Memcached - подключение';
        $aData['page_keywords'] = 'memcached, connect, подключение';
        $aData['page_description'] = 'memcached - подключение';
        view('memcached.connect', $aData);
    }
}