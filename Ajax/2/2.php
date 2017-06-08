<?php
 if (isset($_POST["na"])){
     echo json_encode(array("0"=>(array("name"=>"Вася","comment"=>"Мой комментарий")),"1"=>(array("name"=>"Петя","comment"=>"А это мой комментарий"))));
 }
?>