<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kreasi
 */

get_header();
?>
    <div class="container">
        <div class="row">
            <?php the_archive_title('<h1 class="display-2">', '</h1>'); ?>
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <article <?php post_class('my-3'); ?>>
                    <div class="card float-md-left w-100">
                        <div class="row p-3">
                            <div class="col-md-5">
                                <div class="position-relative">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'img-fluid rounded w-100')); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-7 px-6">
                                <div class="card-block px-6">
                                    <?php 
                                        $categories = get_the_category();
                                        if(!empty($categories)){
                                            foreach($categories as $category){
                                                ?>
                                                    <span class="badge rounded-pill bg-primary my-2">
                                                        <a href="<?php echo get_category_link($category->term_id) ?>" class="text-white mx-1 text-decoration-none lead"><?php echo $category->name; ?></a>
                                                    </span>
                                                <?php
                                            }
                                        }
                                    ?>
                                    <h2 style="font-weight: 300;"><a class="text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <p class="lead"><?php echo wp_trim_words(get_the_content(), 35); ?></p>
                                    <a class="btn btn-primary btn-lg w-100" href="<?php the_permalink(); ?>">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endwhile; else: ?>
                <p>Nothing to display.</p>
            <?php endif; ?>
        </div>
        
    </div>
<?php get_footer(); ?>