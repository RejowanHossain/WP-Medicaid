<?php

// theme support functions
require_once get_template_directory().'./inc/theme-support.php';

// enqueue assets functions
require_once get_template_directory().'./inc/enqueue.php';

// custom post types
require_once get_template_directory().'./inc/medicaid-cpt.php';

// blog comment configuration
require_once get_template_directory().'./inc/comment-config.php';

// custom widgets
require_once get_template_directory().'/inc/custom-widgets.php';


//Theme options
require_once get_template_directory().'/inc/theme-options.php';