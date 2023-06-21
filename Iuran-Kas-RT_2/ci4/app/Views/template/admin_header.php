<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/admin.css'); ?>">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(function() {
            $("#date").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>
</head>

<body>
    <div id="container">
        <header>
            <h1>DATA KAS RT</h1>
            <img src="<?= base_url('icon/logo.png') ?>" class="logo">
        </header>
        <nav>
            <ul>
                <li><a href="<?= base_url('/admin/data_warga'); ?>">Data Warga</a>
                    <ul class="sub3">
                        <li><a href="<?= base_url('/admin/data_warga/add'); ?>">Tambah Warga</a></li>
                    </ul>
                </li>
                <li><a href="<?= base_url('/admin/iuran'); ?>">Iuran Warga</a>
                    <ul class="sub2">
                        <li><a href="<?= base_url('/admin/iuran/add'); ?>">Tambah Iuran</a></li>
                    </ul>
                </li>
                <li><a href="">Laporan Kas</a>
                    <ul class="sub1">
                        <li><a href="<?= base_url('/admin/laporan'); ?>">Jumlah Kas</a></li>
                    </ul>
                </li>
                <li><a href="<?= base_url('/admin/logout'); ?>">Logout</a></li>
            </ul>
        </nav>