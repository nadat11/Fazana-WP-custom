<?php get_header(); ?>

    <!-- singleHeaders -->
    <header class="singleHeaders">
        <h3 class="container"><?php the_title(); ?></h3>
    </header>

    <section class="singleBlog container">
        <article>
            <?php if(have_posts()) : while(have_posts()) : the_post(  ); ?>
            <div class="post">
                <div class="featuredImage">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="text">
                    <div class="meta"><?php echo get_the_date('F j, Y, g:i a'); ?>  | <a href=""><?php the_author(); ?></a></div>
                    <?php the_content(); ?>
                </div>
            </div>
            <?php endwhile; else: ?>
                <?php _e('Nema unetih postova!'); ?>
                <?php endif; ?>
        </article>
        <aside>
            <?php get_sidebar(); ?>
        </aside>
    </section>

<?php get_footer(); ?>