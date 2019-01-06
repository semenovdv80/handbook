<?php

namespace App\controllers;

use App\base\Controller;
use App\models\Article;
use Essential\Http\Request;

class PhpController extends Controller
{
    /**
     * Index page
     *
     */
    public function index(Request $request)
    {
        $articles = Article::list($request, Article::$sections['PHP'])->get();
        view('php.index', [
            'page_title' => 'PHP - Установка и Настройка в Ubuntu 16.04',
            'page_keywords' => 'php, php5.6, пхп, пхп5.6',
            'page_description' => 'php5.6 - установка и настройка Ubuntu 16.04',
            'articles' => $articles
        ]);
    }

    /**
     *
     */
    public function install()
    {
        $aData['page_title'] = 'PHP - Установка и Настройка в Ubuntu 16.04';
        $aData['page_keywords'] = 'php, php5.6, пхп, пхп5.6';
        $aData['page_description'] = 'php5.6 - установка и настройка Ubuntu 16.04';
        view('php.install', $aData);
    }

    /**
     *
     */
    public function pear()
    {
        $aData['page_title'] = 'PEAR - Установка и Настройка в Ubuntu 16.04';
        $aData['page_keywords'] = 'pear, pecl';
        $aData['page_description'] = 'pear - установка и настройка';
        view('php.datatypes', $aData);
    }
}