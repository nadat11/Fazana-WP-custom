<?php 
/*
*Template Name: Blog
*/
get_header(); ?>

    <!-- headers -->
    <header class="headers">
        <img src="<?php the_field('blog_header'); ?>" alt="">
    </header>

    <!-- intro -->
    <section class="intro py container">
        <h1><?php the_field('blog_naslov'); ?></h1>
        <p><?php the_field('blog_tekst'); ?></p>
    </section>

    <section class="blog container">
        <article>

    
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="post">
                    <div class="featuredImage">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="text">
                        <h4><?php the_title(); ?></h4>
                        <div class="meta"><?php echo get_the_date('F j, Y, g:i a'); ?>  | <a href=""><?php the_author(); ?></a></div>
                        <?php the_excerpt(); ?>
                        <a class="btn" href="<?php the_permalink(); ?>">
                            <?php _e('Više &gt;'); ?>
                        </a>
                    </div>
                </div>
            <?php endwhile; else : ?>
                <?php _e('Nema unetih blogova'); ?>
            <?php endif; ?>
            
        </article>
        <aside>
            <?php get_sidebar(); ?>
        </aside>
    </section>

<?php get_footer(); ?>


    