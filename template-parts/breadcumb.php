<section class="hero hero-vendor banner-register">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-search text-center">
                    <h2><?php the_title();?></h2>
                </div>

                <div class="breadcrumb-container">
                    <?php 
                        while( have_posts() ){
                            the_post();
                    ?>
                    <span>
                        <a href="<?php echo esc_url(site_url());?>"><?php _e( ' Home' );?></a>
                    </span>|
                    <span class="current"><?php the_title();?></span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>