<?php get_header(); ?>

    <!-- headers -->
    <header class="headers">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/kultura.webp" alt="">
    </header>

    <section class="blog container">
    <?php if(have_posts()) : while(have_posts()) : the_post(  ); ?>
        <article>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
      
        </article>
        <?php endwhile; else: ?>
                <?php _e('Nema unetih izleta!'); ?>
                <?php endif; ?>
        <aside>
        <?php get_sidebar(); ?>
        </aside>
    </section>

    <?php get_footer(); ?> 