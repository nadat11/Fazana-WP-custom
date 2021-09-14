<?php 
/*
*Template Name: Istrazite stranica
*/

 get_header(); ?>
<!-- headers -->
<header class="headers">
        <img src="<?php the_field('istrazite_heder'); ?>" alt="">
    </header>
    <!-- intro -->
    <section class="intro py container">
        <h1><?php the_field('istrazite_naslov'); ?></h1>
        <p><?php the_field('istrazite_tekst');  ?></p>
    </section>

    <!-- istrazite -->
    <section class="istrazite py container">
    <?php get_template_part('istrazite'); ?>
    </section>

<?php get_footer(); ?>