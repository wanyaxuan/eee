<?php
$n=1;
$m=5;

function he($n,$m){

    $res=range($n,$m);
    $res1=array_sum($res);
    return $res1;
}
var_dump(he($n,$m))
?>