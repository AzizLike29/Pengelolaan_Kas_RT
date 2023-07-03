<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Ubah Document</h3>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>
                    <div class="alert alert-danger alert-dismissible">
                        <h5>Ada Kesalahan !!!</h5>
                        <ul>
                            <?php foreach ($errors as $key => $value) { ?>
                                <li><?= esc($value) ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
                <?php
                echo form_open_multipart('arsip/update/' . $arsip['id_arsip']);
                ?>

                <div class="form-group">
                    <label>No Document</label>
                    <input name="no_arsip" class="form-control" value="<?= $arsip['no_arsip']; ?>" readonly>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input name="keterangan" value="<?= $arsip['keterangan'] ?>" class="form-control" placeholder="Keterangan">
                </div>

                <div class="form-group">
                    <label>Nama Warga</label>
                    <select name="id_dep" class="form-control">
                        <option value="<?= $arsip['id_dep'] ?>"><?= $arsip['nama_dep'] ?></option>
                        <?php foreach ($dep as $key => $value) { ?>
                            <option value="<?= $value['id_dep'] ?>"><?= $value['nama_dep'] ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="5"><?= $arsip['deskripsi'] ?></textarea>
                </div>

                <div class="form-group">
                    <label>Ganti File</label>
                    <input type="file" name="file_arsip" class="form-control">
                    <label class="text-danger">File Harus Format .PDF</label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('arsip') ?>" class="btn btn-success">Kembali</a>
                </div>

                <?php echo form_close() ?>


            </div>
        </div>
        <!-- /.box -->
    </div>

    <div class="col-md-3">
    </div>
</div>