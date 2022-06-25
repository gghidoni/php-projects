<form action="solution.php" method="post">
    Month <input type="text" name="userMonth"><br>
    <input type="submit">
</form>

<?php 
$userMonth = $_POST['userMonth'];
$thirtyDay = ['November', 'April', 'June', 'September'];

if(in_array($userMonth, $thirtyDay)){
    echo $userMonth . ' has 30 days.';
} else if ($userMonth === 'February'){
    echo $userMonth . ' has 28 or 29 days.';
} else {
    echo $userMonth . ' has 31 days.';
}