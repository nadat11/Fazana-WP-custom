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
</head>
<body>
    
    <!-- line -->
    <div class="line"></div>
    <!-- drustveneMreze -->
    <section class="drustveneMreze">
        <article>
            <a href=""><i class="fab fa-facebook-f"></i></a>
        </article>
        <article>
            <a href=""><i class="fab fa-instagram"></i></a>
        </article>
        <article>
            <a href=""><i class="fab fa-youtube"></i></a>
        </article>
    </section>
    <!-- nav -->
    <nav>
        <a href="<?php echo esc_url(home_url()); ?>" class="logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/fazana_logo.webp" alt=""></a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="istrazite.php">Istražite</a></li>
            <li><a href="dogadjanja.php">Događanja</a></li>
            <li><a href="blog.php">Blog</a></li>
        </ul>
    </nav>