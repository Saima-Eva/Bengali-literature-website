<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
               data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="">সাহিত্য ও সাংস্কৃতিক প্রাঙ্গন - User Panel</a>
        </div>


        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

                <!-- Notifications -->
                <li class="dropdown">
                    <a onclick="myFunction()" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">notifications</i>
                        <?php
                                $userId = $_COOKIE['userId'];

                                $qry = "SELECT * FROM users WHERE id='$userId'";
                                $result = mysqli_query($cn, $qry);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                $LIM=$row['notification'];

                                $view = "SELECT contents.id as content_id,users.name, contents.categories, notifications.timestamp FROM users
JOIN notifications ON users.id = notifications.user_id
JOIN contents ON notifications.content_id = contents.id  
ORDER BY `notifications`.`timestamp` DESC LIMIT $LIM";
                                $run = mysqli_query($cn, $view);
                                ?>
                        <span id="count" class="label-count"><?php echo $LIM;?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">নোটিফিকেশন</li>
                        <li class="body">
                            <ul class="menu">
                              <?php

                                while ($data = mysqli_fetch_array($run)) {

                                ?>



                                <li>
                                    <a href="../view.php?id=<?php echo $data['content_id']?>">
                                        <div class="icon-circle bg-cyan">
                                            <i class="material-icons">notifications</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><?php echo $data['name'];?> নতুন  <?php echo $data['categories'];?><br> আপলোড করেছেন</h4>
                                            <p>
                                                <i class="material-icons">timer</i> <?php echo $data['timestamp'];
                                                ?>
                                            </p>
                                        </div>
                                    </a>
                                </li>



                                <?php }?>


                            </ul>
                        </li>

                    </ul>
                </li>
                <!-- #END# Notifications -->

                <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i
                                class="material-icons">more_vert</i></a></li>
            </ul>
        </div>


    </div>
</nav>

<script>


    function myFunction() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'seen_ntf.php', true);
        xhr.onload = function() {
            if (xhr.status == 200) {
                // Update the notification count in the HTML
                document.getElementById('count').innerHTML = '0';
            }
        };
        xhr.send();
    }

</script>