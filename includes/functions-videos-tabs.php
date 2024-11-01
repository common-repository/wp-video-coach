<?php 

// DASHBOARD: related videos in Help tab
function wpvideocoach_related_videos_dashboard()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_001;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_002;
	$video3 = WPVIDEOCOACH_VIDEO_TITLE_003;
	$video4 = WPVIDEOCOACH_VIDEO_TITLE_013;
	$video5 = WPVIDEOCOACH_VIDEO_TITLE_039;
	$video_title[$video1] = "001";
	$video_title[$video2] = "002";
	$video_title[$video3] = "003";
	$video_title[$video4] = "013";
	$video_title[$video5] = "039";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// UPDATES: related videos in Help tab
function wpvideocoach_related_videos_updates()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_044;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_045;
	$video_title[$video1] = "044";
	$video_title[$video2] = "045";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// POSTS OVERVIEW: related videos in Help tab
function wpvideocoach_related_videos_posts()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_004;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_005;
	$video3 = WPVIDEOCOACH_VIDEO_TITLE_006;
	$video4 = WPVIDEOCOACH_VIDEO_TITLE_050;
	$video_title[$video1] = "004";
	$video_title[$video2] = "005";
	$video_title[$video3] = "006";
	$video_title[$video4] = "050";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// ADD POST: related videos in Help tab
function wpvideocoach_related_videos_post()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_005;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_009;
	$video3 = WPVIDEOCOACH_VIDEO_TITLE_010;
	$video4 = WPVIDEOCOACH_VIDEO_TITLE_011;
	$video5 = WPVIDEOCOACH_VIDEO_TITLE_012;
	$video6 = WPVIDEOCOACH_VIDEO_TITLE_103;
	$video7 = WPVIDEOCOACH_VIDEO_TITLE_133;
	$video_title[$video1] = "005";
	$video_title[$video2] = "009";
	$video_title[$video3] = "010";
	$video_title[$video4] = "011";
	$video_title[$video5] = "012";
	$video_title[$video6] = "103";
	$video_title[$video7] = "133";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// ADD POST - MEDIA TAB: related videos in Help tab
function wpvideocoach_related_videos_post_media()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_015;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_017;
	$video3 = WPVIDEOCOACH_VIDEO_TITLE_018;
	$video4 = WPVIDEOCOACH_VIDEO_TITLE_019;
	$video5 = WPVIDEOCOACH_VIDEO_TITLE_123;
	$video_title[$video1] = "015";
	$video_title[$video2] = "017";
	$video_title[$video3] = "018";
	$video_title[$video4] = "019";
	$video_title[$video5] = "123";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// ADD POST - REVISIONS TAB: related videos in Help tab
function wpvideocoach_related_videos_post_revisions()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_020;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_021;
	$video_title[$video1] = "020";
	$video_title[$video2] = "021";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// ADD POST - TIPS AND TRICKS TAB: related videos in Help tab
function wpvideocoach_related_videos_post_tips()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_014;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_029;
	$video3 = WPVIDEOCOACH_VIDEO_TITLE_046;
	$video4 = WPVIDEOCOACH_VIDEO_TITLE_047;
	$video5 = WPVIDEOCOACH_VIDEO_TITLE_048;
	$video6 = WPVIDEOCOACH_VIDEO_TITLE_049;
	$video_title[$video1] = "014";
	$video_title[$video2] = "029";
	$video_title[$video3] = "046";
	$video_title[$video4] = "047";
	$video_title[$video5] = "048";
	$video_title[$video6] = "049";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// CATEGORY: related videos in Help tab
function wpvideocoach_related_videos_category()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_024;
	$video_title[$video1] = "024";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// TAGS: related videos in Help tab
function wpvideocoach_related_videos_tags()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_025;
	$video_title[$video1] = "025";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// MEDIA LIBRARY: related videos in Help tab
function wpvideocoach_related_videos_media()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_019;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_016;
	$video_title[$video1] = "019";
	$video_title[$video2] = "016";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// EDIT MEDIA: related videos in Help tab
function wpvideocoach_related_videos_attachment()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_019;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_103;
	$video_title[$video1] = "019";
	$video_title[$video2] = "103";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// ADDING MEDIA: related videos in Help tab
function wpvideocoach_related_videos_mediafile()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_019;
	$video_title[$video1] = "019";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// PAGES OVERVIEW: related videos in Help tab
function wpvideocoach_related_videos_pages()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_004;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_007;
	$video3 = WPVIDEOCOACH_VIDEO_TITLE_008;
	$video_title[$video1] = "004";
	$video_title[$video2] = "007";
	$video_title[$video3] = "008";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// ADD PAGE: related videos in Help tab
function wpvideocoach_related_videos_page()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_007;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_009;
	$video3 = WPVIDEOCOACH_VIDEO_TITLE_010;
	$video4 = WPVIDEOCOACH_VIDEO_TITLE_011;
	$video5 = WPVIDEOCOACH_VIDEO_TITLE_103;
	$video6 = WPVIDEOCOACH_VIDEO_TITLE_133;
	$video_title[$video1] = "007";
	$video_title[$video2] = "009";
	$video_title[$video3] = "010";
	$video_title[$video4] = "011";
	$video_title[$video5] = "103";
	$video_title[$video6] = "133";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// ADD PAGE - MEDIA TAB: related videos in Help tab
