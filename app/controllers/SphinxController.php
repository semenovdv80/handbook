<?php

namespace App\controllers;

use App\base\Controller;

class SphinxController extends Controller
{
    public function install()
    {
        $aData['page_title'] = 'Sphinx - Установка и Настройка в Ubuntu 16.04';
        $aData['page_keywords'] = 'sphinx, install, установка, settings, параметры, сфинкс, настройка';
        $aData['page_description'] = 'sphinx - установка и настройка';
        view('sphinx.install', $aData);
    }

    public function connect()
    {
        $aData['page_title'] = 'Sphinx - Подключение';
        $aData['page_keywords'] = 'sphinx, connect, terminal, подключение, сфинкс';
        $aData['page_description'] = 'sphinx - подключение и запуск';
        view('sphinx.connect', $aData);
    }

    public function indexes()
    {
        $aData['page_title'] = 'Sphinx - Индексы';
        $aData['page_keywords'] = 'sphinx, indexes, indexer, индексация, сфинкс, индекс';
        $aData['page_description'] = 'sphinx - индексация данных';
        view('sphinx.indexes', $aData);
    }

    public function attributes()
    {
        $aData['page_title'] = 'Sphinx - Аттрибуты';
        $aData['page_keywords'] = 'sphinx, attributes, settings, параметры, сфинкс, настройка';
        $aData['page_description'] = 'sphinx - аттрибуты и параметры';
        view('sphinx.attributes', $aData);
    }
}