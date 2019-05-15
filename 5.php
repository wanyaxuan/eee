<?php

$str =[1,2,3,4,5,6];

print_r(array($str));
function shuzu($array)
{
    $arr=[];
    $asd=[];
    foreach($array as $k => $v)
    {
        if($arr%2 == 1)
        {
            $arr[]=$v;
        }else if($asd%2 == 0)
        {
            $asd[]=$v;
        }
    }
    //返回值
    return json_encode(array_merge($arr,$asd));
}
?>