


<div class="col-md-8">

    <h1>লগইন</h1>
    <div class="page-text display-block">
        <p>নিচে আপনার লগইন নাম ও পাসওয়ার্ড দিয়ে লগইন করুন। ইতিমধ্যে আমাদের সদস্য না হয়ে থাকলে সদস্য হিসাবে <a
                    href="" title="রেজিস্ট্রেশন">রেজিস্ট্রেশন</a> করুন।</p>
    </div>
    <div class="page-text display-none">
        <p>Please enter your user name and password bellow to log in. If you have not become our member yet, you
            may <a href="" title="register">register</a> as a member now.</p>
    </div>
    <div class="ad-wide-strict">
    </div>
    <?php if(isset($_REQUEST['msg'])) echo $_REQUEST['msg']; ?>
    <form action="login_action.php" class="form-horizontal form-bg" method="POST"
          role="form">

        <div class="form-group">
            <label class="col-md-4 control-label" for="Email">ইমেইল</label>
            <div class="col-md-8">
                <input class="form-control" id="Email" name="email" type="email"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="Password">পাসওয়ার্ড</label>
            <div class="col-md-8">
                <input class="form-control" id="Password" name="password" type="password"/>

            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-4 col-md-8">
                <input data-val="true" data-val-required="The RememberMe field is required." id="RememberMe"
                       name="RememberMe" type="checkbox" value="true"/><input name="RememberMe" type="hidden"
                                                                              value="false"/>
                <label for="RememberMe">মনে রাখবো?</label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-4 col-md-8">
                <input type="submit" name="submit" value="লগইন" class="btn btn-default"/>
            </div>
        </div>
    </form>
    <br/>

</div>