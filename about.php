<?php
/*
Template Name: About
*/
get_header();
?>

<!-- apoointment banner starts-->
<?php get_template_part( 'template-parts/breadcumb' )?>
<!-- apoointment banner ends-->

<!-- About area starts -->
<section id="about" class="mb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5 col-md-12">
                <div class="abt-img">
                    <img src="img/about-img.jpg" alt="doctor">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12 md-top-space">
                <div class="right-about">
                    <div class="abt-title">
                        <h5>About Medicaid</h5>
                        <h2>Whatever Your Health Needs We Are Here to Help</h2>
                    </div>
                    <div class="abt-content">
                        <p>MedDoctors Are A Medical And Health Department Provider Institutions. Suitable For
                            Healthcare, Medical, Doctor, Dental, Dentist, Pharmacy, Health And Any Related Medical Care
                            Field.</p>

                        <div class="abt-list">
                            <ul>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Cras sit amet libero congu placerat dui ullamcorper lorem.</span>
                                </li>

                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Donec nec mauris mattis, ullamcorper erat dignissim dui.</span>
                                </li>

                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Integer vel ipsum et felis scelerisque tempus.</span>
                                </li>

                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>We are committed to providing healthcare service.</span>
                                </li>

                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Really know the true needs and expectations of patients.</span>
                                </li>

                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Donec nec mauris mattis, ullamcorper erat dignissim dui.</span>
                                </li>

                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Integer vel ipsum et felis scelerisque tempus.</span>
                                </li>

                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>We are committed to providing healthcare service.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About area ends -->

<!-- counter area starts -->
<div class="counter">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 responsive-margin-bottom">
                <div class="single-counter">
                    <div class="counter-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <div class="counter-info">
                        <h5>98+</h5>
                        <span> Expert Doctors</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 responsive-margin-bottom">
                <div class="single-counter">
                    <div class="counter-icon">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <div class="counter-info">
                        <h5>100+</h5>
                        <span>Happy Patients</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 responsive-margin-bottom">
                <div class="single-counter">
                    <div class="counter-icon">
                        <i class="fas fa-code-branch"></i>
                    </div>
                    <div class="counter-info">
                        <h5>50+</h5>
                        <span>Total Branches</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 responsive-margin-bottom">
                <div class="single-counter">
                    <div class="counter-icon">
                        <i class="fas fa-star-of-life"></i>
                    </div>
                    <div class="counter-info">
                        <h5>100%</h5>
                        <span>Satisfaction</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter area ends -->

<!-- team area starts -->
<section id="team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12">
                <div class="section-title mb-0">
                    <h5>Meet the professionals</h5>
                    <h2>Group Of Experienced Doctors</h2>
                </div>
            </div>
        </div>
        <div class="row space">
            <?php
                $args = array(
                    'post_type'     => 'teams',
                    'post_per_page' => 3,
                );

                $query = new WP_Query($args);

                while( $query->have_posts() ){
                    $query->the_post();

                    $location = get_field('location' );
                    $btn_text = get_field( 'button_text' );
                    $btn_link = get_field( 'button_link' );
            ?>

            <div class=" col-xl-4 col-lg-4 col-md-6 responsive-margin-bottom">
                <div class="team style-16">
                    <div class="team-thumb">
                        <img src="<?php the_post_thumbnail_url();?>" alt="Matthew Reyes">
                        <div class="team-controls">
                            <a class="" href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="team-body">
                        <h5>
                            <?php the_title();?>
                        </h5>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="ml-3">(3)</span>
                        </div>
                        <div class="team-categories">
                            <a class="team-category" href="#"><?php the_content();?></a>
                        </div>
                        <div class="team-info">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                                <?php echo esc_html( $location );?>
                            </span>
                        </div>
                        <a class="button" href="<?php echo esc_url( $btn_link );?>">
                            <?php echo esc_html( $btn_text );?></a>
                    </div>
                </div>
            </div>

            <?php } wp_reset_postdata();?>

        </div>
    </div>
</section>
<!-- team area ends -->

<!-- testimonial area starts -->
<div class="testimonial">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12">
                <div class="section-title mb-0">
                    <h5>Testimonials</h5>
                    <h2>What Clients Say About Us</h2>
                </div>
            </div>
        </div>
        <div class="row space testimonial-slider">
            <?php 
                $args = array(
                    'post_type'     => 'testimonials',
                    'post_per_page' => 3,
                );

                $query = new WP_Query($args);

                while( $query->have_posts() ){
                    $query->the_post();

                    $name = get_field( 'name' );
                    $designation = get_field( 'designation' );
                    $description = get_field( 'description' );
            ?>
            <div class="col-xl-12 col-xl-12">
                <div class="single-testimonial-wrapper">
                    <div class="quote">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="testimonial-content">
                        <p><?php echo esc_html( $description );?></p>
                    </div>
                    <div class="testimonial-meta">
                        <div class="client-img">
                            <img src="<?php the_post_thumbnail_url();?>" alt="man">
                        </div>
                        <div class="client-designation">
                            <strong><?php echo esc_html( $name );?></strong>
                            <span><?php echo esc_html( $designation );?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php } wp_reset_postdata();?>
        </div>
    </div>
</div>
<!-- testimonial area ends -->

<!-- blog area starts -->
<div class="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12">
                <div class="section-title mb-0">
                    <h5>Our Blog</h5>
                    <h2>Lates News & Articles</h2>
                </div>
            </div>
        </div>
        <div class="row space">
            <?php 
                $args = array(
                    'post_type'     => 'post',
                    'post_per_page' => 3,
                );

                $query = new WP_Query($args);

                while( $query->have_posts() ){
                    $query->the_post();
            ?>

            <div class="col-xl-4 col-lg-4 col-md-6 responsive-margin-bottom">
                <div class="single-blog-wrapper">
                    <div class="blog-thumb">
                        <a href="#">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="Having overw eight and depression can">
                        </a>
                    </div>
                    <div class="blog-body">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fas fa-user"></i><?php echo get_the_author();?></a></li>
                                    <li><a href="#"><i class="fas fa-clock"></i><?php echo get_the_date();?></a></li>
                                </ul>
                            </div>
                            <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                            <p><?php the_excerpt();?></p>
                            <a class="button" href="<?php the_permalink();?>">Read more</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php } wp_reset_postdata();?>
        </div>
    </div>
</div>
<!-- blog area ends -->
<?php get_footer();?>