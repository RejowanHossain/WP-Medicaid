<?php get_header();?>


<!-- Hero area starts-->
<section class="hero-area">
    <div class="hero-slider">
        <div class="active-slider">

            <?php 
                $args = array(
                    'post_type'     => 'sliders',
                    'post_per_page' => 2,
                );

                $query = new WP_Query($args);

                while( $query->have_posts() ){
                    $query->the_post();

                    $meta_heading = get_field('meta_heading' );
                    $button_text = get_field( 'button_text' );
                    $button_link = get_field( 'button_link' );
                    $video_link = get_field( 'video_link' );
            ?>
            <div class="single-slider-one hero-utility"
                style="background-image: url('<?php the_post_thumbnail_url();?>')">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8">
                            <div class="hero-text">
                                <div class="hero-caption">
                                    <h5><?php echo esc_html( $meta_heading );?></h5>

                                    <h1><?php the_title()?></h1>

                                    <p><?php the_content();?></p>
                                </div>
                                <div class="header-menu-cta d-flex align-items-center">
                                    <a href="<?php echo esc_url( $button_link )?>"
                                        class="button"><?php echo esc_html( $button_text )?></a>
                                    <a href="<?php echo esc_url( $video_link )?>" class="pulse popup-hero" data-lity="">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                }
                wp_reset_postdata();
            ?>


            <!-- <div class="single-slider-two hero-utility"
                style="background-image: url('<?php echo get_template_directory_uri();?>/img/banner-2.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8">
                            <div class="hero-text">
                                <div class="hero-caption two">
                                    <h5>We aim make your life better</h5>
                                    <h1>Best Doctors & <span>Quality</span> Treatment</h1>
                                    <p>MedicAid Are A Medical And Health Department Provider Institutions. Suitable
                                        For Healthcare, Medical, Doctor, Dental, Dentist, Pharmacy, Health And Any
                                        Related Medical Care Field.</p>
                                </div>
                                <div class="header-menu-cta d-flex align-items-center">
                                    <a href="doctors.html" class="button">Find a Doctor</a>
                                    <a href="https://www.youtube.com/watch?v=tK4Q85BNGto" class="pulse popup-hero"
                                        data-lity="">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- Hero area ends -->

<!-- appointment starts -->
<!-- <div class="appointment">
      <div class="container">
        <div class="quote-and-presentation">
          <div class="row">
            <div class="col-lg-12">
              <div class="quote-box">
                <div class="sec-title">
                  <h3>Make appointment!</h3>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="quote-item">
                      <span class="lable">name*</span>
                      <i class="fas fa-file-signature"></i>
                      <input type="text" name="name" placeholder="Ex: John Smith">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="quote-item">
                      <span class="lable">Email*</span>
                      <i class="fas fa-envelope"></i>
                      <input type="email" name="email" placeholder="Ex: smith@gmail.com">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="quote-item">
                      <span class="lable">Phone*</span>
                      <i class="fas fa-phone"></i>
                      <input type="tel" name="tel" placeholder="Ex: 998 021 2154">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="quote-item">
                      <span class="lable">Location*</span>
                      <i class="fas fa-map-marker-alt"></i>
                      <input type="text" name="email" placeholder="Ex: 142, park street, new york">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="quote-item">
                      <span class="lable">Doctors*</span>
                      <select class="selectStyle">
                        <option value="0">Doctors</option>
                        <option value="1">Dr. Stephen Hawkings</option>
                        <option value="2">Dr. Phill Collins</option>
                        <option value="3">Dr. Carl Segan</option>
                        <option value="4">Dr. James Hetfield</option>
                        <option value="5">Dr. Bob Hammett</option>
                        <option value="6">Dr. Dave Ellefson</option>
                        <option value="6">Dr. Scot Ian</option>
                        <option value="6">Dr. Nick Scott</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="quote-item">
                      <span class="lable">Departments*</span>
                      <select class="selectStyle">
                        <option value="0">Departments</option>
                        <option value="1">hemathology</option>
                        <option value="2">neurology</option>
                        <option value="3">gastroenterology</option>
                        <option value="4">pulmonology</option>
                        <option value="5">cardiology</option>
                        <option value="6">ophthalmology</option>
                        <option value="6">orthopedics</option>
                        <option value="6">radiology</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="quote-item">
                      <span class="lable">Select Date*</span>
                      <i class="fas fa-calendar-day"></i>
                      <input type="date" data-toggle="datepicker" placeholder="Select Date">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="quote-item">
                      <span class="lable">Select Time*</span>
                      <select class="selectStyle time">
                        <option value="0">10:00 AM</option>
                        <option value="1">10:30 AM</option>
                        <option value="2">11:00 AM</option>
                        <option value="3">11:30 AM</option>
                        <option value="4">12:00 AM</option>
                        <option value="5">12:30 AM</option>
                        <option value="6">01:00 PM</option>
                        <option value="6">01:30 PM</option>
                        <option value="6">02:00 PM</option>
                        <option value="6">02:30 PM</option>
                        <option value="6">03:00 PM</option>
                        <option value="6">03:30 PM</option>
                        <option value="6">04:30 PM</option>
                        <option value="6">05:30 PM</option>
                        <option value="6">06:00 PM</option>
                        <option value="6">06:30 PM</option>
                        <option value="6">07:00 PM</option>
                        <option value="6">07:30 PM</option>
                        <option value="6">08:00 PM</option>
                        <option value="6">08:30 PM</option>
                        <option value="6">09:00 PM</option>
                        <option value="6">09:30 PM</option>
                        <option value="6">10:00 PM</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="quote-item">
                      <a class="button" href="appointment.html">Book an appointment</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div> -->
