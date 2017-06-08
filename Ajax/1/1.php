<?php
 if (isset($_POST["name"])){
     echo "Здравствуйте, ".$_POST["name"]."!";
     echo " P.S. Это метод POST";
 }
if (isset($_GET["name"])){
    echo "Здравствуйте, ".$_GET["name"]."!";
    echo " P.S. Это метод GET";
}
?>