<?php 

// Define custom video category titles
function wpvideocoach_video_category_one()
	/* Getting Started category */
{
	global $wpvideocoach_video_cat_01;
	if(empty($wpvideocoach_video_cat_01)){
		$wpvideocoach_video_cat_01 = __('Getting Started', 'wp-video-coach');
	}
	return $wpvideocoach_video_cat_01;
}

function wpvideocoach_video_category_two()
	/* Publishing Content category */
{
	global $wpvideocoach_video_cat_02;
	if(empty($wpvideocoach_video_cat_02)){
		$wpvideocoach_video_cat_02 = __('Publishing Content', 'wp-video-coach');
	}
	return $wpvideocoach_video_cat_02;
}

function wpvideocoach_video_category_three()
	/* Organizing Content category */
{
	global $wpvideocoach_video_cat_03;
	if(empty($wpvideocoach_video_cat_03)){
		$wpvideocoach_video_cat_03 =  __('Organizing Content', 'wp-video-coach');
	}
	return $wpvideocoach_video_cat_03;
}

function wpvideocoach_video_category_four()
	/* Organizing Discussion category */
{
	global $wpvideocoach_video_cat_04;
	if(empty($wpvideocoach_video_cat_04)){
		$wpvideocoach_video_cat_04 =  __('Organizing Discussion', 'wp-video-coach');
	}
	return $wpvideocoach_video_cat_04;
}

function wpvideocoach_video_category_five()
	/* Changing Appearance category */
{
	global $wpvideocoach_video_cat_05;
	if(empty($wpvideocoach_video_cat_05)){
		$wpvideocoach_video_cat_05 =  __('Changing Appearance', 'wp-video-coach');
	}
	return $wpvideocoach_video_cat_05;
}

function wpvideocoach_video_category_six()
	/* User Management category */
{
	global $wpvideocoach_video_cat_06;
	if(empty($wpvideocoach_video_cat_06)){
		$wpvideocoach_video_cat_06 =  __('User Management', 'wp-video-coach');
	}
	return $wpvideocoach_video_cat_06;
}

function wpvideocoach_video_category_seven()
	/* Website Management category */
{
	global $wpvideocoach_video_cat_07;
	if(empty($wpvideocoach_video_cat_07)){
		$wpvideocoach_video_cat_07 =  __('Website Management', 'wp-video-coach');
	}
	return $wpvideocoach_video_cat_07;
}

function wpvideocoach_video_category_eight()
	/* Quick Tips & Tricks category */
{
	global $wpvideocoach_video_cat_08;
	if(empty($wpvideocoach_video_cat_08)){
		$wpvideocoach_video_cat_08 =  __('Quick Tips &amp; Tricks', 'wp-video-coach');
	}
	return $wpvideocoach_video_cat_08;
}

function wpvideocoach_video_category_nine()
	/* WordPress SEO category */
{
	global $wpvideocoach_video_cat_09;
	if(empty($wpvideocoach_video_cat_09)){
		$wpvideocoach_video_cat_09 =  __('WordPress SEO', 'wp-video-coach');
	}
	return $wpvideocoach_video_cat_09;
}

function wpvideocoach_video_category_ten()
	/* NextGEN Gallery category */
{
	global $wpvideocoach_video_cat_10;
	if(empty($wpvideocoach_video_cat_10)){
		$wpvideocoach_video_cat_10 =  __('NextGEN Gallery', 'wp-video-coach');
	}
	return $wpvideocoach_video_cat_10;
}

function wpvideocoach_video_category_eleven()
	/* All in One SEO Pack category */
{
	global $wpvideocoach_video_cat_11;
	if(empty($wpvideocoach_video_cat_11)){
		$wpvideocoach_video_cat_11 =  __('All in One SEO Pack', 'wp-video-coach');
	}
	return $wpvideocoach_video_cat_11;
}

function wpvideocoach_video_category_twelve()
	/* Google XML Sitemaps category */
{
	global $wpvideocoach_video_cat_12;
	if(empty($wpvideocoach_video_cat_12)){
		$wpvideocoach_video_cat_12 =  __('Google XML Sitemaps', 'wp-video-coach');
	}
	return $wpvideocoach_video_cat_12;
}

function wpvideocoach_video_category_thirteen()
	/* Contact Form 7 category */
{
	global $wpvideocoach_video_cat_13;
	if(empty($wpvideocoach_video_cat_13)){
		$wpvideocoach_video_cat_13 =  __('Contact Form 7', 'wp-video-coach');
	}
	return $wpvideocoach_video_cat_13;
}

