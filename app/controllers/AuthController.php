<?php

namespace App\controllers;

use App\base\Controller;
use App\models\User;

class AuthController extends Controller
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            //$passwordh = password_hash($_POST['password'], PASSWORD_DEFAULT);
            if (User::auth($email, $password))
                header( 'Location: /');
        }
        view('auth.login');
    }

}