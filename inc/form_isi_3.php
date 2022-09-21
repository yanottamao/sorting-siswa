<?php
$no_induk = $name = $tempat_lahir = $tanggal_lahir = $kejuruan = $sub_kejuruan = $lama_latih = $tanggal_mulai = $tanggal_akhir = $pendidikan = $alamat = $no_telepon = $keterangan = $alumni = '';
$no_indukErr = $nameErr = $tempat_lahirErr = $tanggal_lahirErr = $kejuruanErr = $sub_kejuruanErr = $lama_latihErr = $tanggal_mulaiErr = $tanggal_akhirErr = $pendidikanErr = $alamatErr = $no_teleponErr = $keteranganErr = $alumniErr = '';
?>

<!-- no induk -->
<div class="mb-3">
    <label for="no_induk" class="form-label">Nomor Induk</label>
    <input type="text" class="form-control <?php echo $no_indukErr ? 'is-invalid' : null ?>" id="no_induk" name="no_induk" placeholder="Masukkan no induk" value="<?php echo $value['nomor_induk'] ?? null; ?>" />
    <div class="invalid-feedback">
        <?php echo $no_indukErr; ?>
    </div>
</div>
<!-- no induk -->

<!-- nama -->
<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control <?php echo $namaErr ? 'is-invalid' : null ?>" id="nama" name="nama" placeholder="Masukkan nama" value="<?php echo $value['nama'] ?? null; ?>" />
    <div class="invalid-feedback">
        <?php echo $namaErr; ?>
    </div>
</div>
<!-- nama -->

<!-- tempat lahir -->
<div class="mb-3">
    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
    <input type="text" class="form-control <?php echo $tempat_lahirErr ? 'is-invalid' : null ?>" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat_lahir" value="<?php echo $value['tempat_lahir'] ?? null; ?>" />
    <div class="invalid-feedback">
        <?php echo $tempat_lahirErr; ?>
    </div>
</div>
<!-- tempat lahir -->

<!-- tanggal_lahir -->
<div class="mb-3">
    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control <?php echo $tanggal_lahirErr ? 'is-invalid' : null ?>" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan tanggal lahir" value="<?php echo $value['tanggal_lahir'] ?? null; ?>" />
    <div class="invalid-feedback">
        <?php echo $tanggal_lahirErr; ?>
    </div>
</div>
<!-- tanggal_lahir -->

<!-- kejuruan -->
<div class="mb-3">
    <label for="kejuruan" class="form-label">Kejuruan</label>
    <select name="kejuruan" id="kejuruan" class="form-control <?php echo $kejuruanErr ? 'is-invalid' : null; ?>" value="<?php echo $value['kejuruan'] ?? null; ?>">
        <option value="" selected disabled>Pilih kejuruan</option>
        <option value="kej_tek_mek">Teknologi Mekanik</option>
        <option value="kej_bangunan">Bangunan</option>
        <option value="kej_otomotif">Otomotif</option>
        <option value="kej_listrik">Listrik</option>
        <option value="kej_tik">Teknologi Informasi dan Komunikasi</option>
        <option value="kej_tn">Tata Niaga</option>
        <option value="kej_aneka">Aneka Kejuruan</option>
    </select>
    <div class="invalid-feedback">
        <?php echo $kejuruanErr; ?>
    </div>
</div>
<!-- kejuruan -->

