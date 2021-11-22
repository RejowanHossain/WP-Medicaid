<!-- Footer area starts -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 responsive-margin-bottom">
                    <div class="footer-box">
                        <?php 
                            if( is_active_sidebar( 'footer1' ) ){
                                dynamic_sidebar( 'footer1' );
                            }
                        ?>

                    </div>

                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 ">
                    <div class="footer-box padding-left">
                        <?php 
                            if( is_active_sidebar( 'footer2' ) ){
                                dynamic_sidebar( 'footer2' );
                            }
                        ?>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6">
                    <div class="footer-box padding-left">
                        <?php 
                            if( is_active_sidebar( 'footer3' ) ){
                                dynamic_sidebar( 'footer3' );
                            }
                        ?>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-form">
                        <?php 
                            if( is_active_sidebar( 'footer4' ) ){
                                dynamic_sidebar( 'footer4' );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="footer-copyright">
                        <p class="white">© 2021 MedicAid Limited</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 end">
                    <div class="footer-right ">
                        <ul>
                            <li>
                                <a href="#">terms and condition</a>
                            </li>
                            <li>
                                <a href="#">privacy policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer area ends  -->
<!-- search element starts -->
<div class="search-box" id="searchContainer">
    <form action="">
        <input type="search" placeholder="Search Here.....">
    </form>
    <!-- <form>
        <div class="form-row">
          <div class="col-lg-3 col-xl-3 col-md-12 mb-4">
            <input type="search" placeholder="Search Here.....">
          </div>
          <div class="col-lg-3  col-xl-3 col-md-12 mb-4">
            <select name="cat" id="cat" class="custom-select selectStyle">
              <option value="Arthopedics">Arthopedics</option>
              <option value="Neurology">Neurology</option>
              <option value="Urology">Urology</option>
              <option value="Gynocology">Gynocology</option>
            </select>
          </div>

          <div class="col-lg-3  col-xl-3 col-md-12 mb-4">
            <select name="disease" id="disease" class="custom-select selectStyle">
              <option value="Hemorrage">Hemorrage</option>
              <option value="Ulcer">Ulcer</option>
              <option value="Cold">Cold</option>
              <option value="Gastric">Gastric</option>
            </select>
          </div>

          <div class="col-lg-3  col-xl-3 col-md-12 mb-4">
            <select name="location" id="location" class="custom-select selectStyle">
              <option value="volvo">USA</option>
              <option value="saab">Hong Kong</option>
              <option value="mercedes">England</option>
              <option value="audi">Germany</option>
            </select>
          </div>
        </div>
        <button type="submit"><i class="fas fa-search"></i></button>
      </form> -->
    <span class="search-box-icon exit" id="searchClose"><i class="fas fa-times"></i></span>
</div>
<!-- search element ends -->
<!-- scrolltop btn -->
<div class="top-btm">
    <i class="fas fa-chevron-up"></i>
</div>
<!-- scrolltop btn-->
<?php wp_footer();?>

</body>

</html>