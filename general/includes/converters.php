<?php
function convertNumbers($str, $sys = "indi")
{
    $western = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '.');
    $eastern = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩', ',');

    return $sys == "indi" ?
        str_replace($western, $eastern, $str) :
        str_replace($eastern, $western, $str);
}
