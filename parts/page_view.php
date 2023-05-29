<?php $id = $_REQUEST['id'];
$view = "SELECT contents.id,contents.content, contents.file, contents.categories, users.id as user_id,users.name as user_name, COUNT(comments.id) AS comments_count
FROM contents
JOIN users ON contents.user = users.id
LEFT JOIN comments ON contents.id = comments.content_id
WHERE contents.id='$id'
GROUP BY contents.id";
$run = mysqli_query($cn, $view);
$data = mysqli_fetch_array($run);

$msg='';
if (isset($_REQUEST['submit'])) {

    $userId=$_COOKIE['userId'];
    $comment = $_REQUEST['comment'];


    if (!empty($comment)) {


        $insert_comment = "INSERT INTO comments(user_id,content_id,comments) VALUES
                ('$userId','$id','$comment')";
        $run = mysqli_query($cn, $insert_comment);
        if ($run) {

            $msg = "<b style='color:green'>মন্তব্য যোগ হয়েছে।</b>";
        } else {

            echo mysqli_connect_error();
        }

    } else {
        echo mysqli_connect_error();
        $msg = "<b style='color:red'>মন্তব্য লিখুন</b>";
    }
}


?>

<div class="col-md-8">

    <div itemscope itemtype="http://schema.org/CreativeWork">
        <br/>

        <?php echo $data['content']; ?>

        <br/>
        <?php

        $file_path = "user/uploads/" . $data['file'];
        $mime_type = mime_content_type($file_path);
        echo $data['file'];
        $is_audio = in_array($mime_type, array(
            "audio/mpeg",
            "audio/mp3",
            "audio/x-wav",
            "audio/x-m4a"
        ));

        $is_video = in_array($mime_type, array(
            "video/mp4",
            "video/mpeg",
            "video/quicktime",
            "video/x-msvideo"
        ));

        if ($is_audio) {
            echo "<br>
                        <audio controls>
                          <source src='$file_path' type='audio/mpeg'>
                          Your browser does not support the audio element.
                        </audio>";
        } else if ($is_video) {
            echo "<br>
                    <video width='520' height='440' controls>
                      <source src='$file_path' type='video/mp4'>
                      Your browser does not support the video tag.
                    </video>";
        } else {
            echo "No Audio/Video";
        }


        ?>

        <br/>


<?php if(isset($_COOKIE['userId']) && $_COOKIE['userId'] != null){
    ?>
    <div id="add-comment">
        <?php echo $msg;?>
        <h2>মন্তব্য যোগ করুন</h2>
        <p class="display-block">
            আপনার মন্তব্য জানাতে নিচের ফরমটি ব্যবহার করুন।
        </p>

        <div id="comment-form" class="form-horizontal gray-box">
            <form action="" method="post">

                <div class="add-comment">

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="CommentContent">আপনার মন্তব্য</label>
                        <div class="col-sm-9">
                                        <textarea class="form-control" cols="20" data-val="true"
                                                  data-val-required="আপনার মন্তব্য দিতে হবে।" id="CommentContent"
                                                  name="comment" rows="2"
                                                  style="min-height:100px;"></textarea>
                            <span class="field-validation-valid" data-valmsg-for="CommentContent"
                                  data-valmsg-replace="true"></span>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <input type="submit" name="submit" value="মন্তব্য যোগ করুন" class="btn btn-default"/>
                            <input type="reset" value="বাতিল করুন" class="btn btn-primary"
                                   onclick="return resetForm()"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

        <?php
} else{ ?>
    <h2>মন্তব্য যোগ করতে লগইন করুন।</h2>


<?php }?>

        <a title="Comments" name="comments"></a>
        <h2>মন্তব্যসমূহ</h2>
        <ul class="comments">
            <?php

            $view = "SELECT comments.id,comments.content_id, comments.comments, comments.time, users.name
FROM comments
JOIN users ON comments.user_id = users.id
WHERE comments.content_id='$id'  
ORDER BY `comments`.`id`  DESC";
            $run = mysqli_query($cn, $view);
            while ($data = mysqli_fetch_array($run)) {

                ?>


                <li itemprop="comment">
                    <div class="comment-header ">
<span itemprop="author">
<?php echo $data['name']; ?>
</span>
                        <span class="comment-date"> <?php echo $data['time']; ?></span>
                        <div class="clearfix"></div>
                    </div>
                    <div class="comment " itemprop="text">
                        <p><?php echo $data['comments']; ?></p>
                    </div>

                </li>


            <?php } ?>
        </ul>
        <div class="clearfix"></div>

    </div>
</div>