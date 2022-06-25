
<?php 

$inputArray = [1, 4, 7, 8, 12, 23, 87, 91];

function removeOutliers($arr, $n) {
    $originalArr = $arr;
    sort($arr);
    array_splice($arr, 0, $n);
    array_splice($arr, -$n);
    echo 'Original list: ';
    foreach($originalArr as $val){
        echo $val . ' ';
    }
    echo '<br>';
    echo 'List without outliers: ';
    foreach($arr as $val){
        echo $val . ' ';
    }
}

removeOutliers($inputArray, 2);



?>