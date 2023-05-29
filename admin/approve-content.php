<?php require_once('chk.php'); ?>
<?php

$content_id = $_REQUEST['id'];


if (isset($content_id)) {


    $update = "UPDATE contents SET
                approved ='1'
                WHERE id='$content_id'";
    $run = mysqli_query($cn, $update);

    if ($run) {

        $userId=$_COOKIE['userId'];

        $update = "UPDATE users SET
                notification =notification+1";

        $run = mysqli_query($cn, $update);

        $insert = "INSERT INTO notifications(user_id,content_id) VALUES
                ('$userId','$content_id')";
        $run = mysqli_query($cn, $insert);

        header("location:dashboard.php?approved=true");

    } else {

        echo mysqli_connect_error();
    }
} ?>