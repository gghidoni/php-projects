<form action="solution-day-old-bread.php" method="post">
    Number of old bread <input type="number" name="numOldBread"><br>
    <input type="submit">
</form>


<?php 

$numOldBread = $_POST['numOldBread'];
$totalWithoudDisc = $numOldBread * 3.49;
$discounted = ($totalWithoudDisc * 60) / 100;
$totalPrice = $totalWithoudDisc - $discounted;

echo 'Loaves of bread: ' . $numOldBread . '<br>';
echo 'Total price without discounted: ' . number_format($totalWithoudDisc, 2) . '<br>';
echo 'Discounted: ' . number_format($discounted, 2) . '<br>';
echo 'Total price: ' . number_format($totalPrice, 2);

?>