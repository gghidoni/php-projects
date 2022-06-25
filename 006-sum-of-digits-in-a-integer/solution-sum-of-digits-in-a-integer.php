<form action="solution-sum-of-digits-in-a-integer.php" method="post">
    Enter number <input type="number" name="userNum"><br>
    <input type="submit">
</form>

<?php 

$userNum = $_POST['userNum'];
$userNumArr = str_split($userNum);


?>

<div>
    <h2>
        <?php foreach($userNumArr as $num) : ?>
            <?php echo $num; ?>
            <?php if($num != end($userNumArr)){
                echo ' + ';
            } ?>
        <?php endforeach; ?>
        <?php echo ' = ' . array_sum($userNumArr); ?>
    </h2>
</div>