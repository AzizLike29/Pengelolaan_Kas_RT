<div class="row">
    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Data Iuran Kas</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-primary btn-sm btn-flat" data-toggle="modal" data-target="#add">
                        <i class="fa fa-plus"></i> Add</button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Success! - ';
                    echo session()->getFlashdata('pesan');
                    echo '</h4></div>';
                }
                ?>
                <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="80px">No</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Jumlah</th>
                            <th>Keterangan</th>
                            <th>Pengelola</th>
                            <th width="100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($dep as $key => $value) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $value['nama_dep']; ?></td>
                                <td><?= $value['tanggal']; ?></td>
                                <td><?= $value['bulan']; ?></td>
                                <td><?= $value['tahun']; ?></td>
                                <td><?= $value['jumlah']; ?></td>
                                <td><?= $value['keterangan']; ?></td>
                                <td><?= $value['pengelola']; ?></td>
                                <td class="text-center">
                                    <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#edit<?= $value['id_dep']; ?>">Edit</button>
                                    <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_dep']; ?>">Delete</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                </div>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

<!-- /.modal add dep -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Data</h4>
            </div>
            <div class="modal-body">
                <?php
                echo form_open('dep/add')
                ?>

                <div class="form-group">
                    <label>Nama</label>
                    <input name="nama_dep" class="form-control" placeholder="Nama" required>
                </div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <input name="tanggal" Class="form-control" placeholder="Tanggal" type="date" required>
                </div>

                <div class="form-group">
                    <label>Bulan</label>
                    <select name="bulan" class="form-control">
                        <option value="">--Choose Category--</option>
                        <option value="Januari"><span class="right badge badge-primary">JANUARI</span></option>
                        <option value="Februari"><span class="right badge badge-danger">FEBRUARI</span></option>
                        <option value="Maret"><span class="right badge badge-danger">MARET</span></option>
                        <option value="April"><span class="right badge badge-danger">APRIL</span></option>
                        <option value="Mei"><span class="right badge badge-danger">MEI</span></option>
                        <option value="Juni"><span class="right badge badge-danger">JUNI</span></option>
                        <option value="Juli"><span class="right badge badge-danger">JULI</span></option>
                        <option value="Agustus"><span class="right badge badge-danger">AGUSTUS</span></option>
                        <option value="September"><span class="right badge badge-danger">SEPTEMBER</span></option>
                        <option value="Oktober"><span class="right badge badge-danger">OKTOBER</span></option>
                        <option value="November"><span class="right badge badge-danger">NOVEMBER</span></option>
                        <option value="Desember"><span class="right badge badge-danger">DESEMBER</span></option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tahun</label>
                    <select name="tahun" class="form-control">
                        <option value="">--Choose Category--</option>
                        <option value="2023"><span class="right badge badge-primary">2023</span></option>
                        <option value="2022"><span class="right badge badge-danger">2022</span></option>
                        <option value="2021"><span class="right badge badge-danger">2021</span></option>
                        <option value="2020"><span class="right badge badge-danger">2020</span></option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Jumlah</label>
                    <input name="jumlah" class="form-control" placeholder="Jumlah" required>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input name="keterangan" class="form-control" placeholder="Keterangan" required>
                </div>

                <div class="form-group">
                <label>Pengelola</label>
                    <select name="pengelola" class="form-control">
                        <option value="">--Choose Category--</option>
                        <option value="Bendahara 1"><span class="right badge badge-primary">Bendahara 1</span></option>
                        <option value="Bendahara 2"><span class="right badge badge-danger">Bendahara 2</span></option>
                        <option value="Bendahara 3"><span class="right badge badge-danger">Bendahara 3</span></option>
                    </select>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- end modal add dep -->


<!-- /.modal edit dep -->
<?php foreach ($dep as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id_dep']; ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Data</h4>
                </div>
                <div class="modal-body">
                    <?php
                    echo form_open('dep/edit/' . $value['id_dep'])
                    ?>

                <div class="form-group">
                    <label>Nama</label>
                    <input name="nama_dep" class="form-control" placeholder="Nama" required>
                </div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <input name="tanggal" Class="form-control" placeholder="Tanggal" type="date" required>
                </div>

                <div class="form-group">
                    <label>Bulan</label>
                    <select name="bulan" class="form-control">
                        <option value="">--Choose Category--</option>
                        <option value="Januari"><span class="right badge badge-primary">JANUARI</span></option>
                        <option value="Februari"><span class="right badge badge-danger">FEBRUARI</span></option>
                        <option value="Maret"><span class="right badge badge-danger">MARET</span></option>
                        <option value="April"><span class="right badge badge-danger">APRIL</span></option>
                        <option value="Mei"><span class="right badge badge-danger">MEI</span></option>
                        <option value="Juni"><span class="right badge badge-danger">JUNI</span></option>
                        <option value="Juli"><span class="right badge badge-danger">JULI</span></option>
                        <option value="Agustus"><span class="right badge badge-danger">AGUSTUS</span></option>
                        <option value="September"><span class="right badge badge-danger">SEPTEMBER</span></option>
                        <option value="Oktober"><span class="right badge badge-danger">OKTOBER</span></option>
                        <option value="November"><span class="right badge badge-danger">NOVEMBER</span></option>
                        <option value="Desember"><span class="right badge badge-danger">DESEMBER</span></option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tahun</label>
                    <select name="tahun" class="form-control">
                        <option value="">--Choose Category--</option>
                        <option value="2023"><span class="right badge badge-primary">2023</span></option>
                        <option value="2022"><span class="right badge badge-danger">2022</span></option>
                        <option value="2021"><span class="right badge badge-danger">2021</span></option>
                        <option value="2020"><span class="right badge badge-danger">2020</span></option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Jumlah</label>
                    <input name="jumlah" class="form-control" placeholder="Jumlah" required>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input name="keterangan" class="form-control" placeholder="Keterangan" required>
                </div>

                <div class="form-group">
                <label>Pengelola</label>
                    <select name="pengelola" class="form-control">
                        <option value="">--Choose Category--</option>
                        <option value="Bendahara 1"><span class="right badge badge-primary">Bendahara 1</span></option>
                        <option value="Bendahara 2"><span class="right badge badge-danger">Bendahara 2</span></option>
                        <option value="Bendahara 3"><span class="right badge badge-danger">Bendahara 3</span></option>
                    </select>
                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                <?php echo form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- end modal edit dep -->


<!-- /.modal delete dep -->
<?php foreach ($dep as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['id_dep']; ?>">
        <div class="modal-dialog modal-sm modal-danger">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Delete Data</h4>
                </div>
                <div class="modal-body">

                    Apakah Anda Yakin Ingin Hapus <?= $value['nama_dep']; ?>..?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('dep/delete/' . $value['id_dep']) ?>" type="submit" class="btn btn-primary">Ya</a>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- end modal delete dep -->