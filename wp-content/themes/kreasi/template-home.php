<?php get_header(); ?>
    <div class="container flex-fill">
        <div class="row">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <article>
                        <h1><?php echo get_the_title(); ?></h1>
                        <div><?php the_content(); ?></div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>