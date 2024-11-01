<?php 

// Turn on when needing to see the current screen ID
// Turn off when done
// ------------------------------------------------------------
//* add_action( 'admin_notices', 'dev_check_current_screen' );
//* function dev_check_current_screen() {
//*	if( !is_admin() ) return;	
//* 	global $current_screen;
//*	print_r($current_screen);
//* }

// Use our own video Help tabs or use the default WordPress information?
	$disable_help_tabs = get_option('wpvideocoach_help_tabs');
	if($disable_help_tabs == 1){
		//don't do anything
	}
	else {
		add_filter( 'contextual_help', 'wpvideocoach_dashboard_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_updates_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_posts_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_post_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_category_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_tags_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_media_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_attachment_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_mediafile_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_pages_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_page_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_comments_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_comment_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_themes_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_widgets_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_menu_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_plugins_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_plugin_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_users_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_edituser_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_user_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_profile_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_tools_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_import_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_export_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_options_general_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_options_writing_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_options_reading_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_options_discussion_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_options_media_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_options_permalinks_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_wpvc_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_wpvc_settings_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_wpseo_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_wpseo_titles_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_wpseo_social_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_wpseo_xml_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_wpseo_permalinks_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_wpseo_breadcrumbs_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_wpseo_rss_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_wpseo_import_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_nextgen_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_nextgen_add_gallery_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_nextgen_edit_gallery_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_nextgen_edit_images_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_nextgen_albums_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_nextgen_tags_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_nextgen_settings_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_nextgen_options_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_allseo_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_allseo_feature_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_allseo_xml_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_googlexml_help', 5, 3 );
		add_filter( 'contextual_help', 'wpvideocoach_form7_help', 5, 3 );
	}

// DASHBOARD: Add our own contextual panel
function wpvideocoach_dashboard_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'dashboard' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-dashboard-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_dashboard_help_content'
    ));

    // Define our sidebar
	$custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Dashboard_Screen" target="_blank">Documentation on Dashboard</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Dashboard_Screen" target="_blank">Documentation on Dashboard</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// DASHBOARD: Now let's add our content
function wpvideocoach_dashboard_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_dashboard();
	echo "</ul></div><!--videos-contextual-->";
}

// UPDATES: Add our own contextual panel
function wpvideocoach_updates_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'update-core' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-updates-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_updates_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Dashboard_Updates_Screen" target="_blank">Documentation on Updating WordPress</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Dashboard_Updates_Screen" target="_blank">Documentation on Updating WordPress</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// UPDATES: Now let's add our content
function wpvideocoach_updates_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_updates();
	echo "</ul></div><!--videos-contextual-->";
}

// POSTS OVERVIEW: Add our own contextual panel
function wpvideocoach_posts_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'edit-post' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-posts-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_posts_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Posts_Screen" target="_blank">Documentation on Managing Posts</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Posts_Screen" target="_blank">Documentation on Managing Posts</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// POSTS OVERVIEW: Now let's add our content
function wpvideocoach_posts_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_posts();
	echo "</ul></div><!--videos-contextual-->";
}

// ADD POST: Add our own contextual panel
function wpvideocoach_post_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'post' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-post-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_post_help_content'
    ));
	
	// Adding Media tab
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-post-media-help',
        'title'   => 'Adding Media',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_post_media_help_content'
    ));
	
	// Adding Media tab
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-post-revisions-help',
        'title'   => 'Revisions',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_post_revisions_help_content'
    ));
	
	// Tips and tricks tab
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-post-tips-help',
        'title'   => 'Tips and Tricks',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_post_tips_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Posts_Add_New_Screen" target="_blank">Documentation on Writing and Editing Posts</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Posts_Add_New_Screen" target="_blank">Documentation on Writing and Editing Posts</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// ADD POST: Now let's add our content
function wpvideocoach_post_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_post();
	echo "</ul></div><!--videos-contextual-->";
}

function wpvideocoach_post_media_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_post_media();
	echo "</ul></div><!--videos-contextual-->";
}

function wpvideocoach_post_revisions_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_post_revisions();
	echo "</ul></div><!--videos-contextual-->";
}

function wpvideocoach_post_tips_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_post_tips();
	echo "</ul></div><!--videos-contextual-->";
}

