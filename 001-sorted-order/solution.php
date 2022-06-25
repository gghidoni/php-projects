<?php session_start(); 
$_SESSION['arr'];
?>

<form action="solution.php" method="POST">
    Number <input type="number" name="num"><br>
    <input type="submit" value="invia">
    <input type="submit" value="clean" name="clean">
</form>


<?php 
    if(isset($_POST['clean'])){
        $_SESSION['arr'] = [];
    }
    
    if($_POST['num'] != 0){
        array_push($_SESSION['arr'], $_POST['num']);
    } else {
        array_splice($_SESSION['arr'], 0, 1);
        sort($_SESSION['arr']);
        foreach($_SESSION['arr'] as $val){
            echo $val . '<br>';
        }
    }
        



