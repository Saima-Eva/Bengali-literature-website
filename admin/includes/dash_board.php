 <?php $msg = '';
 if (isset($_REQUEST['approved'])) {
     if ($_REQUEST['approved'] == true) {
         $msg = "<b style='color:green'>কন্টেন্ড প্রদর্শিত হয়েছে।</b>";
     }
 }
 ?>

 <section class="content">
     <div class="container-fluid">
         <div class="block-header">
             <h2>DASHBOARD</h2>
         </div>

         <!-- Widgets -->
         <div class="row clearfix">
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                 <div class="info-box bg-pink hover-expand-effect">
                     <div class="icon">
                         <i class="material-icons">playlist_add_check</i>
                     </div>
                     <div class="content">
                         <div class="text">মোট সদস্য</div>

                         <?php $query = "SELECT * FROM users";
                            $run_query = mysqli_query($cn, $query);
                            //Count total number of rows
                            $count = mysqli_num_rows($run_query);

                            ?>

                         <div class="number count-to" data-from="0" data-to="<?php echo $count; ?>" data-speed="15"
                             data-fresh-interval="20"></div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                 <div class="info-box bg-cyan hover-expand-effect">
                     <div class="icon">
                         <i class="material-icons">help</i>
                     </div>
                     <div class="content">
                         <div class="text">প্রদর্শিত কন্টেন্ড</div>

                         <?php $query = "SELECT * FROM contents WHERE approved='1'";
                            $run_query = mysqli_query($cn, $query);
                            //Count total number of rows
                            $count1 = mysqli_num_rows($run_query);

                            ?>
                         <div class="number count-to" data-from="0" data-to="<?php echo $count1; ?>" data-speed="1000"
                             data-fresh-interval="2"></div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                 <div class="info-box bg-orange hover-expand-effect">
                     <div class="icon">
                         <i class="material-icons">person_add</i>
                     </div>
                     <div class="content">
                         <div class="text">পেন্ডিং কন্টেন্ড</div>

                         <?php $query = "SELECT * FROM contents WHERE approved='0'";
                            $run_query = mysqli_query($cn, $query);
                            //Count total number of rows
                            $count2 = mysqli_num_rows($run_query);

                            ?>
                         <div class="number count-to" data-from="0" data-to="<?php echo $count2; ?>" data-speed="1000"
                             data-fresh-interval="20"></div>
                     </div>
                 </div>
             </div>


             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                 <div class="info-box bg-light-green hover-expand-effect">
                     <div class="icon">
                         <i class="material-icons">forum</i>
                     </div>
                     <div class="content">
                         <div class="text">মোট মন্তব্য</div>
                         <?php $query = "SELECT * FROM comments";
                         $run_query = mysqli_query($cn, $query);
                         //Count total number of rows
                         $count3 = mysqli_num_rows($run_query);

                         ?>
                         <div class="number count-to" data-from="0" data-to="<?php echo $count3; ?>" data-speed="1000"
                             data-fresh-interval="20"></div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- #END# Widgets -->
         <!-- CPU Usage -->

         <!-- Hover Rows -->
         <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="card">
                     <div class="header">
                         <h2>
                             পেন্ডিং কন্টেন্ড

                         </h2>
                         <div id="msg" style="color:green"></div>
                         <?php echo $msg; ?>
                     </div>
                     <div class="body table-responsive">
                         <table class="table table-hover">
                             <thead>
                                 <tr>
                                     <th>#</th>
                                     <th>কেটেগরি </th>
                                     <th>কন্টেন্ড</th>
                                     <th>এপ্রোভাল</th>

                                 </tr>
                             </thead>
                             <tbody>

                                 <?php
                                    $sl = 0;

                                    $view = "SELECT * FROM contents WHERE approved='0'";
                                    $run = mysqli_query($cn, $view);
                                    while ($data = mysqli_fetch_array($run)) {
                                        $sl++;

                                    ?>



                                 <tr>
                                     <th scope="row"><?php echo $sl; ?></th>
                                     <td><?php echo $data['categories'];?></td>
                                     <td>
                                         <?php
                                         $text = $data['content'];
                                         $stripped = strip_tags($text);
                                         $truncated = substr($stripped, 0, 170);
                                         echo $truncated . "...";
                                         ?>
                                     </td>
                                     <td><button type="button" class="btn bg-teal waves-effect">
                                             <a href="approve-content.php?id=<?php echo $data['id']; ?>">
                                                 <i class="material-icons">add</i>
                                                 <span style="color:white">যুক্ত করুন</span>
                                             </a>
                                         </button>
                                         <button type="button" class="btn bg-pink waves-effect">
                                             <a href="dlt-content.php?id=<?php echo $data['id']; ?>"
                                                onclick="return confirm('Are You Sure?')">
                                                 <i class="material-icons">delete</i>
                                                 <span style="color:white">মুছুন</span>
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