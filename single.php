<?php get_header();?>

<!-- blog details banner starts-->

<?php get_template_part( 'template-parts/breadcumb' )?>
<!-- blog details banner ends-->


<!-- blog details area starts -->
<div class="blog blog-details">
    <div class="container">
        <div class="row ">
            <div class="col-xl-8 col-lg-8 col-md-12 responsive-margin-bottom">
                <div class="single-blog-wrapper">
                    <?php 
                    while( have_posts(  ) ){
                      the_post(  )
                  ?>
                    <div class="blog-thumb">
                        <a href="#">
                            <img src="<?php the_post_thumbnail_url()?>" alt="Having overweight and depression can">
                        </a>
                    </div>
                    <div class="blog-body">
                        <div class="blog-content blog-details-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fas fa-user"></i>
                                            <?php echo get_the_author();?></a></li>
                                    <li><a href="#"><i class="fas fa-clock"></i>
                                            <?php echo get_the_date();?></a></li>
                                </ul>
                            </div>
                            <h5><?php the_title();?></h5>
                            <p><?php the_content();?>
                            </p>


                            <div class="blog-detail-meta">
                                <div class="blog-category">
                                    <span>Medical</span>
                                    <span>Health</span>
                                    <span>Neurology</span>
                                </div>

                                <div class="blog-share">
                                    <span>Share:</span>
                                    <ul>
                                        <li class="facebook">
                                            <a href="#"><i class="fab fa-facebook-f "></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"> <i class="fab fa-twitter twitter"></i></a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="#"> <i class="fab fa-pinterest pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php }?>

                    <div id="comments" class="comments-area">
                        <h2 class="comments-title">Comments</h2>
                        <ol class="comment-list">
                            <li class="comment">
                                <article class="comment-wrap clearfix">
                                    <div class="gravatar"><img alt="image" src="img/comment-1.webp"></div>
                                    <div class="comment-content">
                                        <div class="comment-meta">
                                            <h6 class="comment-author">Aaron Holmes</h6>
                                            <span class="comment-time">May 18</span>
                                        </div>
                                        <div class="comment-text">
                                            <p>Proin ac quam et lectus vestibulum blandit. Nunc maximus nibh at placerat
                                                tincidunt. Nam sem lacus, ornare non ante sed, ultricies fringilla
                                                massa. Ut congue, elit non</p>
                                        </div>
                                        <div>
                                            <h6 class="comment-reply"><a class="comment-reply-link" href="#">Reply</a>
                                            </h6>
                                        </div>
                                    </div>
                                </article>
                                <ul class="children">
                                    <li class="comment">
                                        <article class="comment-wrap clearfix">
                                            <div class="gravatar"><img alt="image" src="img/comment-2.webp"></div>
                                            <div class="comment-content">
                                                <div class="comment-meta">
                                                    <h6 class="comment-author">Carol Sullivan</h6>
                                                    <span class="comment-time">December 22</span>
                                                </div>
                                                <div class="comment-text">
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et
                                                        malesuada fames ac turpis egestas. Ut arcu libero, pulvinar non
                                                        massa sed.</p>
                                                </div>
                                                <div>
                                                    <h6 class="comment-reply"><a class="comment-reply-link"
                                                            href="#">Reply</a></h6>
                                                </div>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </div>

                    <div class="comment-respond">
                        <div class="form-respond">
                            <!-- <h1>
                                Leave a Reply
                            </h1> -->
                            <?php comments_template();?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="widgets-container">
                    <div class="widget">
                        <?php 
                            if( is_active_sidebar( 'search' ) ){
                                dynamic_sidebar( 'search' );
                            }
                        ?>
                    </div>

                    <div class="widget widget-bg">
                        <div class="widget-body">
                            <?php 
                                if( is_active_sidebar( 'sidebar1' ) ){
                                    dynamic_sidebar( 'sidebar1' );
                                }
                            ?>
                        </div>
                    </div>

                    <div class="widget widget-bg">
                        <div class="widget-body">

                            <?php 
                                if( is_active_sidebar( 'sidebar2' ) ){
                                    dynamic_sidebar( 'sidebar2' );
                                }
                            ?>
                        </div>
                    </div>


                    <div class="widget widget-bg">
                        <div class="widget-title">
                            <h3>Instagram</h3>
                        </div>
                        <div class="widget-body">
                            <div class="instagram">

                                <ul>
                                    <li>
                                        <img class="img-fluid"
                                            src="<?php echo get_template_directory_uri()?>/img/01_gallery.jpg"
                                            alt="01 Gallery">
                                        <a class="open-photo" href="#">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <img class="img-fluid"
                                            src="<?php echo get_template_directory_uri()?>/img/02_gallery.jpg"
                                            alt="02 Gallery">
                                        <a class="open-photo" href="#">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <img class="img-fluid"
                                            src="<?php echo get_template_directory_uri()?>/img/03_gallery.jpg"
                                            alt="02 Gallery">
                                        <a class="open-photo" href="#">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <img class="img-fluid"
                                            src="<?php echo get_template_directory_uri()?>/img/04_gallery.jpg"
                                            alt="04 Gallery">
                                        <a class="open-photo" href="#">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <img class="img-fluid"
                                            src="<?php echo get_template_directory_uri()?>/img/05_gallery.jpg"
                                            alt="05 Gallery">
                                        <a class="open-photo" href="#">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <img class="img-fluid"
                                            src="<?php echo get_template_directory_uri()?>/img/06_gallery.jpg"
                                            alt="06 Gallery">
                                        <a class="open-photo" href="#">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </li>
                                </ul>


                            </div>
                        </div>

                    </div>

                    <div class="widget widget-bg">

                        <?php 
                            if( is_active_sidebar( 'sidebar3' ) ){
                                dynamic_sidebar( 'sidebar3' );
                            }
                        ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- blog area ends -->


<?php get_footer();?>