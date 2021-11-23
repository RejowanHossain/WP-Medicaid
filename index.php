<?php
get_header();
?>

<!-- blog banner starts-->
<section class="hero hero-vendor banner-register">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-search text-center">
                    <h2>Blogs</h2>
                </div>

                <div class="breadcrumb-container">
                    <span>
                        <a href="index.html">Home</a>
                    </span>|
                    <span class="current"> Blogs</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog banner ends-->


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

                while( have_posts() ){
                    the_post();
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
                                    <li><?php the_category(', ')?></li>
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

        <!-- pagination -->
        <div class="row mt-5">
            <div class="col-xl-12 d-flex justify-content-center">
                <div class="pagination">
                    <?php
                      the_posts_pagination( );
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog area ends -->


<?php get_footer();?>