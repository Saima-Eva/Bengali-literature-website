<?php
require_once('../core/dbcon.php');
$userId=$_COOKIE['userId'];

$update = "UPDATE users SET
                notification ='0' WHERE ID='$userId'";

$run = mysqli_query($cn, $update);
if ($run) {
    echo "<script>console.log('seen')</script>";
}
