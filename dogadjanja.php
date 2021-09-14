<article class="container">
    <?php $query = new WP_Query(array('post_type' => 'dogadjanja'));
    if($query->have_posts()) : ?>
    <?php while($query->have_posts()) : $query->the_post(); ?>
            <div>
                <a href="dogadjanja.php">
                    <?php the_post_thumbnail();  ?>
                </a>
                <div class="text">
                    <?php echo get_the_date('F j, Y, g:i a'); ?>
                   <h3> <?php the_title(); ?></h3>
                    <a class="btn" href="<?php the_permalink(); ?>"><?php _e('Više &gt;'); ?></a>
                </div>
            </div>
    <?php endwhile; wp_reset_postdata(); ?>
    <?php else : ?>
        <?php _e('Nema unetih dogadjanja'); ?>
    <?php endif; ?>
</article>