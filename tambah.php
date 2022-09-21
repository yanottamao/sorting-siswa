<?php include 'inc/header.php' ?>

<?php
// set empty values
$no_induk = $name = $tempat_lahir = $tanggal_lahir = $kejuruan = $sub_kejuruan = $lama_latih = $tanggal_mulai = $tanggal_akhir = $pendidikan = $alamat = $no_telepon = $keterangan = $alumni = '';
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
    // if (empty($nameErr) && empty($kejuruanErr) && empty($pendidikanErr) && empty($alamatErr) && empty($alumniErr)) {
    //     $sql = "INSERT INTO data_siswa (nama, kejuruan, pendidikan, alamat, alumni) VALUES ('$nama','$kejuruan','$pendidikan', '$alamat', '$alumni')";
    //     if (mysqli_query($conn, $sql)) {
    //         // success add
    //         header('Location: list.php');
    //     } else {
    //         echo 'Error: ' . mysqli_error($conn);
    //     }
    // }

    // add to database
    if (empty($nameErr) && empty($kejuruanErr) && empty($pendidikanErr) && empty($alamatErr) && empty($alumniErr)) {
        $sql = "INSERT INTO data_siswa_v4 (nomor_induk, nama, tempat_lahir, tanggal_lahir, kejuruan, sub_kejuruan, lama_latih, tanggal_mulai, tanggal_akhir, pendidikan, alamat, nomor_telepon, keterangan, alumni) VALUES ('$no_induk','$nama','$tempat_lahir','$tanggal_lahir','$kejuruan','$sub_kejuruan','$lama_latih','$tanggal_mulai','$tanggal_akhir','$pendidikan','$alamat','$no_telepon','$keterangan','$alumni')";
        if (mysqli_query($conn, $sql)) {
            // success add
            header('Location: list.php');
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }


    // echo 'no induk: ' . $no_induk . '<br>';
    // echo 'nama: ' . konv_nama($nama) . '<br>';
    // echo 'tempat lahir: ' . konv_nama($tempat_lahir) . '<br>';
    // echo 'tanggal lahir: ' . $tanggal_lahir . '<br>';
    // echo 'kejuruan: ' . konv_kej($kejuruan) . '<br>';
    // echo 'sub kejuruan: ' . konv_sub_kejuruan($sub_kejuruan) . '<br>';
    // echo 'lama latih: ' . $lama_latih . '<br>';
    // echo 'tanggal mulai: ' . $tanggal_mulai . '<br>';
    // echo 'tanggal akhir: ' . $tanggal_akhir . '<br>';
    // echo 'pendidikan: ' . konv_pendidikan($pendidikan) . '<br>';
    // echo 'alamat : ' .  $alamat . '<br>';
    // echo 'no telepon: ' . $no_telepon . '<br>';
    // echo 'keterangan: ' . $keterangan . '<br>';
    // echo 'alumni: ' . $alumni . '<br>';
}

?>

<div class="w-50 text-center mx-auto">
    <h2>Tambah Data</h2>
    <?php // include 'inc/form_isi.php'; 
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 d-grid">
        <?php include 'inc/form_isi_2.php'; ?>

        <!-- tombol tambah -->
        <div class="mb-3">
            <input type="submit" name="submit" value="Tambah" class="btn btn-dark w-100" />
        </div>
        <!-- tombol tambah -->
    </form>
</div>

<?php include 'inc/footer.php' ?>