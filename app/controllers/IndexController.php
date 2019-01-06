<?php

namespace App\controllers;

use App\base\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $aData['page_title'] = 'ITsGOOD';
        $aData['page_keywords'] = 'it, php, mysql, js, jquery, html, css, bootstrap, laravel, linux, apache, ubuntu, git, sphinx, framework';
        $aData['page_description'] = 'it технологии, как сделать правильно, информация по настройке и конфигурации сервера, код php, решения на фреймворке, запросы mysql';
        view('index.index', $aData);
    }


    public function cookies($var1, $var2)
    {
        $data['var1'] = $var1;
        $data['var2'] = $var2;

        view('index', $data);
    }

    public function add($id, $var)
    {
        $data['myvar'] = $id;
        $data['second'] = $var;

        view('index', $data);
    }

    public function sphinx()
    {
        view('sphinx.index');
    }
}