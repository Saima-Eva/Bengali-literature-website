<?php require_once('chk.php'); ?>
<?php

$content_id = $_REQUEST['id'];


if (isset($content_id)) {


    $update = "UPDATE contents SET
                approved ='1'
                WHERE id='$content_id'";
    $run = mysqli_query($cn, $update);
    if ($run) {
        header("location:dashboard.php?approved=true");

    } else {

        echo mysqli_connect_error();
    }
} ?>