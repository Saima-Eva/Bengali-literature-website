<?php
$msg = '';
$userId = $_COOKIE['userId'];
$view = "SELECT * FROM users WHERE id='$userId'";

$run = mysqli_query($cn, $view);
$profile = mysqli_fetch_array($run);

if (isset($_REQUEST['updated'])) {
    if ($_REQUEST['updated'] == true) {
        $msg = "<b style='color:red'>Successfully Updated.</b>";
    }
}


?>


<section class="content">
    <div class="container-fluid">


        <div class="row clearfix">
            <div class="col-xs-12 col-sm-3">
                <div class="card profile-card">
                    <div class="profile-header">&nbsp;</div>
                    <div class="profile-body">
                        <div class="image-area">
                            <img src="uploads/dps/<?php echo $profile['photo']; ?>" width="180px" height="200px" alt="Profile Image"/>
                        </div>
                        <div class="content-area">
                            <h3><?php echo $profile['name']; ?></h3>
                            <p><?php echo $profile['occupation']; ?></p>
                            <p><?php echo $profile['nationality']; ?></p>
                        </div>
                    </div>
                    <div class="profile-footer">
                        <ul>
                            <li>
                                <span>Email</span>
                                <span><?php echo $profile['email']; ?></span>
                            </li>
                            <li>
                                <span>Phone</span>
                                <span><?php echo $profile['phone']; ?></span>
                            </li>
                            <form action="update_profile.php" method="post" enctype="multipart/form-data">
                                <input type="file" class="btn btn-success btn-lg waves-effect btn-block" name="dp"
                                       id="profile_image"/>

                                <input type="submit" name="upload_dp" class="btn btn-primary waves-effect"
                                        data-type="html-message">Upload Profile photo
                                </input>
                            </form>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="card">
                    <div class="body">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab"
                                                           data-toggle="tab">Profile Settings</a></li>
                            </ul>
                            <?php echo $msg; ?>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">
                                    <form action="update_profile.php" class="form-horizontal">
                                        <div class="form-group">
                                            <label for="NameSurname" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="NameSurname" name="name"
                                                           placeholder="Name Surname"
                                                           value="<?php echo $profile['name']; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email" class="col-sm-2 control-label">Gender</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input name="gender" value="male" type="radio" id="radio_1"
                                                           checked="">
                                                    <label for="radio_1">Male</label>
                                                    <input name="gender" value="female" type="radio" id="radio_2">
                                                    <label for="radio_2">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email" class="col-sm-2 control-label">Phone</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="phone" class="form-control" id="phone" name="phone"
                                                           placeholder="phone" value="<?php echo $profile['phone']; ?>"
                                                           required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="email" class="form-control" id="Email" name="email"
                                                           value="<?php echo $profile['email']; ?>"
                                                           required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="InputExperience" class="col-sm-2 control-label">BIO</label>

                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <textarea class="form-control" id="InputExperience" name="bio"
                                                              rows="3"><?php echo $profile['bio']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="InputSkills" class="col-sm-2 control-label">Nationality</label>

                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="InputSkills"
                                                           name="nationality"
                                                           value="<?php echo $profile['nationality']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="InputSkills" class="col-sm-2 control-label">Occupation</label>

                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="InputSkills"
                                                           name="occupation"
                                                           value="<?php echo $profile['occupation']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <input type="submit" name="submit" class="btn btn-danger"></input>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>