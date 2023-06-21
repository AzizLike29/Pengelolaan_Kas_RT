<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\LaporanModel;
 
class Laporan extends BaseController
{
    public function index()
    {
        $title = 'Laporan Warga';
        $model = new LaporanModel();
        $iuran = $model->getLaporan();
        return view('laporan/laporan.php', compact('iuran', 'title'));
    }

    public function admin_index()
    {
        $title = 'Laporan Warga';
        $model = new LaporanModel();
        $iuran = $model->getLaporan();
        return view('laporan/admin_laporan.php', compact('iuran', 'title'));
    }
}