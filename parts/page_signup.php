<?php
$msg = '';

if (
    isset($_REQUEST['name'])
    && isset($_REQUEST['gender'])
    && isset($_REQUEST['email'])
    && isset($_REQUEST['phone'])
    && isset($_REQUEST['occupation'])
    && isset($_REQUEST['nationality'])
    && isset($_REQUEST['password'])


) {
    $name = mysqli_real_escape_string($cn, $_REQUEST['name']);
    $gender = mysqli_real_escape_string($cn, $_REQUEST['gender']);
    $email = mysqli_real_escape_string($cn, $_REQUEST['email']);
    $phone = mysqli_real_escape_string($cn, $_REQUEST['phone']);
    $occupation = mysqli_real_escape_string($cn, $_REQUEST['occupation']);
    $nationality = mysqli_real_escape_string($cn, $_REQUEST['nationality']);
    $password = mysqli_real_escape_string($cn, $_REQUEST['password']);


    if (
        !empty($name)
        && !empty($gender)
        && !empty($email)
        && !empty($phone)
        && !empty($occupation)
        && !empty($nationality)
        && !empty($password)

    ) {
        $insert = "INSERT INTO users(name,gender,email,phone,occupation,nationality,password) 
        VALUES('$name','$gender','$email','$phone','$occupation','$nationality','$password') ";
        $run = mysqli_query($cn, $insert);
        if ($run) {
            echo mysqli_connect_error();
            $msg = "<b style='color:green'>আপনার নিবন্ধন সফল হয়েছে। </b>";
        } else {

            echo mysqli_connect_error();
        }
    } else {
        $msg = "<b style='color:red'>সকল তথ্য সঠিকভাবে প্রদান করুন.</b>";
    }
}


?>


<div class="col-md-8">

    <h1>সদস্য হিসাবে যোগ দিন</h1>
    <div class="page-text display-block">
        <p>সাহিত্য ও সাংস্কৃতিক প্রাঙ্গনে- সদস্য হতে চাইলে নিচের ফরমটি পূরণ করে পাঠিয়ে দিন। সদস্য হিসাবে আপনি সরাসরি
            আমাদের ওয়েবসাইটে কবিতা, আবৃত্তি কিংবা কবি ও কবিতা বিষয়ক আলোচনা প্রকাশ করতে পারবেন।</p>
    </div>
    <?php echo $msg; ?>
    <form action="" class="form-horizontal form-bg"
          method="post">
        <div class="form-group">
            <label Title="You will use this name to log in." class="col-md-4 control-label" for="UserName">
                আপনার নাম (বাংলায়)</label>
            <div class="col-md-8">
                <input class="form-control" data-val="true"
                       data-val-length="লগইন নাম ২০ অক্ষরের বেশি বড় হতে পারবে না।" data-val-length-max="20"
                       data-val-regex="শুধুমাত্র ইংরেজি অক্ষর ও নাম্বার ব্যবহার করতে হবে।"
                       data-val-regex-pattern="^[a-zA-Z0-9]*$" data-val-required="লগইন নাম দিতে হবে।"
                       id="UserName" name="name" type="text" value=""/>
                <span class="field-validation-valid" data-valmsg-for="UserName"
                      data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="form-group">
            <label Title="People will know you by this name." class="col-md-4 control-label"
                   for="NameBangla">লিঙ্গ</label>
            <div class="col-md-8">

                <span class="bangla-editor">
<input id="male" name="gender" value="male"
       type="radio" Checked="Checked"/> <label for="male">পুরুষ</label>
&nbsp; <input id="female" name="gender"
              value="female" type="radio"/> <label for="female">মহিলা</label>
&nbsp;
</span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="Email">ইমেইল</label>
            <div class="col-md-8">
                <input class="form-control" data-val="true" data-val-email="ভুল ইমেইল এড্রেস দেয়া হয়েছে।"
                       data-val-required="ইমেইল এড্রেস দিতে হবে।" id="Email" name="email" type="email" value=""/>
                <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="Email">মোবাইল</label>
            <div class="col-md-8">
                <input class="form-control" data-val="true" data-val-email="ভুল মোবাইল নম্বর  দেয়া হয়েছে।"
                       data-val-required="মোবাইল নম্বর দিতে হবে।" id="Phone" name="phone" type="phone" value=""/>
                <span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="Email">পেশা</label>
            <div class="col-md-8">
                <input class="form-control" name="occupation" type="text" value=""/>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="Email">জাতিয়তা</label>
            <div class="col-md-8">
                <input class="form-control" name="nationality" type="text" value=""/>
                <span class="field-validation-valid" data-valmsg-for="nationality" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="Password">পাসওয়ার্ড</label>
            <div class="col-md-8">
                <input class="form-control" data-val="true"
                       data-val-length="পাসওয়ার্ডটি কমপক্ষে ৬ অক্ষরের হতে হবে।" data-val-length-max="100"
                       data-val-length-min="6" data-val-required="পাসওয়ার্ড দিতে হবে।" id="Password"
                       name="password" type="text"/>
                <span class="field-validation-valid" data-valmsg-for="Password"
                      data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group topN20">
            <div class="col-sm-offset-4 col-sm-8">
                <script src="../../../www.google.com/recaptcha/api.js" async defer></script>
                <div class="g-recaptcha" data-sitekey="6LcbnCkTAAAAABd4XurDZ0yUP5hlnjpBc8doVM87"
                     data-theme="light"></div>
                <span class="field-validation-valid" data-valmsg-for="CaptchaErr"
                      data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-4 col-md-8">
                <input type="submit" class="btn btn-default" value="যোগ দিন"/>
            </div>
        </div>
        <div class="clearfix"></div>
    </form>
    <br/>
</div>