<?= $this->include('template/admin_header'); ?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Warga</th>
            <th>NIK</th>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Jumlah Kas</th>
        </tr>
    </thead>
    <tbody>
    <?php if($iuran): foreach($iuran as $row): ?>
    <tr>
        <td><?= $row['warga_id']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['nik']; ?></td>
        <td><?= $row['bulan']; ?></td>
        <td><?= $row['tahun']; ?></td>
        <td><?= $row['jumlah']; ?></td>
    </tr>
    <?php endforeach; else: ?>
    <tr>
        <td colspan="6">Belum ada data.</td>
    </tr>
    <?php endif; ?>
    </tbody>
</table>

<?= $this->include('template/admin_footer'); ?>