<?php
function konv_kej($kej)
{
    switch ($kej) {
        case 'kej_tek_mek':
            return 'Teknologi Mekanik';
            break;
        case 'kej_bangunan':
            return 'Bangunan';
            break;
        case 'kej_otomotif':
            return 'Otomotif';
            break;
        case 'kej_listrik':
            return 'Listrik';
            break;
        case 'kej_tik':
            return 'Teknologi Informasi dan Komunikasi';
            break;
        case 'kej_tn':
            return 'Tata Niaga';
            break;
        case 'kej_aneka':
            return 'Aneka Kejuruan';
            break;
        default:
            return '-';
            break;
    }
}
