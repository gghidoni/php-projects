<form action="solution.php" method="post">
    Enter Char <input type="text" name="char"><br>
    <input type="submit">
</form>

<?php 
$char = $_POST['char'];
$vowels = ' aeiou';

if($char != ""){
    if(strpos($vowels, $char)){
        echo $char . ' is a vowel';
    } else if($char === 'y'){
        echo $char . ' sometimes is a vowel, and sometimes is a consonant.';
    } else {
        echo $char . ' is a consonant.';
    }
} else {
    echo 'Please, enter a char.';
}


?>