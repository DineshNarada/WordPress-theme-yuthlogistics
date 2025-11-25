<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo/favicon.png" size="32x32">

    <?php wp_head(); // Required for WP to insert enqueued styles, scripts, plugins ?>
</head>

<body <?php body_class(); ?>>
    <div class="body-wrap">