<?php get_header(); ?>

    <!-- singleHeaders -->
    <header class="singleHeaders">
        <h3 class="container"><?php the_title(); ?></h3>
    </header>

    <section class="container py">
        <article>
            <?php if(have_posts()) : while(have_posts()) : the_post(  ); ?>
            
                    <?php the_content(); ?>
           
            <?php endwhile; else: ?>
                <?php _e('Nema unetih stranica!'); ?>
                <?php endif; ?>
        </article>
       
    </section>

<?php get_footer(); ?>