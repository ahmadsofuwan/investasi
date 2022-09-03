<?php

namespace App\Controllers;

class Ajax extends BaseController
{
    public function index()
    {
        switch ($_POST['action']) {
            case 'deleteItem':
                $this->delete('item', array('pkey' => $_POST['pkey']));
                echo json_encode(['status' => 'success']);
                break;
            default:
                echo json_encode(['status' => 'no Action']);
                break;
        }
    }
}
