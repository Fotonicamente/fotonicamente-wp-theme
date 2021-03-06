<?php
/**
 * @package xinmag
 * @since 1.0
 */
get_header();

	if ( get_query_var('paged') )
	    $paged = get_query_var('paged');
	elseif ( get_query_var('page') ) 
	    $paged = get_query_var('page');
	else 
		$paged = 1;
?>
<div id="content" class="<?php echo xinwp_content_class(); ?>" role="main">
<?php
	if ( have_posts() ) {
		xinmag_content_nav( 'nav-above' );
		xinmag_section_title();
		$count = 0;
		while ( have_posts() ) {
			the_post();
			if ( 1 == $paged && 0 == $count )				
				get_template_part( 'content' );
			else {
				get_template_part( 'content', 'magazine' );			
			}
			$count++;
		}				
		xinmag_content_nav( 'nav-below' );
	} elseif ( current_user_can( 'edit_posts' ) ) {
		get_template_part( 'content-none', 'index' );
	} ?>						
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
