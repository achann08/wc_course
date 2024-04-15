<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Kreasi
 */
?>

<?php if( is_active_sidebar( 'kreasi-main-sidebar' ) ): ?>
    <div class="col-lg-3 col-md-4 col-12 h100">
        <div class="position-sticky" style="top: 8.2em;">
            <?php dynamic_sidebar( 'kreasi-main-sidebar' ); ?>
        </div>
    </div>
<?php endif;