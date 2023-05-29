<?php


setcookie("admin_logged", "", time() - (86400 * 30));
header("refresh:0");
header("location:index.php");


?>