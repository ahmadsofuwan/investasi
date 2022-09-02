<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function item()
    {
        $data['title'] = 'Item';
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
        $chekItem = $this->getData('item', 'name', array('name' => $_POST['name']));
        if (count($chekItem) <> 0) {
            $err =  'Nama Item Telah digunakan';
            return redirect()->back()->withInput()->with('error', $err);
            die;
        }
        $data = array(
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'expired' => $_POST['expired'],
            'profit' => $_POST['profit'],
            'create_at' => session()->get('id'),
            'date_at' => strtotime('now'),
        );
        $this->insert('item', $data);
        return redirect()->to('admin/itemList');
    }
}
