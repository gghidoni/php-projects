<form action="solution-dog-years.php" method="post">
    Years <input type="number" name="humanYears"><br>
    <input type="submit">
</form>

<?php 

$humanYears = $_POST['humanYears'];
$dogYears = 0;

if($humanYears > 0){
    if($humanYears <= 2) {
        $dogYears = $humanYears * 10.5;
    } else {
        $dogYears = (($humanYears - 2) * 4) + 21;
    }
    echo 'The dog years are ' . $dogYears;
} else {
    echo 'Please, enter positive number';
}


?>