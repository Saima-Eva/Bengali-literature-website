<?php
require_once('../core/dbcon.php');
$msg = '';
$userId = $_COOKIE['userId'];


if (isset($_REQUEST['upload_dp'])) {

    $file_name = $_FILES['dp']['name'];


    if (!empty($file_name)) {
        move_uploaded_file($_FILES['dp']['tmp_name'], 'uploads/dps/' . $file_name);

        $file_up = "UPDATE users SET
				photo='$file_name'
				WHERE id='$userId'";
        $run = mysqli_query($cn, $file_up);
        if ($run) {
            header("location:profile.php?updated=true");
        } else {

            echo mysqli_connect_error();
        }
    }
}

if (isset($_REQUEST['submit'])) {

    $name = $_REQUEST['name'];
    $gen = $_REQUEST['gender'];
    $email = $_REQUEST['email'];
    $bio = $_REQUEST['bio'];
    $phone = $_REQUEST['phone'];
    $occu = $_REQUEST['occupation'];
    $nation = $_REQUEST['nationality'];

    $update = "UPDATE users SET
                name ='$name',
                gender ='$gen',
                email ='$email',
                bio ='$bio',
                phone ='$phone',
                occupation ='$occu',
                nationality ='$nation'
                WHERE id='$userId'";

    $run = mysqli_query($cn, $update);

    if ($run) {
        header("location:profile.php?updated=true");
    } else {

        echo mysqli_connect_error();
    }

}


?>
