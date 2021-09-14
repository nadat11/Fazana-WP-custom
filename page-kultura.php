<?php 
/*
*Template Name: Kultura stranica
*/

 get_header(); ?>
 <!-- headers -->
 <header class="headers">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/kultura.webp" alt="">
    </header>

    <!-- intro -->
    <section class="intro py container">
        <h1><?php the_field('naslov'); ?></h1>
        <p><?php the_field('tekst'); ?></p>
    </section>

    <!-- listaIstrazite -->
    <section class="istraziteLista container py">
    <?php $query = new WP_Query(array('post_type' => 'kultura'));
    if($query->have_posts()) : ?>
    <?php while($query->have_posts()) : $query->the_post(); ?>
        <article>
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail();  ?>
            </a>
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
        </article>
        <?php endwhile; wp_reset_postdata(); ?>
    <?php else : ?>
        <?php _e('Nema unetih dešavanja iz kulture'); ?>
    <?php endif; ?>
    </section>

    <?php get_footer(); ?>     