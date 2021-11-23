<?php
/*
Template Name: Login
*/
get_header();
?>


<!-- hero -->
<?php get_template_part( 'template-parts/breadcumb' )?>


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
                        <span class="user-login-cta">Don't have an account?<a href="javascript:vod(0)">Register
                                Now!</a></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>