// CATEGORY: Add our own contextual panel
function wpvideocoach_category_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'edit-category' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-category-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_category_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Posts_Categories_Screen" target="_blank">Documentation on Categories</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Posts_Categories_Screen" target="_blank">Documentation on Categories</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// CATEGORY: Now let's add our content
function wpvideocoach_category_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_category();
	echo "</ul></div><!--videos-contextual-->";
}

// TAGS: Add our own contextual panel
function wpvideocoach_tags_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'edit-post_tag' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-tags-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_tags_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Posts_Tags_Screen" target="_blank">Documentation on Tags</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Posts_Tags_Screen" target="_blank">Documentation on Tags</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// TAGS: Now let's add our content
function wpvideocoach_tags_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_tags();
	echo "</ul></div><!--videos-contextual-->";
}

// MEDIA LIBRARY: Add our own contextual panel
function wpvideocoach_media_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'upload' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-media-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_media_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Media_Library_Screen" target="_blank">Documentation on Media Library</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Media_Library_Screen" target="_blank">Documentation on Media Library</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// MEDIA LIBRARY: Now let's add our content
function wpvideocoach_media_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_media();
	echo "</ul></div><!--videos-contextual-->";
}

// EDIT MEDIA: Add our own contextual panel
function wpvideocoach_attachment_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'attachment' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-attachment-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_attachment_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Edit_Media" target="_blank">Documentation on Editing Media</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Edit_Media" target="_blank">Documentation on Editing Media</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// EDIT MEDIA: Now let's add our content
function wpvideocoach_attachment_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_attachment();
	echo "</ul></div><!--videos-contextual-->";
}

// ADDING MEDIA: Add our own contextual panel
function wpvideocoach_mediafile_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'media' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-mediafile-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_mediafile_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Media_Add_New_Screen" target="_blank">Documentation on Uploading Media</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Media_Add_New_Screen" target="_blank">Documentation on Uploading Media</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// ADDING MEDIA: Now let's add our content
function wpvideocoach_mediafile_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_mediafile();
	echo "</ul></div><!--videos-contextual-->";
}

// PAGES OVERVIEW: Add our own contextual panel
function wpvideocoach_pages_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'edit-page' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-pages-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_pages_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Pages_Screen" target="_blank">Documentation on Managing Pages</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Pages_Screen" target="_blank">Documentation on Managing Pages</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// PAGES OVERVIEW: Now let's add our content
function wpvideocoach_pages_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_pages();
	echo "</ul></div><!--videos-contextual-->";
}

// ADD PAGE: Add our own contextual panel
function wpvideocoach_page_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'page' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-page-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_page_help_content'
    ));
	
	// Adding Media tab
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-page-media-help',
        'title'   => 'Adding Media',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_page_media_help_content'
    ));
	
	// Revisions tab
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-page-revisions-help',
        'title'   => 'Revisions',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_page_revisions_help_content'
    ));
	
	// Tips and Tricks tab
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-page-tips-help',
        'title'   => 'Tips and Tricks',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_page_tips_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Pages_Add_New_Screen" target="_blank">Documentation on Adding New Pages</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Pages_Add_New_Screen" target="_blank">Documentation on Adding New Pages</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// ADD PAGE: Now let's add our content
function wpvideocoach_page_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_page();
	echo "</ul></div><!--videos-contextual-->";
}

function wpvideocoach_page_media_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_page_media();
	echo "</ul></div><!--videos-contextual-->";
}

function wpvideocoach_page_revisions_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_page_revisions();
	echo "</ul></div><!--videos-contextual-->";
}

function wpvideocoach_page_tips_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_page_tips();
	echo "</ul></div><!--videos-contextual-->";
}

// COMMENTS OVERVIEW: Add our own contextual panel
function wpvideocoach_comments_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'edit-comments' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-comments-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_comments_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Administration_Screens#Comments" target="_blank">Documentation on Comments</a>') . '</p>' .
			'<p>' . __('<a href="http://codex.wordpress.org/Comment_Spam" target="_blank">Documentation on Comment Spam</a>') . '</p>' .
			'<p>' . __('<a href="http://codex.wordpress.org/Keyboard_Shortcuts" target="_blank">Documentation on Keyboard Shortcuts</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Administration_Screens#Comments" target="_blank">Documentation on Comments</a>') . '</p>' .
			'<p>' . __('<a href="http://codex.wordpress.org/Comment_Spam" target="_blank">Documentation on Comment Spam</a>') . '</p>' .
			'<p>' . __('<a href="http://codex.wordpress.org/Keyboard_Shortcuts" target="_blank">Documentation on Keyboard Shortcuts</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// COMMENTS OVERVIEW: Now let's add our content
function wpvideocoach_comments_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_comments();
	echo "</ul></div><!--videos-contextual-->";
}

