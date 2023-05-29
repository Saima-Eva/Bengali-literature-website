<?php  $id = $_REQUEST['id'];

$view = "SELECT * FROM users WHERE id='$id'";
$run = mysqli_query($cn, $view);
$data = mysqli_fetch_array($run);
?>
<div class="col-md-8">
            <div class="row visible-xs visible-sm switch-content btm0" data-screen="smx" data-parent-id="panelMenu">
            </div>
            <div class="row visible-xs visible-sm switch-content btm0" data-screen="smx" data-parent-id="shareButtons">
            </div>
            <div itemscope itemtype="http://schema.org/Person">
                <meta itemprop="image" content="../images/up/0/pp19626-Ac5.jpg"/>
                <meta itemprop="url" content="index.html"/>

                <h1>
                    <span itemprop="name"><?php echo $data['name'];?></span>
                </h1>
                <div class="row">
                    <div class="col-sm-4 ">
                        <div class="pic user-pic">
                            <img src="user/uploads/dps/<?php echo $data['photo'];?>" title=" <?php echo $data['name'];?>-এর প্রোফাইল ছবি"
                                 alt="<?php echo $data['name'];?>"/>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <table class="table table-striped table-responsive">


                            <tr>
                                <th>
                                    লিঙ্গ
                                </th>
                                <td>
                                    <?php echo $data['gender'];?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    পেশা
                                </th>
                                <td>
                                    <?php echo $data['occupation'];?>
                                </td>
                            </tr>
                            <tr>
                                <th>জাতীয়তা
                                </th>
                                <td>
                                    <span itemprop="hasCredential"><?php echo $data['nationality'];?></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <h2>
                    <span itemprop="name"> বায়োঃ</span>
                </h2>
                <div itemprop="description" class="about top10 sl-content" data-height="100"
                     data-less-caption="সংক্ষিপ্ত" data-more-caption="বিস্তারিত">
                    <p><?php echo $data['bio'];?></p>
                </div>

                <br/>
                <div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a title="Poems" href="#poem" aria-controls="poem" role="tab" data-toggle="tab">সকল লেখা</a>
                        </li>
                    </ul>
                    <div class="tab-content top20">
                        <div role="tabpanel" class="tab-pane active" id="poem">


                            <table class="post-list table table-striped table-responsive table-condensed">
                                <tr>
                                    <th class="post-title">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                শিরোনাম
                                            </div>
                                            <div class="col-sm-6 hidden-xs">কেটেগরি</div>
                                        </div>
                                    </th>
                                    <th class="text-right">মন্তব্য</th>
                                </tr>

                                <?php

                                $view = "SELECT contents.id,contents.content, contents.file, contents.categories, users.id as user_id,users.name as user_name, COUNT(comments.id) AS comments_count
FROM contents
JOIN users ON contents.user = users.id
LEFT JOIN comments ON contents.id = comments.content_id
WHERE users.id='$id'
GROUP BY contents.id  
ORDER BY `contents`.`id`  DESC";
                                $run = mysqli_query($cn, $view);
                                while ($data = mysqli_fetch_array($run)) {

                                    ?>


                                    <tr class="">
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a href="view.php?id=<?php echo $data['id']; ?>">       <?php
                                                        $text = $data['content'];
                                                        $stripped = strip_tags($text);
                                                        $truncated = substr($stripped, 0, 170);
                                                        echo $truncated . "...";
                                                        ?></a>
                                                </div>
                                                <div class="col-sm-6 author-name">
                                                    <span class="author-left"> - </span><a
                                                            href="user.php?id=<?php echo $data['user_id']; ?>"><?php echo $data['categories']; ?> </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right"><?php echo $data['comments_count']; ?></td>
                                    </tr>
                                <?php } ?>
                            </table>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ad-wide">
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9365325991113290"
                     data-ad-slot="2008035413" data-ad-format="horizontal"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>