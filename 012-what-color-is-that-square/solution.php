<form action="solution.php" method="post">
    Cell <input type="text" name="userCell"><br>
    <input type="submit">
</form>

<?php 
$userCell = $_POST['userCell'];
$userCellColumn = str_split($userCell)[0];
$userCellRow = str_split($userCell)[1];

$columnEvenBlack = ['b', 'd', 'f', 'h'];

if(in_array($userCellColumn, $columnEvenBlack)){
    if($userCellRow % 2 === 0){
        echo 'black';
    } else {
        echo 'white';
    }
} else {
    if($userCellRow % 2 === 0){
        echo 'white';
    } else {
        echo 'black';
    }
}