<!-- appointment ends -->

<!-- About area starts -->
<section id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5 col-md-12">
                <?php 
                    $config = get_option( 'medicaid_options' );

                    if( $config[ 'abt_content_image' ] ){
                ?>
                <div class="abt-img">
                    <img src="<?php echo $config[ 'abt_content_image' ] ?>" alt="doctor">
                </div>
                <?php }?>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12 md-top-space">
                <div class="right-about">
                    <?php 
                        $config = get_option( 'medicaid_options' );

                        if( $config[ 'abt_sec_title' ] ){
                    ?>
                    <div class="abt-title">
                        <h5><?php echo $config[ 'abt_sec_subtitle' ]?></h5>
                        <h2><?php echo $config[ 'abt_sec_title' ]?></h2>
                    </div>
                    <div class="abt-content">
                        <p><?php echo $config[ 'abt_sec_description' ]?></p>

                        <div class="abt-list">
                            <ul>
                                <?php
                                    $about_lists = $config['about_list'];

                                    foreach( $about_lists as $list ){
                                ?>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span><?php echo esc_attr( $list['list-text'] )?></span>
                                </li>
                                <?php }?>

                            </ul>
                        </div>
                        <div class="learn-more">
                            <a class="button"
                                href="<?php echo $config[ 'abt_content_btn' ]?>"><?php echo $config[ 'abt_content_btn_text' ]?></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About area ends -->

<!-- Service area starts -->
<section id="service">
    <div class="container">
        <div class="row ">
            <div class="col-xl-6 col-lg-6">
                <?php 
                    $config = get_option( 'medicaid_options' );

                    if( $config[ 'service_sec_title' ] ){
                ?>
                <div class="abt-title service-title">
                    <h5><?php echo $config[ 'service_sec_subtitle' ]?></h5>
                    <h2><?php echo $config[ 'service_sec_title' ]?></h2>
                </div>
                <div class="abt-content service-heading">
                    <p><?php echo $config[ 'service_sec_description' ]?></p>
                </div>
                <?php }?>
            </div>
        </div>

        <div class="row row-bg">

            <?php 
                $args = array(
                    'post_type'     => 'services',
                    'post_per_page' => 4,
                );

                $query = new WP_Query($args);

                while( $query->have_posts() ){
                    $query->the_post();

                    $icon_image = get_field( 'icon_image' );
            ?>

            <div class="col-xl-3 col-lg-3 col-md-6">
                <div <?php post_class('service-box service-page-two-padding '); ?>>
                    <div class="service-icon">
                        <img src="<?php echo esc_url( $icon_image['url'] );?>" alt="icon">
                    </div>
                    <div class="service-body">
                        <div class="service-content service-content-two">
                            <h3>
                                <?php the_title();?>
                            </h3>
                            <p><?php the_content();?>
                            </p>
                        </div>
                        <!-- <a class="service-link" href="#" class="serv-link">Read More</a> -->
                    </div>
                </div>
            </div>

            <?php } wp_reset_postdata();?>

        </div>
    </div>
</section>
<!-- Service area ends -->

<!-- schedule area starts -->
<div class="schedule" id="classes">
    <div class="container">
        <div class="row ">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="section-title mb-0">
                    <?php 
                        $config = get_option( 'medicaid_options' );

                        if( $config[ 'schedule_sec_title' ] ){
                    ?>
                    <h5><?php echo $config[ 'schedule_sec_subtitle' ]?></h5>
                    <h2><?php echo $config[ 'schedule_sec_title' ]?></h2>
                    <?php }?>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-6 right-schedule">
                <div class="group-btn">
                    <a class="button" href="appointment.html">Make an appointment</a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row space">
            <div class="col-md-12">
                <div class="colorful-tab-wrapper" id="colorful">
                    <ul class="colorful-tab-menu">
                        <li class="colorful-tab-menu-item active"><a href="#clr-0">Monday</a></li>
                        <li class="colorful-tab-menu-item"><a href="#clr-1">Tuesday</a></li>
                        <li class="colorful-tab-menu-item"><a href="#clr-2">Wednesday</a></li>
                        <li class="colorful-tab-menu-item"><a href="#clr-3">Thursday</a></li>
                        <li class="colorful-tab-menu-item"><a href="#clr-4">Friday</a></li>
                        <li class="colorful-tab-menu-item"><a href="#clr-5">Saturday</a></li>
                    </ul>
                    <div class="colorful-tab-container">
                        <div class="colorful-tab-content active" id="clr-0">
                            <ul>
                                <li>
                                    <p>Medicine</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-1.png"
                                            alt="Medicine">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Child Specialist</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-2.png"
                                            alt="child">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>ENT Specialist</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-3.png"
                                            alt="ent">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Urology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-4.png"
                                            alt="urology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Cardiology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-5.webp"
                                            alt="cardilogy">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Nephrology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-6.png"
                                            alt="nephrology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Pulmonary</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-7.png"
                                            alt="pulmonory">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Gynaecology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-8.png"
                                            alt="gynaecology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Dental</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-9.png"
                                            alt="dental">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Neurology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-10.webp"
                                            alt="neurology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                            </ul>

                        </div>
                        <div class="colorful-tab-content" id="clr-1">
                            <ul>
                                <li>
                                    <p>Medicine</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-1.png"
                                            alt="Medicine">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Child Specialist</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-2.png"
                                            alt="child">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>ENT Specialist</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-3.png"
                                            alt="ent">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Urology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-4.png"
                                            alt="urology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Cardiology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-5.webp"
                                            alt="cardilogy">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Nephrology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-6.png"
                                            alt="nephrology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Pulmonary</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-7.png"
                                            alt="pulmonory">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Gynaecology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-8.png"
                                            alt="gynaecology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Dental</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-9.png"
                                            alt="dental">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Neurology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-10.webp"
                                            alt="neurology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                            </ul>

                        </div>
                        <div class="colorful-tab-content" id="clr-2">
                            <ul>
                                <li>
                                    <p>Medicine</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-1.png"
                                            alt="Medicine">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Child Specialist</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-2.png"
                                            alt="child">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>ENT Specialist</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-3.png"
                                            alt="ent">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Urology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-4.png"
                                            alt="urology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Cardiology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-5.webp"
                                            alt="cardilogy">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Nephrology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-6.png"
                                            alt="nephrology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Pulmonary</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-7.png"
                                            alt="pulmonory">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Gynaecology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-8.png"
                                            alt="gynaecology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Dental</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-9.png"
                                            alt="dental">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Neurology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-10.webp"
                                            alt="neurology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                            </ul>
                        </div>
                        <div class="colorful-tab-content" id="clr-3">
                            <ul>
                                <li>
                                    <p>Medicine</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-1.png"
                                            alt="Medicine">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Child Specialist</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-2.png"
                                            alt="child">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>ENT Specialist</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-3.png"
                                            alt="ent">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Urology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-4.png"
                                            alt="urology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Cardiology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-5.webp"
                                            alt="cardilogy">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Nephrology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-6.png"
                                            alt="nephrology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Pulmonary</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-7.png"
                                            alt="pulmonory">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Gynaecology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-8.png"
                                            alt="gynaecology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Dental</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-9.png"
                                            alt="dental">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Neurology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-10.webp"
                                            alt="neurology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                            </ul>

                        </div>
                        <div class="colorful-tab-content" id="clr-4">
                            <ul>
                                <li>
                                    <p>Medicine</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-1.png"
                                            alt="Medicine">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Child Specialist</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-2.png"
                                            alt="child">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>ENT Specialist</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-3.png"
                                            alt="ent">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Urology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-4.png"
                                            alt="urology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Cardiology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-5.webp"
                                            alt="cardilogy">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Nephrology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-6.png"
                                            alt="nephrology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Pulmonary</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-7.png"
                                            alt="pulmonory">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Gynaecology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-8.png"
                                            alt="gynaecology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Dental</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-9.png"
                                            alt="dental">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Neurology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-10.webp"
                                            alt="neurology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                            </ul>
                        </div>
                        <div class="colorful-tab-content" id="clr-5">
                            <ul>
                                <li>
                                    <p>Medicine</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-1.png"
                                            alt="Medicine">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Child Specialist</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-2.png"
                                            alt="child">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>ENT Specialist</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-3.png"
                                            alt="ent">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Urology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-4.png"
                                            alt="urology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Cardiology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-5.webp"
                                            alt="cardilogy">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Nephrology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-6.png"
                                            alt="nephrology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Pulmonary</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-7.png"
                                            alt="pulmonory">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Gynaecology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-8.png"
                                            alt="gynaecology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Dental</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-9.png"
                                            alt="dental">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                                <li>
                                    <p>Neurology</p>
                                    <div class="schedule-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/img/schedule-10.webp"
                                            alt="neurology">
                                    </div>
                                    <p>10:00 AM - 10:00 PM</p>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- schefdule area ends -->

<!-- counter area starts -->
<div class="counter">
    <div class="container">
        <div class="row">
            <?php
                $counter_items = $config['counter_lists'];

                foreach( $counter_items as $item ){
            ?>
            <div class="col-xl-3 col-lg-3 col-md-6 responsive-margin-bottom">
                <div class="single-counter">
                    <div class="counter-icon">
                        <i class="<?php echo esc_attr( $item['counter_icon'] )?>"></i>
                    </div>
                    <div class="counter-info">
                        <h5><?php echo esc_html( $item['counter_number'] )?></h5>
                        <span> <?php echo esc_html( $item['counter_title'] )?></span>
                    </div>

                </div>
            </div>

            <?php } ?>

            <!-- <div class="col-xl-3 col-lg-3 col-md-6 responsive-margin-bottom">
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
            </div> -->
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
                    <?php 
                        $config = get_option( 'medicaid_options' );

                        if( $config[ 'team_sec_title' ] ){
                    ?>
                    <h5><?php echo $config[ 'team_sec_subtitle' ]?></h5>
                    <h2><?php echo $config[ 'team_sec_title' ]?></h2>
                    <?php }?>
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
                    <?php 
                        $config = get_option( 'medicaid_options' );

                        if( $config[ 'testimonial_sec_title' ] ){
                    ?>
                    <h5><?php echo $config[ 'testimonial_sec_subtitle' ]?></h5>
                    <h2><?php echo $config[ 'testimonial_sec_title' ]?></h2>
                    <?php } ?>
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
                    <?php 
                        $config = get_option( 'medicaid_options' );

                        if( $config[ 'blog_sec_title' ] ){
                    ?>
                    <h5><?php echo $config[ 'blog_sec_subtitle' ]?></h5>
                    <h2><?php echo $config[ 'blog_sec_title' ]?></h2>
                    <?php } ?>
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