<?php

// konversi pendidikan ke string
function konv_pendidikan($pend)
{
    switch ($pend) {
        case 'sd':
            return 'SD';
            break;
        case 'smp':
            return 'SMP';
            break;
        case 'mts':
            return 'MTS';
            break;
        case 'sma':
            return 'SMA';
            break;
        case 'smk':
            return 'SMK';
            break;
        case 'ma':
            return 'MA';
            break;
        case 'd1':
            return 'D1';
            break;
        case 'd2':
            return 'D2';
            break;
        case 'd3':
            return 'D3';
            break;
        case 'd4':
            return 'D4';
            break;
        case 's1':
            return 'S1';
            break;
        case 's2':
            return 'S2';
            break;
        case 's3':
            return 'S3';
            break;
        default:
            # code...
            break;
    }
}
