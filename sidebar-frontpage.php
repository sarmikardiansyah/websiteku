<?php
/* 	KABBO Theme's Right Sidebar Area
	Copyright: 2012-2019, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since KABBO 1.0
*/
?>
<div id="right-sidebar">

<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e('Archives', 'kabbo'); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>
                
                
<?php endif; // end sidebar widget area ?>
</div>