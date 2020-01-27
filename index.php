<?php 
/* KABBO Theme's Index Page to hsow Blog Posts
	Copyright: 2012-2019, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since KABBO 1.0
*/

get_header(); ?><div id="container">  
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
 <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
 <div class="content-ver-sep"> </div>
 <div class="entrytext">
 <?php the_post_thumbnail('thumbnail');  kabbo_content(); ?>
 <div class="clear"> </div>
 <div class="up-bottom-border">
  
 <p class="postmetadata"><span class="postmetadataw"><?php echo __('Posted by: ','kabbo');  the_author_posts_link() ?> | on <?php the_time('F j, Y'); ?></span><br /><?php echo __('Posted in ','kabbo');  the_category(', ') ?> | <?php edit_post_link(__('Edit','kabbo'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;','kabbo'), __('1 Comment &#187;','kabbo'), __('% Comments &#187;','kabbo')); ?> <?php the_tags(__('<br />Tags: ','kabbo'), ', ', '<br />'); ?></p>
 
 </div>
 </div></div>
 
 <?php endwhile; ?>

<div id="page-nav">
	<div class="alignleft"><?php previous_posts_link(__(' Previous Entries', 'kabbo')) ?></div>
	<div class="alignright"><?php next_posts_link(__('Next Entries', 'kabbo')) ?></div>
	</div>
  
 
 <?php else: ?>
 
<h1 class="page-title"><?php _e('Not Found', 'kabbo'); ?></h1>
<h3 class="arc-src"><span><?php _e('Apologies, but the page you requested could not be found. Perhaps searching will help', 'kabbo'); ?></span></h3>

<?php get_search_form(); ?>
<p><a href="<?php echo home_url(); ?>" title="<?php _e('Browse the Home Page', 'kabbo'); ?>">&laquo; <?php _e('Or Return to the Home Page', 'kabbo'); ?></a></p><br /><br />

<h2 class="post-title-color"><?php _e('You can also Visit the Following. These are the Featured Contents', 'kabbo'); ?></h2>
<div class="content-ver-sep"></div><br />
<?php get_template_part( 'featured-box' ); ?>
 
<?php endif; ?>


</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>