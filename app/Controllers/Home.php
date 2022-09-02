<?php

namespace App\Controllers;

class Home extends BaseController
{

    function __construct()
    {

        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
            die;
        }
        switch (session()->get('role')) {
            case 2:
                echo 'role 2';
                break;

            default:
                # code...
                break;
        }
    }

    public function index()
    {
        echo 'Home::index';
        die;
        switch (session()->get('role')) {
            case 1:
                return view('admin/dashboard');
                break;

            default:
                echo session()->get('role');
                return redirect()->to('/login');
                break;
        }
    }
    public function customer()
    {
        return view('admin/dashboard');
    }
}
