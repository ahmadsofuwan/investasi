<?php

namespace App\Controllers;

class Ajax extends BaseController
{
    public function index()
    {
        switch ($_POST['action']) {
            case 'deleteItem':
                # code...
                break;
            default:
                echo json_encode(['status' => 'no Action']);
                break;
        }
    }
}
