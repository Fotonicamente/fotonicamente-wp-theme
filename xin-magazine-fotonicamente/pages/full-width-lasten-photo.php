<?php
/**
 * Template Name: Full Width Lasten photo
 *
 * @package xinmag
 * @since xinmag 1.0
 */
get_header(); ?>
<div id="content" class="<?php echo xinwp_grid_full(); ?>" role="main">
<?php
// '%%wppa%% %%slide=#lasten%%'
	echo do_shortcode('[wppa  album="#lasten" ][/wppa]');
?>
</div>
<?php get_footer(); ?>