function wpvideocoach_custom_video_category()
	/* Custom video category */
{
	global $wpvideocoach_custom_video_category;
	if(empty($wpvideocoach_custom_video_category)){
		$wpvideocoach_custom_video_category =  __('More Videos', 'wp-video-coach');
	}
	return $wpvideocoach_custom_video_category;
}

// Get client ID
function wpvideocoach_client_id()
{
	global $wpvideocoach_client_id;
	return $wpvideocoach_client_id;
}

// Get client password
function wpvideocoach_client_password()
{
	global $wpvideocoach_client_password;
	return $wpvideocoach_client_password;
}

// Show the videos in the "Getting Started" category
function wpvideocoach_show_videos_one()
{
	$video1 = WPVIDEOCOACH_VIDEO_TITLE_001;
	$video2 = WPVIDEOCOACH_VIDEO_TITLE_002;
	$video3 = WPVIDEOCOACH_VIDEO_TITLE_003;
	$video_title[$video1] = "001";
	$video_title[$video2] = "002";
	$video_title[$video3] = "003";
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
}

// Show the videos in the "Publishing Content" category
function wpvideocoach_show_videos_two()
{
	$video4 = WPVIDEOCOACH_VIDEO_TITLE_004;
	$video5 = WPVIDEOCOACH_VIDEO_TITLE_005;
	$video6 = WPVIDEOCOACH_VIDEO_TITLE_006;
	$video7 = WPVIDEOCOACH_VIDEO_TITLE_007;
	$video8 = WPVIDEOCOACH_VIDEO_TITLE_008;
	$video9 = WPVIDEOCOACH_VIDEO_TITLE_009;
	$video10 = WPVIDEOCOACH_VIDEO_TITLE_010;
	$video11 = WPVIDEOCOACH_VIDEO_TITLE_011;
	$video12 = WPVIDEOCOACH_VIDEO_TITLE_012;
	$video13 = WPVIDEOCOACH_VIDEO_TITLE_013;
	$video14 = WPVIDEOCOACH_VIDEO_TITLE_014;
	$video15 = WPVIDEOCOACH_VIDEO_TITLE_015;
	$video16 = WPVIDEOCOACH_VIDEO_TITLE_016;
	$video17 = WPVIDEOCOACH_VIDEO_TITLE_017;
	$video18 = WPVIDEOCOACH_VIDEO_TITLE_018;
	$video19 = WPVIDEOCOACH_VIDEO_TITLE_019;
	$video20 = WPVIDEOCOACH_VIDEO_TITLE_020;
	$video21 = WPVIDEOCOACH_VIDEO_TITLE_021;
	$video22 = WPVIDEOCOACH_VIDEO_TITLE_022;
	$video23 = WPVIDEOCOACH_VIDEO_TITLE_023;
	$video_title[$video4] = "004";
	$video_title[$video5] = "005";
	$video_title[$video6] = "006";
	$video_title[$video7] = "007";
	$video_title[$video8] = "008";
	$video_title[$video9] = "009";
	$video_title[$video10] = "010";
	$video_title[$video11] = "011";
	$video_title[$video12] = "012";
	$video_title[$video13] = "013";
	$video_title[$video14] = "014";
	$video_title[$video15] = "015";
	$video_title[$video16] = "016";
	$video_title[$video17] = "017";
	$video_title[$video18] = "018";
	$video_title[$video19] = "019";
	$video_title[$video20] = "020";
	$video_title[$video21] = "021";
	$video_title[$video22] = "022";
	$video_title[$video23] = "023";
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
}

// Show the videos in the "Organizing Content" category
function wpvideocoach_show_videos_three()
{
	$video24 = WPVIDEOCOACH_VIDEO_TITLE_024;
	$video25 = WPVIDEOCOACH_VIDEO_TITLE_025;
	$video26 = WPVIDEOCOACH_VIDEO_TITLE_026;
	$video27 = WPVIDEOCOACH_VIDEO_TITLE_027;
	$video_title[$video24] = "024";
	$video_title[$video25] = "025";
	$video_title[$video26] = "026";
	$video_title[$video27] = "027";
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
}

