<?php require_once('core/dbcon.php');
if(isset($_COOKIE['userId']) && $_COOKIE['userId'] != null){

    header("location:user/dashboard.php");
 }
?>