// COMMENT: Add our own contextual panel
function wpvideocoach_comment_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'comment' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-comment-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_comment_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Administration_Screens#Comments" target="_blank">Documentation on Comments</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Administration_Screens#Comments" target="_blank">Documentation on Comments</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// COMMENT: Now let's add our content
function wpvideocoach_comment_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_comment();
	echo "</ul></div><!--videos-contextual-->";
}

// THEMES: Add our own contextual panel
function wpvideocoach_themes_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'themes' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-themes-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_themes_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Using_Themes" target="_blank">Documentation on Using Themes</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Using_Themes" target="_blank">Documentation on Using Themes</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// THEMES: Now let's add our content
function wpvideocoach_themes_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_themes();
	echo "</ul></div><!--videos-contextual-->";
}

// WIDGETS: Add our own contextual panel
function wpvideocoach_widgets_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'widgets' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-widgets-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_widgets_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Appearance_Widgets_Screen" target="_blank">Documentation on Widgets</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Appearance_Widgets_Screen" target="_blank">Documentation on Widgets</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// WIDGETS: Now let's add our content
function wpvideocoach_widgets_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_widgets();
	echo "</ul></div><!--videos-contextual-->";
}

// MENU: Add our own contextual panel
function wpvideocoach_menu_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'nav-menus' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-menu-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_menu_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Appearance_Menus_Screen" target="_blank">Documentation on Menus</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Appearance_Menus_Screen" target="_blank">Documentation on Menus</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// MENU: Now let's add our content
function wpvideocoach_menu_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_menu();
	echo "</ul></div><!--videos-contextual-->";
}

// PLUGINS: Add our own contextual panel
function wpvideocoach_plugins_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'plugins' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-plugins-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_plugins_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Managing_Plugins#Plugin_Management" target="_blank">Documentation on Plugins</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Managing_Plugins#Plugin_Management" target="_blank">Documentation on Plugins</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// PLUGINS: Now let's add our content
function wpvideocoach_plugins_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_plugins();
	echo "</ul></div><!--videos-contextual-->";
}

// ADD PLUGIN: Add our own contextual panel
function wpvideocoach_plugin_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'plugin-install' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-plugins-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_plugins_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Plugins_Add_New_Screen" target="_blank">Documentation on Installing Plugins</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Plugins_Add_New_Screen" target="_blank">Documentation on Installing Plugins</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// PLUGINS: Now let's add our content
// * We have added the same content as plugins, see callback above: wpvideocoach_plugins_help_content

// USERS: Add our own contextual panel
function wpvideocoach_users_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'users' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-users-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_users_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Users_Screen" target="_blank">Documentation on Managing Users</a>') . '</p>' .
			'<p>' . __('<a href="http://codex.wordpress.org/Roles_and_Capabilities" target="_blank">Roles and Capabilities</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Users_Screen" target="_blank">Documentation on Managing Users</a>') . '</p>' .
			'<p>' . __('<a href="http://codex.wordpress.org/Roles_and_Capabilities" target="_blank">Roles and Capabilities</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// USERS: Now let's add our content
function wpvideocoach_users_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_users();
	echo "</ul></div><!--videos-contextual-->";
}

// EDIT USER: Add our own contextual panel
function wpvideocoach_edituser_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'user-edit' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-edituser-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_edituser_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Users_Your_Profile_Screen" target="_blank">Documentation on User Profiles</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Users_Your_Profile_Screen" target="_blank">Documentation on User Profiles</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// EDIT USER: Now let's add our content
function wpvideocoach_edituser_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_edituser();
	echo "</ul></div><!--videos-contextual-->";
}

