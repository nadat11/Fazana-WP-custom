<?php get_header(); ?>
<!-- header -->
    <header class="mainHeader">
        <img src="<?php the_field('header_slika');  ?>" alt="">
        <h1><?php the_field('header_naslov'); ?></h1>
    </header>

    <!-- istrazite -->
    <section class="istrazite py container">
        <h2>Istražite</h2>
      <?php get_template_part('istrazite'); ?>
    </section>

    <!-- dogadjaji -->
    <section class="dogadjaji py bg-gray">
        <h2>Događanja u Fažani</h2>
        <?php get_template_part('dogadjanja'); ?>
    </section>
<?php get_footer(); ?>