<div class="row">
    <div class="col-lg-3 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?= $tot_arsip ?></h3>
                <p>Document</p>
            </div>
            <div class="icon">
                <i class="fa fa-file-pdf-o"></i>
            </div>
            <a href="<?= base_url('arsip') ?>" class="small-box-footer">View Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= $tot_kategori ?></h3>

                <p>Data Warga</p>
            </div>
            <div class="icon">
                <i class="fa fa-bookmark-o"></i>
            </div>
            <a href="<?= base_url('kategori') ?>" class="small-box-footer">View Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= $tot_dep ?></h3>

                <p>Data Iuran Kas</p>
            </div>
            <div class="icon">
                <i class="fa fa-building-o"></i>
            </div>
            <a href="<?= base_url('dep') ?>" class="small-box-footer">View Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= $tot_user ?></h3>

                <p>Admin</p>
            </div>
            <div class="icon">
                <i class="fa fa-user"></i>
            </div>
            <a href="<?= base_url('user') ?>" class="small-box-footer">View Detail <i class="fa fa-arrow-circle-right"></i></a>

        </div>
    </div>


</div>