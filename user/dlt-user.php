<?php require_once('chk.php'); ?>
<?php

$user_id = $_REQUEST['id'];


if (isset($user_id)) {


    $dlt = "DELETE FROM users WHERE id = '$user_id'";
    $run = mysqli_query($cn, $dlt);
    if ($run) {
        header("location:users.php?dlt=true");
        $msg = "<b style='color:green'>Successfully Deleted.</b>";
    } else {

        echo mysqli_connect_error();
    }
} ?>