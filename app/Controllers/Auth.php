<?php

namespace App\Controllers;

class Auth extends BaseController
{

    public function index()
    {
        redirect(base_url());
    }
    public function login()
    {
        return view('auth/login');
    }

    public function loginAction()
    {
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $data = $this->getData('account', 'pkey,role,name,saldo', array('username' => $username, 'password' => $password));
        if (count($data) <> 1) {
            $err =  'Username atau password salah';
            return redirect()->back()->withInput()->with('error', $err);
            die;
        }
        session()->set([
            'id' => $data[0]['pkey'],
            'name' => $data[0]['name'],
            'logged_in' => TRUE,
            'role' => $data[0]['role'],
            'saldo' => $data[0]['saldo'],
        ]);
        switch ($data[0]['role']) {
            case 1:
                return redirect()->to('/admin');
                break;
            case 2:
                return redirect()->to('/dashboard');
                break;
            default:
                return redirect()->to('/login');
                # code...
                break;
        }
    }

    public function signUp()
    {
        return view('auth/signUp');
    }
    public function signUpAction()
    {
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $wa = $_POST['wa'];
        $reff = $_POST['reff'];
        $password = sha1($_POST['password']);
        // opsional
        $rekening = isset($_POST['rek']) ? $_POST['rek'] : '';
        $bankName = isset($_POST['bankName']) ? $_POST['bankName'] : '';
        $bankAccout = isset($_POST['bankAccout']) ? $_POST['bankAccout'] : '';


        $chekReff = $this->getData('account', 'pkey', array('username' => $reff));
        if (count($chekReff) == 0) {
            $err =  'refferal tidak di temukan!!!';
            return redirect()->back()->withInput()->with('error', $err);
            die;
        }
        $chekUsername = $this->getData('account', 'pkey', array('username' => $username));
        if (count($chekUsername) <> 0) {
            $err =  'Username ' . $username . ' sudah di gunakan';
            return redirect()->back()->withInput()->with('error', $err);
            die;
        }
        if (empty($username) || empty($name) || empty($email) || empty($wa) || empty($reff) || empty($_POST['password'])) {
            $err =  'Mohon Isi Semua data Selain Optional';
            return redirect()->back()->withInput()->with('error', $err);
            die;
        }


        $data = array(
            'username' => $username,
            'password' => $password,
            'name' => $name,
            'phone' => $wa,
            'date_at' => strtotime('now'),
            //opasional
            'rekening' => $rekening,
            'bankname' => $bankName,
            'bankaccount' => $bankAccout,
        );
        $id =  $this->insert('account', $data);
        session()->set([
            'id' => $id,
            'name' => $name,
            'logged_in' => TRUE,
            'role' => 2,
        ]);
        return redirect()->route('/');
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
