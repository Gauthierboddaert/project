<?php
$ERRORS=array('ok','non numérique','non entier','trop petit','trop grand','trop court','trop long');

function check_string($str, $max, $min=0)
{
    if (strlen($str)>$max) {
        return 6;
    }
    if (strlen($str)<$min) {
        return 5;
    }
    return 0;
}

function check_integer($str, $max, $min=0)
{
    if (!is_numeric($str)) {
        return 1;
    }
    if (!is_integer($str+0)) {
        return 2;
    }
    if ($str+0>$max) {
        return 4;
    }
    if ($str+0<$min) {
        return 3;
    }
    return 0;
}
