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
        <div class="content-area">
            <main>
                <section class="slider">Slider</section>
                <section class="popular-product">Popular Products</section>
                <section class="new-arrivals">New Arrivals</section>
				<section class="deal-of-the-week">Deal of the Week</section>
				<section class="theme-blog">
                    <div class="container">
                        <div class="row">
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
                </section>
            </main>
        </div>
<?php get_footer(); ?>