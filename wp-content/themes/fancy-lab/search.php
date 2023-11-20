<?php
/**
 * The template for displaying search result page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 * 
 * @package Fancy Lab
 */

get_header();
?>
    <div class="content-area">
        <main>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>Search result for: <?php echo get_search_query(); ?></h1>
                        <?php
                            if( have_posts() ):
                                while( have_posts() ): the_post();
                                    ?>
                                        <article <?php post_class(); ?> >
                                            <h2>
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h2>
                                            <div class="post-thumbnail">
                                                <?php if(has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail('fancy-lab-blog', array('class' => 'img-fluid')); ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="meta">
                                                <p>Published by <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?>
                                                <br>
                                                <?php if(has_category()): ?>
                                                    Categories: <span><?php the_category( ' ' ); ?></span>
                                                <?php endif; ?>
                                                <br>
                                                <?php if(has_tag()): ?>
                                                    Tags: <span><?php the_tags('',', '); ?></span>
                                                <?php endif; ?>
                                                </p>
                                            </div>
                                            <div><?php the_excerpt(); ?></div>
                                        </article>
                                    <?php
                                endwhile;

                                the_posts_pagination(array(
                                    'prev_text' => 'Previous',
                                    'next_text' => 'Next'
                                ));

                            else:
                        ?>
                            <p>There are no result for your query.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
<?php get_footer(); ?>