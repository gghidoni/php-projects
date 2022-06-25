<?php 


$countPlay = 0;
$resultArr = [];
while($countPlay < 10){
    $countFlip = 0;
    $countRes = 0;
    $tmpRes = 2;
    while($countRes < 2){
        $flip = rand(0, 1);
        if($flip === 0){
            echo ' T ';
        } else {
            echo ' C ';
        }
        if($tmpRes === $flip){
            $countRes++;
        } else {
            $tmpRes = $flip;
            $countRes = 0;
        }
        $countFlip++;
    }

    echo '(' . $countFlip . ' flips)<br>';
    array_push($resultArr, $countFlip);
    $countPlay++;
}

echo '<br>';
echo 'Min flips: ' . min($resultArr) . ', Max flips: ' . max($resultArr) . ', Average: ' . (array_sum($resultArr) / count($resultArr));






?>