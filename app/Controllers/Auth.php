<?php

namespace App\Controllers;

class Auth extends BaseController
{

    public function index()
    {
        redirect(base_url());
    }
    public function login()
    {
        switch (isset($_POST)) {
            case true:
                echo '123';
                break;

            default:
                return view('auth/login');
                break;
        }
    }
}
