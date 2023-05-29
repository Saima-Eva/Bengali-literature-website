<?php $msg = '';
if (isset($_REQUEST['dlt'])) {
    if ($_REQUEST['dlt'] == true) {
        $msg = "<b style='color:red'>Successfully Deleted.</b>";
    }
}


?>
<section class="content">
    <div class="container-fluid">


        <!-- Hover Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            কন্টেন্ড তালিকা

                        </h2>
                        <div id="msg" style="color:green"></div>
                        <?php echo $msg; ?>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>কেটেগরি</th>
                                <th>কন্টেন্ড</th>
                                <th>কার্যক্রম</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $sl = 0;
                            $userId = $_COOKIE['userId'];

                            $view = "SELECT * FROM contents WHERE user='$userId' AND approved='1'";
                            $run = mysqli_query($cn, $view);
                            while ($data = mysqli_fetch_array($run)) {
                                $sl++;

                                ?>


                                <tr>
                                    <th scope="row"><?php echo $sl; ?></th>
                                    <td><?php echo $data['categories']; ?></td>
                                    <td>
                                        <?php
                                        $text = $data['content'];
                                        $stripped = strip_tags($text);
                                        $truncated = substr($stripped, 0, 170);
                                        echo $truncated . "...";
                                        ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn bg-teal waves-effect">
                                            <a href="edit-content.php?id=<?php echo $data['id']; ?>">
                                                <i class="material-icons">border_color</i>
                                                <span style="color:white">Edit</span>
                                            </a>
                                        </button>
                                        <button type="button" class="btn bg-pink waves-effect">
                                            <a href="dlt-content.php?id=<?php echo $data['id']; ?>"
                                               onclick="return confirm('Are You Sure?')">
                                                <i class="material-icons">delete</i>
                                                <span style="color:white">Delete</span>
                                            </a>
                                        </button>

                                    </td>
                                </tr>


                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>