<?php
function konv_hari($hari)
{
    switch ($hari) {
        case 'Sunday':
            return "Minggu";
            break;

        case 'Monday':
            return "Senin";
            break;

        case 'Tuesday':
            return "Selasa";
            break;

        case 'Wednesday':
            return "Rabu";
            break;

        case 'Thursday':
            return "Kamis";
            break;

        case 'Friday':
            return "Jumat";
            break;

        case 'Saturday':
            return "Sabtu";
            break;

        default:
            return "Tidak di ketahui";
            break;
    }
}
