<?php
/**
 * The template for displaying the sidebar
 */
?>

<div id="sidebar-primary" class="sidebar flex flex-col">
    <div class="sidebar-static flex flex-row">
        
        <div class="footer-column-wrapper flex flex-col">
            
            <?php if ( has_custom_logo() ) { ?>
                <div id="site-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php the_custom_logo(); ?>
                </div>
            <?php } else { ?>
                <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                <p class="site-description"><?php bloginfo('description'); ?></p>
            <?php } ?>

            <div class="site-nav footer-menu-container">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer-menu',
                'container' => 'nav-footer',
                'menu_class' => 'footer-menu',
            ) );
            ?>
            </div>                
        </div>
        
        <?php if ( get_theme_mod( 'show_newsletter', true ) ) { ?>
            <div class="footer-column-wrapper">
                <?php get_template_part('template-parts/footer/newsletter','form');?>
            </div>
        <?php } else { ?>
            <div class="footer-column-wrapper">
                <?php get_template_part('template-parts/footer/search','form');?>
            </div>

        <?php } ?>
    </div>

<!-- dynamic widget if set     -->

<?php if ( get_theme_mod( 'show_footer_widget', true ) ) : ?>
    <div class="widget-dynamic">
        <?php if (is_active_sidebar('primary')) { ?>
        <?php dynamic_sidebar('primary'); ?>
        <?php }?>
    </div>        
<?php endif; ?>