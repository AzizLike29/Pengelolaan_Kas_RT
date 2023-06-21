<?php

namespace App\Controllers;

use App\Models\Model_arsip;
use App\Models\Model_dep;

class Arsip extends BaseController
{

    public function __construct()
    {
        $this->Model_arsip = new Model_arsip();
        $this->Model_dep = new Model_dep();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => 'Document',
            'arsip' => $this->Model_arsip->all_data(),
            'isi'    => 'arsip/v_index'
        );
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        $data = array(
            'title' => 'Add Document',
            'dep' => $this->Model_dep->all_data(),
            'isi'    => 'arsip/v_add'
        );
        return view('layout/v_wrapper', $data);
    }
    //--------------------------------------------------------------------

    public function insert()
    {
        if ($this->validate([
            'no_arsip' => [
                'label'  => 'No Arsip',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'id_dep' => [
                'label'  => 'Nama Warga',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!',
                ]
            ],
            'deskripsi' => [
                'label'  => 'Deskripsi',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!',
                ]
            ],
        ])) {
            //mengambil file foto yg akan di upload di form
            $file_arsip = $this->request->getFile('file_arsip');
            //merandom nama file foto
            $nama_file = $file_arsip->getRandomName();
            //mengambil ukuran file
            $ukuran_file = $file_arsip->getSize('kb');
            //jika valid
            $data = array(
                'id_dep' => $this->request->getPost('id_dep'),
                'no_arsip' => $this->request->getPost('no_arsip'),
                'keterangan' => $this->request->getPost('keterangan'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'tgl_upload' => date('Y-m-d'),
                'tgl_update' => date('Y-m-d'),
                'id_kategori' => session()->get('id_kategori'),
                'id_user' => session()->get('id_user'),
                'file_arsip' => $nama_file,
                'ukuran_file' => $ukuran_file,
            );

            $file_arsip->move('file_arsip', $nama_file); //directori upload file
            $this->Model_arsip->add($data);
            session()->setFlashdata('pesan', 'Data Berhasil Di Tambahkan !!!');
            return redirect()->to(base_url('arsip'));
        } else {
            //jika Tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('arsip/add'));
        }
    }

    //edit
    public function edit($id_arsip)
    {
        $data = array(
            'title' => 'Edit Document',
            'dep' => $this->Model_dep->all_data(),
            'arsip'    => $this->Model_arsip->detail_data($id_arsip),
            'isi'    => 'arsip/v_edit'
        );
        return view('layout/v_wrapper', $data);
    }

    public function update($id_arsip)
    {
        if ($this->validate([
            'no_arsip' => [
                'label'  => 'No Arsip',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'id_dep' => [
                'label'  => 'Nama Warga',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!',
                ]
            ],
            'deskripsi' => [
                'label'  => 'Deskripsi',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!',
                ]
            ],
        ])) {
            //mengambil file foto yg akan di upload di form
            $file_arsip = $this->request->getFile('file_arsip');
            if ($file_arsip->getError() == 4) {
                //jika file tidak di ganti
                $data = array(
                    'id_arsip'  => $id_arsip,
                    'id_dep' => $this->request->getPost('id_dep'),
                    'no_arsip' => $this->request->getPost('no_arsip'),
                    'keterangan' => $this->request->getPost('keterangan'),
                    'deskripsi' => $this->request->getPost('deskripsi'),
                    'tgl_update' => date('Y-m-d'),
                    'id_kategori' => session()->get('id_kategori'),
                    'id_user' => session()->get('id_user'),
                );
                $this->Model_arsip->edit($data);
            } else {
                //jika file di ganti
                //menghapus foto lama
                $arsip = $this->Model_arsip->detail_data($id_arsip);
                if ($arsip['file_arsip'] != "") {
                    unlink('file_arsip/' . $arsip['file_arsip']);
                }
                //merandom nama file foto
                $nama_file = $file_arsip->getRandomName();
                //mengambil ukuran file
                $ukuran_file = $file_arsip->getSize('kb');
                //jika valid
                $data = array(
                    'id_arsip'  => $id_arsip,
                    'id_dep' => $this->request->getPost('id_dep'),
                    'no_arsip' => $this->request->getPost('no_arsip'),
                    'keterangan' => $this->request->getPost('keterangan'),
                    'deskripsi' => $this->request->getPost('deskripsi'),
                    'tgl_update' => date('Y-m-d'),
                    'id_kategori' => session()->get('id_kategori'),
                    'id_user' => session()->get('id_user'),
                    'file_arsip' => $nama_file,
                    'ukuran_file' => $ukuran_file,
                );
                $file_arsip->move('file_arsip', $nama_file); //directori upload file
                $this->Model_arsip->edit($data);
            }
            session()->setFlashdata('pesan', 'Data Berhasil Di Tambahkan !!!');
            return redirect()->to(base_url('arsip'));
        } else {
            //jika Tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('arsip/edit' . $id_arsip));
        }
    }

    public function delete($id_arsip)
    {
        //menghapus foto lama
        $arsip = $this->Model_arsip->detail_data($id_arsip);
        if ($arsip['file_arsip'] != "") {
            unlink('file_arsip/' . $arsip['file_arsip']);
        }

        $data = array(
            'id_arsip' => $id_arsip,
        );
        $this->Model_arsip->delete_data($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus !!!');
        return redirect()->to(base_url('arsip'));
    }

    public function viewpdf($id_arsip)
    {
        $data = array(
            'title' => 'View Document',
            'arsip' => $this->Model_arsip->detail_data($id_arsip),
            'isi'    => 'arsip/v_viewpdf'
        );
        return view('layout/v_wrapper', $data);
    }
}
