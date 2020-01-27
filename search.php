<?php 
/* 	KABBO Theme's Search Page
	Copyright: 2012-2019, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since KABBO 1.0
*/

get_header(); ?>
	<div id="container">
	<?php if (have_posts()) : ?>
		<div id="content">
        	<h1 class="page-title"><?php echo __('Search Results', 'kabbo'); ?></h1>
		
			<?php 
			$counter = 0;
			query_posts($query_string . "&posts_per_page=20");
			while (have_posts()) : the_post();
				if($counter == 0) {
					$numposts = $wp_query->found_posts; // count # of search results ?>
					<h3 class="arc-src"><span><?php echo __('Search Term:', 'kabbo');?> </span><?php the_search_query(); ?></h3>
					<h3 class="arc-src"><span><?php echo __('Number of Results:', 'kabbo');?> </span><?php echo $numposts; ?></h3><br />
					<?php } //endif ?>

					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<p class="postmetadataw"><?php echo __('Entry Date: ', 'kabbo'); ?> <?php the_time('F j, Y'); ?></p>
						<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
						<div class="content-ver-sep"></div>
						<div class="entrytext">
							<?php the_post_thumbnail('thumbnail'); ?>
							<?php kabbo_content(); ?>
							<div class="clear"> </div>
							<div class="up-bottom-border">
							<p class="postmetadata"><?php echo __('Posted in', 'kabbo'); ?> <?php the_category(', ') ?> | <?php edit_post_link( __('Edit', 'kabbo'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'kabbo'), __('1 Comment &#187;', 'kabbo'), __('% Comments &#187;', 'kabbo')); ?> <?php the_tags('<br />'. __('Tags: ', 'kabbo'), ', ', '<br />'); ?></p>
							</div>
						</div>
					</div>				
				<?php $counter++; 		
			endwhile; ?>
				<div id="page-nav">
					<div class="alignleft"><?php previous_posts_link(__('&laquo; Previous Entries', 'kabbo')) ?></div>
					<div class="alignright"><?php next_posts_link(__('Next Entries &raquo;', 'kabbo')) ?></div>
				</div>
		</div>		
		<?php get_sidebar();
   	else: ?>
		<h1 class="page-title"><?php _e('Not Found', 'kabbo'); ?></h1>
		<h3 class="arc-src"><span><?php _e('Apologies, but the page you requested could not be found. Perhaps searching will help', 'kabbo'); ?></span></h3>
		<?php get_search_form(); ?>
		<p><a href="<?php echo home_url(); ?>" title="<?php _e('Browse the Home Page', 'kabbo'); ?>">&laquo; <?php _e('Or Return to the Home Page', 'kabbo'); ?></a></p><br /><br />
		<h2 class="post-title-color"><?php _e('You can also Visit the Following. These are the Featured Contents', 'kabbo'); ?></h2>
		<div class="content-ver-sep"></div><br />
		<?php get_template_part( 'featured-box' );

	endif;
	
get_footer();