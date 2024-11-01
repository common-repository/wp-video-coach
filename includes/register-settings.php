<?php 

add_action( 'admin_init', 'wpvideocoach_register_mysettings' );

// Register WP Video Coach settings
function wpvideocoach_register_mysettings() 
{
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_client_id' );
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_client_password' );
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_language' );
	
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_custom_menu_title' );
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_custom_title' );
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_custom_menu_icon' );
	
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_introduction' );
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_introduction_box_background_color' );
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_introduction_title' );
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_introduction_title_color' );
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_introduction_text' );
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_introduction_text_color' );
	
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_video_link_color' );
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_video_link_hover_color' );
	
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_categories' );
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_categories_color' );
	
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_thumbnails' );
	
	// Register our categories
	foreach (range(1, 13) as $number) {
		register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_video_cat' . $number .'' );
	}
	
	// Register our visibility for videos
	foreach (range(1, 9) as $number) {
		register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_visibility_video00' . $number .'' );
	}
	foreach (range(10, 50) as $number) {
		register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_visibility_video0' . $number .'' );
	}
	foreach (range(101, 109) as $number) {
		register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_visibility_video' . $number .'' );
	}
	foreach (range(121, 126) as $number) {
		register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_visibility_video' . $number .'' );
	}
	foreach (range(131, 134) as $number) {
		register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_visibility_video' . $number .'' );
	}
	foreach (range(141, 142) as $number) {
		register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_visibility_video' . $number .'' );
	}
	foreach (range(151, 153) as $number) {
		register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_visibility_video' . $number .'' );
	}
	
	// Register our custom videos
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_custom_videos_title' );
	foreach (range(1, 30) as $number) {
		register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_custom_video' . $number .'' );
		register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_custom_video' . $number .'_link' );
	}
	
	// Register our toolbar
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_toolbar_link' );
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_toolbar_link_title' );
	
	// Register our help tabs
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_help_tabs' );
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_help_tabs_url' );
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_help_tabs_title' );
	
	// Register our dashboard slider
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_dashboard_slider' );
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_dashboard_slider_title' );
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_dashboard_slider_introduction' );
	
	// Register our HTML/CSS
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_additional_html' );
	register_setting( 'wpvideocoach-settings-group', 'wpvideocoach_custom_css' );
}
?>