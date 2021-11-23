<?php
/*
Template Name: Doctors
*/
get_header();
?>



<!-- doctors banner starts-->
<?php get_template_part( 'template-parts/breadcumb' )?>

<!-- doctors banner ends-->

<!-- search sratrs -->
<div class="custom-search">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="section-title mb-0">
                    <h5>Find the best doctor</h5>
                    <h2>Search The doctors </h2>
                </div>
            </div>
        </div>
        <div class="row space">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="quote-box">
                    <div class="row">
                        <!-- <div class="col-lg-6 col-md-6">
                  <div class="quote-item">
                    <span class="lable">Disease Type*</span>
                    <select name="disease" id="disease" class="selectStyle">
                      <option value="Hemorrage">Hemorrage</option>
                      <option value="Ulcer">Ulcer</option>
                      <option value="Cold">Cold</option>
                      <option value="Gastric">Gastric</option>
                    </select>
                  </div>
                </div> -->
                        <div class="col-lg-4 col-md-6">
                            <div class="quote-item">
                                <span class="lable">Doctors*</span>
                                <i class="fas fa-user"></i>
                                <input type="text" name="doctors" placeholder="Brandon Aich">
                                <!-- <select class="selectStyle">
                        <option value="0">Doctors</option>
                        <option value="1">Dr. Stephen Hawkings</option>
                        <option value="2">Dr. Phill Collins</option>
                        <option value="3">Dr. Carl Segan</option>
                        <option value="4">Dr. James Hetfield</option>
                        <option value="5">Dr. Bob Hammett</option>
                        <option value="6">Dr. Dave Ellefson</option>
                        <option value="6">Dr. Scot Ian</option>
                        <option value="6">Dr. Nick Scott</option>
                      </select> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
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
                        <div class="col-lg-4 col-md-6">
                            <div class="quote-item">
                                <span class="lable">Location*</span>
                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" name="email" placeholder="Ex: 142, park street, new york">
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-6">
                  <div class="quote-item">
                    <span class="lable">Select Date*</span>
                    <i class="fas fa-calendar-day"></i>
                    <input type="date" data-toggle="datepicker" placeholder="Select Date">
                  </div>
                </div> -->
                        <!-- <div class="col-lg-6 col-md-6">
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
                </div> -->
                        <div class="col-sm-12">
                            <div class="quote-item">
                                <a class="button" href="#doctors-list.html">Find Doctors</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- search ends -->

