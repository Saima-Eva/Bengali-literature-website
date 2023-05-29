<?php
$msg = '';


if (isset($_REQUEST['submit'])) {

    $content_text = $_REQUEST['content'];


    $file_name = $_FILES['avf']['name'];


    $cat = $_REQUEST['category'];


    if (!empty($content_text)|| !empty($file_name)) {
        $userId=$_COOKIE['userId'];

            move_uploaded_file($_FILES['avf']['tmp_name'], 'uploads/' . $file_name);


            $insert = "INSERT INTO contents(user,categories,content,file) VALUES
                ('$userId','$cat','$content_text','$file_name')";
            $run = mysqli_query($cn, $insert);
            if ($run) {

                $msg = "<b style='color:green'>Successfully Added</b>";
            } else {

                echo mysqli_connect_error();
            }

    } else {
        echo mysqli_connect_error();
        $msg = "<b style='color:red'>Please Fill the Box</b>";
    }
}



?>


<section class="content">
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            নতুন কন্টেন্ড যুক্ত করুনঃ

                        </h2>
                        <?php echo $msg; ?>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <form action="" method="POST" enctype="multipart/form-data">

                                    <div class="row clearfix">
                                        <div class="col-sm-6">


                                            <select name="category" id="divisions" class="form-control show-tick">
                                                <option value='কবিতা'>কবিতা</option>
                                                <option value='গল্প'>গল্প</option>
                                                <option value='উপন্যাস'>উপন্যাস</option>
                                                <option value='গান'>গান</option>
                                            </select>


                                        </div>

                                    </div>
                                    <!-- Tab panes -->
                                    <div class="tab-content"><label for="content">কবিতা/গল্প/উপন্যাসঃ</label>
                                        <div role="tabpanel" class="tab-pane animated flipInX active"
                                             id="Bangla_animation_1">
                                            <div class="body">





                                                <textarea id="ckeditor" name="content">

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
                                                name="submit"> যুক্ত করুন
                                        </button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>


