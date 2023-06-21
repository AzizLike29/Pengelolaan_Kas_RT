<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href="<?= base_url('home') ?>">Home</a></li>
        <li><a href="<?= base_url('kategori') ?>">Data Warga</a></li>
        <li><a href="<?= base_url('dep') ?>">Data Iuran Kas</a></li>
        <li><a href="<?= base_url('arsip') ?>">Document</a></li>
        <li><a href="<?= base_url('user') ?>">Admin</a></li>
    </ul>
</div>
<!-- /.navbar-collapse -->
<!-- Navbar Right Menu -->
<div class="navbar-custom-menu pull-right" id="navbar-custom-menu">
    <ul class="nav navbar-nav">

        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?= base_url('foto/' . session()->get('foto')) ?>" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?= session()->get('nama_user') ?></span>
            </a>
            <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                    <img src="<?= base_url('foto/' . session()->get('foto')) ?>" class="img-circle" alt="User Image">

                    <p>
                        <?= session()->get('nama_user') ?> - <?php if (session()->get('level') == 1) {
                                                                    echo 'Admin';
                                                                } else {
                                                                    echo 'User';
                                                                } ?>
                        <small><?php echo "" . date("d-m-Y"); ?></small>
                    </p>
                </li>
                <!-- Menu Body -->
                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="pull-right">
                        <a href="<?= base_url('auth/logout') ?>" class="btn btn-default btn-flat">Logout</a>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- /.navbar-custom-menu -->
</div>
<!-- /.container-fluid -->
</nav>
</header>
<!-- Full Width Column -->
<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?= $title ?>

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Sistem Kas RT</a></li>
                <li class="active"><?= $title ?></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">