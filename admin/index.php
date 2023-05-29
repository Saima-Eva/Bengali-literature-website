<?php require_once('../core/dbcon.php'); ?>
<?php
require_once('chk.php');

$invalid = "";

if (isset($_REQUEST['submit'])) {
    $uname = $_REQUEST['username'];
    $pass = $_REQUEST['password'];
    $a1 = "admin";
    $p1 = "112233";
    if (isset($_COOKIE['admin_logged'])) {
        if ($_COOKIE['admin_logged'] == 786) {
            header("location:dashboard.php");
        }
    }

    if ($uname == $a1 && $pass == $p1) {
        setcookie('admin_logged', '786', time() + (86400 * 30));
        header("location:dashboard.php");

    } else {
        $invalid = "Invalid UserName or Password";
    }

}

?>

<!DOCTYPE html>
<html>

<?php require_once('includes/insert_css_headers.php'); ?>

<body class="login-page">
<div class="login-box">
    <div class="logo">
        <a href="">এডমিন প্যানেল লগিন</a>
        <small>এডমিন প্যানেল - সাহিত্য ও সাংস্কৃতিক প্রাঙ্গনে</small>
    </div>
    <div class="card">
        <div class="body">
            <form id="sign_in" method="POST">
                <div class="msg">Sign in to start your session</div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" placeholder="Username" required
                               autofocus>
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="col-xs-4">
                        <button class="btn btn-block bg-pink waves-effect" type="submit" name="submit">SIGN IN</button>
                    </div>
                </div>
                <div class="msg"><font color="red"><?php echo $invalid; ?></font></div>
            </form>
        </div>
    </div>
</div>

<?php require_once('includes/insert_js_links.php'); ?>

<script src="assets/js/pages/examples/sign-in.js"></script>
</body>

</html>