<?php

namespace App\Controllers;

class Admin extends BaseController
{

    public function index()
    {
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
    }

    public function item($id = '')
    {
        $data['title'] = 'Item';
        if (!empty($id)) {
            $data['data'] = $this->getData('item', '*', array('pkey' => $id))[0];
            $_POST['name'] = 'testing';
        }
        return view('admin/item', $data);
    }

    public function itemList()
    {
        $join = array(
            array('account', 'account.pkey=item.create_at', 'left')
        );
        $data['title'] = 'Item';
        $data['dataList'] = $this->getData('item', 'item.*,account.name as accountname', array(), '', $join);
        return view('admin/itemList', $data);
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