// Show the videos in the "Organizing Discussion" category
function wpvideocoach_show_videos_four()
{
	$video28 = WPVIDEOCOACH_VIDEO_TITLE_028;
	$video29 = WPVIDEOCOACH_VIDEO_TITLE_029;
	$video30 = WPVIDEOCOACH_VIDEO_TITLE_030;
	$video31 = WPVIDEOCOACH_VIDEO_TITLE_031;
	$video_title[$video28] = "028";
	$video_title[$video29] = "029";
	$video_title[$video30] = "030";
	$video_title[$video31] = "031";
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
}

// Show the videos in the "Changing Appearance" category
function wpvideocoach_show_videos_five()
{
	$video32 = WPVIDEOCOACH_VIDEO_TITLE_032;
	$video33 = WPVIDEOCOACH_VIDEO_TITLE_033;
	$video34 = WPVIDEOCOACH_VIDEO_TITLE_034;
	$video35 = WPVIDEOCOACH_VIDEO_TITLE_035;
	$video_title[$video32] = "032";
	$video_title[$video33] = "033";
	$video_title[$video34] = "034";
	$video_title[$video35] = "035";
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
}

// Show the videos in the "User Management" category
function wpvideocoach_show_videos_six()
{
	$video36 = WPVIDEOCOACH_VIDEO_TITLE_036;
	$video37 = WPVIDEOCOACH_VIDEO_TITLE_037;
	$video38 = WPVIDEOCOACH_VIDEO_TITLE_038;
	$video39 = WPVIDEOCOACH_VIDEO_TITLE_039;
	$video40 = WPVIDEOCOACH_VIDEO_TITLE_040;
	$video_title[$video36] = "036";
	$video_title[$video37] = "037";
	$video_title[$video38] = "038";
	$video_title[$video39] = "039";
	$video_title[$video40] = "040";
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
}

// Show the videos in the "Website Management" category
function wpvideocoach_show_videos_seven()
{
	$video41 = WPVIDEOCOACH_VIDEO_TITLE_041;
	$video42 = WPVIDEOCOACH_VIDEO_TITLE_042;
	$video43 = WPVIDEOCOACH_VIDEO_TITLE_043;
	$video44 = WPVIDEOCOACH_VIDEO_TITLE_044;
	$video45 = WPVIDEOCOACH_VIDEO_TITLE_045;
	$video_title[$video41] = "041";
	$video_title[$video42] = "042";
	$video_title[$video43] = "043";
	$video_title[$video44] = "044";
	$video_title[$video45] = "045";
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
}

// Show the videos in the "Quick Tips & Tricks" category
function wpvideocoach_show_videos_eight()
{
	$video46 = WPVIDEOCOACH_VIDEO_TITLE_046;
	$video47 = WPVIDEOCOACH_VIDEO_TITLE_047;
	$video48 = WPVIDEOCOACH_VIDEO_TITLE_048;
	$video49 = WPVIDEOCOACH_VIDEO_TITLE_049;
	$video50 = WPVIDEOCOACH_VIDEO_TITLE_050;
	$video_title[$video46] = "046";
	$video_title[$video47] = "047";
	$video_title[$video48] = "048";
	$video_title[$video49] = "049";
	$video_title[$video50] = "050";
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
}

// Show the videos in the "WordPress SEO" category
function wpvideocoach_show_videos_nine()
{
	$video101 = WPVIDEOCOACH_VIDEO_TITLE_101;
	$video102 = WPVIDEOCOACH_VIDEO_TITLE_102;
	$video103 = WPVIDEOCOACH_VIDEO_TITLE_103;
	$video104 = WPVIDEOCOACH_VIDEO_TITLE_104;
	$video105 = WPVIDEOCOACH_VIDEO_TITLE_105;
	$video106 = WPVIDEOCOACH_VIDEO_TITLE_106;
	$video107 = WPVIDEOCOACH_VIDEO_TITLE_107;
	$video108 = WPVIDEOCOACH_VIDEO_TITLE_108;
	$video109 = WPVIDEOCOACH_VIDEO_TITLE_109;
	$video_title[$video101] = "101";
	$video_title[$video102] = "102";
	$video_title[$video103] = "103";
	$video_title[$video104] = "104";
	$video_title[$video105] = "105";
	$video_title[$video106] = "106";
	$video_title[$video107] = "107";
	$video_title[$video108] = "108";
	$video_title[$video109] = "109";
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
}

