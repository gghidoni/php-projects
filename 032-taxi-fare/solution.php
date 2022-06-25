<form action="solution.php" method="post">
    KM <input type="number" name="km"><br>
    <input type="submit">
</form>

<?php 
$km = $_POST['km'];

function taxiFare($kmInput){
    return (($kmInput / 0.140) * 0.25) + 4;
}

echo 'Total taxi fare: ' . number_format(taxiFare($km), 2) . ' euro';