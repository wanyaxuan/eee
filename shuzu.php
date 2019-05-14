<?php

function qing($num){
    if($num==1){
        return 1;
    }else if($num==2){
        return 2;
    }else{
        return qing($num-1)+qing($num-2);
    }

}
echo qing(10);
?>