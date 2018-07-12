<?php

namespace App\controllers;

use App\base\Controller;

class PhpController extends Controller
{
    public function install()
    {
        $aData['page_title'] = 'PHP - Установка и Настройка в Ubuntu 16.04';
        $aData['page_keywords'] = 'php, php5.6, пхп, пхп5.6';
        $aData['page_description'] = 'php5.6 - установка и настройка Ubuntu 16.04';
        view('php.install', $aData);
    }

    public function pear()
    {
        $aData['page_title'] = 'PEAR - Установка и Настройка в Ubuntu 16.04';
        $aData['page_keywords'] = 'pear, pecl';
        $aData['page_description'] = 'pear - установка и настройка';
        view('php.pear', $aData);
    }



    public function index($section = 'index')
    {
        view('php.'.$section, ['title'=>$section]);
    }
}