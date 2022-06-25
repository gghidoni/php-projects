<?php 

function randomLottery(){
    $arr = [];
    while(count($arr) < 6){
        $num = rand(1,49);
        if(!in_array($num, $arr)){
            array_push($arr, rand(1,49));
        }
    }
    foreach($arr as $val){
        echo $val . ' ';
    }
}

randomLottery();






?>