// ADD USER: Add our own contextual panel
function wpvideocoach_user_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'user' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-user-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_user_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Users_Add_New_Screen" target="_blank">Documentation on Adding New Users</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Users_Add_New_Screen" target="_blank">Documentation on Adding New Users</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// ADD USER: Now let's add our content
function wpvideocoach_user_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_user();
	echo "</ul></div><!--videos-contextual-->";
}

// PROFILE: Add our own contextual panel
function wpvideocoach_profile_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'profile' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-profile-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_profile_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Users_Your_Profile_Screen" target="_blank">Documentation on User Profiles</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Users_Your_Profile_Screen" target="_blank">Documentation on User Profiles</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// PROFILE: Now let's add our content
function wpvideocoach_profile_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_profile();
	echo "</ul></div><!--videos-contextual-->";
}

// TOOLS: Add our own contextual panel
function wpvideocoach_tools_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'tools' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-tools-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_tools_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Tools_Screen" target="_blank">Documentation on Tools</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Tools_Screen" target="_blank">Documentation on Tools</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// TOOLS: Now let's add our content
function wpvideocoach_tools_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_tools();
	echo "</ul></div><!--videos-contextual-->";
}

// IMPORT: Add our own contextual panel
function wpvideocoach_import_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'import' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-import-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_import_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Tools_Import_Screen" target="_blank">Documentation on Import</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Tools_Import_Screen" target="_blank">Documentation on Import</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// IMPORT: Now let's add our content
function wpvideocoach_import_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_import();
	echo "</ul></div><!--videos-contextual-->";
}

// EXPORT: Add our own contextual panel
function wpvideocoach_export_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'export' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-export-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_export_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Tools_Export_Screen" target="_blank">Documentation on Export</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Tools_Export_Screen" target="_blank">Documentation on Export</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// EXPORT: Now let's add our content
function wpvideocoach_export_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_export();
	echo "</ul></div><!--videos-contextual-->";
}

// OPTIONS GENERAL: Add our own contextual panel
function wpvideocoach_options_general_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'options-general' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-options_general-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_options_general_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Settings_General_Screen" target="_blank">Documentation on General Settings</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Settings_General_Screen" target="_blank">Documentation on General Settings</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// OPTIONS GENERAL: Now let's add our content
function wpvideocoach_options_general_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_options_general();
	echo "</ul></div><!--videos-contextual-->";
}

// OPTIONS WRITING: Add our own contextual panel
function wpvideocoach_options_writing_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'options-writing' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-options-writing-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_options_writing_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Settings_Writing_Screen" target="_blank">Documentation on Writing Settings</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Settings_Writing_Screen" target="_blank">Documentation on Writing Settings</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// OPTIONS WRITING: Now let's add our content
function wpvideocoach_options_writing_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_options_writing();
	echo "</ul></div><!--videos-contextual-->";
}

// OPTIONS READING: Add our own contextual panel
function wpvideocoach_options_reading_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'options-reading' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-options-reading-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_options_reading_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Settings_Reading_Screen" target="_blank">Documentation on Reading Settings</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Settings_Reading_Screen" target="_blank">Documentation on Reading Settings</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// OPTIONS READING: Now let's add our content
function wpvideocoach_options_reading_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_options_reading();
	echo "</ul></div><!--videos-contextual-->";
}

// OPTIONS DISCUSSION: Add our own contextual panel
function wpvideocoach_options_discussion_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'options-discussion' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-options-discussion-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_options_discussion_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Settings_Discussion_Screen" target="_blank">Documentation on Discussion Settings</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Settings_Discussion_Screen" target="_blank">Documentation on Discussion Settings</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// OPTIONS DISCUSSION: Now let's add our content
function wpvideocoach_options_discussion_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_options_discussion();
	echo "</ul></div><!--videos-contextual-->";
}

// OPTIONS MEDIA: Add our own contextual panel
function wpvideocoach_options_media_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'options-media' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-options-media-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_options_general_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Settings_Media_Screen" target="_blank">Documentation on Media Settings</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Settings_Media_Screen" target="_blank">Documentation on Media Settings</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// OPTIONS MEDIA: Now let's add our content
// * We have added the same content as General Options, see callback above: wpvideocoach_options_general_help_content

