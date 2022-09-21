<?php include 'inc/header.php' ?>

<?php
$id = 0;
setcookie('id', $id);

$sql = 'SELECT * FROM data_siswa_v3';
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

$nomor_urut = 1;

?>

<div class="mx-auto text-center">
    <h2>List Data Siswa</h2>
    <a href="sorting.php"><button type="button" class="btn btn-primary m-3"><i class="bi bi-funnel"></i> Sortir</button></a>
    <button onclick="window.print()" type="button" class="btn btn-success m-3"><i class="bi bi-printer"></i> Cetak</button>

    <?php if (empty($data)) : ?>
        <p class="lead mt-3">Belum ada data!</p>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>No. Induk</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Kejuruan</th>
                <th>Sub Kejuruan</th>
                <th>Lama Latih</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Pendidikan</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Keterangan</th>
                <th>Alumni</th>
                <th>Tanggal Edit</th>
                <th>Edit Data</th>
            </tr>

            <?php foreach ($data as  $value) : ?>
                <?php if ($value['alumni'] == 0) {
                    $value['alumni'] = 'Bukan';
                } else {
                    $value['alumni'] = 'Ya';
                } ?>

                <tr>
                    <td>
                        <?php echo $nomor_urut++; ?>
                    </td>
                    <td>
                        <?php echo $value['nomor_induk']; ?>
                    </td>
                    <td>
                        <?php echo konv_nama($value['nama']); ?>
                    </td>
                    <td>
                        <?php echo konv_tempat($value['tempat_lahir']); ?>
                    </td>
                    <td>
                        <?php echo $value['tanggal_lahir']; ?>
                    </td>
                    <td>
                        <?php echo konv_kej($value['kejuruan']); ?>
                    </td>
                    <td>
                        <?php echo konv_sub_kejuruan($value['sub_kejuruan']); ?>
                    </td>
                    <td>
                        <?php echo $value['lama_latih']; ?>
                    </td>
                    <td>
                        <?php echo $value['tanggal_mulai']; ?>
                    </td>
                    <td>
                        <?php echo $value['tanggal_akhir']; ?>
                    </td>
                    <td>
                        <?php echo konv_pendidikan($value['pendidikan']); ?>
                    </td>
                    <td>
                        <?php echo $value['alamat']; ?>
                    </td>
                    <td>
                        <?php echo $value['nomor_telepon']; ?>
                    </td>
                    <td>
                        <?php echo $value['keterangan']; ?>
                    </td>
                    <td>
                        <?php echo konv_alumni($value['alumni']); ?>
                    </td>
                    <td>
                        <?php echo $value['tanggal_edit']; ?>
                    </td>
                    <td>
                        <div class="d-flex">
                            <a href="edit.php?id=<?php echo $value['id'] ?>"><button type="button" class="btn btn-warning m-1"><i class="bi bi-pencil"></i> Edit</button></a>
                            <a href="delete.php?id=<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger m-1"><i class="bi bi-x-circle"></i> Hapus</button></a>
                        </div>
                    </td>
                </tr>

                <!-- <div class="card mt-3">
                <div class="card-body text-center">
                    <?php echo $value['nama']; ?>
                    <div class="text-secondary">
                        Kejuruan : <?php echo konv_sub_kejuruan($value['kejuruan']) . '<br/>'; ?>
                        Pendidikan Terakhir : <?php echo konv_pendidikan($value['pendidikan']) . '<br/>'; ?>
                        Alumni : <?php echo $value['alumni']; ?>
                    </div>
                </div>
            </div> -->
            <?php endforeach; ?>
        </table>
    </div>
</div>
<?php include 'inc/footer.php' ?>