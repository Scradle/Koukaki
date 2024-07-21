<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>

	<footer id="colophon" class="site-footer toAnim">
        <!-- inclusion de la section oscar-->
        <?php get_template_part( 'template-parts/content-oscar' ); ?>
        <img class="footerBefore" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Sunflower.png'); ?> " alt="image de fleur décorative" data-2200="animation-duration: 15s;"  data-2700="animation-duration: 2s;">
        <img class="footerAfter" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/orchid.png'); ?> " alt="image de fleur décorative" data-2200="animation-duration: 15s;"  data-2700="animation-duration: 2s;">
        <img class="footerUlAfter" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hibiscus_footer.png'); ?> " alt="image de fleur décorative" data-2300="animation-duration: 15s;"  data-2900="animation-duration: 2s;">
        <ul>
            <li><a href="#">Mentions Légales</a></li>
            <li><a href="#">STUDIO KOUKAKI</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
