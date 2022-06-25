<form action="solution-bottle-deposits.php" method="post">
    Bottle < 1L <input type="number" name="minorBottle"><br>
    Bottle > 1L <input type="number" name="greaterBottle"><br>
    <input type="submit">
</form>

<?php 

$minorBottle = $_POST['minorBottle'];
$greaterBottle = $_POST['greaterBottle'];

$total = ($_POST['minorBottle'] * 0.10) + ($greaterBottle * 0.25);

?>

<div>
    <h2><?php echo 'Total is ' . $total . '$'; ?></h2>
</div>