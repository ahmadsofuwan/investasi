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
    }

    public function index()
    {
        switch (session()->get('role')) {
            case 1:
                $customer = $this->getData('account', 'pkey', array('role' => 2));
                $widraw = $this->getData('widraw', 'pkey', array('status' => 0));
                $item = $this->getData('item', 'pkey');
                $data =  [
                    'title' => 'Dashboard',
                    'countCustomer' => count($customer),
                    'countWidraw' => count($widraw),
                    'countItem' => count($item),
                ];
                return view('admin/dashboard', $data);
                break;
            case 2:
                $item =  $this->getData('item');

                $data = [
                    'title' => 'Dashboard',
                    'name' => 'ahmad sofuwan',
                    'item' => $item,
                ];
                return view('customer/dashboard', $data);
                break;
            default:
                return redirect()->to('/login');
                break;
        }
    }
}