function wpvideocoach_related_videos_page_media()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_015;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_017;
	$video3 = WPVIDEOCOACH_VIDEO_TITLE_018;
	$video4 = WPVIDEOCOACH_VIDEO_TITLE_019;
	$video5 = WPVIDEOCOACH_VIDEO_TITLE_123;
	$video_title[$video1] = "015";
	$video_title[$video2] = "017";
	$video_title[$video3] = "018";
	$video_title[$video4] = "019";
	$video_title[$video5] = "123";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// ADD PAGE - REVISIONS TAB: related videos in Help tab
function wpvideocoach_related_videos_page_revisions()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_020;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_021;
	$video_title[$video1] = "020";
	$video_title[$video2] = "021";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// ADD PAGE - TIPS AND TRICKS TAB: related videos in Help tab
function wpvideocoach_related_videos_page_tips()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_014;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_029;
	$video3 = WPVIDEOCOACH_VIDEO_TITLE_046;
	$video4 = WPVIDEOCOACH_VIDEO_TITLE_047;
	$video5 = WPVIDEOCOACH_VIDEO_TITLE_048;
	$video6 = WPVIDEOCOACH_VIDEO_TITLE_049;
	$video_title[$video1] = "014";
	$video_title[$video2] = "029";
	$video_title[$video3] = "046";
	$video_title[$video4] = "047";
	$video_title[$video5] = "048";
	$video_title[$video6] = "049";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// COMMENTS OVERVIEW: related videos in Help tab
function wpvideocoach_related_videos_comments()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_028;
	$video_title[$video1] = "028";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// COMMENT: related videos in Help tab
function wpvideocoach_related_videos_comment()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_028;
	$video_title[$video1] = "028";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// THEMES: related videos in Help tab
function wpvideocoach_related_videos_themes()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_032;
	$video_title[$video1] = "032";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// WIDGETS: related videos in Help tab
function wpvideocoach_related_videos_widgets()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_033;
	$video_title[$video1] = "033";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// MENU: related videos in Help tab
function wpvideocoach_related_videos_menu()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_034;
	$video_title[$video1] = "034";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// PLUGINS: related videos in Help tab
function wpvideocoach_related_videos_plugins()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_035;
	$video_title[$video1] = "035";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// USERS: related videos in Help tab
function wpvideocoach_related_videos_users()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_036;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_037;
	$video3 = WPVIDEOCOACH_VIDEO_TITLE_038;
	$video_title[$video1] = "036";
	$video_title[$video2] = "037";
	$video_title[$video3] = "038";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// EDIT USER: related videos in Help tab
function wpvideocoach_related_videos_edituser()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_038;
	$video_title[$video1] = "038";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// ADD USER: related videos in Help tab
function wpvideocoach_related_videos_user()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_037;
	$video_title[$video1] = "037";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// PROFILE: related videos in Help tab
function wpvideocoach_related_videos_profile()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_039;
	$video_title[$video1] = "039";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// TOOLS: related videos in Help tab
function wpvideocoach_related_videos_tools()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_023;
	$video_title[$video1] = "023";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// IMPORT: related videos in Help tab
function wpvideocoach_related_videos_import()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_042;
	$video_title[$video1] = "042";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// EXPORT: related videos in Help tab
function wpvideocoach_related_videos_export()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_043;
	$video_title[$video1] = "043";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// OPTIONS GENERAL: related videos in Help tab
function wpvideocoach_related_videos_options_general()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_041;
	$video_title[$video1] = "041";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// OPTIONS WRITING: related videos in Help tab
function wpvideocoach_related_videos_options_writing()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_023;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_022;
	$video3 = WPVIDEOCOACH_VIDEO_TITLE_041;
	$video_title[$video1] = "023";
	$video_title[$video2] = "022";
	$video_title[$video3] = "041";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// OPTIONS READING: related videos in Help tab
function wpvideocoach_related_videos_options_reading()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_026;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_041;
	$video_title[$video1] = "026";
	$video_title[$video2] = "041";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// OPTIONS DISCUSSION: related videos in Help tab
function wpvideocoach_related_videos_options_discussion()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_030;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_031;
	$video_title[$video1] = "030";
	$video_title[$video2] = "031";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// OPTIONS PERMALINKS: related videos in Help tab
function wpvideocoach_related_videos_options_permalinks()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_027;
	$video_title[$video1] = "027";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// WP VIDEO COACH: related videos in Help tab
function wpvideocoach_related_videos_wpvc()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_902;
	$video_title[$video1] = "902";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'http://www.codeleon.com/embeds/902',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'http://www.codeleon.com/embeds/902',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// WP VIDEO COACH SETTINGS: related videos in Help tab
function wpvideocoach_related_videos_wpvc_settings()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_901;
	$video_title[$video1] = "901";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'http://www.codeleon.com/embeds/901',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'http://www.codeleon.com/embeds/901',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// WORDPRESS SEO DASHBOARD: related videos in Help tab
