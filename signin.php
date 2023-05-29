<?php
require_once('core/dbcon.php');
require_once('chk.php');
?>




<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>লগইন</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <?php require_once('parts/header_links.php'); ?>
</head>

<body>
<div class="container">
    <?php require_once('parts/header.php'); ?>
    <?php require_once('parts/navbar.php'); ?>

    <div class="row body-content">
        <?php require_once('parts/page_signin.php'); ?>
        <?php require_once('parts/sidebar.php'); ?>
    </div>

    <?php require_once('parts/footer.php'); ?>
</div>

</body>

</html>
