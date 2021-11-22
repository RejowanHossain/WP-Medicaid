<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
        $config = get_option( 'medicaid_options' );

        $favicon =  $config['favicon']
    ?>
    <link rel="icon" href="<?php echo $favicon[ 'url' ]?>" type="image/jpg">

    <?php wp_head();?>
</head>

<body <?php body_class();?>>

    <!-- topbar starts -->
    <div class="top-navbar">
        <div class="container">
            <div class="content-box d-flex align-items-center justify-content-between">
                <ul class="website-info">

                    <?php if( $config['header_email'] ){?>
                    <li>
                        <i class="far fa-envelope"></i>
                        <a
                            href="<?php echo esc_url( $config['header_email'] );?>"><?php echo esc_html(  $config['header_email'] );?></a>
                    </li>
                    <?php }  ?>

                    <?php if( $config['header_address'] ){?>
                    <li>
                        <i class="fas fa-map-marker-alt"></i> <?php echo esc_html(  $config['header_address'] );?>
                    </li>
                    <?php }?>


                    <?php if( $config['header_time'] ){?>
                    <li>
                        <i class="far fa-clock"></i> <?php echo esc_html(  $config['header_time'] );?>
                    </li>
                    <?php }?>

                </ul>
                <ul class="website-icon-social">
                    <?php
                        $header_icons = $config['header_icons'];

                        foreach( $header_icons as $icon ){
                    ?>
                    <li><a href="<?php echo esc_attr( $icon['social-link'] )?>"><i
                                class="<?php echo esc_attr( $icon['social-icon'] )?>"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- topbar ends -->


    <!-- Main menu starts -->
    <section class="main-menu-area">
        <div class="container">
            <div class="row ">
                <div class="col-xl-3 col-lg-4 col-md-4 d-flex align-items-center mobile-mt">
                    <div class="logo">

                        <a href="<?php echo esc_url(site_url());?>">
                            <h5><span>Medic</span>Aid<span>.</span> </h5>
                        </a>


                        ?>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-8 d-flex align-items-center justify-content-end">

                    <nav class="main-nav" id="mobile-menu">
                        <ul>

                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                            ));
                        ?>

                            <li class="profile">
                                <a href="javascript:void(0)">
                                    <i class="fas fa-user"></i>
                                </a>
                            </li>
                            <li class="search" id="searchBtn">
                                <i class="fas fa-search"></i>
                            </li>


                        </ul>


                    </nav>

                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- main menu ends -->