<?php 

$cents_number = 22;

$toonie =  $cents_number / 200;
$loonie = ($cents_number % 200) / 100;
$quarter = ($cents_number % 100) / 25;
$dime = ($cents_number % 25) / 10;
$nickel = (($cents_number % 25) % 10) / 5;
$penny = ((($cents_number % 25) % 10) % 5) / 1;

echo 'toonie: ' . floor($toonie) . ', loonie: ' . floor($loonie) . ', quarter: ' .  floor($quarter) . ', dime: ' . floor($dime) . ', nickel: ' . floor($nickel) . ', penny: ' . floor($penny);



?>