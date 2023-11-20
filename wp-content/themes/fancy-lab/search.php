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
                                    get_template_part('template-parts/content', 'search');
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