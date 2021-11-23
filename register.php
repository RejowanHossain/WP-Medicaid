<?php
/*
Template Name: Register
*/
get_header();
?>


<!-- hero -->
<?php get_template_part( 'template-parts/breadcumb' )?>


<!--user register -->
<section class="vendor-signup user-register">
    <div class="container">
        <div class="row">
            <div class=" col-xl-5 col-lg-5 col-md-12 pr-0 small-none">
                <div class="left-side register-left">
                    <!-- <img src="img/register-img.jpg" alt="doctor"> -->
                </div>
            </div>
            <div class=" col-xl-7 col-lg-7 col-md-12 pl-0">
                <div class="right-side register-right">
                    <div class="widget register-widget">
                        <h4>Sign up</h4>
                    </div>

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-patient-tab" data-toggle="tab"
                                href="#nav-patient" role="tab" aria-controls="nav-patient"
                                aria-selected="true">Patient</a>
                            <a class="nav-item nav-link" id="nav-doctor-tab" data-toggle="tab" href="#nav-doctor"
                                role="tab" aria-controls="nav-doctor" aria-selected="false">Doctor</a>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-patient" role="tabpanel"
                            aria-labelledby="nav-patient-tab">
                            <form id="" method="" action="" novalidate="true">
                                <div class="messages"></div>
                                <div class="controls register-controls">
                                    <div class="form-row">
                                        <div class="form-group col-lg-6 has-error has-danger">
                                            <input type="text" name="firstname" placeholder="First Name"
                                                required="required">
                                        </div>

                                        <div class="form-group col-lg-6 has-error has-danger">
                                            <input type="text" name="lastname" placeholder="Last Name"
                                                required="required">
                                        </div>

                                        <div class="form-group col-lg-6 has-error has-danger">
                                            <input type="text" name="username" placeholder="Username"
                                                required="required">
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <input type="email" name="email" placeholder="Email" required="required">
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <input type="password" name="password" placeholder="Password"
                                                required="required">
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <input type="password" name="cpassword" placeholder="Confirm Password"
                                                required="required">
                                        </div>
                                    </div>

                                    <button type="submit" class="button button-contact"><span>Register</span></button>
                                </div>
                                <span class="user-login-cta">Already have an account?<a href="javascript:void(0)">Login
                                        Now!</a></span>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="nav-doctor" role="tabpanel" aria-labelledby="nav-doctor-tab">

                            <form id="" method="" action="" novalidate="true">
                                <div class="messages"></div>
                                <div class="controls register-controls">
                                    <div class="form-row">
                                        <div class="form-group col-lg-6 has-error has-danger">
                                            <input type="text" name="firstname" placeholder="First Name"
                                                required="required">
                                        </div>

                                        <div class="form-group col-lg-6 has-error has-danger">
                                            <input type="text" name="lastname" placeholder="Last Name"
                                                required="required">
                                        </div>

                                        <div class="form-group col-lg-6 has-error has-danger">
                                            <input type="text" name="username" placeholder="Username"
                                                required="required">
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <input type="email" name="email" placeholder="Email" required="required">
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <input type="password" name="password" placeholder="Password"
                                                required="required">
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <input type="password" name="cpassword" placeholder="Confirm Password"
                                                required="required">
                                        </div>
                                    </div>

                                    <button type="submit" class="button button-contact"><span>Register</span></button>
                                </div>
                                <span class="user-login-cta">Already have an account?<a href="login.html">Login
                                        Now!</a></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>