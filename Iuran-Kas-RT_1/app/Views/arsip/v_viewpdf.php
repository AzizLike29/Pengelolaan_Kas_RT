<div class="row">
    <div class="col-sm-12">
        <table class="table table-bordered">
            <tr>
                <th width="100px">No Document</th>
                <th width="30px">:</th>
                <td><?= $arsip['no_arsip'] ?></td>
                <th width="120px">Tanggal Upload</th>
                <th width="30px">:</th>
                <td><?= $arsip['tgl_upload'] ?></td>
            </tr>
            <tr>
                <th>Nama Warga</th>
                <th>:</th>
                <td><?= $arsip['nama_dep'] ?></td>
                <th>Tanggal Update</th>
                <th>:</th>
                <td><?= $arsip['tgl_update'] ?></td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <th>:</th>
                <td><?= $arsip['deskripsi'] ?></td>
                <th>Ukuran File</th>
                <th>:</th>
                <td><?= $arsip['ukuran_file'] ?> Byte</td>
            </tr>
            <tr>
                <th>Keterangan</th>
                <th>:</th>
                <td><?= $arsip['keterangan'] ?></td>
                <th>Admin</th>
                <th>:</th>
                <td><?= $arsip['nama_user'] ?></td>
            </tr>
        </table>
    </div>

    <div class="col-sm-12">
        <iframe src="<?= base_url('file_arsip/' . $arsip['file_arsip']) ?>" style="border:2px solid blue;" height="1000px" width="100%"></iframe>
    </div>

</div>