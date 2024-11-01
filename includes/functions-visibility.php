<?php 

// Display hide option for videos in the "Getting Started" category
function wpvideocoach_hide_videos_one()
{
	$part1 = WPVIDEOCOACH_VIDEO_TITLE_001;
	$part2 = WPVIDEOCOACH_VIDEO_TITLE_002;
	$part3 = WPVIDEOCOACH_VIDEO_TITLE_003;
	$disable_video_title[$part1] = "001";
	$disable_video_title[$part2] = "002";
	$disable_video_title[$part3] = "003";
	foreach ($disable_video_title as $key => $value) {
		$hidden_video = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($hidden_video)) {
    		echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' checked='checked' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
		else {
			echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
	}
}

// Display code for checkbox: if category is selected, check all videos
function wpvideocoach_display_check_one() {
	//* We need a format for numbers under 10
	foreach (range(1, 3) as $number) {
    echo "document.getElementById('wpvideocoach_visibility_video00" . $number . "').checked=this.checked;";
	}

}

// Make checkbox checked if all videos are disabled
function wpvideocoach_checked_one() {
	global $wpvideocoach_visible_001, $wpvideocoach_visible_002, $wpvideocoach_visible_003;
	if(!empty($wpvideocoach_visible_001) && !empty($wpvideocoach_visible_002) && !empty($wpvideocoach_visible_003)) {
		echo "checked='checked'";
	}
	else {
		//do nothing
	}
}

// Display hide option for videos in the "Publishing Content" category
function wpvideocoach_hide_videos_two()
{
	$part4 = WPVIDEOCOACH_VIDEO_TITLE_004;
	$part5 = WPVIDEOCOACH_VIDEO_TITLE_005;
	$part6 = WPVIDEOCOACH_VIDEO_TITLE_006;
	$part7 = WPVIDEOCOACH_VIDEO_TITLE_007;
	$part8 = WPVIDEOCOACH_VIDEO_TITLE_008;
	$part9 = WPVIDEOCOACH_VIDEO_TITLE_009;
	$part10 = WPVIDEOCOACH_VIDEO_TITLE_010;
	$part11 = WPVIDEOCOACH_VIDEO_TITLE_011;
	$part12 = WPVIDEOCOACH_VIDEO_TITLE_012;
	$part13 = WPVIDEOCOACH_VIDEO_TITLE_013;
	$part14 = WPVIDEOCOACH_VIDEO_TITLE_014;
	$part15 = WPVIDEOCOACH_VIDEO_TITLE_015;
	$part16 = WPVIDEOCOACH_VIDEO_TITLE_016;
	$part17 = WPVIDEOCOACH_VIDEO_TITLE_017;
	$part18 = WPVIDEOCOACH_VIDEO_TITLE_018;
	$part19 = WPVIDEOCOACH_VIDEO_TITLE_019;
	$part20 = WPVIDEOCOACH_VIDEO_TITLE_020;
	$part21 = WPVIDEOCOACH_VIDEO_TITLE_021;
	$part22 = WPVIDEOCOACH_VIDEO_TITLE_022;
	$part23 = WPVIDEOCOACH_VIDEO_TITLE_023;
	$disable_video_title[$part4] = "004";
	$disable_video_title[$part5] = "005";
	$disable_video_title[$part6] = "006";
	$disable_video_title[$part7] = "007";
	$disable_video_title[$part8] = "008";
	$disable_video_title[$part9] = "009";
	$disable_video_title[$part10] = "010";
	$disable_video_title[$part11] = "011";
	$disable_video_title[$part12] = "012";
	$disable_video_title[$part13] = "013";
	$disable_video_title[$part14] = "014";
	$disable_video_title[$part15] = "015";
	$disable_video_title[$part16] = "016";
	$disable_video_title[$part17] = "017";
	$disable_video_title[$part18] = "018";
	$disable_video_title[$part19] = "019";
	$disable_video_title[$part20] = "020";
	$disable_video_title[$part21] = "021";
	$disable_video_title[$part22] = "022";
	$disable_video_title[$part23] = "023";
	foreach ($disable_video_title as $key => $value) {
		$hidden_video = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($hidden_video)) {
    		echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' checked='checked' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
		else {
			echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
	}
}

// Display code for checkbox: if category is selected, check all videos
function wpvideocoach_display_check_two() {
	//* We need a different format for numbers under 10
	foreach (range(4, 9) as $number) {
    echo "document.getElementById('wpvideocoach_visibility_video00" . $number . "').checked=this.checked;";
	}
	//* Now fire away!
	foreach (range(10, 23) as $number) {
    echo "document.getElementById('wpvideocoach_visibility_video0" . $number . "').checked=this.checked;";
	}

}

// Make checkbox checked if all videos are disabled
function wpvideocoach_checked_two() {
	global $wpvideocoach_visible_004, $wpvideocoach_visible_005, $wpvideocoach_visible_006, $wpvideocoach_visible_007, $wpvideocoach_visible_008, $wpvideocoach_visible_009, $wpvideocoach_visible_010, $wpvideocoach_visible_011, $wpvideocoach_visible_012, $wpvideocoach_visible_013, $wpvideocoach_visible_014, $wpvideocoach_visible_015, $wpvideocoach_visible_016, $wpvideocoach_visible_017, $wpvideocoach_visible_018, $wpvideocoach_visible_019, $wpvideocoach_visible_020, $wpvideocoach_visible_021, $wpvideocoach_visible_022, $wpvideocoach_visible_023;
	if(!empty($wpvideocoach_visible_004) && !empty($wpvideocoach_visible_005) && !empty($wpvideocoach_visible_006) && !empty($wpvideocoach_visible_007) && !empty($wpvideocoach_visible_008) && !empty($wpvideocoach_visible_009) && !empty($wpvideocoach_visible_010) && !empty($wpvideocoach_visible_011) && !empty($wpvideocoach_visible_012) && !empty($wpvideocoach_visible_013) && !empty($wpvideocoach_visible_014) && !empty($wpvideocoach_visible_015) && !empty($wpvideocoach_visible_016) && !empty($wpvideocoach_visible_017) && !empty($wpvideocoach_visible_018) && !empty($wpvideocoach_visible_019) && !empty($wpvideocoach_visible_020) && !empty($wpvideocoach_visible_021) && !empty($wpvideocoach_visible_022) && !empty($wpvideocoach_visible_023)) {
		echo "checked='checked'";
	}
	else {
		//do nothing
	}
}

// Display hide option for videos in the "Organizing Content" category
function wpvideocoach_hide_videos_three()
{
	$part24 = WPVIDEOCOACH_VIDEO_TITLE_024;
	$part25 = WPVIDEOCOACH_VIDEO_TITLE_025;
	$part26 = WPVIDEOCOACH_VIDEO_TITLE_026;
	$part27 = WPVIDEOCOACH_VIDEO_TITLE_027;
	$disable_video_title[$part24] = "024";
	$disable_video_title[$part25] = "025";
	$disable_video_title[$part26] = "026";
	$disable_video_title[$part27] = "027";
	foreach ($disable_video_title as $key => $value) {
		$hidden_video = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($hidden_video)) {
    		echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' checked='checked' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
		else {
			echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
	}
}

// Display code for checkbox: if category is selected, check all videos
function wpvideocoach_display_check_three() {
	//* Format for two digits
	foreach (range(24, 27) as $number) {
    echo "document.getElementById('wpvideocoach_visibility_video0" . $number . "').checked=this.checked;";
	}

}

// Make checkbox checked if all videos are disabled
function wpvideocoach_checked_three() {
	global $wpvideocoach_visible_024, $wpvideocoach_visible_025, $wpvideocoach_visible_026, $wpvideocoach_visible_027;
	if(!empty($wpvideocoach_visible_024) && !empty($wpvideocoach_visible_025) && !empty($wpvideocoach_visible_026) && !empty($wpvideocoach_visible_027)) {
		echo "checked='checked'";
	}
	else {
		//do nothing
	}
}

// Display hide option for videos in the "Organizing Discussion" category
function wpvideocoach_hide_videos_four()
{
	$part28 = WPVIDEOCOACH_VIDEO_TITLE_028;
	$part29 = WPVIDEOCOACH_VIDEO_TITLE_029;
	$part30 = WPVIDEOCOACH_VIDEO_TITLE_030;
	$part31 = WPVIDEOCOACH_VIDEO_TITLE_031;
	$disable_video_title[$part28] = "028";
	$disable_video_title[$part29] = "029";
	$disable_video_title[$part30] = "030";
	$disable_video_title[$part31] = "031";
	foreach ($disable_video_title as $key => $value) {
		$hidden_video = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($hidden_video)) {
    		echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' checked='checked' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
		else {
			echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
	}
}

// Display code for checkbox: if category is selected, check all videos
function wpvideocoach_display_check_four() {
	//* Format for two digits
	foreach (range(28, 31) as $number) {
    echo "document.getElementById('wpvideocoach_visibility_video0" . $number . "').checked=this.checked;";
	}

}

// Make checkbox checked if all videos are disabled
function wpvideocoach_checked_four() {
	global $wpvideocoach_visible_028, $wpvideocoach_visible_029, $wpvideocoach_visible_030, $wpvideocoach_visible_031;
	if(!empty($wpvideocoach_visible_028) && !empty($wpvideocoach_visible_029) && !empty($wpvideocoach_visible_030) && !empty($wpvideocoach_visible_031)) {
		echo "checked='checked'";
	}
	else {
		//do nothing
	}
}

// Display hide option for videos in the "Changing Appearance" category
function wpvideocoach_hide_videos_five()
{
	$part32 = WPVIDEOCOACH_VIDEO_TITLE_032;
	$part33 = WPVIDEOCOACH_VIDEO_TITLE_033;
	$part34 = WPVIDEOCOACH_VIDEO_TITLE_034;
	$part35 = WPVIDEOCOACH_VIDEO_TITLE_035;
	$disable_video_title[$part32] = "032";
	$disable_video_title[$part33] = "033";
	$disable_video_title[$part34] = "034";
	$disable_video_title[$part35] = "035";
	foreach ($disable_video_title as $key => $value) {
		$hidden_video = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($hidden_video)) {
    		echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' checked='checked' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
		else {
			echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
	}
}

// Display code for checkbox: if category is selected, check all videos
function wpvideocoach_display_check_five() {
	//* Format for two digits
	foreach (range(32, 35) as $number) {
    echo "document.getElementById('wpvideocoach_visibility_video0" . $number . "').checked=this.checked;";
	}

}

// Make checkbox checked if all videos are disabled
function wpvideocoach_checked_five() {
	global $wpvideocoach_visible_032, $wpvideocoach_visible_033, $wpvideocoach_visible_034, $wpvideocoach_visible_035;
	if(!empty($wpvideocoach_visible_032) && !empty($wpvideocoach_visible_033) && !empty($wpvideocoach_visible_034) && !empty($wpvideocoach_visible_035)) {
		echo "checked='checked'";
	}
	else {
		//do nothing
	}
}

// Display hide option for videos in the "User Management" category
function wpvideocoach_hide_videos_six()
{
	$part36 = WPVIDEOCOACH_VIDEO_TITLE_036;
	$part37 = WPVIDEOCOACH_VIDEO_TITLE_037;
	$part38 = WPVIDEOCOACH_VIDEO_TITLE_038;
	$part39 = WPVIDEOCOACH_VIDEO_TITLE_039;
	$part40 = WPVIDEOCOACH_VIDEO_TITLE_040;
	$disable_video_title[$part36] = "036";
	$disable_video_title[$part37] = "037";
	$disable_video_title[$part38] = "038";
	$disable_video_title[$part39] = "039";
	$disable_video_title[$part40] = "040";
	foreach ($disable_video_title as $key => $value) {
		$hidden_video = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($hidden_video)) {
    		echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' checked='checked' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
		else {
			echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
	}
}

// Display code for checkbox: if category is selected, check all videos
function wpvideocoach_display_check_six() {
	//* Format for two digits
	foreach (range(36, 40) as $number) {
    echo "document.getElementById('wpvideocoach_visibility_video0" . $number . "').checked=this.checked;";
	}

}

// Make checkbox checked if all videos are disabled
function wpvideocoach_checked_six() {
	global $wpvideocoach_visible_036, $wpvideocoach_visible_037, $wpvideocoach_visible_038, $wpvideocoach_visible_039, $wpvideocoach_visible_040;
	if(!empty($wpvideocoach_visible_036) && !empty($wpvideocoach_visible_037) && !empty($wpvideocoach_visible_038) && !empty($wpvideocoach_visible_039) && !empty($wpvideocoach_visible_040)) {
		echo "checked='checked'";
	}
	else {
		//do nothing
	}
}

// Display hide option for videos in the "Website Management" category
function wpvideocoach_hide_videos_seven()
{
	$part41 = WPVIDEOCOACH_VIDEO_TITLE_041;
	$part42 = WPVIDEOCOACH_VIDEO_TITLE_042;
	$part43 = WPVIDEOCOACH_VIDEO_TITLE_043;
	$part44 = WPVIDEOCOACH_VIDEO_TITLE_044;
	$part45 = WPVIDEOCOACH_VIDEO_TITLE_045;
	$disable_video_title[$part41] = "041";
	$disable_video_title[$part42] = "042";
	$disable_video_title[$part43] = "043";
	$disable_video_title[$part44] = "044";
	$disable_video_title[$part45] = "045";
	foreach ($disable_video_title as $key => $value) {
		$hidden_video = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($hidden_video)) {
    		echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' checked='checked' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
		else {
			echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
	}
}

// Display code for checkbox: if category is selected, check all videos
function wpvideocoach_display_check_seven() {
	//* Format for two digits
	foreach (range(41, 45) as $number) {
    echo "document.getElementById('wpvideocoach_visibility_video0" . $number . "').checked=this.checked;";
	}

}

// Make checkbox checked if all videos are disabled
function wpvideocoach_checked_seven() {
	global $wpvideocoach_visible_041, $wpvideocoach_visible_042, $wpvideocoach_visible_043, $wpvideocoach_visible_044, $wpvideocoach_visible_045;
	if(!empty($wpvideocoach_visible_041) && !empty($wpvideocoach_visible_042) && !empty($wpvideocoach_visible_043) && !empty($wpvideocoach_visible_044) && !empty($wpvideocoach_visible_045)) {
		echo "checked='checked'";
	}
	else {
		//do nothing
	}
}

// Display hide option for videos in the "Quick Tips & Tricks" category
function wpvideocoach_hide_videos_eight()
{
	$part46 = WPVIDEOCOACH_VIDEO_TITLE_046;
	$part47 = WPVIDEOCOACH_VIDEO_TITLE_047;
	$part48 = WPVIDEOCOACH_VIDEO_TITLE_048;
	$part49 = WPVIDEOCOACH_VIDEO_TITLE_049;
	$part50 = WPVIDEOCOACH_VIDEO_TITLE_050;
	$disable_video_title[$part46] = "046";
	$disable_video_title[$part47] = "047";
	$disable_video_title[$part48] = "048";
	$disable_video_title[$part49] = "049";
	$disable_video_title[$part50] = "050";
	foreach ($disable_video_title as $key => $value) {
		$hidden_video = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($hidden_video)) {
    		echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' checked='checked' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
		else {
			echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
	}
}

// Display code for checkbox: if category is selected, check all videos
function wpvideocoach_display_check_eight() {
	//* Format for two digits
	foreach (range(46, 50) as $number) {
    echo "document.getElementById('wpvideocoach_visibility_video0" . $number . "').checked=this.checked;";
	}

}

// Make checkbox checked if all videos are disabled
function wpvideocoach_checked_eight() {
	global $wpvideocoach_visible_046, $wpvideocoach_visible_047, $wpvideocoach_visible_048, $wpvideocoach_visible_049, $wpvideocoach_visible_050;
	if(!empty($wpvideocoach_visible_046) && !empty($wpvideocoach_visible_047) && !empty($wpvideocoach_visible_048) && !empty($wpvideocoach_visible_049) && !empty($wpvideocoach_visible_050)) {
		echo "checked='checked'";
	}
	else {
		//do nothing
	}
}

// Display hide option for videos in the "WordPress SEO" category
function wpvideocoach_hide_videos_nine()
{
	//* Start count at 100. Numbers 110 - 119 reserved for updates.
	$part101 = WPVIDEOCOACH_VIDEO_TITLE_101;
	$part102 = WPVIDEOCOACH_VIDEO_TITLE_102;
	$part103 = WPVIDEOCOACH_VIDEO_TITLE_103;
	$part104 = WPVIDEOCOACH_VIDEO_TITLE_104;
	$part105 = WPVIDEOCOACH_VIDEO_TITLE_105;
	$part106 = WPVIDEOCOACH_VIDEO_TITLE_106;
	$part107 = WPVIDEOCOACH_VIDEO_TITLE_107;
	$part108 = WPVIDEOCOACH_VIDEO_TITLE_108;
	$part109 = WPVIDEOCOACH_VIDEO_TITLE_109;
	$disable_video_title[$part101] = "101";
	$disable_video_title[$part102] = "102";
	$disable_video_title[$part103] = "103";
	$disable_video_title[$part104] = "104";
	$disable_video_title[$part105] = "105";
	$disable_video_title[$part106] = "106";
	$disable_video_title[$part107] = "107";
	$disable_video_title[$part108] = "108";
	$disable_video_title[$part109] = "109";
	foreach ($disable_video_title as $key => $value) {
		$hidden_video = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($hidden_video)) {
    		echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' checked='checked' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
		else {
			echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
	}
}

// Display code for checkbox: if category is selected, check all videos
function wpvideocoach_display_check_nine() {
	//* Format for three digits
	foreach (range(101, 109) as $number) {
    echo "document.getElementById('wpvideocoach_visibility_video" . $number . "').checked=this.checked;";
	}

}

// Make checkbox checked if all videos are disabled
function wpvideocoach_checked_nine() {
	global $wpvideocoach_visible_101, $wpvideocoach_visible_102, $wpvideocoach_visible_103, $wpvideocoach_visible_104, $wpvideocoach_visible_105, $wpvideocoach_visible_106, $wpvideocoach_visible_107, $wpvideocoach_visible_108, $wpvideocoach_visible_109;
	if(!empty($wpvideocoach_visible_101) && !empty($wpvideocoach_visible_102) && !empty($wpvideocoach_visible_103) && !empty($wpvideocoach_visible_104) && !empty($wpvideocoach_visible_105) && !empty($wpvideocoach_visible_106) && !empty($wpvideocoach_visible_107) && !empty($wpvideocoach_visible_108) && !empty($wpvideocoach_visible_109)) {
		echo "checked='checked'";
	}
	else {
		//do nothing
	}
}

// Display hide option for videos in the "NextGEN Gallery" category
function wpvideocoach_hide_videos_ten()
{
	//* Start count at 121. Numbers 127 - 129 reserved for updates.
	$part121 = WPVIDEOCOACH_VIDEO_TITLE_121;
	$part122 = WPVIDEOCOACH_VIDEO_TITLE_122;
	$part123 = WPVIDEOCOACH_VIDEO_TITLE_123;
	$part124 = WPVIDEOCOACH_VIDEO_TITLE_124;
	$part125 = WPVIDEOCOACH_VIDEO_TITLE_125;
	$part126 = WPVIDEOCOACH_VIDEO_TITLE_126;
	$disable_video_title[$part121] = "121";
	$disable_video_title[$part122] = "122";
	$disable_video_title[$part123] = "123";
	$disable_video_title[$part124] = "124";
	$disable_video_title[$part125] = "125";
	$disable_video_title[$part126] = "126";
	foreach ($disable_video_title as $key => $value) {
		$hidden_video = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($hidden_video)) {
    		echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' checked='checked' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
		else {
			echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
	}
}

// Display code for checkbox: if category is selected, check all videos
function wpvideocoach_display_check_ten() {
	//* Format for three digits
	foreach (range(121, 126) as $number) {
    echo "document.getElementById('wpvideocoach_visibility_video" . $number . "').checked=this.checked;";
	}

}

// Make checkbox checked if all videos are disabled
function wpvideocoach_checked_ten() {
	global $wpvideocoach_visible_121, $wpvideocoach_visible_122, $wpvideocoach_visible_123, $wpvideocoach_visible_124, $wpvideocoach_visible_125, $wpvideocoach_visible_126;
	if(!empty($wpvideocoach_visible_121) && !empty($wpvideocoach_visible_122) && !empty($wpvideocoach_visible_123) && !empty($wpvideocoach_visible_124) && !empty($wpvideocoach_visible_125) && !empty($wpvideocoach_visible_126)) {
		echo "checked='checked'";
	}
	else {
		//do nothing
	}
}

// Display hide option for videos in the "All in One SEO Pack" category
function wpvideocoach_hide_videos_eleven()
{
	//* Start count at 131. Numbers 135 - 139 reserved for updates.
	$part131 = WPVIDEOCOACH_VIDEO_TITLE_131;
	$part132 = WPVIDEOCOACH_VIDEO_TITLE_132;
	$part133 = WPVIDEOCOACH_VIDEO_TITLE_133;
	$part134 = WPVIDEOCOACH_VIDEO_TITLE_134;
	$disable_video_title[$part131] = "131";
	$disable_video_title[$part132] = "132";
	$disable_video_title[$part133] = "133";
	$disable_video_title[$part134] = "134";
	foreach ($disable_video_title as $key => $value) {
		$hidden_video = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($hidden_video)) {
    		echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' checked='checked' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
		else {
			echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
	}
}

// Display code for checkbox: if category is selected, check all videos
function wpvideocoach_display_check_eleven() {
	//* Format for three digits
	foreach (range(131, 134) as $number) {
    echo "document.getElementById('wpvideocoach_visibility_video" . $number . "').checked=this.checked;";
	}

}

// Make checkbox checked if all videos are disabled
function wpvideocoach_checked_eleven() {
	global $wpvideocoach_visible_131, $wpvideocoach_visible_132, $wpvideocoach_visible_133, $wpvideocoach_visible_134;
	if(!empty($wpvideocoach_visible_131) && !empty($wpvideocoach_visible_132) && !empty($wpvideocoach_visible_133) && !empty($wpvideocoach_visible_134)) {
		echo "checked='checked'";
	}
	else {
		//do nothing
	}
}

// Display hide option for videos in the "Google XML Sitemaps" category
function wpvideocoach_hide_videos_twelve()
{
	//* Start count at 141. Numbers 143 - 149 reserved for updates.
	$part141 = WPVIDEOCOACH_VIDEO_TITLE_141;
	$part142 = WPVIDEOCOACH_VIDEO_TITLE_142;
	$disable_video_title[$part141] = "141";
	$disable_video_title[$part142] = "142";
	foreach ($disable_video_title as $key => $value) {
		$hidden_video = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($hidden_video)) {
    		echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' checked='checked' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
		else {
			echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
	}
}

// Display code for checkbox: if category is selected, check all videos
function wpvideocoach_display_check_twelve() {
	//* Format for three digits
	foreach (range(141, 142) as $number) {
    echo "document.getElementById('wpvideocoach_visibility_video" . $number . "').checked=this.checked;";
	}

}

// Make checkbox checked if all videos are disabled
function wpvideocoach_checked_twelve() {
	global $wpvideocoach_visible_141, $wpvideocoach_visible_142;
	if(!empty($wpvideocoach_visible_141) && !empty($wpvideocoach_visible_142)) {
		echo "checked='checked'";
	}
	else {
		//do nothing
	}
}

// Display hide option for videos in the "Contact Form 7" category
function wpvideocoach_hide_videos_thirteen()
{
	//* Start count at 151. Numbers 154 - 159 reserved for updates.
	$part151 = WPVIDEOCOACH_VIDEO_TITLE_151;
	$part152 = WPVIDEOCOACH_VIDEO_TITLE_152;
	$part153 = WPVIDEOCOACH_VIDEO_TITLE_153;
	$disable_video_title[$part151] = "151";
	$disable_video_title[$part152] = "152";
	$disable_video_title[$part153] = "153";
	foreach ($disable_video_title as $key => $value) {
		$hidden_video = get_option('wpvideocoach_visibility_video'.$value);
		if(!empty($hidden_video)) {
    		echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' checked='checked' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
		else {
			echo "<input name='wpvideocoach_visibility_video". $value ."' id='wpvideocoach_visibility_video". $value ."' type='checkbox' value='1' /><label for='wpvideocoach_visibility_video". $value ."'>" . __('Disable ', 'wp-video-coach') . "\"" . $key ."\"</label><div class='clear'></div>";
		}
	}
}

// Display code for checkbox: if category is selected, check all videos
function wpvideocoach_display_check_thirteen() {
	//* Format for three digits
	foreach (range(151, 153) as $number) {
    echo "document.getElementById('wpvideocoach_visibility_video" . $number . "').checked=this.checked;";
	}

}

// Make checkbox checked if all videos are disabled
function wpvideocoach_checked_thirteen() {
	global $wpvideocoach_visible_151, $wpvideocoach_visible_152, $wpvideocoach_visible_153;
	if(!empty($wpvideocoach_visible_151) && !empty($wpvideocoach_visible_152) && !empty($wpvideocoach_visible_153)) {
		echo "checked='checked'";
	}
	else {
		//do nothing
	}
}

?>