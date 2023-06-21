<?php

namespace App\Controllers;

use App\Models\Model_kategori;

class Kategori extends BaseController
{

    public function __construct()
    {
        $this->Model_kategori = new Model_kategori();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => 'Warga',
            'kategori' => $this->Model_kategori->all_data(),
            'isi'    => 'v_kategori'
        );
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        $data = array(
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'nama_orang' => $this->request->getPost('nama_orang'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat' => $this->request->getPost('alamat'),
            'no_rumah' => $this->request->getPost('no_rumah'),
        );

        $this->Model_kategori->add($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Tambahkan !!!');
        return redirect()->to(base_url('kategori'));
    }

    public function edit($id_kategori)
    {
        $data = array(
            'id_kategori' => $id_kategori,
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'nama_orang' => $this->request->getPost('nama_orang'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat' => $this->request->getPost('alamat'),
            'no_rumah' => $this->request->getPost('no_rumah'),
        );
        $this->Model_kategori->edit($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Update !!!');
        return redirect()->to(base_url('kategori'));
    }

    public function delete($id_kategori)
    {
        $data = array(
            'id_kategori' => $id_kategori,
        );
        $this->Model_kategori->delete_data($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus !!!');
        return redirect()->to(base_url('kategori'));
    }
    //--------------------------------------------------------------------

}