// Show the videos in the "NextGEN Gallery" category
function wpvideocoach_show_videos_ten()
{
	$video121 = WPVIDEOCOACH_VIDEO_TITLE_121;
	$video122 = WPVIDEOCOACH_VIDEO_TITLE_122;
	$video123 = WPVIDEOCOACH_VIDEO_TITLE_123;
	$video124 = WPVIDEOCOACH_VIDEO_TITLE_124;
	$video125 = WPVIDEOCOACH_VIDEO_TITLE_125;
	$video126 = WPVIDEOCOACH_VIDEO_TITLE_126;
	$video_title[$video121] = "121";
	$video_title[$video122] = "122";
	$video_title[$video123] = "123";
	$video_title[$video124] = "124";
	$video_title[$video125] = "125";
	$video_title[$video126] = "126";
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
}

// Show the videos in the "All in One SEO Pack" category
function wpvideocoach_show_videos_eleven()
{
	$video131 = WPVIDEOCOACH_VIDEO_TITLE_131;
	$video132 = WPVIDEOCOACH_VIDEO_TITLE_132;
	$video133 = WPVIDEOCOACH_VIDEO_TITLE_133;
	$video134 = WPVIDEOCOACH_VIDEO_TITLE_134;
	$video_title[$video131] = "131";
	$video_title[$video132] = "132";
	$video_title[$video133] = "133";
	$video_title[$video134] = "134";
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
}

// Show the videos in the "Google XML Sitemaps" category
function wpvideocoach_show_videos_twelve()
{
	$video141 = WPVIDEOCOACH_VIDEO_TITLE_141;
	$video142 = WPVIDEOCOACH_VIDEO_TITLE_142;
	$video_title[$video141] = "141";
	$video_title[$video142] = "142";
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
}

// Show the videos in the "Contact Form 7" category
function wpvideocoach_show_videos_thirteen()
{
	$video151 = WPVIDEOCOACH_VIDEO_TITLE_151;
	$video152 = WPVIDEOCOACH_VIDEO_TITLE_152;
	$video153 = WPVIDEOCOACH_VIDEO_TITLE_153;
	$video_title[$video151] = "151";
	$video_title[$video152] = "152";
	$video_title[$video153] = "153";
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
}

