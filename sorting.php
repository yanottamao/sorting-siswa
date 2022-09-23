<?php include 'inc/header.php' ?>

<?php
// set empty values
$no_induk = $nama = $tempat_lahir = $tanggal_lahir = $kejuruan = $sub_kejuruan = $lama_latih = $tanggal_mulai = $tanggal_akhir = $pendidikan = $alamat = $no_telepon = $keterangan = $alumni = '';

// form submit
if (isset($_GET['submit'])) {
    // validasi no induk
    if (!empty($_GET['no_induk'])) {
        $no_induk = filter_input(INPUT_GET, 'no_induk', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validate name
    if (!empty($_GET['nama'])) {
        $nama = filter_input(INPUT_GET, 'nama', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi tempat lahir
    if (!empty($_GET['tempat_lahir'])) {
        $tempat_lahir = filter_input(INPUT_GET, 'tempat_lahir', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi tanggal lahir
    if (!empty($_GET['tanggal_lahir'])) {
        $tanggal_lahir = filter_input(INPUT_GET, 'tanggal_lahir', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi kejuruan
    if (!empty($_GET['kejuruan'])) {
        $kejuruan = filter_input(INPUT_GET, 'kejuruan', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi sub kejuruan
    if (!empty($_GET['sub_kejuruan'])) {
        $sub_kejuruan = filter_input(INPUT_GET, 'sub_kejuruan', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi lama latih
    if (!empty($_GET['lama_latih'])) {
        $lama_latih = filter_input(INPUT_GET, 'lama_latih', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi tanggal mulai
    if (!empty($_GET['tanggal_mulai'])) {
        $tanggal_mulai = filter_input(INPUT_GET, 'tanggal_mulai', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi tanggal selesai
    if (!empty($_GET['tanggal_akhir'])) {
        $tanggal_akhir = filter_input(INPUT_GET, 'tanggal_akhir', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi pendidikan
    if (!empty($_GET['pendidikan'])) {
        $pendidikan = filter_input(INPUT_GET, 'pendidikan', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi alamat
    if (!empty($_GET['alamat'])) {
        $alamat = filter_input(INPUT_GET, 'alamat', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi nomor telepon
    if (!empty($_GET['no_telepon'])) {
        $no_telepon = filter_input(INPUT_GET, 'no_telepon', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validasi keterangan
    if (!empty($_GET['keterangan'])) {
        $keterangan = filter_input(INPUT_GET, 'keterangan', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // validate alumni
    if (!empty($_GET['alumni'])) {
        $alumni = filter_input(INPUT_GET, 'alumni', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
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

    // pencarian
    // $sql = "SELECT * FROM data_siswa_v4 WHERE nomor_induk LIKE '%$no_induk%' OR nama LIKE '%$nama%' OR tempat_lahir LIKE '%$tempat_lahir' OR kejuruan LIKE '%$kejuruan' OR sub_kejuruan LIKE '%$sub_kejuruan' OR lama_latih LIKE '%$lama_latih' OR pendidikan='$pendidikan' OR alumni='$alumni'";
    // if(mysqli_query(($conn, $sql))){
    //     // tampilkan hasil query
    // }

    // pencarian
    // $sql = "SELECT * FROM data_siswa_v4 WHERE nomor_induk LIKE '%$no_induk%' OR nama LIKE '%$nama%' OR tempat_lahir LIKE '%$tempat_lahir' OR kejuruan='$kejuruan' OR sub_kejuruan='$sub_kejuruan' OR lama_latih LIKE '%$lama_latih' OR pendidikan='$pendidikan' OR alumni='$alumni'";

    // $sql = "SELECT * FROM data_siswa_v4 WHERE nama LIKE '%$nama%' AND kejuruan='$kejuruan'";

    // $sql = "SELECT * FROM data_siswa_v4 WHERE nomor_induk LIKE '%$no_induk%' AND nama LIKE '%$nama%' AND tempat_lahir LIKE '%$tempat_lahir' AND tanggal_lahir LIKE '%$tanggal_lahir%' AND kejuruan='$kejuruan' AND sub_kejuruan='$sub_kejuruan' AND lama_latih LIKE '%$lama_latih' AND tanggal_mulai LIKE '%$tanggal_mulai' AND tanggal_akhir LIKE '%$tanggal_akhir' AND pendidikan='$pendidikan' AND alamat LIKE '%$alamat' AND nomor_telepon LIKE '%$no_telepon' AND alumni='$alumni'";

    // $sql = "SELECT * FROM data_siswa_v4 WHERE nomor_induk LIKE '%$no_induk%' AND nama LIKE '%$nama%' AND tempat_lahir LIKE '%$tempat_lahir' AND tanggal_lahir LIKE '%$tanggal_lahir%' AND tanggal_lahir LIKE '%$tanggal_lahir%' AND kejuruan LIKE '%$kejuruan%' ";

    $sql = "SELECT * FROM data_siswa_v4 WHERE nomor_induk LIKE '%$no_induk%' AND nama LIKE '%$nama%' AND tempat_lahir LIKE '%$tempat_lahir' AND tanggal_lahir LIKE '%$tanggal_lahir%' AND kejuruan LIKE '%$kejuruan%' AND sub_kejuruan LIKE '%$sub_kejuruan%' AND lama_latih LIKE '%$lama_latih' AND tanggal_mulai LIKE '%$tanggal_mulai' AND tanggal_akhir LIKE '%$tanggal_akhir' AND pendidikan LIKE '%$pendidikan%' AND alamat LIKE '%$alamat' AND nomor_telepon LIKE '%$no_telepon' AND alumni LIKE '%$alumni%'";


    $result = mysqli_query($conn, $sql);
    $sort = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // echo $nama;
    // echo $kejuruan;
    // echo $pendidikan;
    // echo $alamat;
    // echo $alumni;
    // var_dump($sort);
}

?>

<div class=" text-center mx-auto">
    <h2>Sortir Data</h2>
    <div class="w-50 mx-auto">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET" class="mt-4 d-grid">
            <?php include 'inc/form_isi_2.php'; ?>

            <div class="mb-3">
                <input type="submit" name="submit" value="Sortir" class="btn btn-dark w-100" />
            </div>
        </form>
    </div>
    <button onclick="window.print()" type="button" class="btn btn-success m-3"><i class="bi bi-printer"></i> Cetak</button>
    <div class="mt-3">
        <?php if (empty($sort)) : ?>
            <p class="lead mt-3">Belum ada data!</p>
        <?php endif; ?>

        <?php if (!empty($sort)) : ?>
            <div class="row justify-content-center">
                <?php foreach ($sort as  $value) : ?>
                    <?php if ($value['alumni'] == 0) {
                        $value['alumni'] = 'Bukan';
                    } else {
                        $value['alumni'] = 'Ya';
                    } ?>
                    <div class="card m-3 col-3">
                        <!-- <img src="..." class="card-img-top mt-3" alt="Foto siswa" style="max-height: 320px; max-height: 240px;"> -->
                        <div class="card-body text-center">
                            <div class="card-title m-1 fw-bold fs-5">
                                <?php echo strtoupper($value['nama']); ?>
                            </div>
                            <div class=" card-text text-secondary">
                                Kejuruan : <?php echo konv_kej($value['kejuruan']) . '<br/>'; ?>
                                Sub kejuruan : <?php echo konv_sub_kejuruan($value['sub_kejuruan']) . '<br/>'; ?>
                                Pendidikan Terakhir : <?php echo konv_pendidikan($value['pendidikan']) . '<br/>'; ?>
                                Alumni : <?php echo konv_alumni($value['alumni']); ?>
                            </div>
                            <div class="d-flex justify-content-center m-3">
                                <a href="https://wa.me/62<?php echo $value['nomor_telepon'] ?>" target="_blank"><button type="button" class="btn btn-success m-1"><i class="bi bi-whatsapp"></i> WhatsApp</button></a>
                                <a href="edit.php?id=<?php echo $value['id'] ?>"><button type="button" class="btn btn-warning m-1"><i class="bi bi-pencil"></i> Edit</button></a>
                                <a href="delete.php?id=<?php echo $value['id'] ?>" onclick="return confirm('Yakin hapus?')"><button type="button" class="btn btn-danger m-1"><i class="bi bi-x-circle"></i> Hapus</button></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include 'inc/footer.php' ?>