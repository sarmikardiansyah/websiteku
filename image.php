<?php

/* 	KABBO Theme's Image Page to display Single Page or Post
	Copyright: 2012-2019, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since KABBO 1.0
*/


get_header(); ?><div id="container">  

<div id="content-full">
          
		  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> 
            <h1 class="page-title"><?php the_title(); ?></h1>
            <div class="content-ver-sep"> </div>
            <div class="entrytext"><?php echo wp_get_attachment_image( $attachment_id, 'full' ); ?>
			<?php the_content(); ?>
           	<div id="page-nav">
            <div class="clear"> </div>
            <div class="floatleft"><?php previous_image_link( false, __('&laquo; Previous Image','kabbo') ); ?></div>
			<div class="floatright"><?php next_image_link( false, __('Next Image &raquo;','kabbo') ); ?></div> 
          	</div>            
            <div class="clear"> </div>
            <div class="up-bottom-border">
            <p class="postmetadata"><span class="postmetadataw"><?php echo __('Posted by: ','kabbo');  the_author_posts_link() ?> | on <?php the_time('F j, Y'); ?></span><br /><?php echo __('Posted in ','kabbo');  the_category(', ') ?> | <?php edit_post_link(__('Edit','kabbo'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;','kabbo'), __('1 Comment &#187;','kabbo'), __('% Comments &#187;','kabbo')); ?> <?php the_tags(__('<br />Tags: ','kabbo'), ', ', '<br />'); ?></p>
            <?php  wp_link_pages( array( 'before' => '<div class="page-link"><span>' . 'Pages:' . '</span>', 'after' => '</div>' ) ); ?>
            <div class="content-ver-sep"> </div>
            
            </div></div>
			
			<?php endwhile;?>
          	            
          <!-- End the Loop. -->          
        	
			<?php comments_template(); ?>
            
</div>			
<?php get_footer(); ?>