// Show custom videos
function wpvideocoach_show_videos_custom()
{
	$custom_video1 = get_option('wpvideocoach_custom_video1');
	$custom_video1_link = get_option('wpvideocoach_custom_video1_link');
	$custom_video2 = get_option('wpvideocoach_custom_video2');
	$custom_video2_link = get_option('wpvideocoach_custom_video2_link');
	$custom_video3 = get_option('wpvideocoach_custom_video3');
	$custom_video3_link = get_option('wpvideocoach_custom_video3_link');
	$custom_video4 = get_option('wpvideocoach_custom_video4');
	$custom_video4_link = get_option('wpvideocoach_custom_video4_link');
	$custom_video5 = get_option('wpvideocoach_custom_video5');
	$custom_video5_link = get_option('wpvideocoach_custom_video5_link');
	$custom_video6 = get_option('wpvideocoach_custom_video6');
	$custom_video6_link = get_option('wpvideocoach_custom_video6_link');
	$custom_video7 = get_option('wpvideocoach_custom_video7');
	$custom_video7_link = get_option('wpvideocoach_custom_video7_link');
	$custom_video8 = get_option('wpvideocoach_custom_video8');
	$custom_video8_link = get_option('wpvideocoach_custom_video8_link');
	$custom_video9 = get_option('wpvideocoach_custom_video9');
	$custom_video9_link = get_option('wpvideocoach_custom_video9_link');
	$custom_video10 = get_option('wpvideocoach_custom_video10');
	$custom_video10_link = get_option('wpvideocoach_custom_video10_link');
	$custom_video11 = get_option('wpvideocoach_custom_video11');
	$custom_video11_link = get_option('wpvideocoach_custom_video11_link');
	$custom_video12 = get_option('wpvideocoach_custom_video12');
	$custom_video12_link = get_option('wpvideocoach_custom_video12_link');
	$custom_video13 = get_option('wpvideocoach_custom_video13');
	$custom_video13_link = get_option('wpvideocoach_custom_video13_link');
	$custom_video14 = get_option('wpvideocoach_custom_video14');
	$custom_video14_link = get_option('wpvideocoach_custom_video14_link');
	$custom_video15 = get_option('wpvideocoach_custom_video15');
	$custom_video15_link = get_option('wpvideocoach_custom_video15_link');
	$custom_video15 = get_option('wpvideocoach_custom_video15');
	$custom_video15_link = get_option('wpvideocoach_custom_video15_link');
	$custom_video16 = get_option('wpvideocoach_custom_video16');
	$custom_video16_link = get_option('wpvideocoach_custom_video16_link');
	$custom_video17 = get_option('wpvideocoach_custom_video17');
	$custom_video17_link = get_option('wpvideocoach_custom_video17_link');
	$custom_video18 = get_option('wpvideocoach_custom_video18');
	$custom_video18_link = get_option('wpvideocoach_custom_video18_link');
	$custom_video19 = get_option('wpvideocoach_custom_video19');
	$custom_video19_link = get_option('wpvideocoach_custom_video19_link');
	$custom_video20 = get_option('wpvideocoach_custom_video20');
	$custom_video20_link = get_option('wpvideocoach_custom_video20_link');
	$custom_video21 = get_option('wpvideocoach_custom_video21');
	$custom_video21_link = get_option('wpvideocoach_custom_video21_link');
	$custom_video22 = get_option('wpvideocoach_custom_video22');
	$custom_video22_link = get_option('wpvideocoach_custom_video22_link');
	$custom_video23 = get_option('wpvideocoach_custom_video23');
	$custom_video23_link = get_option('wpvideocoach_custom_video23_link');
	$custom_video24 = get_option('wpvideocoach_custom_video24');
	$custom_video24_link = get_option('wpvideocoach_custom_video24_link');
	$custom_video25 = get_option('wpvideocoach_custom_video25');
	$custom_video25_link = get_option('wpvideocoach_custom_video25_link');
	$custom_video26 = get_option('wpvideocoach_custom_video26');
	$custom_video26_link = get_option('wpvideocoach_custom_video26_link');
	$custom_video27 = get_option('wpvideocoach_custom_video27');
	$custom_video27_link = get_option('wpvideocoach_custom_video27_link');
	$custom_video28 = get_option('wpvideocoach_custom_video28');
	$custom_video28_link = get_option('wpvideocoach_custom_video28_link');
	$custom_video29 = get_option('wpvideocoach_custom_video29');
	$custom_video29_link = get_option('wpvideocoach_custom_video29_link');
	$custom_video30 = get_option('wpvideocoach_custom_video30');
	$custom_video30_link = get_option('wpvideocoach_custom_video30_link');
	$video_title = array (
		"title"=>array($custom_video1, $custom_video2, $custom_video3, $custom_video4, $custom_video5, $custom_video6, $custom_video7, $custom_video8, $custom_video9, $custom_video10, $custom_video11, $custom_video12, $custom_video13, $custom_video14, $custom_video15, $custom_video16, $custom_video17, $custom_video18, $custom_video19, $custom_video20, $custom_video21, $custom_video22, $custom_video23, $custom_video24, $custom_video25, $custom_video26, $custom_video27, $custom_video28, $custom_video29, $custom_video30),
		"link"=>array($custom_video1_link, $custom_video2_link, $custom_video3_link, $custom_video4_link, $custom_video5_link, $custom_video6_link, $custom_video7_link, $custom_video8_link, $custom_video9_link, $custom_video10_link, $custom_video11_link, $custom_video12_link, $custom_video13_link, $custom_video14_link, $custom_video15_link, $custom_video16_link, $custom_video17_link, $custom_video18_link, $custom_video19_link, $custom_video20_link, $custom_video21_link, $custom_video22_link, $custom_video23_link, $custom_video24_link, $custom_video25_link, $custom_video26_link, $custom_video27_link, $custom_video28_link, $custom_video29_link, $custom_video30_link),
	);
	global $wpvideocoach_thumbnails;
	foreach ($video_title['title'] as $key => $title) {
		if(empty($title)) {
    		// do nothing
		}
		else {
			echo "<div class='video-item'><a href='" . $video_title['link'][$key] . "' target='_blank'><img src='" . plugins_url() ."/wp-video-coach/thumbnails/" . $wpvideocoach_thumbnails . "/000.jpg' /></a>
    		<p><a href='" . $video_title['link'][$key] . "' target='_blank'>" . $title . "</a></p></div><!--videoitem-->";
		}
	}
}

// Determine whether to show the "Get Started" category
function wpvideocoach_show_video_category_one()
{
	global $wpvideocoach_categories, $wpvideocoach_categories_color, $wpvideocoach_visible_001, $wpvideocoach_visible_002, $wpvideocoach_visible_003;
	if($wpvideocoach_categories == 1){
		echo wpvideocoach_show_videos_one();
	}
	elseif (!empty($wpvideocoach_visible_001) && !empty($wpvideocoach_visible_002) && !empty($wpvideocoach_visible_003)) {
		// do nothing
	}
	else {
		echo "<h3 class='video-cat' style='color:" . $wpvideocoach_categories_color . "'>". wpvideocoach_video_category_one() ."</h3>";
		wpvideocoach_show_videos_one();
	}
}

