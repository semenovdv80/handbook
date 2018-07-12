<?php

namespace App\controllers;

use App\base\Controller;

class RabbitController extends Controller
{
    public function install()
    {
        $aData['page_title'] = 'RabbitMQ - Установка и Настройка в Ubuntu 16.04';
        $aData['page_keywords'] = 'rabbitmq, ubuntu, 16.04, очереди, установка, настройка, install, settings';
        $aData['page_description'] = 'rabbitmq ubuntu - установка и настройка, rabbitmq ubuntu install and settings ubuntu';
        view('rabbit.install', $aData);
    }

    public function connect()
    {
        $aData['page_title'] = 'RabbitMQ - подключение';
        $aData['page_keywords'] = 'rabbitmq, ubuntu, connect, amqp, подключение';
        $aData['page_description'] = 'rabbitmq - подключение ubuntu, rabbitmq - connection ubuntu';
        view('rabbit.connect', $aData);
    }
}