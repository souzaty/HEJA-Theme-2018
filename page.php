<?php
/**
* @package WordPress
* @subpackage HEJA
* @since HEJA 1.0
*/
?>
<div id="pagina-interna-heelj">
   <?php get_header(); ?>
</div>
<?php
	while ( have_posts() ) : the_post();
	the_content();
	endwhile; // End of the loop.
?>
</div>

<?php get_footer(); ?>
