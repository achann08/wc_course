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
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <article <?php post_class('my-3')?>>
                        <div class="card float-md-left w-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="img-content col-lg-5 col-sm-12 col-md-12">
                                        <div class="position-relative">
                                            <?php if(has_post_thumbnail()): ?>
                                                <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'img-fluid rounded')); ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 px-6">
                                        <div class="card-block px-6">
                                            <h2 class="display-6"><?php the_title(); ?></h2>
                                            <p class="lead"><?php echo wp_trim_words(get_the_content(), 35); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php the_permalink() ?>" class="btn btn-primary btn-lg w-100">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </article>



                <?php endwhile; else: ?>
                    <p>Nothing to display</p>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>