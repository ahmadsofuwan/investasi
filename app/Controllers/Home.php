<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }
    public function coba()
    {
        return print_r($this->getData('account', '*', [], 2));
    }
}
