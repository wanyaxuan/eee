<?php
function index($nums){
if(!is_numeric($nums)){
    return 'it is not a number';
}
    //判断是否能被2整除
    while($nums%2 == 0){
        $nums = $nums/2;
    }
    //是否能被3整除
    while($nums%3 == 0){
        $nums = $nums/3;
    }
    //被5整除
    while($nums%5 == 0){
        $nums =$nums/5;
    }
    if($nums == 1){
        return $nums;
    }else{
        return 0;
    }

}
echo index(8);
echo index(6);
echo index(14);
?>