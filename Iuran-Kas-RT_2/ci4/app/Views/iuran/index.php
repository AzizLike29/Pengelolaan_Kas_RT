<?= $this->include('template/header'); ?>

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
                </tr>
            <?php endforeach;
        else : ?>
            <tr>
                <td colspan="6">Belum ada data.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->include('template/footer'); ?>