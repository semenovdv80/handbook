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
}