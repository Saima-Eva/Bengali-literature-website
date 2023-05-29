<?php require_once('../core/dbcon.php');
if(isset($_COOKIE['admin_logged']) && $_COOKIE['admin_logged'] != null){

    header("location:dashboard.php");
}
?>