<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<div class="note" style="margin-right: 50px; line-height: 45px;">
    <h3>Sistem Tambah Data Warga</h3>
    <ul class="list">
        <li>Mengakses halaman tambah data warga</li>
        <li>Mengisi beberapa input field, seperti :</li>
        <p>NIK, Nama, Jenis Kelamin, Alamat, Nomor Rumah</p>
        <li>Pastikan isi dengan benar </li>
        <li>Menambahkan iuran mengeklik tombol "Tambah"</li>
        <li>Membatalkan aksi mengeklik tombol "Batal"</li>
    </ul>
</div>
<form action="" method="post">
    <p><input type="text" name="nik" placeholder="NIK"></p>
    <p><input type="text" name="nama" placeholder="Nama"></p>
    <p><input type="text" name="kelamin" placeholder="Jenis Kelamin"></p>
    <p><textarea name="alamat" cols="10" rows="10" placeholder="Alamat"></textarea></p>
    <p><input type="text" name="no_rumah" placeholder="Nomor Rumah"></p>
    <p><input type="submit" value="Tambah" class="btn btn-large"></p>
    <a href="<?= base_url('/admin/data_warga'); ?>" class="btn btn-back">Batal</a>
</form>

<?= $this->include('template/admin_footer'); ?>