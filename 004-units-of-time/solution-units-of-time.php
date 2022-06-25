<form action="solution-units-of-time.php" method="post">
    Days <input type="number" name="days"><br>
    Hours <input type="number" name="hours"><br>
    Minutes <input type="number" name="minutes"><br>
    Seconds <input type="number" name="seconds"><br>
    <input type="submit">
</form>

<?php 

$totalSeconds = ($_POST['days'] * 86400) + ($_POST['hours'] * 3600) + ($_POST['minutes'] * 60) + ($_POST['seconds'] * 1);


?>

<div>
    <h2>The total seconds is <?php echo $totalSeconds; ?></h2>
</div>