<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\AuthModel;

class Auth extends BaseController
{
    public function index()
    {
        $data['title'] = 'APLIKASI PENGARSIPAN DIGITAL | Login';
        return view('auth/index', $data);
    }
    public function __construct()
    {
        $this->userModel = new UsersModel();
        $this->authModel = new AuthModel();
    }
    public function login()
    {
        $table = 'users';
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $row = $this->authModel->get_data_login($email, $table);
        if ($row == NULL) {
            session()->setFlashdata('gagal', 'Email Anda Salah!!');
            return redirect()->to('/auth/index');
        }
        if (password_verify($password, $row->password)) {
            $data = array(
                'log' => TRUE,
                'id' => $row->id,
                'email' => $row->email,
                'id_tingkatan' => $row->id_tingkatan
            );
            session()->set($data);
            session()->setFlashdata('pesan', 'Selamat Datang');
            return redirect()->to('/backend');
        }
        session()->setFlashdata('gagal', 'Password Anda Salah');
        return redirect()->to('/auth/index');
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        session()->setFlashdata('pesan', 'Berhasil Logout');
        return redirect()->to('/backend');
    }
}
