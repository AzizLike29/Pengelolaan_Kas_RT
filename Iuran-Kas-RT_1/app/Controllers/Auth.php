<?php

namespace App\Controllers;

use App\Models\Model_auth;

class Auth extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->Model_auth = new Model_auth();
        //Do your magic here
    }

    public function index()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('v_login', $data);
    }

    public function login()
    {
        if ($this->validate([
            'email' => [
                'label'  => 'E-Mail',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'password' => [
                'label'  => 'Password',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ]
        ])) {
            //jika valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek = $this->Model_auth->login($email, $password);
            if ($cek) {
                //jika datanya cocok
                session()->set('log', true);
                session()->set('id_user', $cek['id_user']);
                session()->set('nama_user', $cek['nama_user']);
                session()->set('email', $cek['email']);
                session()->set('level', $cek['level']);
                session()->set('foto', $cek['foto']);
                session()->set('id_dep', $cek['id_dep']);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('pesan', 'Login Gagal !!!, Username Atau Password Salah !!!');
                return redirect()->to(base_url('auth/index'));
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/index'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('nama_user');
        session()->remove('email');
        session()->remove('level');
        session()->remove('foto');

        session()->setFlashdata('pesan', 'Anda Telah Logout !!!');
        return redirect()->to(base_url('auth'));
    }
    //--------------------------------------------------------------------

}
