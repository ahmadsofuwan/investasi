<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('layout/content');
    }
    public function coba()
    {
        return print_r($this->getData('account', '*', [], 2));
    }
}
