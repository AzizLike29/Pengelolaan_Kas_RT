<?php

namespace App\Controllers;

use App\Models\IuranModel;

class iuran extends BaseController
{
    public function index()
    {
        $title = 'Iuran Warga';
        $model = new IuranModel();
        $iuran = $model->findAll();
        return view('iuran/index', compact('iuran', 'title'));
    }

    public function admin_index()
    {
        $title  = 'Iuran Warga';
        $q      = $this->request->getVar('q') ?? '';
        $model  = new IuranModel();
        // $iuran = $model->findAll();
        $data   = [
            'title'     => $title,
            'q'         => $q,
            'iuran'     => $model->like('keterangan', $q)->paginate(10), #data dibatasi 10 record perhalaman
            'pager'     => $model->pager,
        ];
        return view('iuran/admin_index', $data);
        // return view('iuran/admin_index', compact('iuran', 'title'));
    }

    public function add()
    {
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['keterangan' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $iuran = new IuranModel();
            $iuran->insert([
                'keterangan' => $this->request->getPost('keterangan'),
                'tanggal' => $this->request->getPost('tanggal'),
                'bulan' => $this->request->getPost('bulan'),
                'tahun' => $this->request->getPost('tahun'),
                'jumlah' => $this->request->getPost('jumlah'),
                'warga_id' => $this->request->getPost('warga_id'),
            ]);
            return redirect('admin/iuran');
        }
        $title = "Tambah Iuran";
        return view('iuran/form_add', compact('title'));
    }

    public function edit($id)
    {
        $iuran = new IuranModel();
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['keterangan' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $iuran->update($id, [
                'keterangan' => $this->request->getPost('keterangan'),
                'tanggal' => $this->request->getPost('tanggal'),
                'bulan' => $this->request->getPost('bulan'),
                'tahun' => $this->request->getPost('tahun'),
                'jumlah' => $this->request->getPost('jumlah'),
                'warga' => $this->request->getPost('warga_id')
            ]);
            return redirect('admin/iuran');
        }

        // ambil data lama
        $data = $iuran->where('id', $id)->first();
        $title = "Edit Data Transaksi Iuran";
        return view('iuran/form_edit', compact('title', 'data'));
    }

    public function delete($id)
    {
        $iuran = new IuranModel();
        $iuran->delete($id);
        return redirect('admin/iuran');
    }
}
