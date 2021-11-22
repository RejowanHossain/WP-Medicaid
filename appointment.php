<?php
/*
Template Name: Appointment
*/
get_header();
?>


<!-- apoointment banner starts-->
<?php get_template_part( 'template-parts/breadcumb' )?>
<!-- apoointment banner ends-->


<!-- appointment starts -->
<div class="appointment single-appointment">
    <div class="container">
        <div class="quote-and-presentation">
            <div class="row">
                <div class="col-lg-12 col-xl-8 col-md-12">
                    <div class="quote-box">
                        <div class="sec-title">
                            <h3>Make appointment!</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="quote-item">
                                    <span class="lable">name*</span>
                                    <i class="fas fa-file-signature"></i>
                                    <input type="text" name="name" placeholder="Ex: John Smith">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="quote-item">
                                    <span class="lable">Email*</span>
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Ex: smith@gmail.com">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="quote-item">
                                    <span class="lable">Phone*</span>
                                    <i class="fas fa-phone"></i>
                                    <input type="tel" name="tel" placeholder="Ex: 998 021 2154">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="quote-item">
                                    <span class="lable">Location*</span>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <input type="text" name="email" placeholder="Ex: 142, park street, new york">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
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
                            <div class="col-lg-6 col-md-12">
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
                            <div class="col-lg-6 col-md-12">
                                <div class="quote-item">
                                    <span class="lable">Select Date*</span>
                                    <i class="fas fa-calendar-day"></i>
                                    <input type="date" data-toggle="datepicker" placeholder="Select Date">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
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
                        </div>


                        <div class="sec-title mt-2">
                            <h3>Payment Information</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="quote-item">
                                    <span class="lable">Name on card*</span>
                                    <i class="fas fa-file-signature"></i>
                                    <input type="text" name="name" placeholder="Ex: John Smith">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="quote-item">
                                    <span class="lable">Card Number*</span>
                                    <i class="fas fa-credit-card"></i>
                                    <input type="text" name="number" placeholder="Ex: 1258 758 999">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="quote-item">
                                    <span class="lable">Expiration date*</span>
                                    <i class="fas fa-phone"></i>
                                    <input type="date" name="date">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="quote-item">
                                    <span class="lable">Security code*</span>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <input type="text" name="code" placeholder="CVV">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <ul class="list-payment">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-cc-paypal"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-cc-visa""></i>
                        </a>
                      </li>
                      <li>
                        <a href=" #">
                                                <i class="fab fa-cc-mastercard"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-cc-amex"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-xl-4 col-md-12">
                    <div class="booking-summary">
                        <div class="title-booking">
                            <h4 class="text-color-white">Booking Summary</h4>
                        </div>

                        <ul class="list-summary">
                            <li>
                                <ul class="date">
                                    <li>
                                        Date
                                    </li>
                                    <li class="w-right">
                                        07/10/2020
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul class="hours">
                                    <li>
                                        Time
                                    </li>
                                    <li class="w-right">
                                        08:30 PM
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul class="name-doctor">
                                    <li>
                                        Doctor name
                                    </li>
                                    <li class="w-right">
                                        Dr. Beatrice Willis
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="list-price">
                            <li>
                                <ul class="price">
                                    <li>
                                        Sit etiam convallis
                                    </li>
                                    <li class="w-right">
                                        $80
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul class="price">
                                    <li>
                                        Curabitur praesent sed
                                    </li>
                                    <li class="w-right">
                                        $140
                                    </li>
                                </ul>
                            </li>
                        </ul>


                        <ul class="list-total font-bold">
                            <li>
                                <ul class="price font-bold">
                                    <li>
                                        Total
                                    </li>
                                    <li class="w-right">
                                        $500
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <div class="box-btn" data-toggle="modal" data-target="#exampleModalCenter">
                            <a href="#" class="button">
                                <span>Confirm and Pay</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- appointment ends -->

<!-- qr code pop starts -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Get The QR Code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="qrcode">
                    <img src="img/qr-code.png" alt="qrcode">
                </div>
            </div>
            <div class="modal-footer qr-code-modal">
                <button type="button" class="button later" data-dismiss="modal">Later</button>
                <button type="button" class="button">Print</button>
            </div>
        </div>
    </div>
</div>
<!-- qr code pop up ends -->

<!-- counter area starts -->
<div class="counter appointment-counter">
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


<?php get_footer();?>