// OPTIONS PERMALINKS: Add our own contextual panel
function wpvideocoach_options_permalinks_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'options-permalink' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-options-permalinks-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_options_permalinks_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Settings_Permalinks_Screen" target="_blank">Documentation on Permalink Settings</a>') . '</p>' .
			'<p>' . __('<a href="http://codex.wordpress.org/Using_Permalinks" target="_blank">Documentation on Using Permalinks</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://codex.wordpress.org/Settings_Permalinks_Screen" target="_blank">Documentation on Permalink Settings</a>') . '</p>' .
			'<p>' . __('<a href="http://codex.wordpress.org/Using_Permalinks" target="_blank">Documentation on Using Permalinks</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// OPTIONS PERMALINKS: Now let's add our content
function wpvideocoach_options_permalinks_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_options_permalinks();
	echo "</ul></div><!--videos-contextual-->";
}

// WP VIDEO COACH: Disable regular contextual help
function wpvideocoach_wpvc_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'toplevel_page_wpvideocoach' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-wpvc-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_wpvc_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.codeleon.com/wordpress/plugins/wp-video-coach" target="_blank">WP Video Coach Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/wp-video-coach" target="_blank">WP Video Coach Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.codeleon.com/wordpress/plugins/wp-video-coach" target="_blank">WP Video Coach Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/wp-video-coach" target="_blank">WP Video Coach Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// WP VIDEO COACH: Now let's add our content
function wpvideocoach_wpvc_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_wpvc();
	echo "</ul></div><!--videos-contextual-->";
}

// WP VIDEO COACH SETTINGS: Add our own contextual panel
function wpvideocoach_wpvc_settings_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'video-coach_page_wpvideocoach-settings' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-wpvc-settings-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_wpvc_settings_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.codeleon.com/wordpress/plugins/wp-video-coach" target="_blank">WP Video Coach Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/wp-video-coach" target="_blank">WP Video Coach Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.codeleon.com/wordpress/plugins/wp-video-coach" target="_blank">WP Video Coach Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/wp-video-coach" target="_blank">WP Video Coach Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// WP VIDEO COACH SETTINGS: Now let's add our content
function wpvideocoach_wpvc_settings_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_wpvc_settings();
	echo "</ul></div><!--videos-contextual-->";
}

// WORDPRESS SEO DASHBOARD: Add our own contextual panel
function wpvideocoach_wpseo_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'toplevel_page_wpseo_dashboard' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-wpseo-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_wpseo_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://yoast.com/articles/wordpress-seo" target="_blank">WordPress SEO Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/wordpress-seo" target="_blank">WordPress SEO Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://yoast.com/articles/wordpress-seo" target="_blank">WordPress SEO Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/wordpress-seo" target="_blank">WordPress SEO Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// WORDPRESS SEO DASHBOARD: Now let's add our content
function wpvideocoach_wpseo_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_wpseo();
	echo "</ul></div><!--videos-contextual-->";
}

// WORDPRESS SEO TITLES: Add our own contextual panel
function wpvideocoach_wpseo_titles_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'seo_page_wpseo_titles' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-wpseo-titles-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_wpseo_titles_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://yoast.com/articles/wordpress-seo" target="_blank">WordPress SEO Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/wordpress-seo" target="_blank">WordPress SEO Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://yoast.com/articles/wordpress-seo" target="_blank">WordPress SEO Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/wordpress-seo" target="_blank">WordPress SEO Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// WORDPRESS SEO TITLES: Now let's add our content
function wpvideocoach_wpseo_titles_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_wpseo_titles();
	echo "</ul></div><!--videos-contextual-->";
}

// WORDPRESS SEO SOCIAL: Add our own contextual panel
function wpvideocoach_wpseo_social_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'seo_page_wpseo_social' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-wpseo-social-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_wpseo_social_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://yoast.com/articles/wordpress-seo" target="_blank">WordPress SEO Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/wordpress-seo" target="_blank">WordPress SEO Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://yoast.com/articles/wordpress-seo" target="_blank">WordPress SEO Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/wordpress-seo" target="_blank">WordPress SEO Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// WORDPRESS SEO SOCIAL: Now let's add our content
function wpvideocoach_wpseo_social_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_wpseo_social();
	echo "</ul></div><!--videos-contextual-->";
}

