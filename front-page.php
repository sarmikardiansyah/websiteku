<?php
/*
	KABBO Theme's Front Page to Display the Home Page if Selected
	Copyright: 2012-2019, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since KABBO 1.0
*/
get_header(); ?>
        	
			<div id="slider">
            <div id="da-slider" class="da-slider">
            
            <?php
			global $kabbo_excerpt_lengt;
			$kabbo_args = kabbo_ppp(); query_posts( $kabbo_args ); 
			if (have_posts()) : while (have_posts()) : the_post();?>
                        
            <div class="da-slide"><div class="da-texlink"><h2 class="slide-post-title"><?php the_title(); ?></h2><?php  $kabbo_excerpt_lengt=30; the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="da-link">Read More</a></div><div class="da-img"><?php the_post_thumbnail('slide-thumb', array('class' => 'da-image')); ?></div></div>
			
			<?php endwhile; endif; wp_reset_query(); ?>    
                
            <nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
                     
			</div></div>
  
<div id="container">   
<h1 id="heading"><?php echo wp_kses_post(kabbo_get_option('heading_text', 'WordPress is web software you can use to create a <a href="#">beautiful website or blog</a>. We like to say that <a href="http://wordpress.org/">WordPress</a> is both free and priceless at the same time.')); ?></h1>

<?php get_template_part( 'featured-box' ); ?><br /><br />
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
   
<?php endif; ?>
</div>

<?php get_sidebar( 'frontpage' );  ?>
<div class="clear"> </div>

<?php get_footer(); ?>