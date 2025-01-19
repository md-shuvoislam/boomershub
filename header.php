<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package boomershub
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'boomershub' ); ?></a>

	<section class="containerHero" style="background-image: url(<?php echo get_template_directory_uri();?>/images/headerBg.png);">

        <nav class="navbar navbar-expand-lg navbar-dark pt-3 pb-3">
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$boomershub_description = get_bloginfo( 'description', 'display' );
					if ( $boomershub_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $boomershub_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->


                <!-- Toggler for mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Items -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'menu-1',
                                'container' => false,
                                'menu_class' => '',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                                'depth' => 2,
                            ));
                        ?>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="align-items-center gap-2 d-none d-md-flex">
                    <a style="width: 100px;" class="nav-link text-white fw-bold d-block" href="<?php the_field('header_login_link', 'option'); ?>">Log In</a>

                    <a href="<?php the_field('header_button_link', 'option'); ?>"><button class="navBarButtonGetStart"><?php the_field('header_button_text', 'option'); ?></button></a>
                </div>
            </div>
        </nav>