// WORDPRESS SEO XML: Add our own contextual panel
function wpvideocoach_wpseo_xml_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'seo_page_wpseo_xml' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-wpseo-xml-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_wpseo_xml_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://yoast.com/articles/wordpress-seo" target="_blank">WordPress SEO Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/wordpress-seo" target="_blank">WordPress SEO Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://yoast.com/articles/wordpress-seo" target="_blank">WordPress SEO Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/wordpress-seo" target="_blank">WordPress SEO Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// WORDPRESS SEO XML: Now let's add our content
function wpvideocoach_wpseo_xml_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_wpseo_xml();
	echo "</ul></div><!--videos-contextual-->";
}

// WORDPRESS SEO PERMALINKS: Add our own contextual panel
function wpvideocoach_wpseo_permalinks_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'seo_page_wpseo_permalinks' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-wpseo-permalinks-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_wpseo_permalinks_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://yoast.com/articles/wordpress-seo" target="_blank">WordPress SEO Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/wordpress-seo" target="_blank">WordPress SEO Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://yoast.com/articles/wordpress-seo" target="_blank">WordPress SEO Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/wordpress-seo" target="_blank">WordPress SEO Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// WORDPRESS SEO PERMALINKS: Now let's add our content
function wpvideocoach_wpseo_permalinks_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_wpseo_permalinks();
	echo "</ul></div><!--videos-contextual-->";
}

// WORDPRESS SEO BREADCRUMBS: Add our own contextual panel
function wpvideocoach_wpseo_breadcrumbs_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'seo_page_wpseo_internal-links' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-wpseo-breadcrumbs-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_wpseo_breadcrumbs_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://yoast.com/articles/wordpress-seo" target="_blank">WordPress SEO Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/wordpress-seo" target="_blank">WordPress SEO Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://yoast.com/articles/wordpress-seo" target="_blank">WordPress SEO Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/wordpress-seo" target="_blank">WordPress SEO Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// WORDPRESS SEO BREADCRUMBS: Now let's add our content
function wpvideocoach_wpseo_breadcrumbs_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_wpseo_breadcrumbs();
	echo "</ul></div><!--videos-contextual-->";
}

// WORDPRESS SEO RSS: Add our own contextual panel
function wpvideocoach_wpseo_rss_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'seo_page_wpseo_rss' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-wpseo-rss-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_wpseo_rss_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://yoast.com/articles/wordpress-seo" target="_blank">WordPress SEO Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/wordpress-seo" target="_blank">WordPress SEO Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://yoast.com/articles/wordpress-seo" target="_blank">WordPress SEO Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/wordpress-seo" target="_blank">WordPress SEO Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// WORDPRESS SEO RSS: Now let's add our content
function wpvideocoach_wpseo_rss_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_wpseo_rss();
	echo "</ul></div><!--videos-contextual-->";
}

// WORDPRESS SEO IMPORT EXPORT: Add our own contextual panel
function wpvideocoach_wpseo_import_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'seo_page_wpseo_import' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-wpseo-import-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_wpseo_import_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://yoast.com/articles/wordpress-seo" target="_blank">WordPress SEO Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/wordpress-seo" target="_blank">WordPress SEO Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://yoast.com/articles/wordpress-seo" target="_blank">WordPress SEO Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/wordpress-seo" target="_blank">WordPress SEO Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// WORDPRESS SEO IMPORT EXPORT: Now let's add our content
function wpvideocoach_wpseo_import_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_wpseo_import();
	echo "</ul></div><!--videos-contextual-->";
}

// NEXTGEN: Add our own contextual panel
function wpvideocoach_nextgen_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'toplevel_page_nextgen-gallery' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-nextgen-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_nextgen_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.nextgen-gallery.com/help" target="_blank">NextGEN Gallery Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/nextgen-gallery" target="_blank">NextGEN Gallery Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.nextgen-gallery.com/help" target="_blank">NextGEN Gallery Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/nextgen-gallery" target="_blank">NextGEN Gallery Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// NEXTGEN: Now let's add our content
function wpvideocoach_nextgen_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_nextgen();
	echo "</ul></div><!--videos-contextual-->";
}

// NEXTGEN ADD GALLERY: Add our own contextual panel
function wpvideocoach_nextgen_add_gallery_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'gallery_page_ngg_addgallery' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-nextgen-add-gallery-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_nextgen_add_gallery_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.nextgen-gallery.com/help" target="_blank">NextGEN Gallery Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/nextgen-gallery" target="_blank">NextGEN Gallery Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.nextgen-gallery.com/help" target="_blank">NextGEN Gallery Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/nextgen-gallery" target="_blank">NextGEN Gallery Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// NEXTGEN ADD GALLERY: Now let's add our content
function wpvideocoach_nextgen_add_gallery_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_nextgen_add_gallery();
	echo "</ul></div><!--videos-contextual-->";
}

