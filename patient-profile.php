<?php
/*
Template Name: Patients Profile
*/
get_header();
?>



<!-- patients banner starts-->
<?php get_template_part( 'template-parts/breadcumb' )?>

<!-- patients banner ends-->


<!-- profile starts -->
<div class="appointment single-appointment doctor-profile-info patient-profile">
    <div class="container">
        <div class="quote-and-presentation doctor-profile-container patient-profile-info">
            <div class="row">
                <div class="col-lg-4 col-xl-4 col-md-12 mb-4">
                    <div class="team style-16 profile-thumb">
                        <div class="team-thumb">
                            <img src="<?php echo get_template_directory_uri(  )?>./img/team-member-1.jpg"
                                alt="Matthew Reyes">
                        </div>
                        <div class="team-body">
                            <h5>
                                Ryan Dahl
                            </h5>
                            <div class="team-info patient-info">
                                <span>
                                    <i class="fas fa-map-marker-alt"></i>
                                    USA
                                </span>

                                <span>
                                    <i class="fas fa-envelope"></i>
                                    ryan@gmail.com
                                </span>

                                <span>
                                    <i class="fas fa-phone-alt"></i> 882 5478 99
                                </span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-xl-8 col-md-12">
                    <div class="schedule doctor-schedule patient-schedule" id="classes">
                        <div class="container">
                            <div class="row ">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="section-title mb-0">
                                        <h2>All Appointments</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row space space-patient">
                                <div class="col-md-12">
                                    <div class="colorful-tab-wrapper" id="colorful">
                                        <ul class="colorful-tab-menu">
                                            <li class="colorful-tab-menu-item active"><a href="#clr-0">Past</a></li>
                                            <li class="colorful-tab-menu-item"><a href="#clr-2">Upcoming</a></li>
                                        </ul>

                                        <div class="colorful-tab-container">

                                            <div class="colorful-tab-content active" id="clr-0">
                                                <div class="card">
                                                    <div class="table-responsive">
                                                        <table class="table ">
                                                            <thead class="thead-dark">
                                                                <tr>
                                                                    <th scope="col">Serial</th>
                                                                    <th scope="col">Doctor</th>
                                                                    <th scope="col">Day</th>
                                                                    <th scope="col">Date</th>
                                                                    <th scope="col">Time</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Mark Twain</td>
                                                                    <td>Thursday</td>
                                                                    <td>14-Sept-2021</td>
                                                                    <td>11:00 AM - 11:30 AM</td>
                                                                    <td>
                                                                        <button class="list-btn delete"><i
                                                                                class="far fa-trash-alt"></i></button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Matthew Reyes </td>
                                                                    <td>Friday</td>
                                                                    <td>16-Sept-2021</td>
                                                                    <td>12:00 AM - 12:30 AM</td>
                                                                    <td>
                                                                        <button class="list-btn delete"><i
                                                                                class="far fa-trash-alt"></i></button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>Katherine Coopers</td>
                                                                    <td>Sunday</td>
                                                                    <td>18-Sept-2021</td>
                                                                    <td>01:00 PM - 01:30 AM</td>
                                                                    <td>
                                                                        <button class="list-btn delete"><i
                                                                                class="far fa-trash-alt"></i></button>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>Mark Twain</td>
                                                                    <td>Thursday</td>
                                                                    <td>14-Sept-2021</td>
                                                                    <td>11:00 AM - 11:30 AM</td>
                                                                    <td>
                                                                        <button class="list-btn delete"><i
                                                                                class="far fa-trash-alt"></i></button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">4</th>
                                                                    <td>Matthew Reyes </td>
                                                                    <td>Friday</td>
                                                                    <td>16-Sept-2021</td>
                                                                    <td>12:00 AM - 12:30 AM</td>
                                                                    <td>
                                                                        <button class="list-btn delete"><i
                                                                                class="far fa-trash-alt"></i></button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">5</th>
                                                                    <td>Katherine Coopers</td>
                                                                    <td>Sunday</td>
                                                                    <td>18-Sept-2021</td>
                                                                    <td>01:00 PM - 01:30 AM</td>
                                                                    <td>
                                                                        <button class="list-btn delete"><i
                                                                                class="far fa-trash-alt"></i></button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="colorful-tab-content" id="clr-2">

                                                <div class="card">
                                                    <div class="table-responsive">
                                                        <table class="table ">
                                                            <thead class="thead-dark">
                                                                <tr>
                                                                    <th scope="col">Serial</th>
                                                                    <th scope="col">Doctor</th>
                                                                    <th scope="col">Day</th>
                                                                    <th scope="col">Date</th>
                                                                    <th scope="col">Time</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Sarah Jackson</td>
                                                                    <td>Thursday</td>
                                                                    <td>14-Oct-2021</td>
                                                                    <td>11:00 AM - 11:30 AM</td>
                                                                    <td>
                                                                        <button class="list-btn edit"
                                                                            data-toggle="modal"
                                                                            data-target=".bd-example-modal-lg"><i
                                                                                class="far fa-edit"></i></button>
                                                                        <button class="list-btn delete"><i
                                                                                class="far fa-trash-alt"></i></button>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- profile ends -->


<!-- Edit Appointment Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="quote-box">
                <div class="sec-title">
                    <h3>Edit appointment</h3>
                </div>
                <div class="row">

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
                            <a class="button" href="appointment.html">Update appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Edit Appointment Modal -->


<?php get_footer();?>