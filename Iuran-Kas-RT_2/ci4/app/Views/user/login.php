<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
    <div id="login-wrapper">
        <h1>LOGIN</h1>
        <?php if (session()->getFlashdata('flash_msg')) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('flash_msg') ?></div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="mb-3">
                <i class="fa fa-user"><i>
                        <label for="InputForEmail" class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" placeholder="Masukkan Akun Kamu" value="<?= set_value('email') ?>">
            </div>
            <div class="mb-3">
                <label for="InputForPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="InputForPassword" placeholder="Masukkan Password Kamu">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>

</html>