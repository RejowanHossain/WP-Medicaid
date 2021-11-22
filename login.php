<?php
/*
Template Name: Login
*/
get_header();
?>


<!-- hero -->
<section class="banner-login">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-search text-center">
                    <h2>Log in</h2>
                </div>

                <div class="breadcrumb-container">
                    <span>
                        <a href="index.html">Home</a>
                    </span>|
                    <span class="current"> Login</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!--user login -->
<section class="vendor-signup user-login">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <div class="right-side">
                    <div class="widget">
                        <h4>Login</h4>
                    </div>
                    <form id="" method="" action="" novalidate="true">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email" required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" required="required">
                            </div>
                            <button type="submit" class="button"><span>Submit</span></button>
                        </div>
                        <span class="user-login-cta">Don't have an account?<a href="register.html">Register
                                Now!</a></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>