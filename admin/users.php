
<?php require_once('admin_chk.php'); ?>
<script src="assets/jq.js"></script>


<!DOCTYPE html>
<html>

<?php require_once('includes/insert_css_headers.php'); ?>

<body class="theme-red">
    <!-- Page Loader -->
    <?php require_once('includes/page_loader.php'); ?>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->
    <?php require_once('includes/top_bar.php'); ?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <?php require_once('includes/side_bar.php'); ?>
        <!-- #END# Left Sidebar -->

    </section>

    <?php require_once('includes/users_list.php'); ?>


    <?php require_once('includes/insert_js_links.php'); ?>

</body>




</html>