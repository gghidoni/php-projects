<form action="solution.php" method="post">
    Num. articles <input type="number" name="numArticles"><br>
    <input type="submit">
</form>

<?php 
$numArticles = $_POST['numArticles'];

function shippingCalculator($art){
    if($art > 0){
        
        if($art === 1){
            return 10.99;
        } else {
            return (($art - 1) * 2.99) + 10.99;
        }
    //    return ($art = 1) ? 10.99 : (($art - 1) * 2.99) + 10.99; 
    } else {
        echo 'please, enter valid number';
    }
}


echo 'total shipping price: ' . shippingCalculator($numArticles) . ' euro';