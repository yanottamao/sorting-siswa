<?php include 'config/database.php' ?>
<?php include 'inc/konversi.php' ?>
<?php $akun = 'logout'; ?>


<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Pangkalan Data Singosari</title>
</head>

<body>
    <?php session_start(); ?>

    <div class="px-4 py-5 my-5 text-center">

        <h1 class="display-5 fw-bold">Selamat Datang, Pengunjung</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Untuk melakukan penambahan dan melihat data yang sudah ada di database, silakan melakukan login terlebih dahulu.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="login.php"><button type="button" class="btn btn-primary btn-lg px-4 gap-3">Login</button></a>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Informasi Pelatihan</button>
            </div>
        </div>
    </div>

    <?php include 'inc/footer.php'; ?>