<!-- sub kejuruan -->
<div class="mb-3">
    <label for="sub_kejuruan" class="form-label">Sub Kejuruan</label>
    <select name="sub_kejuruan" id="kejuruan" class="form-control <?php echo $sub_kejuruanErr ? 'is-invalid' : null; ?>" value="<?php echo $value['sub_kejuruan'] ?? null; ?>">
        <option value="" selected disabled>Pilih sub kejuruan</option>
        <optgroup label="Teknologi Mekanik">
            <option value="pengoperasian_mesin_bubut">Pengoperasian Mesin Bubut</option>
            <option value="drafter_mesin_pertanian">Drafter Mesin Pertanian</option>
            <option value="pengoperasian_mesin_cnc_dengan_program_cam">Pengoperasian Mesin CNC Dengan Program CAM</option>
            <option value="pengoperasian_mesin_produksi">Pengoperasian Mesin Produksi </option>
            <option value="pengoperasian_mesin_cnc">Pengoperasian Mesin CNC</option>
            <option value="plat_welder_pengelasan_smaw_posisi_3g">Plat Welder Pengelasan SMAW Posisi 3G</option>
        </optgroup>
        <optgroup label="Bangunan">
            <option value="mengerjakan_finishing_dengan_teknik_semprot">Mengerjakan Finishing Dengan Teknik Semprot</option>
            <option value="juru_ukur_surveyor">Juru Ukur/Surveyor</option>
            <option value="penggambaran_bangunan_dengan_perangkat_lunak">Penggambaran Bangunan Dengan Perangkat Lunak</option>
        </optgroup>
        <optgroup label="Otomotif">
            <option value="pemeliharaan_kendaraan_ringan_sistem_injeksi">Pemeliharaan Kendaraan Ringan Sistem Injeksi</option>
            <option value="pemeliharaan_berkala_kendaraan_ringan">Pemeliharaan Berkala Kendaraan Ringan</option>
            <option value="service_sepeda_motor_konvensional">Service Sepeda Motor Konvensional</option>
            <option value="servis_sepeda_motor_injeksi">Servis Sepeda Motor Injeksi</option>
        </optgroup>
        <optgroup label="Listrik">
            <option value="pemasangan_listrik_bangunan_sederhana">Pemasangan Listrik Bangunan Sederhana</option>
            <option value="pengoperasian_otomasi_elektronika_industri">Pengoperasian Otomasi Elektronika Industri</option>
            <option value="teknisi_telepon_seluler_perangkat_keras">Teknisi Telepon Seluler Perangkat Keras</option>
            <option value="teknisi_telepon_seluler_perangkat_lunak">Teknisi Telepon Seluler Perangkat Lunak</option>
            <option value="teknisi_ac_residential">Teknisi AC Residential</option>
        </optgroup>
        <optgroup label="Teknologi Informasi dan Komunikasi">
            <option value="operator_komputer">Operator Komputer</option>
            <option value="pemrograman_web">Pemrograman Web</option>
            <option value="perakitan_komputer">Perakitan Komputer</option>
            <option value="teknisi_pemasangan_jaringan_komputer">Teknisi Pemasangan Jaringan Komputer</option>
            <option value="desain_grafis_muda">Desain Grafis Muda</option>
        </optgroup>
        <optgroup label="Tata Niaga">
            <option value="room_attendant">Room Attendant</option>
            <option value="junior_administrative_assistant">Junior Administrative Assistant</option>
            <option value="pengelola_administrasi_perkantoran">Pengelola Administrasi Perkantoran</option>
        </optgroup>
        <optgroup label="Aneka Kejuruan">
            <option value="tata_rias_kecantikan">Tata Rias Kecantikan</option>
            <option value="tata_kecantikan_rambut">Tata Kecantikan Rambut</option>
            <option value="pembuatan_hiasan_busana_dengan_mesin_bordir">Pembuatan Hiasan Busana Dengan Mesin Bordir</option>
            <option value="menjahit_pakaian_dengan_mesin">Menjahit Pakaian Dengan Mesin</option>
            <option value="fashion_technology">Fashion Technology</option>
        </optgroup>
    </select>
    <div class="invalid-feedback">
        <?php echo $kejuruanErr; ?>
    </div>
</div>
<!-- sub kejuruan -->

<!-- lama_latih -->
<div class="mb-3">
    <label for="lama_latih" class="form-label">Lama Latih</label>
    <input type="number" class="form-control <?php echo $lama_latihErr ? 'is-invalid' : null ?>" id="lama_latih" name="lama_latih" placeholder="Masukkan tanggal lahir" value="<?php echo $value['lama_latih'] ?? null; ?>" />
    <div class="invalid-feedback">
        <?php echo $lama_latihErr; ?>
    </div>
</div>
<!-- lama_latih -->

