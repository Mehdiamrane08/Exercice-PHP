<?php
$date = $_POST ["date"];
$dateact = date("Y");
$datecalcul = $dateact - $date;
echo $date;

if ($datecalcul <= 18 ) {
    echo "<script>alert(\"Vous ne pouvez acceder au site\")</script>";
}
else {
    echo "<script>alert(\"Bienvenue\")</script>";
}
?>