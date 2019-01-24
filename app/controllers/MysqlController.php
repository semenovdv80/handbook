<?php

namespace App\controllers;

use App\base\Controller;
use App\models\Article;
use Essential\Http\Request;

class MysqlController extends Controller
{
    /**
     * Index page
     *
     */
    public function index(Request $request)
    {
        $articles = Article::list($request, Article::$sections['MySQL'])->get();
        view('mysql.index', [
            'page_title' => 'Установка MySQL 5.6 в Ubuntu 16.04',
            'page_keywords' => 'mysql, sql, install, ubuntu, установка, settings, параметры',
            'page_description' => 'mysql - установка и настройка',
            'articles' => $articles
        ]);
    }

    public function install()
    {
        $aData['page_title'] = 'Установка MySQL 5.6 в Ubuntu 16.04';
        $aData['page_keywords'] = 'mysql, sql, install, ubuntu, установка, settings, параметры';
        $aData['page_description'] = 'mysql - установка и настройка';
        view('mysql.install', $aData);
    }

    public function config()
    {
        $aData['page_title'] = 'MySQL конфигурация. Файл my.cnf';
        $aData['page_keywords'] = 'mysql, sql, my.cnf, settings, config, how';
        $aData['page_description'] = 'my.cnf - настройка, сервер не видит my.cnf';
        view('mysql.config', $aData);
    }

    public function backup()
    {
        $aData['page_title'] = 'MySQL бэкап данных';
        $aData['page_keywords'] = 'mysql, sql, mysqldump, backup, бэкап, бекап';
        $aData['page_description'] = 'mysqldump - backup бэкап данных';
        view('mysql.backup', $aData);
    }

    public function import()
    {
        $aData['page_title'] = 'MySQL импорт в базу, импорт на удаленный сервер';
        $aData['page_keywords'] = 'mysql, mysqldump, импорт, dump, дамп, jobs, bg, fg, backup, бэкап, import, remote, terminal';
        $aData['page_description'] = 'mysql - импорт в базу из бэкапа, import to base, импорт на удаленный сервер';
        view('mysql.import', $aData);
    }

    public function fulltext()
    {
        $aData['page_title'] = 'MySQL полнотекстовый поиск';
        $aData['page_keywords'] = 'mysql, sql, full-text, search, полнотекстовый, поиск';
        $aData['page_description'] = 'полнотекстовый поиск, full-text search, меньше четырех символов, less 4 characters';
        view('mysql.fulltext', $aData);
    }

    public function logs()
    {
        $aData['page_title'] = 'Логи MySQL';
        $aData['page_keywords'] = 'mysql, logs, лог, error_log, log_error, general_log_file, slow_query_log_file';
        $aData['page_description'] = 'логи mysql, лог ошибок, лог медленных запросов, логирование сервера, logs mysql';
        view('mysql.logs', $aData);
    }

    public function normalization()
    {
        $aData['page_title'] = 'Нормализация базы данных MySQL';
        $aData['page_keywords'] = 'mysql, normalization, 1NF, 2NF, 1НФ, 2НФ, нормализация, избыточность, оптимизация, отношения';
        $aData['page_description'] = 'нормализация базы данных MySQL, нормализация отношений, normalization mysql, нормальное состояние, первая нормальная форма, вторая нормальная форма';
        view('mysql.normalization', $aData);
    }

    public function errors()
    {
        $aData['page_title'] = 'Ошибки MySQL';
        $aData['page_keywords'] = 'mysql, error, errors, ошибки, ошибка';
        $aData['page_description'] = 'ошибки MySQL, errors MySQL, ошибка MySQL, error MySQL';
        view('mysql.errors', $aData);
    }

    public function error_mysqldsock()
    {
        $aData['page_title'] = "ERROR 2002 (HY000): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock'";
        $aData['page_keywords'] = 'mysql, mysqld, error, errors, socket, my.cnf, 2002, ошибки, ошибка, HY000, mysqld.sock';
        $aData['page_description'] = "ERROR 2002 (HY000): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock', ошибки MySQL, errors MySQL, ошибка MySQL, error MySQL";
        view('mysql.errors.mysqldsock', $aData);
    }

    public function error_worldwritable()
    {
        $aData['page_title'] = "Warning: World-writable config file '/etc/mysql/my.cnf' is ignored";
        $aData['page_keywords'] = 'mysql, error, errors, World-writable, my.cnf, ignored, ошибки, ошибка';
        $aData['page_description'] = "Warning: World-writable config file '/etc/mysql/my.cnf' is ignored, ошибки MySQL, errors MySQL, ошибка MySQL, error MySQL";
        view('mysql.errors.worldwritable', $aData);
    }
}