<div class="col-md-4">
    <div class="share-on-social">
        শেয়ার করুন: &nbsp;
        <a class="share-facebook" title="Share on Facebook" rel="external noopener nofollow"
           href=""
           aria-label="Share on Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path id="facebook"
                      d="M29,16.07912A13,13,0,1,0,13.96875,28.94694V19.84447H10.668V16.07912h3.30078v-2.8698c0-3.26466,1.94081-5.06795,4.91029-5.06795a19.95289,19.95289,0,0,1,2.91.25441v3.20563H20.14979a1.88079,1.88079,0,0,0-2.11854,2.03423v2.44348h3.60547l-.57637,3.76535h-3.0291v9.10247A13.02132,13.02132,0,0,0,29,16.07912"
                      fill="#262626"/>
            </svg>
        </a>
        <a class="share-twitter" title="Share on Twitter" rel="external noopener nofollow"
           href="" aria-label="Share on Twitter">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path id="twitter"
                      d="M26.32865,10.20428c.01043.22891.01043.45778.01043.6867A15.18194,15.18194,0,0,1,2.99214,23.68808a10.26487,10.26487,0,0,0,1.26929.07283A10.70029,10.70029,0,0,0,10.8889,21.472a5.33486,5.33486,0,0,1-4.9836-3.70387,5.36636,5.36636,0,0,0,2.40336-.09364,5.34632,5.34632,0,0,1-4.2761-5.23331v-.07283a5.39627,5.39627,0,0,0,2.41374.6659A5.35659,5.35659,0,0,1,4.79205,5.90738,15.1498,15.1498,0,0,0,15.78924,11.484a5.89821,5.89821,0,0,1-.13524-1.21727,5.33642,5.33642,0,0,1,9.22847-3.65189,10.61188,10.61188,0,0,0,3.3918-1.2901A5.368,5.368,0,0,1,25.9229,8.27951a10.81127,10.81127,0,0,0,3.06924-.84274A10.868,10.868,0,0,1,26.32865,10.20428Z"
                      fill="#262626"/>
            </svg>
        </a>
        <a class="share-linkedin" title="Share on LinkedIn" rel="external noopener nofollow"
           href="" aria-label="Share on LinkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path id="linkedin"
                      d="M26.22362,4H5.77133A1.75177,1.75177,0,0,0,3.99985,5.72983V26.26822A1.75294,1.75294,0,0,0,5.77133,28H26.22362a1.75631,1.75631,0,0,0,1.77653-1.73177V5.72983A1.75514,1.75514,0,0,0,26.22362,4ZM11.118,24.45115H7.55811V12.99771H11.118ZM9.33887,11.432a2.06388,2.06388,0,1,1,2.06281-2.06453A2.06444,2.06444,0,0,1,9.33887,11.432Zm15.112,13.01918h-3.5573V18.88134c0-1.32878-.02441-3.03719-1.84977-3.03719-1.85237,0-2.136,1.447-2.136,2.941v5.666H13.35058V12.99771h3.41471v1.56487h.04738a3.73973,3.73973,0,0,1,3.368-1.84993c3.60464,0,4.27018,2.37223,4.27018,5.456Z"
                      fill="#262626"/>
            </svg>
        </a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="mid-col">
                <div class="search-box">
                    <h4>সাহিত্য ও সাংস্কৃতিক প্রাঙ্গন</h4>

                    <h4>সার্চ করুন</h4>
                    <form action="search.php" method="post">

                        <input id="q" name="search"
                               placeholder=" কবিতা ,গল্প ,উপন্যাস ,গান"
                               type="text" class="form-control"/>
                        <input id="s" name="submit" class="btn btn-primary" type="submit" value="সার্চ!"/>
                    </form>
                    <div class="clearfix"></div>
                    <p class="display-block">
                        কবিতা ,গল্প ,উপন্যাস ,গান ,খুঁজে বের করার জন্য উপরের সার্চ বক্সটি ব্যবহার করুন।
                    </p>

                </div>

                <div id="panelMenu" name="panelMenu">
                </div>

                <div class="panel-box">
                    <h2>খ্যাতিমান কবি</h2>
                    <p>বাংলার খ্যাতিমান কবিদের কবিতা পড়তে চাইলে নিচের তালিকা থেকে যেকোন একজন কবির নামের উপর
                        ক্লিক করুন।</p>
                    <ul class="item-list">
                        <?php

                        $view = "SELECT * FROM `users` WHERE aa='1' ORDER BY `users`.`id`  DESC;";
                        $run = mysqli_query($cn, $view);
                        while ($data = mysqli_fetch_array($run)) {

                            ?>


                            <li itemscope>
                                <a title="<?php echo $data['name']; ?>"
                                   href="user.php?id=<?php echo $data['id']; ?>"><span
                                            itemprop="name"><?php echo $data['name']; ?></span></a>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
                <div class="panel-box">
                    <h2>বিষয়শ্রেণী</h2>
                    <p>নির্দিষ্ট কোন বিষয়শ্রেণীর উপর লেখা বাংলার খ্যাতিমান কবিদের কবিতা পড়তে চাইলে নিচের তালিকা
                        থেকে বিষয়শ্রেণীর উপর ক্লিক করুন।</p>
                    <ul class="item-list">
                        <li><a title="Rhymes" href="poems.php">কবিতা</a></li>
                        <li><a title="Realistic Poems" href="stories.php">গল্প</a>
                        </li>
                        <li><a title="Patriotic Poems" href="nobels.php">উপন্যাস</a>
                        </li>
                        <li><a title="Patriotic Poems" href="songs.php">গান
                            </a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>