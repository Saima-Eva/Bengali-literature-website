<?php require_once('chk.php'); ?>
<?php

$content_id = $_REQUEST['id'];


if (isset($content_id)) {


    $dlt = "DELETE FROM contents WHERE id = '$content_id'";
    $run = mysqli_query($cn, $dlt);
    if ($run) {
        header("location:contents.php?dlt=true");
        $msg = "<b style='color:green'>Successfully Deleted.</b>";
    } else {

        echo mysqli_connect_error();
    }
} ?>