<?php include 'inc/header.php' ?>

<?php

$sql = "SELECT * FROM data_siswa_v2 WHERE id=" . $_GET['id'];
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

$nomor_urut = 1;

echo $sql;

$no_indukErr = $nameErr = $tempat_lahirErr = $tanggal_lahirErr = $kejuruanErr = $sub_kejuruanErr = $lama_latihErr = $tanggal_mulaiErr = $tanggal_akhirErr = $pendidikanErr = $alamatErr = $no_teleponErr = $keteranganErr = $alumniErr = '';

// form submit
if (isset($_POST['submit'])) {
    // validasi no induk
    if (empty($_POST['no_induk'])) {
        $no_indukErr = 'Nomor induk harus diisi!';
    } else {
        $no_induk = filter_input(INPUT_POST, 'no_induk', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validate name
    if (empty($_POST['nama'])) {
        $namaErr = 'Nama harus diisi!';
    } else {
        $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi tempat lahir
    if (empty($_POST['tempat_lahir'])) {
        $tempat_lahirErr = 'Tempat lahir harus diisi!';
    } else {
        $tempat_lahir = filter_input(INPUT_POST, 'tempat_lahir', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi tanggal lahir
    if (empty($_POST['tanggal_lahir'])) {
        $tanggal_lahirErr = 'Tanggal lahir harus diisi!';
    } else {
        $tanggal_lahir = filter_input(INPUT_POST, 'tanggal_lahir', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi kejuruan
    if (empty($_POST['kejuruan'])) {
        $kejuruanErr = 'Kejuruan harus dipilih!';
    } else {
        $kejuruan = filter_input(INPUT_POST, 'kejuruan', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi sub kejuruan
    if (empty($_POST['sub_kejuruan'])) {
        $sub_kejuruanErr = 'Sub kejuruan harus diisi!';
    } else {
        $sub_kejuruan = filter_input(INPUT_POST, 'sub_kejuruan', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi lama latih
    if (empty($_POST['lama_latih'])) {
        $lama_latihErr = 'Lama latih harus diisi!';
    } else {
        $lama_latih = filter_input(INPUT_POST, 'lama_latih', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi tanggal mulai
    if (empty($_POST['tanggal_mulai'])) {
        $tanggal_mulaiErr = 'Tanggal mulai harus diisi!';
    } else {
        $tanggal_mulai = filter_input(INPUT_POST, 'tanggal_mulai', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi tanggal selesai
    if (empty($_POST['tanggal_akhir'])) {
        $tanggal_akhirErr = 'Tanggal selesai harus diisi!';
    } else {
        $tanggal_akhir = filter_input(INPUT_POST, 'tanggal_akhir', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi pendidikan
    if (empty($_POST['pendidikan'])) {
        $pendidikanErr = 'Pendidikan harus dipilih!';
    } else {
        $pendidikan = filter_input(INPUT_POST, 'pendidikan', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi alamat
    if (empty($_POST['alamat'])) {
        $alamatErr = 'Alamat harus diisi!';
    } else {
        $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi nomor telepon
    if (empty($_POST['no_telepon'])) {
        $no_teleponErr = 'Nomor telepon harus diisi!';
    } else {
        $no_telepon = filter_input(INPUT_POST, 'no_telepon', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi keterangan
    if (empty($_POST['keterangan'])) {
        $keterangan = '-';
    } else {
        $keterangan = filter_input(INPUT_POST, 'keterangan', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validate alumni
    if (empty($_POST['alumni'])) {
        $alumniErr = 'Harus dipilih ya/tidak!';
    } else {
        $alumni = filter_input(INPUT_POST, 'alumni', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }


    // add to database
    if (empty($nameErr) && empty($kejuruanErr) && empty($pendidikanErr) && empty($alamatErr) && empty($alumniErr)) {
        $sql = "UPDATE data_siswa_v2 SET nomor_induk='$no_induk', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', kejuruan='$kejuruan', sub_kejuruan='$sub_kejuruan', lama_latih='$lama_latih', tanggal_mulai='$tanggal_mulai', tanggal_akhir='$tanggal_akhir', pendidikan='$pendidikan', alamat='$alamat', nomor_telepon='$nomor_telepon', keterangan='$keterangan', alumni='$alumni' WHERE id=" . $_GET['id'];
        if (mysqli_query($conn, $sql)) {
            // success add
            header('Location: list.php');
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}
?>

<div class="w-50 text-center mx-auto">
    <h2>Edit Data</h2>

    <?php foreach ($data as  $value) : ?>
        <form action="update.php?id=<?php echo $value['id']; ?>" class="mt-4" method="POST">
            <!-- <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?id=' . $value['id']; ?>" class="mt-4"> -->

            <?php include 'inc/form_isi_2.php'; ?>


            <!-- tombol edit -->
            <div class="mb-3">
                <input type="submit" name="submit" value="Edit" class="btn btn-dark w-100" />
            </div>
            <!-- tombol edit -->
        </form>
</div>

<?php endforeach; ?>