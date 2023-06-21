<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Admin</h3>


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
                <?php echo form_open_multipart('user/update/' . $user['id_user']); ?>

                <div class="form-group">
                    <label>Nama Admin</label>
                    <input name="nama_user" value="<?= $user['nama_user'] ?>" class="form-control" placeholder="Nama User">
                </div>

                <div class="form-group">
                    <label>E-Mail</label>
                    <input name="email" value="<?= $user['email'] ?>" class="form-control" placeholder="E-Mail" readonly>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input name="password" value="<?= $user['password'] ?>" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                    <label>Level</label>
                    <select name="level" class="form-control">
                        <option value="<?= $user['level'] ?>"><?php if ($user['level'] == 1) {
                                                                    echo 'Admin';
                                                                } else echo 'User' ?></option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>

                    </select>
                </div>

                <div class="form-group">
                    <label>Pengelola</label>
                    <select name="id_dep" class="form-control">
                        <option value="<?= $user['id_dep'] ?>"><?= $user['pengelola'] ?></option>
                        <?php foreach ($dep as $key => $value) { ?>
                            <option value="<?= $value['id_dep'] ?>"><?= $value['pengelola'] ?></option>
                        <?php } ?>

                    </select>
                </div>



                <div class="row">
                    <div class="col-sm-4">
                        <label>Foto Admin</label>
                        <img src="<?= base_url('foto/' . $user['foto']) ?>" width="100px">
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Ganti Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= base_url('user') ?>" class="btn btn-success">Kembali</a>
                </div>

                <?php echo form_close() ?>


            </div>
        </div>
        <!-- /.box -->
    </div>

    <div class="col-md-3">
    </div>
</div>