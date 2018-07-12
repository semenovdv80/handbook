<?php

namespace App\controllers;

use App\base\Controller;

class LaravelController extends Controller
{
    public function install()
    {
        $aData['page_title'] = 'Laravel Ubuntu 16.04';
        $aData['page_keywords'] = 'laravel, ubuntu';
        $aData['page_description'] = 'laravel - установка и настройка';
        view('laravel.install', $aData);
    }

    public function errors()
    {
        $aData['page_title'] = 'Ошибки Laravel';
        $aData['page_keywords'] = 'laravel, error, errors, ошибки, ошибка';
        $aData['page_description'] = 'ошибки Laravel, errors Laravel, ошибка Laravel, error Laravel';
        view('laravel.errors', $aData);
    }

    public function error_smtpcertfail()
    {
        $aData['page_title'] = "SSL routines certificate verify failed. Как отключить SSL TLS шифрование на Laravel для SMTP";
        $aData['page_keywords'] = 'certificate, verify, error, errors, failed, ssl, tls, disable, encryption, шифрование, laravel';
        $aData['page_description'] = "SSL routines certificate verify failed, Как отключить SSL TLS шифрование на Laravel для SMTP";
        view('laravel.errors.smtpcertfail', $aData);
    }
}