<!-- team area starts -->
<section id="team">
    <div class="container">
        <div class="row">
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

            <div class=" col-xl-12 col-lg-12 col-md-12 mb-4 ">
                <div class="team style-16 featured-doctors">
                    <div class="team-thumb">
                        <img src="<?php echo get_template_directory_uri(  )?>./img/doctors-3.jpg" alt="Matthew Reyes">
                        <div class="team-controls">
                            <a class="" href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="team-body featured-body">
                        <h5>
                            Ryan Dahl
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
                            <a class="team-category" href="#">Pulmonology &amp; Urology</a>
                        </div>
                        <div class="team-paragraph">
                            <p>MedDoctors Are A Medical And Health Department Provider Institutions. Suitable For
                                Healthcare,</p>
                        </div>
                        <div class="team-info">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                                Australia
                            </span>
                        </div>
                        <button class="button search-appointment" data-toggle="modal"
                            data-target=".bd-example-modal-lg">
                            Take Appointment</button>
                    </div>
                    <div class="location-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d642680.1720351968!2d132.9712518206394!3d-23.66262331633551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2sbd!4v1634197465290!5m2!1sen!2sbd"
                            style="border:0;"></iframe>
                    </div>
                </div>
            </div>
            <!-- <div class=" col-xl-8 col-lg-8 col-md-12 mb-4 responsive-margin-bottom">
            <div class="team style-16 featured-doctors">
              <div class="row">
                <div class="col-lg-8">
                  <div class="team-thumb">
                    <img src="./img/doctors-1.jpg" alt="Matthew Reyes">
                    <div class="team-controls">
                      <a class="" href="#">
                        <i class="far fa-heart"></i>
                      </a>
                    </div>
                  </div>
                  <div class="team-body featured-body">
                    <h5>
                      Matthew Reyes
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
                      <a class="team-category" href="#">Obstetrics &amp; Gynaecology</a>
                    </div>
                    <div class="team-paragraph">
                      <p>MedDoctors Are A Medical And Health Department Provider Institutions. Suitable For Healthcare,</p>
                    </div>
                    <div class="team-info">
                      <span>
                    <i class="fas fa-map-marker-alt"></i>
                    Hong Kong
                  </span>
                    </div>
                    <a class="button" href="doctor-profile.html">
                  View Details</a>
                  </div>
                </div>




                <div class="col-lg-4">
                  <div class="location-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1031226.7684492953!2d-2.4990030509644185!3d53.106607888963964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d0a98a6c1ed5df%3A0xf4e19525332d8ea8!2sEngland%2C%20UK!5e0!3m2!1sen!2sbd!4v1634197569767!5m2!1sen!2sbd"
                      style="border:0;"></iframe>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-xl-4">
            <div id="datetime">
              <div id="pickerSeven"></div>
              <button class="button datetime-confirm remove-conf" id="conf" href="#">Confirm</button>
            </div>
          </div> -->

            <div class=" col-xl-12 col-lg-12 col-md-12 mb-4">
                <div class="team style-16 featured-doctors">
                    <div class="team-thumb">
                        <img src="<?php echo get_template_directory_uri(  )?>./img/doctors-2.jpg" alt="Matthew Reyes">
                        <div class="team-controls">
                            <a class="" href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="team-body featured-body">
                        <h5>
                            Brandon Aich
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
                            <a class="team-category" href="#">Neurology</a>
                        </div>
                        <div class="team-paragraph">
                            <p>MedDoctors Are A Medical And Health Department Provider Institutions. Suitable For
                                Healthcare,</p>
                        </div>
                        <div class="team-info">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                                England
                            </span>
                        </div>
                        <button class="button search-appointment" data-toggle="modal"
                            data-target=".bd-example-modal-lg">
                            Take Appointment</button>
                    </div>
                    <div class="location-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1031226.7684492953!2d-2.4990030509644185!3d53.106607888963964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d0a98a6c1ed5df%3A0xf4e19525332d8ea8!2sEngland%2C%20UK!5e0!3m2!1sen!2sbd!4v1634197569767!5m2!1sen!2sbd"
                            style="border:0;"></iframe>
                    </div>
                </div>
            </div>

            <div class=" col-xl-12 col-lg-12 col-md-12 mb-4 ">
                <div class="team style-16 featured-doctors">
                    <div class="team-thumb">
                        <img src="<?php echo get_template_directory_uri(  )?>./img/doctors-3.jpg" alt="Matthew Reyes">
                        <div class="team-controls">
                            <a class="" href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="team-body featured-body">
                        <h5>
                            Ryan Dahl
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
                            <a class="team-category" href="#">Pulmonology &amp; Urology</a>
                        </div>
                        <div class="team-paragraph">
                            <p>MedDoctors Are A Medical And Health Department Provider Institutions. Suitable For
                                Healthcare,</p>
                        </div>
                        <div class="team-info">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                                Australia
                            </span>
                        </div>
                        <button class="button search-appointment" data-toggle="modal"
                            data-target=".bd-example-modal-lg">
                            Take Appointment</button>
                    </div>
                    <div class="location-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d642680.1720351968!2d132.9712518206394!3d-23.66262331633551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2sbd!4v1634197465290!5m2!1sen!2sbd"
                            style="border:0;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team area ends -->


<!-- counter area starts -->
<div class="counter appointment-counter">
    <div class="container">
        <div class="row">
            <?php
                $config = get_option( 'medicaid_options' );
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

        </div>
    </div>
</div>
<!-- counter area ends -->




<!-- appointment modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content p-40">
            <div id="datetime">
                <div id="pickerSeven"></div>
                <button class="button datetime-confirm remove-conf" id="conf" href="#">Confirm</button>
            </div>
        </div>
    </div>
</div>
<!-- appointment modal -->

<script>
let proMap;

function initMap() {
    var options = {
            zoom: 8,
            center: {
                lat: 42.3601,
                lng: -71.0589
            }
        },

        proMap = new google.maps.Map(document.getElementById("map"), options)

    addMarker({
        lat: 42.4668,
        lng: -70.9495
    })

    addMarker({
        lat: 42.8126,
        lng: -70.8773
    })

    addMarker({
        lat: 42.7762,
        lng: -71.0773
    })

    addMarker({
        lat: 46.8139,
        lng: -71.2080
    })
    addMarker({
        lat: 46.0557,
        lng: -71.9590
    })

    addMarker({
        lat: 44.1486,
        lng: -71.4530
    })

    addMarker({
        lat: 47.2364,
        lng: -71.2276
    })

    addMarker({
        lat: 45.4042,
        lng: -71.8929
    })

    // multiple markers
    function addMarker(coords) {
        // marker
        var marker = new google.maps.Marker({
            position: coords,
            map: proMap,
        });
    }

}
</script>

<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKgnNVt3129tfu-Fn4GjNUKxHXhRk6Jbg&callback=initMap">
</script>
<!-- scrolltop btn-->

<?php get_footer();?>