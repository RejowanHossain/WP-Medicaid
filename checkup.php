<?php
/*
Template Name: Checkup
*/
get_header();
?>


<!-- checkup banner starts-->
<?php get_template_part( 'template-parts/breadcumb' )?>
<!-- checkup banner ends-->


<!-- appointment starts -->
<div class="appointment single-appointment appointment-list">
    <div class="container">
        <div class="quote-and-presentation appointment-list-container">
            <div class="row">
                <div class="col-lg-12 col-xl-12 col-md-12">
                    <div class="card table-responsive">
                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Serial</th>
                                        <th scope="col">Patient</th>
                                        <th scope="col">Day</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Taylor Otwell</td>
                                        <td>Thursday</td>
                                        <td>14-Oct-2021</td>
                                        <td>11:00 AM - 11:30 AM</td>
                                        <td>
                                            <button class="list-btn scan" data-toggle="modal"
                                                data-target="#exampleModalCenter"><i class="fas fa-qrcode"></i></button>
                                            <button class="list-btn watch" data-toggle="modal"
                                                data-target=".bd-example-modal-lg"><i class="fas fa-eye"></i></button>
                                            <button class="list-btn delete"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Evan You</td>
                                        <td>Friday</td>
                                        <td>16-Oct-2021</td>
                                        <td>12:00 AM - 12:30 AM</td>
                                        <td>
                                            <button class="list-btn scan" data-toggle="modal"
                                                data-target="#exampleModalCenter"><i class="fas fa-qrcode"></i></button>
                                            <button class="list-btn watch" data-toggle="modal"
                                                data-target=".bd-example-modal-lg"><i class="fas fa-eye"></i></button>
                                            <button class="list-btn delete"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Ryan Dahl</td>
                                        <td>Sunday</td>
                                        <td>18-Oct-2021</td>
                                        <td>01:00 PM - 01:30 AM</td>
                                        <td>
                                            <button class="list-btn scan" data-toggle="modal"
                                                data-target="#exampleModalCenter"><i class="fas fa-qrcode"></i></button>
                                            <button class="list-btn watch" data-toggle="modal"
                                                data-target=".bd-example-modal-lg"><i class="fas fa-eye"></i></button>
                                            <button class="list-btn delete"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Taylor Otwell</td>
                                        <td>Thursday</td>
                                        <td>14-Oct-2021</td>
                                        <td>11:00 AM - 11:30 AM</td>
                                        <td>
                                            <button class="list-btn scan" data-toggle="modal"
                                                data-target="#exampleModalCenter"><i class="fas fa-qrcode"></i></button>
                                            <button class="list-btn watch" data-toggle="modal"
                                                data-target=".bd-example-modal-lg"><i class="fas fa-eye"></i></button>
                                            <button class="list-btn delete"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Evan You</td>
                                        <td>Friday</td>
                                        <td>16-Oct-2021</td>
                                        <td>12:00 AM - 12:30 AM</td>
                                        <td>
                                            <button class="list-btn scan" data-toggle="modal"
                                                data-target="#exampleModalCenter"><i class="fas fa-qrcode"></i></button>
                                            <button class="list-btn watch" data-toggle="modal"
                                                data-target=".bd-example-modal-lg"><i class="fas fa-eye"></i></button>
                                            <button class="list-btn delete"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Ryan Dahl</td>
                                        <td>Sunday</td>
                                        <td>18-Oct-2021</td>
                                        <td>01:00 PM - 01:30 AM</td>
                                        <td>
                                            <button class="list-btn scan" data-toggle="modal"
                                                data-target="#exampleModalCenter"><i class="fas fa-qrcode"></i></button>
                                            <button class="list-btn watch" data-toggle="modal"
                                                data-target=".bd-example-modal-lg"><i class="fas fa-eye"></i></button>
                                            <button class="list-btn delete"><i class="far fa-trash-alt"></i></button>
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
<!-- appointment ends -->


<!-- Scan QR Code Modal -->

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
                    <img src="<?php echo get_template_directory_uri(  )?>/img/qr-code.png" alt="qrcode">
                </div>
            </div>
            <div class="modal-footer qr-code-modal">
                <button type="button" class="button">Scan</button>
            </div>
        </div>
    </div>
</div>

<!-- Scan QR Code Modal -->


<!-- watch Appointment Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="quote-box">
                <div class="sec-title">
                    <h3>Watch appointment</h3>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xl-12 col-md-12">
                        <nav class="mt-4 mb-4">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-patient-tab" data-toggle="tab"
                                    href="#nav-patient" role="tab" aria-controls="nav-patient"
                                    aria-selected="true">Prescription</a>
                                <a class="nav-item nav-link" id="nav-doctor-tab" data-toggle="tab" href="#nav-doctor"
                                    role="tab" aria-controls="nav-doctor" aria-selected="false">History</a>
                            </div>
                        </nav>


                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-patient" role="tabpanel"
                                aria-labelledby="nav-patient-tab">
                                <div class="col-lg-12 col-md-12">
                                    <div class="quote-item">
                                        <span class="lable">Prescription*</span>
                                        <i class="fas fa-file-signature"></i>
                                        <textarea name="prescription" placeholder="Prescribe"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="quote-item">
                                        <span class="lable">Notes*</span>
                                        <i class="fas fa-file-signature"></i>
                                        <textarea name="notes" placeholder="Special Notes"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="quote-item">
                                        <span class="lable">Tests*</span>
                                        <i class="fas fa-file-signature"></i>
                                        <textarea name="notes" placeholder="Special Notes"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="quote-item">
                                        <span class="lable">Upload Tests & Reports*</span>
                                        <i class="fas fa-upload"></i>
                                        <input type="file" name="email" placeholder="Ex: 142, park street, new york">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="quote-item">
                                        <a class="button" href="#">Send</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-doctor" role="tabpanel" aria-labelledby="nav-doctor-tab">
                                <div class="col-lg-12 col-md-12">
                                    <div class="quote-item">
                                        <span class="lable">Download Previous Prescription*</span>
                                        <div class="download-prescription">
                                            <span>Prescription-1 <i class="fas fa-download"></i></span>
                                        </div>

                                        <div class="download-prescription">
                                            <span>Prescription-2 <i class="fas fa-download"></i></span>
                                        </div>

                                        <div class="download-prescription">
                                            <span>Prescription-3 <i class="fas fa-download"></i></span>
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
<!-- watch Appointment Modal -->

<?php get_footer();?>