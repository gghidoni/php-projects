<form action="solution.php" method="post">
    String <input type="text" name="userString"><br>
    Window With <input type="text" name="winW"><br>
    <input type="submit">
</form>

<?php 
$userString = $_POST['userString'];
$winW = $_POST['winW'];

function centerString($str, $win){
    $strArr = [];
    if(strlen($str) >= $win){
        return $str;
    } else {
        $space = ($win - strlen($str) / 2);
        for($i = 0; $i < $space; $i++){
            array_push($strArr, "_");
        }
        array_push($strArr, $str);
        for($i = 0; $i < $space; $i++){
            array_push($strArr, "_");
        }
        return implode($strArr);
    }
}

echo centerString($userString, $winW);