<?php
function konv_alumni($alumni)
{
    switch ($alumni) {
        case true:
            return 'Ya';
            break;
        case false:
            return 'Bukan';
            break;
        default:
            return '-';
            break;
    }
}
