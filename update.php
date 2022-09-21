<?php include 'inc/header.php'; ?>

<?php
// $sql = "UPDATE data_siswa_v4 SET nomor_induk='${_POST['no_induk']}', nama='${_POST['nama']}, tempat_lahir='${_POST['tempat_lahir']}, tanggal_lahir='${_POST['tanggal_lahir']}, kejuruan='${_POST['kejuruan']}, sub_kejuruan='${_POST['sub_kejuruan']}, lama_latih='${_POST['lama_latih']}, tanggal_mulai='${_POST['tanggal_mulai']}, tanggal_akhir='${_POST['tanggal_akhir']}, pendidikan='${_POST['pendidikan']}, alamat='${_POST['alamat']}, nomor_telepon='${_POST['no_telepon']}, keterangan='${_POST['keterangan']}, alumni='${_POST['alumni']} WHERE id=" . $_GET['id'];
$sql = "UPDATE data_siswa_v4 SET nomor_induk='{$_POST['no_induk']}', nama='{$_POST['nama']}', tempat_lahir='{$_POST['tempat_lahir']}', tanggal_lahir='{$_POST['tanggal_lahir']}', kejuruan='{$_POST['kejuruan']}', sub_kejuruan='{$_POST['sub_kejuruan']}', lama_latih='{$_POST['lama_latih']}', tanggal_mulai='{$_POST['tanggal_mulai']}', tanggal_akhir='{$_POST['tanggal_akhir']}', pendidikan='{$_POST['pendidikan']}', alamat='{$_POST['alamat']}', nomor_telepon='{$_POST['no_telepon']}', keterangan='{$_POST['keterangan']}', alumni='{$_POST['alumni']}' WHERE id=" . $_GET['id'];
if (mysqli_query($conn, $sql)) {
    // success add
    header('Location: list.php');
} else {
    echo 'Error: ' . mysqli_error($conn);
}
