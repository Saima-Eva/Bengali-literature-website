<header>
        <div class="banner-right">
            <ul>
                <?php

                if(isset($_COOKIE['userId']) && $_COOKIE['userId'] != null){
                    ?>
                    <li><i class="icon icon-check"></i> <a title="প্রোফাইল" href="user/profile.php">প্রোফাইল</a>
                    </li>
                    <li><i class="icon icon-log-out"></i> <a title="লগআউট" href="logout.php">লগআউট</a>
                    </li>
                <?php

                }else{
                    ?>

                    <li><i class="icon icon-check"></i> <a title="Register as a member" href="signup.php">রেজিস্ট্রেশন</a>
                    </li>
                    <li><i class="icon icon-log-in"></i> <a title="Login" href="signin.php">লগ ইন</a></li>
                <?php

                }
                ?>

            </ul>
            <form action="" method="post"><select id="Language"
                                                                                                   name="Language"
                                                                                                   onchange="this.form.submit()">
                    <option value="Bangla" selected="selected">বাংলা</option>
                    <option value="English">English</option>
                </select>
            </form>
            <div class="follow-on-social">
                <a href="" class="facebook"
                   rel="nofollow noopener noreferrer external" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path id="facebook"
                              d="M29,16.07912A13,13,0,1,0,13.96875,28.94694V19.84447H10.668V16.07912h3.30078v-2.8698c0-3.26466,1.94081-5.06795,4.91029-5.06795a19.95289,19.95289,0,0,1,2.91.25441v3.20563H20.14979a1.88079,1.88079,0,0,0-2.11854,2.03423v2.44348h3.60547l-.57637,3.76535h-3.0291v9.10247A13.02132,13.02132,0,0,0,29,16.07912"
                              fill="#262626"/>
                    </svg>
                </a>
                <a href="" class="twitter" rel="nofollow noopener noreferrer external"
                   target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path id="twitter"
                              d="M26.32865,10.20428c.01043.22891.01043.45778.01043.6867A15.18194,15.18194,0,0,1,2.99214,23.68808a10.26487,10.26487,0,0,0,1.26929.07283A10.70029,10.70029,0,0,0,10.8889,21.472a5.33486,5.33486,0,0,1-4.9836-3.70387,5.36636,5.36636,0,0,0,2.40336-.09364,5.34632,5.34632,0,0,1-4.2761-5.23331v-.07283a5.39627,5.39627,0,0,0,2.41374.6659A5.35659,5.35659,0,0,1,4.79205,5.90738,15.1498,15.1498,0,0,0,15.78924,11.484a5.89821,5.89821,0,0,1-.13524-1.21727,5.33642,5.33642,0,0,1,9.22847-3.65189,10.61188,10.61188,0,0,0,3.3918-1.2901A5.368,5.368,0,0,1,25.9229,8.27951a10.81127,10.81127,0,0,0,3.06924-.84274A10.868,10.868,0,0,1,26.32865,10.20428Z"
                              fill="#262626"/>
                    </svg>
                </a>
                <a href="" class="youtube"
                   rel="nofollow noopener noreferrer external" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path id="youtube"
                              d="M28.24034,9.81073A3.21021,3.21021,0,0,0,25.9816,7.53732C23.9892,7,16,7,16,7s-7.98921,0-9.9816.53732A3.21021,3.21021,0,0,0,3.75967,9.81073,33.67486,33.67486,0,0,0,3.2258,16a33.6751,33.6751,0,0,0,.53387,6.18928,3.21018,3.21018,0,0,0,2.25874,2.27339C8.0108,25,16,25,16,25s7.98919,0,9.98159-.53734a3.21018,3.21018,0,0,0,2.25874-2.27339A33.67633,33.67633,0,0,0,28.77419,16,33.6761,33.6761,0,0,0,28.24034,9.81073ZM13.3871,19.7987V12.2013l6.67742,3.79882Z"
                              fill="#262626"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="logo">
            <a title="" href=""><img src="Images/Logo.png" alt="www.bangla-kobita.com"/></a>
        </div>
    </header>