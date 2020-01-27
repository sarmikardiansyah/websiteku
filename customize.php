<?php

function kabbo_customize_register($wp_customize){

    
    $wp_customize->add_section('kabbo_options', array(
        'priority' 		=> 10,
		'capability'     => 'edit_theme_options',
		'title'    		=> __('KABBO OPTIONS', 'kabbo'),
        'description'   => ' <div class="infohead">' . __('We appreciate an','kabbo') . ' <a href="http://wordpress.org/support/view/theme-reviews/kabbo" target="_blank">' . __('Honest Review','kabbo') . '</a> ' . __('of this Theme if you Love our Work','kabbo') . '<br /> <br />

' . __('Need More Features and Options including Exciting Unlimited Slide and 100+ Advanced Features? Try ','kabbo') . '<a href="' . esc_url('https://d5creation.com/theme/kabbo/') .'
" target="_blank"><strong>' . __('KABBO Extend','kabbo') . '</strong></a><br /> <br /> 
        
        
' . __('You can Visit the KABBO Extend ','kabbo') . ' <a href="' . esc_url('http://demo.d5creation.com/themes/?theme=KABBO') .'" target="_blank"><strong>' . __('Demo Here','kabbo') . '</strong></a> 
        </div>		
		'
    ));
	
	
//  Responsive Layout
    $wp_customize->add_setting('kabbo[responsive]', array(
        'default'        	=> '1',
    	'sanitize_callback' => 'esc_html',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'
    ));

    $wp_customize->add_control('kabbo_responsive', array(
        'label'      => __('Use Responsive Layout', 'kabbo'),
        'section'    => 'kabbo_options',
        'settings'   => 'kabbo[responsive]',
		'description' => __('Check the Box if you want the Responsive Layout of your Website','kabbo'),
		'type' 		 => 'checkbox'
    ));
	
	$kabbo_contype = array( '1' => __('Full Content in Blog Page. Also Support Read More Button if inserted during Editing','kabbo'), '2' => __('Some Words and Read More Button in the Blog Page', 'kabbo') );
	
//  Content Type
    $wp_customize->add_setting('kabbo[contype]', array(
        'default'        	=> '1',
    	'sanitize_callback' => 'esc_html',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'
    ));

    $wp_customize->add_control('kabbo_contype', array(
        'label'      => __('Select Blog Index Content Type', 'kabbo'),
        'section'    => 'kabbo_options',
        'settings'   => 'kabbo[contype]',
		'description' => '',
		'type' 		 => 'radio',
		'choices' => $kabbo_contype
    ));	
	
	
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

 $wp_customize->add_section('kabbo_heading', array(
        'priority' 		=> 11,
		'capability'     => 'edit_theme_options',
		'title'    		=> __('&nbsp;&nbsp;&nbsp;&nbsp; - Front Page Heading', 'kabbo'),
        'description'   => ''
    ));
 
	
// Front Page Heading
    $wp_customize->add_setting('kabbo[heading_text]', array(
        'default'        	=> __('WordPress is web software you can use to create a beautiful website or blog. We like to say that WordPress is both free and priceless at the same time','kabbo'),
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'wp_kses_post',
        'type'           	=> 'option'
    ));

    $wp_customize->add_control('kabbo_heading_text' , array(
        'label'      => __('Front Page Heading', 'kabbo'),
        'section'    => 'kabbo_heading',
        'settings'   => 'kabbo[heading_text]'
    ));
	
	
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

 $wp_customize->add_section('kabbo_fbox', array(
        'priority' 		=> 12,
		'capability'     => 'edit_theme_options',
		'title'    		=> __('&nbsp;&nbsp;&nbsp;&nbsp; - Featured Boxes', 'kabbo'),
        'description'   => ''
    ));

	foreach (range(1,3) as $fbsinumber) {
	  
//  Featured Image
    $wp_customize->add_setting('kabbo[featured-image'. $fbsinumber .']', array(
        'default'           => get_template_directory_uri() . '/images/featured-image' . $fbsinumber . '.jpg',
        'capability'        => 'edit_theme_options',
    	'sanitize_callback' => 'esc_url',
        'type'           	=> 'option'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'featured-image'. $fbsinumber, array(
        'label'    			=> __('Featured Image', 'kabbo') . '-' . $fbsinumber,
        'section'  			=> 'kabbo_fbox',
        'settings' 			=> 'kabbo[featured-image'. $fbsinumber .']',
		'description'   	=> __('Upload an image for the Featured Box. 220px X 100px image is recommended','kabbo')
    )));
  
// Featured Image Title
    $wp_customize->add_setting('kabbo[featured-title' . $fbsinumber . ']', array(
        'default'        	=> __('KABBO is a Sweet Boy','kabbo'),
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_textarea',
        'type'           	=> 'option'
    ));

    $wp_customize->add_control('kabbo_featured-title' . $fbsinumber, array(
        'label'      => __('Featured Title', 'kabbo'). '-' . $fbsinumber,
        'section'    => 'kabbo_fbox',
        'settings'   => 'kabbo[featured-title' . $fbsinumber .']'
    ));


// Featured Image Description
    $wp_customize->add_setting('kabbo[featured-description' . $fbsinumber . ']', array(
        'default'        	=> __('Kabob is a Sweet Boy of 6 Months. He can press the Keys of a Laptop. He will be growing with various Digital Equipments. There are Millions of Children around us who do not know what a laptop is. How will they dream to change the world? Let us do something for those Children, let us remove the Digital Divide','kabbo'),
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_textarea',
        'type'           	=> 'option'
    ));

    $wp_customize->add_control('kabbo_featured-description' . $fbsinumber  , array(
        'label'      => __('Featured Description', 'kabbo') . '-' . $fbsinumber,
        'section'    => 'kabbo_fbox',
        'settings'   => 'kabbo[featured-description' . $fbsinumber .']',
		'type' 		 => 'textarea'
    ));
	
// Featured Links
    $wp_customize->add_setting('kabbo[featured-link' . $fbsinumber . ']', array(
        'default'        	=> '#',
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_url',
        'type'           	=> 'option'
    ));

    $wp_customize->add_control('kabbo_featured-link' . $fbsinumber  , array(
        'label'      => __('Featured Link', 'kabbo') . '-' . $fbsinumber,
        'section'    => 'kabbo_fbox',
        'settings'   => 'kabbo[featured-link' . $fbsinumber .']'
    ));
	
  }
	
	
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

 $wp_customize->add_section('kabbo_slinks', array(
        'priority' 		=> 13,
		'capability'     => 'edit_theme_options',
		'title'    		=> __('&nbsp;&nbsp;&nbsp;&nbsp; - Social Links', 'kabbo'),
        'description'   => __('You Can Add Facebook, Twitter, Linked-In, YouTube, Google, Instagram Links ', 'kabbo')
    ));

	foreach (range(1,3) as $fbsinumber) {
  
	
//  Google Plus Link
    $wp_customize->add_setting('kabbo[sl1]', array(
        'default'        	=> '#',
    	'sanitize_callback' => 'esc_url',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'
    ));

    $wp_customize->add_control('kabbo_sl1', array(
        'label'      => __('Social Link 01', 'kabbo'),
        'section'    => 'kabbo_slinks',
        'settings'   => 'kabbo[sl1]'
    ));


//  Linked In Link
    $wp_customize->add_setting('kabbo[sl2]', array(
        'default'        	=> '#',
    	'sanitize_callback' => 'esc_url',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'
    ));

    $wp_customize->add_control('kabbo_sl2', array(
        'label'      => __('Social Link 02', 'kabbo'),
        'section'    => 'kabbo_slinks',
        'settings'   => 'kabbo[sl2]'
    ));

//  Feed or Blog Link
    $wp_customize->add_setting('kabbo[sl3]', array(
        'default'        	=> '#',
    	'sanitize_callback' => 'esc_url',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'
    ));

    $wp_customize->add_control('kabbo_sl3', array(
        'label'      => __('Social Link 03', 'kabbo'),
        'section'    => 'kabbo_slinks',
        'settings'   => 'kabbo[sl3]'
    ));


}

}
add_action('customize_register', 'kabbo_customize_register');


	if ( ! function_exists( 'kabbo_get_option' ) ) :
		function kabbo_get_option( $kabbo_name, $kabbo_default = false ) {
			$kabbo_config = get_option( 'kabbo' );
			if ( ! isset( $kabbo_config ) ) : return $kabbo_default; else: $kabbo_options = $kabbo_config; endif;
			if ( isset( $kabbo_options[$kabbo_name] ) ):  return $kabbo_options[$kabbo_name]; else: return $kabbo_default; endif;
		}
	endif;