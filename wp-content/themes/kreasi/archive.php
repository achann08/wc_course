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
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9 col-md-8 col-12">
            <?php the_archive_title('<h1 class="display-2">', '</h1>'); ?>
            <?php if(have_posts()): ?>
                <div class="row">
                    <?php while(have_posts()): the_post(); ?>
                        <div class="col-lg-6 mb-3">
                            <article <?php post_class();?>>
                                <div class="card h-100" style="width: 100%;">
                                    <?php if(has_post_thumbnail()): ?>
                                        <div style="height: 200px; overflow: hidden;">
                                            <?php echo get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'card-img-top', 'style' => 'object-fit: cover;')); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="card-body">
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
                                        <h5 class="card-title"><a class="text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <p>Tidak ada yang ditampilkan</p>
            <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
