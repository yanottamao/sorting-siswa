<?php include 'config/database.php' ?>
<?php include 'inc/konversi.php' ?>
<?php $akun = 'logout'; ?>
<?php date_default_timezone_set('Asia/Jakarta'); ?>


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
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">PANGKALAN DATA SINGOSARI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/sorting-siswa-v4/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sorting-siswa-v4/tambah.php">Tambah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sorting-siswa-v4/list.php">List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sorting-siswa-v4/sorting.php">Sorting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sorting-siswa-v4/<?php echo $akun ?>.php"><?php echo ucfirst($akun); ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->