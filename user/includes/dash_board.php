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
                                 $userId=$_COOKIE['userId'];

                                 $view = "SELECT * FROM contents WHERE approved='0' AND id='$userId'";
                                    $run = mysqli_query($cn, $view);
                                    while ($data = mysqli_fetch_array($run)) {
                                        $sl++;

                                    ?>



                                 <tr>
                                     <th scope="row"><?php echo $sl; ?></th>
                                     <td><?php echo $data['categories'];?></td>
                                     <td><?php echo $data['content']; ?></td>
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