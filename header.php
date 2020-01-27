<?php

/* 	KABBO Theme's Header
	Copyright: 2012-2019, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since KABBO 1.0
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php  wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<div id="resmwdt"></div>
	<div id="site-container">
  		<div id="top-menu-container" >
     		<div id="top-container">      
      			<!-- Site Main Menu Goes Here -->
      			<div id="mobile-menu">&#9776;</div>
				<div id="main-menu-con">
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'm-menu', 'fallback_cb' => 'kabbo_page_menu' )); ?>
				</div>   
				<?php get_search_form(); 
				?>
      		</div>
      	</div>
      	<div class="clear"></div>
      	<div id ="header"> 
       		<div id="header-content">
    			<!-- Site Titele and Description Goes Here -->
    			<div id="logodes" class="allcenter left">
    				<a class="logoandtitle" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php if ( get_header_image() !='' ): ?><img class="logotitle" src="<?php header_image(); ?>"/><?php else: ?><h1 class="logotitle"><?php echo bloginfo( 'name' ); ?></h1><?php endif; ?></a> 
    				<h2 class="site-des"><?php bloginfo( 'description' ); ?></h2>
    			</div>   
 				<div id="sociallinks" class="social social-link">
					<?php 
					$sl1 = esc_url(kabbo_get_option('sl1', '#')); if($sl1) echo '<a href="'.$sl1.'"></a>';
					$sl2 = esc_url(kabbo_get_option('sl2', '#')); if($sl2) echo '<a href="'.$sl2.'"></a>';
					$sl3 = esc_url(kabbo_get_option('sl3', '#')); if($sl3) echo '<a href="'.$sl3.'"></a>';
					?>
				</div>
			</div>     
      	</div><!-- #header -->