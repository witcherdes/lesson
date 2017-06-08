<?php
 $a=array("Петя","Вася","Володя");
 if(!in_array($_POST["log"],$a)){
     echo "<div class='lo' style='color: green; float: right'>Логин свободен</div>";
 } else echo "<div class='lo' style='color: red; float: right'>Логин занят!</div>";
?>