<!-- tanggal_mulai -->
<div class="mb-3">
    <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
    <input type="date" class="form-control <?php echo $tanggal_mulaiErr ? 'is-invalid' : null ?>" id="tanggal_mulai" name="tanggal_mulai" placeholder="Masukkan tanggal mulai" value="<?php echo $value['tanggal_mulai'] ?? null; ?>" />
    <div class="invalid-feedback">
        <?php echo $tanggal_mulaiErr; ?>
    </div>
</div>
<!-- tanggal_mulai -->

<!-- tanggal_akhir -->
<div class="mb-3">
    <label for="tanggal_akhir" class="form-label">Tanggal Selesai</label>
    <input type="date" class="form-control <?php echo $tanggal_akhirErr ? 'is-invalid' : null ?>" id="tanggal_akhir" name="tanggal_akhir" placeholder="Masukkan tanggal selesai" value="<?php echo $value['tanggal_akhir'] ?? null; ?>" />
    <div class="invalid-feedback">
        <?php echo $tanggal_akhirErr; ?>
    </div>
</div>
<!-- tanggal_akhir -->

<!-- pendidikan -->
<div class="mb-3">
    <label for="pendidikan" class="form-label">Pendidikan</label>
    <select name="pendidikan" id="pendidikan" class="form-control <?php echo $pendidikanErr ? 'is-invalid' : null; ?>" value="<?php echo $value['pendidikan'] ?? null; ?>">
        <option value="" selected disabled>Pilih pendidikan terakhir</option>
        <option value="sd">SD</option>
        <option value="smp">SMP</option>
        <option value="sma">SMA</option>
        <option value="smk">SMK</option>
        <option value="ma">MA</option>
        <option value="d1">D1</option>
        <option value="d2">D2</option>
        <option value="d3">D3</option>
        <option value="s1_d4">S1/D4</option>
        <option value="s2">S2</option>
        <option value="s3">S3</option>
    </select>
    <div class="invalid-feedback">
        <?php echo $pendidikanErr; ?>
    </div>
</div>
<!-- pendidikan -->

<!-- alamat -->
<div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea class="form-control <?php echo $alamatErr ? 'is-invalid' : null ?>" id="alamat" name="alamat" placeholder="Masukkan alamat peserta"><?php echo $value['alamat'] ?? null; ?></textarea>
    <div class="invalid-feedback">
        <?php echo $alamatErr; ?>
    </div>
</div>
<!-- alamat -->

<!-- no_telepon -->
<div class="mb-3">
    <label for="no_telepon" class="form-label">Nomor Telepon</label>
    <input type="text" class="form-control <?php echo $no_teleponErr ? 'is-invalid' : null ?>" id="no_telepon" name="no_telepon" placeholder="Masukkan no telepon peserta" value="<?php echo $value['nomor_telepon'] ?? null; ?>"></input>
    <div class="invalid-feedback">
        <?php echo $no_teleponErr; ?>
    </div>
</div>
<!-- no_telepon -->

<!-- keterangan -->
<div class="mb-3">
    <label for="keterangan" class="form-label">Keterangan</label>
    <textarea class="form-control <?php echo $keteranganErr ? 'is-invalid' : null ?>" id="keterangan" name="keterangan" placeholder="Masukkan keterangan peserta"><?php echo $value['keterangan'] ?? null; ?></textarea>
    <div class="invalid-feedback">
        <?php echo $keteranganErr; ?>
    </div>
</div>
<!-- keterangan -->

<!-- alumni -->
<div class="mb-3">
    <label for="alumni" class="form-label">Apakah peserta alumni</label>
    <select name="alumni" id="alumni" class="form-control <?php echo $alumniErr ? 'is-invalid' : null; ?>" value="<?php echo $value['alumni'] ?? null; ?>">
        <option value="" selected disabled>Pilih ya/tidak</option>
        <option value="true">Ya</option>
        <option value="false">Tidak</option>
    </select>
    <div class="invalid-feedback">
        <?php echo $alumniErr; ?>
    </div>
</div>
<!-- alumni -->