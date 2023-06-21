<?= $this->include('template/admin_header'); ?>

<form method="get" class="form-search">
    <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari data">
    <input type="submit" value="Cari" class="btn btn-primary">
</form>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Keterangan</th>
            <th>Tanggal</th>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Jumlah</th>
            <th>ID Warga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($iuran) : foreach ($iuran as $row) : ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['keterangan']; ?></td>
                    <td><?= $row['tanggal']; ?></td>
                    <td><?= $row['bulan']; ?></td>
                    <td><?= $row['tahun']; ?></td>
                    <td><?= $row['jumlah']; ?></td>
                    <td><?= $row['warga_id']; ?></td>
                    <td>
                        <a class="btn btn-warning" href="<?= base_url('/admin/iuran/edit/' . $row['id']); ?>">Ubah</a>
                        <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/iuran/delete/' . $row['id']); ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach;
        else : ?>
            <tr>
                <td colspan="8">Belum ada data.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $pager->only(['q'])->links(); ?>

<?= $this->include('template/admin_footer'); ?>