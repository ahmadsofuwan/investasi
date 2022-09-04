<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Customer extends BaseController
{
    public function __construct()
    {
        $this->saldo = $this->getData('account', 'saldo', array('pkey' => session()->get('id')))[0]['saldo'];
        session()->set(['saldo' => $this->saldo]);
    }

    public function index()
    {
        $item =  $this->getData('item');
        $data = [
            'title' => 'Dashboard',
            'name' => 'ahmad sofuwan',
            'item' => $item,
        ];
        return view('customer/dashboard', $data);
    }
    public function itemList()
    {
        $select = 'customer_item.*,
        item.name as name,
        item.profit as profit,
        item.price as price,
        item.expired as expired,
        ';
        $join = array(
            array('item', 'item.pkey=customer_item.itemkey', 'left'),
        );
        $data['item'] = $this->getData('customer_item', $select, array('refkey' => session()->get('id')), '', $join);
        $data['title'] = 'Item';
        return view('customer/item', $data);
    }

    public function itemInput()
    {
        $data = array(
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'expired' => $_POST['expired'],
            'profit' => $_POST['profit'],
            'create_at' => session()->get('id'),
            'date_at' => strtotime('now'),
        );
        switch ($_POST['action']) {
            case 'insert':
                $chekItem = $this->getData('item', 'name', array('name' => $_POST['name']));
                if (count($chekItem) <> 0) {
                    $err =  'Nama Item Telah digunakan';
                    return redirect()->back()->withInput()->with('error', $err);
                    die;
                }
                $this->insert('item', $data);
                break;
            case 'update':
                $chekItem = $this->getData('item', 'name', array('name' => $_POST['name']));
                if (count($chekItem) > 1) {
                    $err =  'Nama Item Telah digunakan';
                    return redirect()->back()->withInput()->with('error', $err);
                    die;
                }
                unset($data['date_at']);
                $this->update('item', $data, array('pkey' => $_POST['pkey']));
                break;
        }
        return redirect()->to('admin/itemList');
    }

    public function widrawList()
    {
        $join = array(
            array('account', 'account.pkey=widraw.userkey', 'left')
        );
        $data['title'] = 'Widraw';
        $data['dataList'] = $this->getData('widraw', 'widraw.*,account.name as accountname,account.username as username', array('status' => 0), '', $join);
        return view('admin/widrawList', $data);
    }
}
