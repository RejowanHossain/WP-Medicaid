<?php
/*
Template Name: 404
*/
get_header();
?>

<!-- apoointment banner starts-->
<?php get_template_part( 'template-parts/breadcumb' )?>
<!-- apoointment banner ends-->

<!-- About area starts -->
<section id="about" class="mb-0 mt0">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <h2><?php _e( 'Sorry! The page is not found' )?></h2>
        </div>
    </div>
</section>
<!-- About area ends -->

<?php get_footer();?>