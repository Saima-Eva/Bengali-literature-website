<?php
$msg = '';
$content_id = $_REQUEST['id'];


if (isset($_REQUEST['submit'])) {

$content_text = $_REQUEST['content'];

$file_name = $_FILES['avf']['name'];

$cat = $_REQUEST['category'];


if (!empty($content_text) || !empty($file_name)) {
    move_uploaded_file($_FILES['avf']['tmp_name'], 'uploads/' . $file_name);

    $file_up = "UPDATE contents SET
				file='$file_name'
				WHERE id='$content_id'
				";

    $run = mysqli_query($cn, $file_up);

    $update = "UPDATE contents SET
                categories ='$cat',
                content ='$content_text'
                WHERE id='$content_id'";

    $run = mysqli_query($cn, $update);
    if ($run) {
        $msg = "<b style='color:green'>Successfully Updated</b>";
    } else {

        echo mysqli_connect_error();
    }


}


if (isset($_REQUEST['dlt'])) {
    if ($_REQUEST['dlt'] == true) {
        $msg = "<b style='color:red'>Successfully Deleted.</b>";
    }
}
}


?>


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>কন্টেন্ড আপডেট</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            কন্টেন্ড আপডেট করুন
                        </h2>
                        <?php echo $msg; ?>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <form action="" method="POST" enctype="multipart/form-data">




                                    <?php
                                    $view = "SELECT * FROM contents WHERE id='$content_id'";

                                    $run = mysqli_query($cn, $view);
                                    while ($data = mysqli_fetch_array($run)) {


                                        ?>








                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane animated flipInX active"
                                                 id="Bangla_animation_1">


                                                <div class="row clearfix">
                                                    <div class="col-sm-6">


                                                        <select name="category" id="divisions" class="form-control show-tick">
                                                            <option value="<?php echo $data['categories']; ?>" selected><?php echo $data['categories']; ?></option>

                                                            <option value='কবিতা'>কবিতা</option>
                                                            <option value='গল্প'>গল্প</option>
                                                            <option value='উপন্যাস'>উপন্যাস</option>
                                                            <option value='গান'>গান</option>
                                                        </select>


                                                    </div>

                                                </div>

                                                <div class="body">


                                                    <label for="email_address">কবিতা/গল্প/উপন্যাসঃ</label>

                                                    <textarea id="ckeditor" name="content">
                                                         <?php echo $data['content']; ?>
                                                </textarea>

                                                </div>
                                            </div>

                                            <label for="password">অডিও/ভিডিওঃ</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="file" name="avf">
                                                </div>
                                            </div>




                                            <button class="btn btn-block bg-pink waves-effect" type="submit"
                                                    name="submit"> আপডেট করুন

                                            </button>
                                        </div>
                                    <?php } ?>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>