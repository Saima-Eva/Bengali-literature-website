

<div class="col-md-8">
    <div class="row visible-xs visible-sm switch-content btm0" data-screen="smx" data-parent-id="panelMenu">
    </div>
    <div class="row visible-xs visible-sm switch-content btm0" data-screen="smx" data-parent-id="shareButtons">
    </div>
    <h1>সাহিত্য ও সাংস্কৃতিক প্রাঙ্গন</h1>
    <div class="about top10 sl-content" data-height="150" data-less-caption="সংক্ষিপ্ত"
         data-more-caption="বিস্তারিত">
        <div class="page-text display-block">
            <p>এই ওয়েবসাইট বাংলা সাহিত্যের প্রচার ও সংরক্ষণ করবে। এটি প্রদর্শনের জন্য একটি প্ল্যাটফর্ম হিসাবে পরিবেশন করতে পারে
                বাংলা সাহিত্যের সমৃদ্ধ ঐতিহ্য ও বৈচিত্র্যময় সাহিত্য ঐতিহ্য। এটা কাজ প্রচার করা হবে
                বাঙালি লেখকদের। এটি সমসাময়িক এবং ক্লাসিক কাজের প্রচারের জন্য একটি প্ল্যাটফর্ম হিসাবে ব্যবহার করা হবে
                বাঙালি লেখকরা, তাদের কাজ এবং প্রতিভাকে বৃহত্তর শ্রোতাদের কাছে আরও অ্যাক্সেসযোগ্য করে তোলে। আমাদের ওয়েবসাইট
                পাঠকদের বুঝতে সাহায্য করার জন্য অধ্যয়ন গাইড, বিশ্লেষণ এবং ভাষ্যের মতো সংস্থান সরবরাহ করবে
                এবং বাংলা সাহিত্যের প্রশংসা করুন। এটি সাহিত্যিক আলোচনার কেন্দ্র হিসাবে কাজ করতে পারে, একটি ফোরাম বৈশিষ্ট্যযুক্ত
                বা মন্তব্য বিভাগ যেখানে পাঠকরা তাদের চিন্তাভাবনা ভাগ করে নিতে পারে এবং সাহিত্যিক আলোচনায় জড়িত হতে পারে। এটা
                নতুন বাঙালি লেখকদের তাদের প্রতিভা শেয়ার করতে এবং এক্সপোজার অর্জনের জন্য একটি প্ল্যাটফর্ম প্রদান করতে পারে। এটাও পারে
                বাংলা ভাষায় প্রবেশাধিকার প্রদানের মাধ্যমে বাংলা ভাষা এবং এর সংস্কৃতির প্রচারের একটি প্ল্যাটফর্ম হিসাবে কাজ করে
                সাহিত্য এবং ভাষা সম্পদ। এটি প্রবেশাধিকার প্রদান করে বিনোদনের উত্স হিসাবে পরিবেশন করতে পারে
                কথাসাহিত্য, কবিতা এবং প্রবন্ধ সহ বিভিন্ন বাংলা সাহিত্য। আমাদের লক্ষ্য এটা সহজ করা
                পাঠকদের নতুন এবং পুরানো কাজগুলি আবিষ্কার করতে এবং সমসাময়িক লেখকদের জন্য একটি প্ল্যাটফর্ম সরবরাহ করতে
                তাদের প্রতিভা প্রদর্শন.</p>
        </div>
    </div>

    <h2>সাম্প্রতিক সংযোজন</h2>
    <!--Poem-->
    <div>
        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active">
                <a title="Poem" href="#poem">
                    কবিতা
                </a>
            </li>

        </ul>
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
WHERE categories='কবিতা' AND approved = '1'
GROUP BY contents.id  
ORDER BY `contents`.`id`  DESC LIMIT 6";
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

    <!--Story-->
    <div>
        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active">
                <a title="Story" href="#story">
                    গল্প
                </a>
            </li>

        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="story">
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
ORDER BY `contents`.`id`  DESC LIMIT 6";
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


    <!--Nobel-->
    <div>
        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active">
                <a title="Nobel" href="#Nobel">
                    উপন্যাস
                </a>
            </li>

        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="Nobel">
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
WHERE categories='উপন্যাস' AND approved = '1'
GROUP BY contents.id  
ORDER BY `contents`.`id`  DESC LIMIT 6";
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