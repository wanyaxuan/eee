<?php
$array = [2,4,3,6,3,2,5,5];
function number($array){
    $num_arr=array_count_values($array);
    foreach($array as $v => $k){
        if($v == 1){
            $num_arr= $k;
        }
    }
    return $num_arr;
}
var_dump(number($array));
?>