<?php 

$totalSeconds = 506129;

$days =  $totalSeconds / 86400;
$hours = ($totalSeconds % 86400) / 3600;
$minutes = ($totalSeconds % 3600) / 60;
$seconds = ($totalSeconds % 60) / 1;


echo floor($days) . ':' . sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);



?>