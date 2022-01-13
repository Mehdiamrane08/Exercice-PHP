<?php
$age = $_POST["age"];
echo $age;
if ($age < 18) {
    echo "<script>alert(\"Vous ne pouvez acceder au site\")</script>";
}
else {
    echo "<script>alert(\"Bienvenue\")</script>";
}

?>