// NEXTGEN EDIT GALLERY: Add our own contextual panel
function wpvideocoach_nextgen_edit_gallery_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'nggallery-manage-gallery' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-nextgen-edit-gallery-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_nextgen_add_gallery_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.nextgen-gallery.com/help" target="_blank">NextGEN Gallery Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/nextgen-gallery" target="_blank">NextGEN Gallery Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.nextgen-gallery.com/help" target="_blank">NextGEN Gallery Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/nextgen-gallery" target="_blank">NextGEN Gallery Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// NEXTGEN EDIT GALLERY: Now let's add our content
// * We have added the same content as Add Gallery, see callback above: wpvideocoach_nextgen_add_gallery_help_content

// NEXTGEN EDIT IMAGES: Add our own contextual panel
function wpvideocoach_nextgen_edit_images_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'nggallery-manage-images' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-nextgen-edit-images-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_nextgen_add_gallery_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.nextgen-gallery.com/help" target="_blank">NextGEN Gallery Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/nextgen-gallery" target="_blank">NextGEN Gallery Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.nextgen-gallery.com/help" target="_blank">NextGEN Gallery Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/nextgen-gallery" target="_blank">NextGEN Gallery Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// NEXTGEN EDIT GALLERY: Now let's add our content
// * We have added the same content as Add Gallery, see callback above: wpvideocoach_nextgen_add_gallery_help_content

// NEXTGEN ALBUMS: Add our own contextual panel
function wpvideocoach_nextgen_albums_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'gallery_page_nggallery-manage-album' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-nextgen-albums-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_nextgen_albums_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.nextgen-gallery.com/help" target="_blank">NextGEN Gallery Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/nextgen-gallery" target="_blank">NextGEN Gallery Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.nextgen-gallery.com/help" target="_blank">NextGEN Gallery Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/nextgen-gallery" target="_blank">NextGEN Gallery Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// NEXTGEN ALBUMS: Now let's add our content
function wpvideocoach_nextgen_albums_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_nextgen_albums();
	echo "</ul></div><!--videos-contextual-->";
}

// NEXTGEN TAGS: Add our own contextual panel
function wpvideocoach_nextgen_tags_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'gallery_page_nggallery-tags' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-nextgen-tags-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_nextgen_tags_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.nextgen-gallery.com/help" target="_blank">NextGEN Gallery Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/nextgen-gallery" target="_blank">NextGEN Gallery Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.nextgen-gallery.com/help" target="_blank">NextGEN Gallery Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/nextgen-gallery" target="_blank">NextGEN Gallery Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// NEXTGEN TAGS: Now let's add our content
function wpvideocoach_nextgen_tags_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_nextgen_tags();
	echo "</ul></div><!--videos-contextual-->";
}

// NEXTGEN SETTINGS: Add our own contextual panel
function wpvideocoach_nextgen_settings_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'gallery_page_ngg_display_settings' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-nextgen-settings-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_nextgen_settings_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.nextgen-gallery.com/help" target="_blank">NextGEN Gallery Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/nextgen-gallery" target="_blank">NextGEN Gallery Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.nextgen-gallery.com/help" target="_blank">NextGEN Gallery Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/nextgen-gallery" target="_blank">NextGEN Gallery Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// NEXTGEN SETTINGS: Now let's add our content
function wpvideocoach_nextgen_settings_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_nextgen_settings();
	echo "</ul></div><!--videos-contextual-->";
}

// NEXTGEN OPTIONS: Add our own contextual panel
function wpvideocoach_nextgen_options_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'gallery_page_ngg_other_options' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-nextgen-options-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_nextgen_settings_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.nextgen-gallery.com/help" target="_blank">NextGEN Gallery Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/nextgen-gallery" target="_blank">NextGEN Gallery Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://www.nextgen-gallery.com/help" target="_blank">NextGEN Gallery Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/nextgen-gallery" target="_blank">NextGEN Gallery Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// NEXTGEN OPTIONS: Now let's add our content
// * We have added the same content as Settings, see callback above: wpvideocoach_nextgen_settings_help_content

