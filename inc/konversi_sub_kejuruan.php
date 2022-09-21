<?php
// konversi sub kejuruan ke string
function konv_sub_kejuruan($sub_kej)
{
    switch ($sub_kej) {
            // 1
        case 'pengoperasian_mesin_bubut':
            return 'Pengoperasian Mesin Bubut';
            break;
            // 2
        case 'drafter_mesin_pertanian':
            return 'Drafter Mesin Pertanian';
            break;
            // 3
        case 'pengoperasian_mesin_cnc_dengan_program_cam':
            return 'Pengoperasian Mesin CNC Dengan Program CAM';
            break;
            // 4
        case 'pengoperasian_mesin_produksi':
            return 'Pengoperasian Mesin Produksi';
            break;
            // 5
        case 'pengoperasian_mesin_cnc':
            return 'Pengoperasian Mesin CNC';
            break;
            // 6
        case 'plat_welder_pengelasan_smaw_posisi_3g':
            return 'Plat Welder Pengelasan SMAW Posisi 3G';
            break;
        case 'plat_welder_pengelasan_smaw_posisi_6g':
            return 'Plat Welder Pengelasan SMAW Posisi 6G';
            break;
            // 7
        case 'mengerjakan_finishing_dengan_teknik_semprot':
            return 'Mengerjakan Finishing Dengan Teknik Semprot';
            break;
            // 8
        case 'juru_ukur_surveyor':
            return 'Juru Ukur/Surveyor';
            break;
            // 9
        case 'penggambaran_bangunan_dengan_perangkat_lunak':
            return 'Penggambaran Bangunan Dengan Perangkat Lunak';
            break;
            // 10
        case 'pemeliharaan_kendaraan_ringan_sistem_injeksi':
            return 'Pemeliharaan Kendaraan Ringan Sistem Injeksi';
            break;
            // 11
        case 'pemeliharaan_berkala_kendaraan_ringan':
            return 'Pemeliharaan Berkala Kendaraan Ringan';
            break;
            // 12
        case 'service_sepeda_motor_konvensional':
            return 'Service Sepeda Motor Konvensional';
            break;
            // 13
        case 'servis_sepeda_motor_injeksi':
            return 'Servis Sepeda Motor Injeksi';
            break;
            // 14
        case 'pemasangan_listrik_bangunan_sederhana':
            return 'Pemasangan Listrik Bangunan Sederhana';
            break;
            // 15
        case 'pengoperasian_otomasi_elektronika_industri':
            return 'Pengoperasian Otomasi Elektronika Industri';
            break;
            // 16
        case 'teknisi_telepon_seluler_perangkat_keras':
            return 'Teknisi Telepon Seluler Perangkat Keras';
            break;
            // 17
        case 'teknisi_telepon_seluler_perangkat_lunak':
            return 'Teknisi Telepon Seluler Perangkat Lunak';
            break;
            // 18
        case 'teknisi_ac_residential':
            return 'Teknisi AC Residential';
            break;
            // 19
        case 'operator_komputer':
            return 'Operator Komputer';
            break;
            // 20
        case 'pemrograman_web':
            return 'Pemrograman Web';
            break;
            // 21
        case 'perakitan_komputer':
            return 'Perakitan Komputer';
            break;
            // 22
        case 'teknisi_pemasangan_jaringan_komputer':
            return 'Teknisi Pemasangan Jaringan Komputer';
            break;
            // 23
        case 'desain_grafis_muda':
            return 'Desain Grafis Muda';
            break;
            // 24
        case 'room_attendant':
            return 'Room Attendant';
            break;
        case 'frontliner':
            return 'Frontliner';
            break;
            // 25
        case 'junior_administrative_assistant':
            return 'Junior Administrative Assistant';
            break;
            // 26
        case 'pengelola_administrasi_perkantoran':
            return 'Pengelola Administrasi Perkantoran';
            break;
            // 27
        case 'tata_rias_kecantikan':
            return 'Tata Rias Kecantikan';
            break;
            // 28
        case 'tata_kecantikan_rambut':
            return 'Tata Kecantikan Rambut';
            break;
            // 29
        case 'pembuatan_hiasan_busana_dengan_mesin_bordir':
            return 'Pembuatan Hiasan Busana Dengan Mesin Bordir';
            break;
            // 30
        case 'menjahit_pakaian_dengan_mesin':
            return 'Menjahit Pakaian Dengan Mesin';
            break;
            // 31
        case 'fashion_technology':
            return 'Fashion Technology';
            break;
        default:
            return '-';
            break;
    }
}