// Determine whether to show the "Publishing Content" gallery
function wpvideocoach_show_video_category_two()
{
	global $wpvideocoach_categories, $wpvideocoach_categories_color, $wpvideocoach_visible_004, $wpvideocoach_visible_005, $wpvideocoach_visible_006, $wpvideocoach_visible_007, $wpvideocoach_visible_008, $wpvideocoach_visible_009, $wpvideocoach_visible_010, $wpvideocoach_visible_011, $wpvideocoach_visible_012, $wpvideocoach_visible_013, $wpvideocoach_visible_014, $wpvideocoach_visible_015, $wpvideocoach_visible_016, $wpvideocoach_visible_017, $wpvideocoach_visible_018, $wpvideocoach_visible_019, $wpvideocoach_visible_020, $wpvideocoach_visible_021, $wpvideocoach_visible_022, $wpvideocoach_visible_023;
	if($wpvideocoach_categories == 1){
		echo wpvideocoach_show_videos_two();
	}
	elseif (!empty($wpvideocoach_visible_004) && !empty($wpvideocoach_visible_005) && !empty($wpvideocoach_visible_006) && !empty($wpvideocoach_visible_007) && !empty($wpvideocoach_visible_008) && !empty($wpvideocoach_visible_009) && !empty($wpvideocoach_visible_010) && !empty($wpvideocoach_visible_011) && !empty($wpvideocoach_visible_012) && !empty($wpvideocoach_visible_013) && !empty($wpvideocoach_visible_014) && !empty($wpvideocoach_visible_015) && !empty($wpvideocoach_visible_016) && !empty($wpvideocoach_visible_017) && !empty($wpvideocoach_visible_018) && !empty($wpvideocoach_visible_019) && !empty($wpvideocoach_visible_020) && !empty($wpvideocoach_visible_021) && !empty($wpvideocoach_visible_022) && !empty($wpvideocoach_visible_023)) {
		// do nothing
	}
	else {
		echo "<div class='clear'></div><h3 class='video-cat' style='color:" . $wpvideocoach_categories_color . "'>". wpvideocoach_video_category_two() ."</h3>";
		wpvideocoach_show_videos_two();
	}
}

// Determine whether to show the "Organizing Content" category
function wpvideocoach_show_video_category_three()
{
	global $wpvideocoach_categories, $wpvideocoach_categories_color, $wpvideocoach_visible_024, $wpvideocoach_visible_025, $wpvideocoach_visible_026, $wpvideocoach_visible_027;
	if($wpvideocoach_categories == 1){
		echo wpvideocoach_show_videos_three();
	}
	elseif(!empty($wpvideocoach_visible_024) && !empty($wpvideocoach_visible_025) && !empty($wpvideocoach_visible_026) && !empty($wpvideocoach_visible_027)) {
		// do nothing
	}
	else {
		echo "<div class='clear'></div><h3 class='video-cat' style='color:" . $wpvideocoach_categories_color . "'>". wpvideocoach_video_category_three() ."</h3>";
		wpvideocoach_show_videos_three();
	}
}

// Determine whether to show the "Organizing Discussion" category
function wpvideocoach_show_video_category_four()
{
	global $wpvideocoach_categories, $wpvideocoach_categories_color, $wpvideocoach_visible_028, $wpvideocoach_visible_029, $wpvideocoach_visible_030, $wpvideocoach_visible_031;
	if($wpvideocoach_categories == 1){
		echo wpvideocoach_show_videos_four();
	}
	elseif(!empty($wpvideocoach_visible_028) && !empty($wpvideocoach_visible_029) && !empty($wpvideocoach_visible_030) && !empty($wpvideocoach_visible_031)) {
		// do nothing
	}
	else {
		echo "<div class='clear'></div><h3 class='video-cat' style='color:" . $wpvideocoach_categories_color . "'>". wpvideocoach_video_category_four() ."</h3>";
		wpvideocoach_show_videos_four();
	}
}

