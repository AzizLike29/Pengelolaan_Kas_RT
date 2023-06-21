<?php

namespace App\Controllers;

use App\Models\RtModel;

class Data_Warga extends BaseController
{
    public function index()
    {
        $title = 'Data Warga';
        $model = new RtModel();
        $rt = $model->findAll();
        return view('rt/index', compact('rt', 'title'));
    }

    public function admin_index()
    {
        $title = 'Data Warga';
        $model = new RtModel();
        $rt = $model->findAll();
        return view('rt/admin_index', compact('rt', 'title'));
    }

    public function add()
    {
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['nik' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $rt = new RtModel();
            $rt->insert([
                'nik' => $this->request->getPost('nik'),
                'nama' => $this->request->getPost('nama'),
                'kelamin' => $this->request->getPost('kelamin'),
                'alamat' => $this->request->getPost('alamat'),
                'no_rumah' => $this->request->getPost('no_rumah'),
                'status' => $this->request->getPost('status'),
            ]);
            return redirect('admin/data_warga');
        }
        $title = "Tambah Data Warga";
        return view('rt/form_add', compact('title'));
    }

    public function edit($id)
    {
        $rt = new RtModel();
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['nik' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $rt->update($id, [
                'nik' => $this->request->getPost('nik'),
                'nama' => $this->request->getPost('nama'),
                'kelamin' => $this->request->getPost('kelamin'),
                'alamat' => $this->request->getPost('alamat'),
                'no_rumah' => $this->request->getPost('no_rumah'),
            ]);
            return redirect('admin/data_warga');
        }

        // ambil data lama
        $data = $rt->where('warga_id', $id)->first();
        $title = "Edit Data Warga";
        return view('rt/form_edit', compact('title', 'data'));
    }

    public function delete($id)
    {
        $rt = new RtModel();
        $rt->delete($id);
        return redirect('admin/data_warga');
    }
}
