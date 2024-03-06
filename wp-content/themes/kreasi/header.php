<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kreasi
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <title>Kreasi Theme</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="site" id="page">
    <header>
        <section class="bg-dark">
            <div class="container">
                <span class="text-white">HeaderTop</span>
            </div>
        </section>
        <section class="bg-light">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="navbar-brand col-md-3 col-12 col-lg-2 text-center text-md-start">
                        <a href="<?php echo esc_url( home_url( '/' ) ) ?>">
                            <?php if( has_custom_logo() ): ?>
                                <?php the_custom_logo(); ?>
                            <?php else: ?>
                                <p class="site-title"><?php bloginfo( 'title' ); ?></p>
                                <span><?php bloginfo( 'description' ); ?></span>
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="col-md-9 col-12 col-lg-10">
                        <div class="row">
                            <div class="account col-12">
                                <div class="navbar-expand">
                                    <ul class="navbar-nav float-left">
                                        <?php if( is_user_logged_in() ) : ?>
                                        <li>
                                            <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) ?>" class="nav-link"><?php esc_html_e( 'My Account', 'fancy-lab' ); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url( wp_logout_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) ) ?>" class="nav-link"><?php esc_html_e( 'Logout', 'fancy-lab' ); ?></a>
                                        </li>
                                        <?php else: ?>
                                        <li>
                                            <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) ?>" class="nav-link"><?php esc_html_e( 'Login / Register', 'fancy-lab' ); ?></a>
                                        </li>												
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                
                            </div>
                            <div class="col-12">
                                <nav class="main-menu navbar navbar-expand-md navbar-light bg-light">
                                    <button class="navbar-toggler ms-auto mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <?php
                                        wp_nav_menu(array(
                                            'theme_location'  => 'kreasi_main_menu',
                                            'depth'           => 4, 
                                            'container'       => 'div',
                                            'container_class'   => 'collapse navbar-collapse',
                                            'container_id'      => 'navbarSupportedContent',
                                            'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0',
                                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker'          => new WP_Bootstrap_Navwalker()
                                        ));
                                    ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
