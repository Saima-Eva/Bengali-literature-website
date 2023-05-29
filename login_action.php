<?php
require_once('core/dbcon.php');
if (isset($_COOKIE['uLogged'])) {
    if ($_COOKIE['uLogged'] == 777) {
        header("location:dashboard.php");
    }
}
$invalid = "";


if (isset($_REQUEST['submit'])) {
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];

    $sql = "select * from users where email = '$email' and password = '$pass'";
    $result = mysqli_query($cn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);


    if ($count >0) {


        setcookie('userId',$row['id'], time() + (86400 * 30));
        setcookie('uLogged', '777', time() + (86400 * 30));
        header("location:user/dashboard.php");

    } else {
          header("location:signin.php?msg=<b style='color:red'>দুঃখিত। সঠিক ইমেইল/পাসওয়ার্ড প্রদান করুন।...</b>");
    }

}

?>