// ALL IN ONE SEO: Add our own contextual panel
function wpvideocoach_allseo_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'toplevel_page_all-in-one-seo-pack/aioseop_class' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-allseo-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_allseo_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/all-in-one-seo-pack" target="_blank">All in One SEO Pack Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/all-in-one-seo-pack" target="_blank">All in One SEO Pack Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// ALL IN ONE SEO: Now let's add our content
function wpvideocoach_allseo_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_allseo();
	echo "</ul></div><!--videos-contextual-->";
}

// ALL IN ONE SEO - FEATURE MANAGER: Add our own contextual panel
function wpvideocoach_allseo_feature_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'all-in-one-seo_page_all-in-one-seo-pack/aioseop_feature_manager' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-allseo-feature-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_allseo_feature_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/all-in-one-seo-pack" target="_blank">All in One SEO Pack Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/all-in-one-seo-pack" target="_blank">All in One SEO Pack Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// ALL IN ONE SEO - FEATURE MANAGER: Now let's add our content
function wpvideocoach_allseo_feature_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_allseo_feature();
	echo "</ul></div><!--videos-contextual-->";
}

// ALL IN ONE SEO - XML SITEMAP: Add our own contextual panel
function wpvideocoach_allseo_xml_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'all-in-one-seo_page_all-in-one-seo-pack/aioseop_sitemap' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-allseo-xml-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_allseo_feature_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/all-in-one-seo-pack" target="_blank">All in One SEO Pack Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/all-in-one-seo-pack" target="_blank">All in One SEO Pack Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// ALL IN ONE SEO - XML SITEMAP: Now let's add our content
// * We have added the same content as Feature Manager, see callback above: wpvideocoach_allseo_feature_help_content

// GOOGLE XML: Add our own contextual panel
function wpvideocoach_googlexml_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'settings_page_google-sitemap-generator/sitemap' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-googlexml-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_googlexml_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/google-sitemap-generator" target="_blank">XML Sitemaps Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/google-sitemap-generator" target="_blank">XML Sitemaps Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// GOOGLE XML: Now let's add our content
function wpvideocoach_googlexml_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_googlexml();
	echo "</ul></div><!--videos-contextual-->";
}

// CONTACT FORM 7: Add our own contextual panel
function wpvideocoach_form7_help( $old_help, $screen_id, $screen )
{
    // What is the screen ID?
    if( 'toplevel_page_wpcf7' != $screen_id )
        return;

    // Remove default WordPress tabs
    $screen->remove_help_tabs();

    // Add one help tab
    // For new ones: duplicate this, change id's and create custom callbacks
    $screen->add_help_tab( array(
        'id'      => 'wpvideocoach-form7-help',
        'title'   => 'How to Videos',
        'content' => '', // left empty on purpose, we use the callback bellow
        'callback' => 'wpvideocoach_form7_help_content'
    ));

    // Define our sidebar
    $custom_support_title = get_option('wpvideocoach_help_tabs_title');
	$custom_support_url = get_option('wpvideocoach_help_tabs_url');
	if(!empty($custom_support_title) && !empty($custom_support_url)) {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
			'<p>' . __('<a href="http://contactform7.com/docs" target="_blank">Contact Form 7 Documentation</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support/plugin/contact-form-7" target="_blank">Contact Form 7 Support Forums</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="' . $custom_support_url . '" target="_blank">' . $custom_support_title . '</a>') . '</p>'		
   		);
	} else {
		$screen->set_help_sidebar(
        	'<p><strong>' . __('For more information:') . '</strong></p>' .
			'<p>' . __('<a href="http://contactform7.com/docs" target="_blank">Contact Form 7 Documentation</a>') . '</p>' .
        	'<p>' . __('<a href="http://wordpress.org/support/plugin/contact-form-7" target="_blank">Contact Form 7 Support Forums</a>') . '</p>' .
			'<p>' . __('<a href="http://wordpress.org/support" target="_blank">Support Forums</a>') . '</p>'
   		);
	}

    return $old_help;
}

// CONTACT FORM 7: Now let's add our content
function wpvideocoach_form7_help_content()
{
	echo "<div id=\"videos-contextual\"><ul>";
	echo wpvideocoach_related_videos_form7();
	echo "</ul></div><!--videos-contextual-->";
}

?>