// Determine whether to show the "Changing Appearance" category
function wpvideocoach_show_video_category_five()
{
	global $wpvideocoach_categories, $wpvideocoach_categories_color, $wpvideocoach_visible_032, $wpvideocoach_visible_033, $wpvideocoach_visible_034, $wpvideocoach_visible_035;
	if($wpvideocoach_categories == 1){
		echo wpvideocoach_show_videos_five();
	}
	elseif(!empty($wpvideocoach_visible_032) && !empty($wpvideocoach_visible_033) && !empty($wpvideocoach_visible_034) && !empty($wpvideocoach_visible_035)) {
		// do nothing
	}
	else {
		echo "<div class='clear'></div><h3 class='video-cat' style='color:" . $wpvideocoach_categories_color . "'>". wpvideocoach_video_category_five() ."</h3>";
		wpvideocoach_show_videos_five();
	}
}

// Determine whether to show the "User Management" category
function wpvideocoach_show_video_category_six()
{
	global $wpvideocoach_categories, $wpvideocoach_categories_color, $wpvideocoach_visible_036, $wpvideocoach_visible_037, $wpvideocoach_visible_038, $wpvideocoach_visible_039, $wpvideocoach_visible_040;
	if($wpvideocoach_categories == 1){
		echo wpvideocoach_show_videos_six();
	}
	elseif(!empty($wpvideocoach_visible_036) && !empty($wpvideocoach_visible_037) && !empty($wpvideocoach_visible_038) && !empty($wpvideocoach_visible_039) && !empty($wpvideocoach_visible_040)) {
		// do nothing
	}
	else {
		echo "<div class='clear'></div><h3 class='video-cat' style='color:" . $wpvideocoach_categories_color . "'>". wpvideocoach_video_category_six() ."</h3>";
		wpvideocoach_show_videos_six();
	}
}

// Determine whether to show the "Website Management" category
function wpvideocoach_show_video_category_seven()
{
	global $wpvideocoach_categories, $wpvideocoach_categories_color, $wpvideocoach_visible_041, $wpvideocoach_visible_042, $wpvideocoach_visible_043, $wpvideocoach_visible_044, $wpvideocoach_visible_045;
	if($wpvideocoach_categories == 1){
		echo wpvideocoach_show_videos_seven();
	}
	elseif(!empty($wpvideocoach_visible_041) && !empty($wpvideocoach_visible_042) && !empty($wpvideocoach_visible_043) && !empty($wpvideocoach_visible_044) && !empty($wpvideocoach_visible_045)) {
		// do nothing
	}
	else {
		echo "<div class='clear'></div><h3 class='video-cat' style='color:" . $wpvideocoach_categories_color . "'>". wpvideocoach_video_category_seven() ."</h3>";
		wpvideocoach_show_videos_seven();
	}
}

// Determine whether to show the "Quick Tips & Tricks" category
function wpvideocoach_show_video_category_eight()
{
	global $wpvideocoach_categories, $wpvideocoach_categories_color, $wpvideocoach_visible_046, $wpvideocoach_visible_047, $wpvideocoach_visible_048, $wpvideocoach_visible_049, $wpvideocoach_visible_050;
	if($wpvideocoach_categories == 1){
		echo wpvideocoach_show_videos_eight();
	}
	elseif(!empty($wpvideocoach_visible_046) && !empty($wpvideocoach_visible_047) && !empty($wpvideocoach_visible_048) && !empty($wpvideocoach_visible_049) && !empty($wpvideocoach_visible_050)) {
		// do nothing
	}
	else {
		echo "<div class='clear'></div><h3 class='video-cat' style='color:" . $wpvideocoach_categories_color . "'>". wpvideocoach_video_category_eight() ."</h3>";
		wpvideocoach_show_videos_eight();
	}
}

// Determine whether to show the "WordPress SEO" category
function wpvideocoach_show_video_category_nine()
{
	global $wpvideocoach_categories, $wpvideocoach_categories_color, $wpvideocoach_visible_101, $wpvideocoach_visible_102, $wpvideocoach_visible_103, $wpvideocoach_visible_104, $wpvideocoach_visible_105, $wpvideocoach_visible_106, $wpvideocoach_visible_107, $wpvideocoach_visible_108, $wpvideocoach_visible_109;
	if($wpvideocoach_categories == 1){
		echo wpvideocoach_show_videos_nine();
	}
	elseif(!empty($wpvideocoach_visible_101) && !empty($wpvideocoach_visible_102) && !empty($wpvideocoach_visible_103) && !empty($wpvideocoach_visible_104) && !empty($wpvideocoach_visible_105) && !empty($wpvideocoach_visible_106) && !empty($wpvideocoach_visible_107) && !empty($wpvideocoach_visible_108) && !empty($wpvideocoach_visible_109)) {
		// do nothing
	}
	else {
		echo "<div class='clear'></div><h3 class='video-cat' style='color:" . $wpvideocoach_categories_color . "'>". wpvideocoach_video_category_nine() ."</h3>";
		wpvideocoach_show_videos_nine();
	}
}

