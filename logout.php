<?php

setcookie("uLogged", "", time() - (86400 * 30));
setcookie("userId", "", time() - (86400 * 30));
setcookie("admin_logged", "", time() - (86400 * 30));
header("refresh:0");
header("location:index.php");


?>