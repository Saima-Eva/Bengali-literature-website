<div class="col-md-8">
    <div class="row visible-xs visible-sm switch-content btm0" data-screen="smx" data-parent-id="panelMenu">
    </div>
    <div class="row visible-xs visible-sm switch-content btm0" data-screen="smx" data-parent-id="shareButtons">
    </div>
    <h1>বাংলা গল্প</h1>
    <div class="about top10 sl-content" data-height="150" data-less-caption="সংক্ষিপ্ত"
         data-more-caption="বিস্তারিত">
        <div class="page-text display-block">
            <p>উপস্থিত সদস্যেরা
                যেমন সমমনা কবি ও সদস্যদের সাথে পরিচিত হতে পারছেন, পাশাপাশি ওয়েবসাইটের সার্বিক আবহে ঋদ্ধ হচ্ছেন
                বাংলা সাহিত্যের কাব্যিক আবেশে। </p>
        </div>
    </div>

    <h2>সাম্প্রতিক গল্প</h2>
    <!--Poem-->
    <div>
      
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="poem">
                <div class="list-options">
                    <div class="clearfix"></div>
                </div>
                <table class="post-list table table-striped table-responsive table-condensed">
                    <tr>
                        <th class="post-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    শিরোনাম
                                </div>
                                <div class="col-sm-6 hidden-xs">লেখক</div>
                            </div>
                        </th>
                        <th class="text-right">মন্তব্য</th>
                    </tr>

                    <?php

                    $view = "SELECT contents.id,contents.content, contents.file, contents.categories, users.id as user_id,users.name as user_name, COUNT(comments.id) AS comments_count
FROM contents
JOIN users ON contents.user = users.id
LEFT JOIN comments ON contents.id = comments.content_id
WHERE categories='গল্প' AND approved = '1'
GROUP BY contents.id  
ORDER BY `contents`.`id`  DESC";
                    $run = mysqli_query($cn, $view);
                    while ($data = mysqli_fetch_array($run)) {

                        ?>


                        <tr class="">
                            <td>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="view.php?id=<?php echo $data['id']; ?>">
                                            <?php
                                            $text = $data['content'];
                                            $stripped = strip_tags($text);
                                            $truncated = substr($stripped, 0, 170);
                                            echo $truncated . "...";
                                            ?>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 author-name">
                                        <span class="author-left"> - </span><a
                                                href="user.php?id=<?php echo $data['user_id']; ?>"><?php echo $data['user_name']; ?> </a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right"><?php echo $data['comments_count']; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>




</div>