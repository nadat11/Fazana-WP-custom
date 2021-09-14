<?php 
/*
*Template Name: Dogadjanja stranica
*/

 get_header(); ?>
  <!-- headers -->
  <header class="headers">
        <img src="<?php the_field('header_photo'); ?>" alt="">
    </header>

    <!-- intro -->
    <section class="intro py container">
        <h1><?php the_field('dogadjanja_naslov'); ?></h1>
        <p><?php  the_field('dogadjanja_tekst'); ?></p>
    </section>

    <!-- dogadjaji -->
    <section class="dogadjaji py">
    <?php get_template_part('dogadjanja'); ?>
    </section>

<?php get_footer(); ?>
