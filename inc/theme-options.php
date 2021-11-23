<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'medicaid_options';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title'      => __('Medicaid Options' , 'medicaid'),
    'menu_slug'       => 'medicaid-options',
    'framework_title' => 'Medicaid Options Panel'
  ) );

  //
  // Create header section
  CSF::createSection( $prefix, array(
    'id'     => 'header_options',
    'title'  => 'Header Options',
    'icon'   => 'fas fa-address-card',
  ) );

    // Create header left options
  CSF::createSection( $prefix, array(
    'parent' => 'header_options',
    'title'  => __('Topbar Left' , 'medicaid'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'header_email',
        'type'    => 'text',
        'title'   => __('Email Address', 'medicaid'),
      ),
      array(
        'id'      => 'header_address',
        'type'    => 'text',
        'title'   => __('Address' , 'medicaid'),
      ),
       array(
        'id'      => 'header_time',
        'type'    => 'text',
        'title'   => __('Time' , 'medicaid'),
      ),
    ),

  ) );

  //header right

    CSF::createSection( $prefix, array(
    'parent' => 'header_options',
    'title'  => __('Topbar Right' , 'medicaid'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'header_icons',
        'title'   => 'Header Icons',
        'type'    => 'group',
        'button_title' => 'Add New Icons',
        'fields'  => array(
          array(
            'id'    => 'social-link',
            'type'  => 'text',
            'title' => __('Social Links', 'medicaid'),
          ),
          array(
            'id'    => 'social-icon',
            'type'  => 'icon',
            'title' => __('Social Icons', 'medicaid'),
          ),
        ),
      ),
    ),

  ) );

   // logo
  CSF::createSection( $prefix, array(
    'parent' => 'header_options',
    'title'  => __('Header Logo' , 'medicaid'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'header_logo',
        'title'   => __('Upload Logo', 'medicaid'),
        'type'    => 'media',
      ),
      array(
        'id'      => 'favicon',
        'title'   => __('Upload Favicon', 'medicaid'),
        'type'    => 'media',
      ),
    ),

  ) );
  
    // header color
  CSF::createSection( $prefix, array(
    'parent' => 'header_options',
    'title'  => __('Header Style Options', 'medicaid'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'header_background',
        'title'   => __('Header Background', 'medicaid'),
        'type'    => 'background',
        'output'  => array( '.header-top', '.slider .owl-dots div.active' )
      ),
      array(
        'id'      => 'header_typography',
        'title'   => __('Header Typography', 'medicaid'),
        'type'    => 'typography',
        'output'  => array( '.header-top', '.slide-table h2' )
      ),
      
    )
  ) );



    // Create about section
  CSF::createSection( $prefix, array(
    'id'     => 'about_options',
    'title'  => __('About Options', 'medicaid'),
    'icon'   => 'fas fa-address-card',
  ) );

  // about section title
  CSF::createSection( $prefix, array(
    'parent' => 'about_options',
    'title'  => __('About Section Title' , 'medicaid'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'abt_sec_subtitle',
        'title'   => __( 'Subtitle', 'medicaid' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'abt_sec_title',
        'title'   => __( 'Title', 'medicaid' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'abt_sec_description',
        'title'   => __( 'Description', 'medicaid' ),
        'type'    => 'textarea',
      ),
      
    ),

  ) );

  // about right content
  CSF::createSection( $prefix, array(
    'parent' => 'about_options',
    'title'  => __('About Right content' , 'medicaid'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'about_list',
        'title'   => 'About List',
        'type'    => 'group',
        'button_title' => 'Add New List',
        'fields'  => array(
          array(
            'id'    => 'list-text',
            'type'  => 'text',
            'title' => __('List Text', 'medicaid'),
          ),
        ),
      ),

      array(
        'id'      => 'abt_content_btn_text',
        'title'   => __( 'Content Button Text', 'medicaid' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'abt_content_btn',
        'title'   => __( 'Content Button Link', 'medicaid' ),
        'type'    => 'text',
      ),
      
    ),

  ) );

  // about left content
  CSF::createSection( $prefix, array(
    'parent' => 'about_options',
    'title'  => __('About left content' , 'medicaid'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
   
       array(
        'id'      => 'abt_content_image',
        'title'   => __( 'About Image', 'medicaid' ),
        'type'    => 'upload',    
        'button_title' => 'Add Image',
        'remove_title' => 'Remove Image'
      ),
    
     
      
    ),

  ) );


    // about accordion content
  CSF::createSection( $prefix, array(
    'parent' => 'about_options',
    'title'  => __('About info' , 'medicaid'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'            => 'abt_faq_list',
        'title'         => __( 'About FAQ Title', 'medicaid' ),
        'type'          => 'group',
        'button_title'  => 'Add new FAQ',
        'fields'        => array(
          array(
            'id'      => 'faq_title',
            'title'   => __( 'FAQ Title', 'medicaid' ),
            'type'    => 'text',
          ),
          array(
            'id'      => 'faq_desc',
            'title'   => __( 'FAQ Description', 'medicaid' ),
            'type'    => 'textarea',
          ),
        ),
      ),

      
    ),

  ) );


   // about skills content
  CSF::createSection( $prefix, array(
    'parent' => 'about_options',
    'title'  => __('About Skills' , 'medicaid'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'            => 'abt_skill_list',
        'title'         => __( 'About Skill Title', 'medicaid' ),
        'type'          => 'group',
        'button_title'  => 'Add new Skill',
        'fields'        => array(
          array(
            'id'      => 'skill_title',
            'title'   => __( 'Skill Title', 'medicaid' ),
            'type'    => 'text',
          ),
          array(
            'id'      => 'skill_number',
            'title'   => __( 'Skill Number', 'medicaid' ),
            'type'    => 'text',
          ),
        ),
      ),

      
    ),

  ) );

  
    // Create Service title
  CSF::createSection( $prefix, array(
    'id'     => 'service_options',
    'title'  => __('Service Options', 'medicaid'),
    'icon'   => 'fas fa-address-card',
  ) );

    // service section title
  CSF::createSection( $prefix, array(
    'parent' => 'service_options',
    'title'  => __('Service Section Title' , 'medicaid'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'service_sec_subtitle',
        'title'   => __( 'Subtitle', 'medicaid' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'service_sec_title',
        'title'   => __( 'Title', 'medicaid' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'service_sec_description',
        'title'   => __( 'Description', 'medicaid' ),
        'type'    => 'textarea',
      ),
      
    ),

  ) );

  // Create Schedule title
  CSF::createSection( $prefix, array(
    'id'     => 'schedule_options',
    'title'  => __('Schedule Options', 'medicaid'),
    'icon'   => 'fas fa-address-card',
  ) );

   // schedule section title
  CSF::createSection( $prefix, array(
    'parent' => 'schedule_options',
    'title'  => __('Schedule Section Title' , 'medicaid'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'schedule_sec_subtitle',
        'title'   => __( 'Subtitle', 'medicaid' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'schedule_sec_title',
        'title'   => __( 'Title', 'medicaid' ),
        'type'    => 'text',
      ),
      
    ),

  ) );


  // Create counter options
  CSF::createSection( $prefix, array(
    'id' => 'counter_options',
    'title'  => __('Counter Options' , 'medicaid'),
     'icon'   => 'fas fa-address-card',
    'fields' => array(
      array(
        'id'      => 'counter_lists',
        'title'   => __( 'Counter List', 'medicaid' ),
        'type'    => 'group',
        'button_title' => 'Add New Counter',
        'fields' => array(
          array(
            'id'      => 'counter_icon',
            'title'   => __( 'Counter Icon', 'medicaid' ),
            'type'    => 'icon',
          ),
          array(
            'id'      => 'counter_number',
            'title'   => __( 'Counter Number', 'medicaid' ),
            'type'    => 'number',
          ),
          array(
            'id'      => 'counter_title',
            'title'   => __( 'Counter Title', 'medicaid' ),
            'type'    => 'text',
          ),
        ),

      ),
      
    ),

  ) );



  // Create team title
  CSF::createSection( $prefix, array(
    'id'     => 'team_options',
    'title'  => __('Team Options', 'medicaid'),
    'icon'   => 'fas fa-address-card',
  ) );

    // team section title
  CSF::createSection( $prefix, array(
    'parent' => 'team_options',
    'title'  => __('Team Section Title' , 'medicaid'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'team_sec_subtitle',
        'title'   => __( 'Subtitle', 'medicaid' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'team_sec_title',
        'title'   => __( 'Title', 'medicaid' ),
        'type'    => 'text',
      ),
      
    ),

  ) );


    // Create testimonial title
  CSF::createSection( $prefix, array(
    'id'     => 'testimonial_options',
    'title'  => __('Testimonial Options', 'medicaid'),
    'icon'   => 'fas fa-address-card',
  ) );

    // team testimonial title
  CSF::createSection( $prefix, array(
    'parent' => 'testimonial_options',
    'title'  => __('Testimonial Section Title' , 'medicaid'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'testimonial_sec_subtitle',
        'title'   => __( 'Subtitle', 'medicaid' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'testimonial_sec_title',
        'title'   => __( 'Title', 'medicaid' ),
        'type'    => 'text',
      ),

      
    ),

  ) );


  // Create news title
  CSF::createSection( $prefix, array(
    'id'     => 'blog_options',
    'title'  => __('Blog Options', 'medicaid'),
    'icon'   => 'fas fa-address-card',
  ) );

    // team news title
  CSF::createSection( $prefix, array(
    'parent' => 'blog_options',
    'title'  => __('Blog Section Title' , 'medicaid'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'blog_sec_subtitle',
        'title'   => __( 'Subtitle', 'medicaid' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'blog_sec_title',
        'title'   => __( 'Title', 'medicaid' ),
        'type'    => 'text',
      ),
      
    ),

  ) );



  
  // CTA options
  // CSF::createSection( $prefix, array(
  //   'id' => 'cta_options',
  //   'title'  => __('CTA Options' , 'medicaid'),
  //   'icon'   => 'fas fa-address-card',
  //   'fields' => array(
  //       array(
  //         'id' => 'cta_switch',
  //         'type' => 'switcher',
  //         'title'   => __( 'Show CTA?', 'medicaid' ),
  //         'default' => true,
  //       ),
  //       array(
  //         'id'      => 'cta_title',
  //         'title'   => __( 'CTA Title', 'medicaid' ),
  //         'type'    => 'text',
  //         'default' => __( 'Best Solution For Your Business', 'medicaid' ),
  //         'dependency' => array( 'cta_switch', '==', 'true' ),
  //       ),
  //       array(
  //         'id'      => 'cta_subtitle',
  //         'title'   => __( 'CTA Subtitle', 'medicaid' ),
  //         'type'    => 'textarea',
  //         'default' => __( 'The Can Be Used On Larger Scale Projectss As Well As Small Scale Projectss', 'medicaid' ),
  //         'dependency' => array( 'cta_switch', '==', 'true' ),
  //       ),
  //       array(
  //         'id'      => 'cta_btn_text',
  //         'title'   => __( 'CTA Button Text', 'medicaid' ),
  //         'type'    => 'text',
  //         'default' => __( 'Contact', 'medicaid' ),
  //         'dependency' => array( 'cta_switch', '==', 'true' ),
  //       ),
  //       array(
  //         'id'      => 'cta_btn_url',
  //         'title'   => __( 'CTA Button URL', 'medicaid' ),
  //         'type'    => 'text',
  //         'default' => 'https://google.com',
  //         'dependency' => array( 'cta_switch', '==', 'true' ),
  //       ),
  //     ),

  // ) );


  // contact options
  CSF::createSection( $prefix, array(
    'id' => 'contact_options',
    'title'  => __( 'Contact Options' , 'medicaid'),
    'icon'   => 'fas fa-address-card',
    'fields' => array(
      array(
        'id'      => 'contact_info',
        'title'   => __( 'Contact Info', 'medicaid' ),
        'type'    => 'group',
        'fields'  => array(
          array(
            'id'      => 'contact_info_title',
            'title'   => __( 'Contact Info Title', 'medicaid' ),
            'type'    => 'text',
          ),
          array(
            'id'      => 'contact_info_icon',
            'title'   => __( 'Contact Info Icon', 'medicaid' ),
            'type'    => 'icon',
          ),
          array(
            'id'      => 'contact_info_description',
            'title'   => __( 'Contact Info Description', 'medicaid' ),
            'type'    => 'text',
          ),
        ),
      ),

      array(
          'id'      => 'contact_map',
          'title'   => __( 'Contact Map', 'medicaid' ),
          'type'    => 'map',
      ),
    ),

  ) );
  

  // footer options
  CSF::createSection( $prefix, array(
    'id' => 'footer_options',
    'title'  => __('Footer Options' , 'medicaid'),
    'icon'   => 'fas fa-rocket',
    'fields' => array(
      array(
        'id'      => 'footer_text',
        'title'   => __( 'Copyright Text', 'medicaid' ),
        'type'    => 'text',
        'default' => __( '©All Rights Reserved 2020', 'medicaid' ),
      ),
      array(
        'id'      => 'footer link',
        'title'   => __( 'Footer Link', 'medicaid' ),
        'type'    => 'group',
        'button_title'  => __( 'Add New Link', 'medicaid' ),
        'fields'  => array(
          array(
            'id'      => 'footer_link_text',
            'title'   => __( 'Footer Link Text', 'medicaid' ),
            'type'    => 'text',
          ),
          array(
            'id'      => 'footer_link_url',
            'title'   => __( 'Footer Link Url', 'medicaid' ),
            'type'    => 'text',
          ),
        ),
      ),
    ),

  ) );



}