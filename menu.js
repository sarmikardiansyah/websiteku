jQuery(document).ready(function() { 'use strict';
// jQuery('#main-menu-con > div.m-menu > ul').addClass('m-menu');
// jQuery('ul.m-menu').unwrap();
jQuery('#main-menu-con ul.children').addClass('sub-menu');									   
jQuery('#mobile-menu').click(function(){ jQuery('#main-menu-con').toggle(); });
jQuery('#respond .comment-form-author, #respond .comment-form-email, #respond .comment-form-url').addClass('flexboxitem');
});