function wpvideocoach_related_videos_wpseo()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_102;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_103;
	$video3 = WPVIDEOCOACH_VIDEO_TITLE_104;
	$video4 = WPVIDEOCOACH_VIDEO_TITLE_105;
	$video5 = WPVIDEOCOACH_VIDEO_TITLE_106;
	$video6 = WPVIDEOCOACH_VIDEO_TITLE_107;
	$video7 = WPVIDEOCOACH_VIDEO_TITLE_108;
	$video8 = WPVIDEOCOACH_VIDEO_TITLE_109;
	$video_title[$video1] = "102";
	$video_title[$video2] = "103";
	$video_title[$video3] = "104";
	$video_title[$video4] = "105";
	$video_title[$video5] = "106";
	$video_title[$video6] = "107";
	$video_title[$video7] = "108";
	$video_title[$video8] = "109";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// WORDPRESS SEO TITLES: related videos in Help tab
function wpvideocoach_related_videos_wpseo_titles()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_102;
	$video_title[$video1] = "102";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// WORDPRESS SEO SOCIAL: related videos in Help tab
function wpvideocoach_related_videos_wpseo_social()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_104;
	$video_title[$video1] = "104";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// WORDPRESS SEO XML: related videos in Help tab
function wpvideocoach_related_videos_wpseo_xml()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_105;
	$video_title[$video1] = "105";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// WORDPRESS SEO PERMALINKS: related videos in Help tab
function wpvideocoach_related_videos_wpseo_permalinks()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_106;
	$video_title[$video1] = "106";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// WORDPRESS SEO BREADCRUMBS: related videos in Help tab
function wpvideocoach_related_videos_wpseo_breadcrumbs()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_107;
	$video_title[$video1] = "107";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// WORDPRESS SEO RSS: related videos in Help tab
function wpvideocoach_related_videos_wpseo_rss()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_108;
	$video_title[$video1] = "108";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// WORDPRESS SEO IMPORT EXPORT: related videos in Help tab
function wpvideocoach_related_videos_wpseo_import()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_109;
	$video_title[$video1] = "109";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// NEXTGEN: related videos in Help tab
function wpvideocoach_related_videos_nextgen()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_122;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_123;
	$video3 = WPVIDEOCOACH_VIDEO_TITLE_124;
	$video4 = WPVIDEOCOACH_VIDEO_TITLE_125;
	$video5 = WPVIDEOCOACH_VIDEO_TITLE_126;
	$video_title[$video1] = "122";
	$video_title[$video2] = "123";
	$video_title[$video3] = "124";
	$video_title[$video4] = "125";
	$video_title[$video5] = "126";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// NEXTGEN ADD GALLERY: related videos in Help tab
function wpvideocoach_related_videos_nextgen_add_gallery()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_122;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_123;
	$video_title[$video1] = "122";
	$video_title[$video2] = "123";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// NEXTGEN ALBUMS: related videos in Help tab
function wpvideocoach_related_videos_nextgen_albums()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_124;
	$video_title[$video1] = "124";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// NEXTGEN TAGS: related videos in Help tab
function wpvideocoach_related_videos_nextgen_tags()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_125;
	$video_title[$video1] = "125";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// NEXTGEN SETTINGS: related videos in Help tab
function wpvideocoach_related_videos_nextgen_settings()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_126;
	$video_title[$video1] = "126";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// ALL IN ONE SEO: related videos in Help tab
function wpvideocoach_related_videos_allseo()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_132;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_134;
	$video_title[$video1] = "132";
	$video_title[$video2] = "134";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// ALL IN ONE SEO - FEATURE MANAGER: related videos in Help tab
function wpvideocoach_related_videos_allseo_feature()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_134;
	$video_title[$video1] = "134";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// GOOGLE XML: related videos in Help tab
function wpvideocoach_related_videos_googlexml()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_142;
	$video_title[$video1] = "142";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

// CONTACT FORM 7: related videos in Help tab
function wpvideocoach_related_videos_form7()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_152;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_153;
	$video_title[$video1] = "152";
	$video_title[$video2] = "153";
	global $wpvideocoach_thumbnails;
	if(empty($wpvideocoach_thumbnails)){
		$wpvideocoach_thumbnails = "0";
	}
	global $wpvideocoach_language;
	if(empty($wpvideocoach_language)){
		$wpvideocoach_language = "english";
	}
	foreach ($video_title as $key => $value) {
		$visible = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($visible)) {
    		// do nothing
		}
		else {
			echo "<div class=\"video-item\"><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\"><img src=\"" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/" . $value . ".jpg\" /></a>
			<p><a onclick=\"TINY.box.show({iframe:'" . WPVIDEOCOACH_URL ."wp-video-" . $wpvideocoach_language . "-" . $value . "/by-login-pass?_key=" . WPVIDEOCOACH_API_KEY . "&login=" . wpvideocoach_client_id() ."&pass=" . wpvideocoach_client_password() ."',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})\">" . $key . "</a></p></div><!--videoitem-->";
		}
	}
	echo wpvideocoach_video_link_color();
}

?>