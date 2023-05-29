<?php $msg = '';
if (isset($_REQUEST['dlt'])) {
    if ($_REQUEST['dlt'] == true) {
        $msg = "<b style='color:red'>Successfully Removed.</b>";
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
                            সদস্যবৃন্দ
                        </h2>
                        <div id="msg" style="color:green"></div>
                        <?php echo $msg; ?>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ছবি</th>
                                    <th>নাম</th>
                                    <th>লিঙ্গ</th>
                                    <th>ইমেইল</th>
                                    <th>মোবাইল</th>
                                    <th>পেশা</th>
                                    <th>অ্যাকশন</th>

                                </tr>
                            </thead>
                            <tbody>

                            <?php
                            $sl = 0;

                            $view = "SELECT * FROM users";
                            $run = mysqli_query($cn, $view);
                            while ($data = mysqli_fetch_array($run)) {
                                $sl++;

                                ?>


                                <tr>
                                    <th scope="row"><?php echo $sl; ?></th>
                                    <td><img src="../user/uploads/dps/<?php echo $data['photo'];?>" width="50px" width="60px"/></td>
                                    <td><?php echo $data['name'];?></td>
                                    <td><?php echo $data['gender']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['phone']; ?></td>
                                    <td><?php echo $data['occupation']; ?></td>








                                    <td>
                                        <button type="button" class="btn bg-pink waves-effect">
                                            <a href="dlt-user.php?id=<?php echo $data['id']; ?>"
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