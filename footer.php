<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alphabootstrap
 */

?>
</div><!-- .row -->
</div><!-- .container -->
	</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <!-- #top-footer -->
    <?php get_sidebar('footer'); ?>


    <div id="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <?php if (has_nav_menu('footer-menu', 'alphabootstrap')) { ?>
                        <nav role="navigation">
                            <?php wp_nav_menu(array(
                                    'container' => '',
                                    'menu_class' => 'footer-menu',
                                    'theme_location' => 'footer-menu')
                            );
                            ?>
                        </nav>
                    <?php } ?>
                </div>
                <div class="col-md-6 col-lg-6">
                    <p class="pull-right">&copy; <?php _e('Copyright', 'alphabootstrap'); ?> <?php echo date('Y'); ?> - <a
                                href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>"
                                rel="home"><?php bloginfo('name'); ?></a></p>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- #bottom-footer -->

</footer><!-- #colophon -->
</div><!-- #page -->
<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div>
<?php wp_footer(); ?>

</body>
</html>