<?php
/* 	KABBO Theme's Footer Sidebar Area
	Copyright: 2012-2019, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since KABBO 1.0
*/
	
	if (   ! is_active_sidebar( 'sidebar-3'  )
		&& ! is_active_sidebar( 'sidebar-4' )
		&& ! is_active_sidebar( 'sidebar-5'  )
		&& ! is_active_sidebar( 'sidebar-6'  )
		)
		return;
		
	// If we get this far, we have widgets. Let do this.
?>
<div id="footer-sidebar">
	<div class="footer-widget1 footer-widget"><?php dynamic_sidebar( 'sidebar-3' ); ?></div>
	<div class="footer-widget2 footer-widget"><?php dynamic_sidebar( 'sidebar-4' ); ?></div>
	<div class="footer-widget3 footer-widget"><?php dynamic_sidebar( 'sidebar-5' ); ?></div>
	<div class="footer-widget4 footer-widget"><?php dynamic_sidebar( 'sidebar-6' ); ?></div>
</div>
