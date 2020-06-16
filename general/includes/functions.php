<?php
function splitString($string, $delemiter){
    $count = count(str_split($string));
    $start = 0; $end = 0;
    $output = [];

    for( ; $end < $count; $end++){
        if($string[$end] == $delemiter){
            $temp = "";
            for($i = $start; $i < $end; $i++){
                $temp .= $string[$i];
            }

            $output[] = $temp;
            $start = ++$end;
            continue;
        }elseif($end == $count - 1){
            $temp = "";
            for($i = $start; $i <= $end; $i++){
                $temp .= $string[$i];
            }

            $output[] = $temp;
        }
    }
    return $output;
}