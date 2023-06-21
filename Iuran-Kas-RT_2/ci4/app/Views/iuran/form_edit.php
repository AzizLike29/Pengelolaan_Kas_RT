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
    <p>
        <input type="text" name="keterangan" value="<?= $data['keterangan']; ?>">
    </p>
    <p>
        <input type="text" name="tanggal" value="<?= $data['tanggal']; ?>">
    </p>
    <p>
        <input type="text" name="bulan" value="<?= $data['bulan']; ?>">
    </p>
    <p>
        <input type="text" name="tahun" value="<?= $data['tahun']; ?>">
    </p>
    <p>
        <input type="text" name="jumlah" value="<?= $data['jumlah']; ?>">
    </p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>

<?= $this->include('template/admin_footer'); ?>