// Determine whether to show the "NextGEN Gallery" category
function wpvideocoach_show_video_category_ten()
{
	global $wpvideocoach_categories, $wpvideocoach_categories_color, $wpvideocoach_visible_121, $wpvideocoach_visible_122, $wpvideocoach_visible_123, $wpvideocoach_visible_124, $wpvideocoach_visible_125, $wpvideocoach_visible_126;
	if($wpvideocoach_categories == 1){
		echo wpvideocoach_show_videos_ten();
	}
	elseif(!empty($wpvideocoach_visible_121) && !empty($wpvideocoach_visible_122) && !empty($wpvideocoach_visible_123) && !empty($wpvideocoach_visible_124) && !empty($wpvideocoach_visible_125) && !empty($wpvideocoach_visible_126)) {
		// do nothing
	}
	else {
		echo "<div class='clear'></div><h3 class='video-cat' style='color:" . $wpvideocoach_categories_color . "'>". wpvideocoach_video_category_ten() ."</h3>";
		wpvideocoach_show_videos_ten();
	}
}

// Determine whether to show the "All in One SEO Pack" category
function wpvideocoach_show_video_category_eleven()
{
	global $wpvideocoach_categories, $wpvideocoach_categories_color, $wpvideocoach_visible_131, $wpvideocoach_visible_132, $wpvideocoach_visible_133, $wpvideocoach_visible_134;
	if($wpvideocoach_categories == 1){
		echo wpvideocoach_show_videos_eleven();
	}
	elseif(!empty($wpvideocoach_visible_131) && !empty($wpvideocoach_visible_132) && !empty($wpvideocoach_visible_133) && !empty($wpvideocoach_visible_134)) {
		// do nothing
	}
	else {
		echo "<div class='clear'></div><h3 class='video-cat' style='color:" . $wpvideocoach_categories_color . "'>". wpvideocoach_video_category_eleven() ."</h3>";
		wpvideocoach_show_videos_eleven();
	}
}

// Determine whether to show the "Google XML Sitemaps" category
function wpvideocoach_show_video_category_twelve()
{
	global $wpvideocoach_categories, $wpvideocoach_categories_color, $wpvideocoach_visible_141, $wpvideocoach_visible_142;
	if($wpvideocoach_categories == 1){
		echo wpvideocoach_show_videos_twelve();
	}
	elseif(!empty($wpvideocoach_visible_141) && !empty($wpvideocoach_visible_142)) {
		// do nothing
	}
	else {
		echo "<div class='clear'></div><h3 class='video-cat' style='color:" . $wpvideocoach_categories_color . "'>". wpvideocoach_video_category_twelve() ."</h3>";
		wpvideocoach_show_videos_twelve();
	}
}

// Determine whether to show the "Contact Form 7" category
function wpvideocoach_show_video_category_thirteen()
{
	global $wpvideocoach_categories, $wpvideocoach_categories_color, $wpvideocoach_visible_151, $wpvideocoach_visible_152, $wpvideocoach_visible_153;
	if($wpvideocoach_categories == 1){
		echo wpvideocoach_show_videos_thirteen();
	}
	elseif(!empty($wpvideocoach_visible_151) && !empty($wpvideocoach_visible_152) && !empty($wpvideocoach_visible_153)) {
		// do nothing
	}
	else {
		echo "<div class='clear'></div><h3 class='video-cat' style='color:" . $wpvideocoach_categories_color . "'>". wpvideocoach_video_category_thirteen() ."</h3>";
		wpvideocoach_show_videos_thirteen();
	}
}

// Determine whether to show custom video category
function wpvideocoach_show_custom_video_category()
{
	global $wpvideocoach_categories, $wpvideocoach_categories_color;
	$custom_video1 = get_option('wpvideocoach_custom_video1');
	if($wpvideocoach_categories == 1){
		echo wpvideocoach_show_videos_custom();
	}
	elseif(empty($custom_video1)) {
		//do nothing
	}
	else {
		echo "<div class='clear'></div><h3 class='video-cat' style='color:" . $wpvideocoach_categories_color . "'>". wpvideocoach_custom_video_category() ."</h3>";
		wpvideocoach_show_videos_custom();
	}
}

?>