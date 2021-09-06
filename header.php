<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <?php wp_head(); ?>
    <!-- <title><?php bloginfo('title'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> -->
</head>
<body>
    
    <!-- line -->
    <div class="line"></div>
    <!-- drustveneMreze -->
    <section class="drustveneMreze">
        <?php if(is_active_sidebar('drustvene-mreze')): ?>
        <?php dynamic_sidebar('drustvene-mreze'); ?>
        <?php endif; ?>
    </section>
    <!-- nav -->
    <nav>
        <a href="<?php echo esc_url(home_url()); ?>" class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/fazana_logo.webp" alt=""></a>
        <?php $args = array(
            'theme_location' => 'primary'
        );
        
        ?>
        <?php wp_nav_menu(); ?>
       
    </nav>