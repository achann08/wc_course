<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kreasi
 */

get_header();

?>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-12">
                <?php 
                    if(have_posts()):
                        $blogs = get_posts(
                            array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'orderby' => 'post_date',
                                'order' => 'ASC',
                                'posts_per_page' =>  -1
                            )
                        );
                ?>
                    <?php foreach($blogs as $blog): ?>
                        <article>
                            <h2><?php echo $blog->post_title; ?></h2>
                            <div><?php echo $blog->post_content; ?></div>
                        </article>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Nothing to display.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>