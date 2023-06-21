<?= $this->include('template/admin_header'); ?>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Kelamin</th>
            <th>Alamat</th>
            <th>Nomor</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($rt) : foreach ($rt as $row) : ?>
                <tr>
                    <td><?= $row['warga_id']; ?></td>
                    <td><?= $row['nik']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['kelamin']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['no_rumah']; ?></td>
                    <td>
                        <a class="btn btn-warning" href="<?= base_url('/admin/data_warga/edit/' . $row['warga_id']); ?>">Ubah</a>
                        <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/data_warga/delete/' . $row['warga_id']); ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach;
        else : ?>
            <tr>
                <td colspan="7">Belum ada data.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->include('template/admin_footer'); ?>