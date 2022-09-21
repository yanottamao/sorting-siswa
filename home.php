<?php $akun = 'logout'; ?>
<?php include 'inc/header.php'; ?>
<?php
include 'session.php';
// var_dump($_SESSION);
// echo $_SESSION['userID'];
$username = $_SESSION['username'];
$userID = $_SESSION['userID'];
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="mycss.css">
    <title>
        This is Sample
    </title>
</head>

<body>
    <div id="body">
        <div id="content" class="text-center">
            <h1>Selamat Datang <?php echo $username; ?></h1>
            <p class="fs-4">Silakan pilih menu dari navigasi di atas.</p>
            <h3 style="color:blue;"><?php echo "Hari ini " .  "  " . date("d F Y") . " - " . date("l") . "" ?>&nbsp; <?php echo "" . date("G:i:s e") . "" ?></h3>

            <hr style="border:1px solid red;">



        </div>


    </div>
</body>

</html>