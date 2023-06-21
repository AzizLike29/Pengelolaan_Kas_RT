<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<div class="note">
    <h3>Sistem Tambah Iuran</h3>
    <ul class="list">
        <li>Mengakses halaman tambah iuran</li>
        <li>Mengisi beberapa input field, seperti :</li>
        <p>keterangan, tanggal, bulan, tahun, jumlah, dan ID Warga</p>
        <li>Pastikan isi dengan benar </li>
        <li>Menambahkan iuran mengeklik tombol "Tambah"</li>
        <li>Membatalkan aksi mengeklik tombol "Batal"</li>
    </ul>
</div>
<form action="" method="post">
    <p><input type="text" name="keterangan" placeholder="Keterangan"></p>
    <p><input type="text" id="date" name="tanggal" placeholder="Tanggal"></p>
    <p><input type="text" name="bulan" placeholder="Bulan"></p>
    <p><input type="text" name="tahun" placeholder="Tahun"></p>
    <p><input type="text" name="jumlah" placeholder="Jumlah"></p>
    <p><input type="text" name="warga_id" placeholder="ID Warga"></p>
    <p><input type="submit" value="Tambah" class="btn btn-large"></p>
    <a href="<?= base_url('/admin/iuran'); ?>" class="btn btn-back">Batal</a>
</form>

<?= $this->include('template/admin_footer'); ?>