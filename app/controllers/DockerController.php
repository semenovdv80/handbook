<?php

namespace App\controllers;

use App\base\Controller;

class DockerController extends Controller
{
    public function install()
    {
        $aData['page_title'] = 'Docker - Установка и Настройка в Ubuntu 16.04';
        $aData['page_keywords'] = 'docker, ubuntu, install, установка';
        $aData['page_description'] = 'docker - установка и настройка, docker compose install and settings';
        view('docker.install', $aData);
    }

    public function commands()
    {
        $aData['page_title'] = 'Docker - команды и использование';
        $aData['page_keywords'] = 'docker, ubuntu, commands, комманды';
        $aData['page_description'] = 'docker - команды и использование';
        view('docker.commands', $aData);
    }

    public function dockcompose()
    {
        $aData['page_title'] = 'Docker Compose - Установка и Настройка в Ubuntu 16.04';
        $aData['page_keywords'] = 'docker, compose, ubuntu, install, установка';
        $aData['page_description'] = 'docker  - установка и настройка, docker compose install and settings';
        view('docker.dockcompose', $aData);
    }

    public function ap2ph5my5()
    {
        $aData['page_title'] = 'Docker Compose - Конфигурация Apache2 PHP5.6 MySQL5.6';
        $aData['page_keywords'] = 'docker, compose, ubuntu, apache2, php5, mysql, install, установка';
        $aData['page_description'] = 'docker compose - config apache php mysql, install and settings';
        view('docker.config.ap2ph5my5', $aData);
    }
}