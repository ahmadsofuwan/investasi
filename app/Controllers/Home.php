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
                echo session()->get('logged_in');
                break;

            default:
                # code...
                break;
        }
    }

    public function index()
    {
        switch (session()->get('role')) {
            case 1:
                $data =  [
                    'title' => 'Dashboard'
                ];
                return view('admin/dashboard', $data);
                break;
            case 2:
                return view('customer/dashboard',['title' => 'dash customer']);
                break;
            default:
                return redirect()->to('/login');
                break;
        }
    }
    public function customer()
    {
        return view('admin/dashboard');
    }
}
