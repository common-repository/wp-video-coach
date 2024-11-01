<?php 
/*
Plugin Name: WP Video Coach
Plugin URI: http://www.codeleon.com/wordpress/plugins/wp-video-coach
Description: WordPress tutorial videos delivered in the Dashboard. Teach your clients how to use WordPress without spending any time teaching. Let our plugin do the work!
Author: Codeleon
Version: 2.0
Author URI: http://www.codeleon.com
License: Commercial
Text Domain: wp-video-coach
Domain Path:   /languages/
*/

// Add translation to plugin
function wpvideocoach_init() {
	$plugin_dir = basename(dirname(__FILE__));
	load_plugin_textdomain( 'wp-video-coach', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action('plugins_loaded', 'wpvideocoach_init');

// Allow for translation of plugin description
$plugin_header_translate = array(
	__('WordPress tutorial videos delivered in the Dashboard. Teach your clients how to use WordPress without spending any time teaching. Let our plugin do the work!', 'wp-video-coach'),
    __('http://www.wpvideocoach.com', 'wp-video-coach'),
);

// Add our menu to WordPress
add_action( 'admin_menu', 'wpvideocoach_menu' );

function wpvideocoach_menu() 
{
	$submenu = add_menu_page(__('WordPress Video Coach','menu-test'), __(wpvideocoach_custom_menu_title(),'menu-test'), 'read', 'wpvideocoach', 'wpvideocoach_main_page', wpvideocoach_custom_menu_icon(), 3);
	$menu = add_submenu_page( 'wpvideocoach', 'WP Video Coach Settings', 'Settings', 'manage_options', 'wpvideocoach-settings', 'wpvideocoach_settings' );
	
	// * We want our JS and CSS loaded on our admin pages only, so let's just load them for now
	add_action( 'load-' . $submenu, 'wpvideocoach_load_admin_scripts' );
	add_action( 'load-' . $menu, 'wpvideocoach_load_admin_scripts' );
	
	// * Contextual CSS, used for Help tabs, loaded on all admin pages
	add_action( 'admin_enqueue_scripts', 'wpvideocoach_admin_scripts_contextual' );
	
	// * Dashboard slider JavaScript, loaded on dashboard only
	add_action( 'admin_enqueue_scripts', 'wpvideocoach_admin_scripts_slider' );
}

// Enqueue our CSS and JS on WP Video Coach admin pages only
function wpvideocoach_load_admin_scripts() {
	add_action( 'admin_enqueue_scripts', 'wpvideocoach_admin_scripts' );
}

// Include our registration settings
include( plugin_dir_path( __FILE__ ) . 'includes/register-settings.php');
// Include our regular functions
include( plugin_dir_path( __FILE__ ) . 'includes/functions.php');
// Include our categories and video list
include( plugin_dir_path( __FILE__ ) . 'includes/functions-videos.php');
// Include our video visibility options
include( plugin_dir_path( __FILE__ ) . 'includes/functions-visibility.php');
// Include the functions for our contextual videos in Help tabs
include( plugin_dir_path( __FILE__ ) . 'includes/functions-contextual.php');
// Include our contextual videos in Help tabs
include( plugin_dir_path( __FILE__ ) . 'includes/functions-videos-tabs.php');
// Include our videos for Dashboard slider
include( plugin_dir_path( __FILE__ ) . 'includes/functions-videos-slider.php');


// Add our CSS and JS to admin head, but just for our pages (see load_admin_scripts above!)
function wpvideocoach_admin_scripts()
{
	wp_enqueue_style('wpvideocoach-stylesheet', plugins_url('/css/videocoach.css', __FILE__ ));
	wp_enqueue_script('tabcontent', plugins_url('/js/tabcontent.js', __FILE__ ));
	//wp_enqueue_script('tabcontent-do', plugins_url('/js/tabcontent-do.js', __FILE__ ));
	wp_enqueue_style('wp-color-picker');
	wp_enqueue_script('wpvideocoach-color', plugins_url('/js/videocoach-color.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
}

// Add our contextual CSS and JS to admin head, we need it on all admin pages
function wpvideocoach_admin_scripts_contextual($hook)
{
	wp_enqueue_style('wpvideocoach-contextual-stylesheet', plugins_url('/css/videocoach-contextual.css', __FILE__ ));
	wp_enqueue_style('tinybox-stylesheet', plugins_url('/css/tinybox.css', __FILE__ ));
	wp_enqueue_script('tinybox', plugins_url('/js/tinybox.js', __FILE__ ));
}

// Add our dashboard slider JS to admin head
function wpvideocoach_admin_scripts_slider($hook)
{
	// We need the slider JS on dashboard, so let's load it on dashboard only
	if( 'index.php' != $hook )
        return;
    wp_enqueue_script('wpvideocoach-video-slider', plugins_url('/js/slider.js', __FILE__ ));
	wp_enqueue_script('wpvideocoach-video-slider-control', plugins_url('/js/slider-control.js', __FILE__ ));
}


// Make sure user can manage options
function wpvideocoach_settings() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
?>
	<div class="wrap">
		<div id="icon-videocoach" class="icon32">
    	</div><!--icon-videocoach-->
    	<h2 class="title"><?php echo wpvideocoach_menu_tabs(); ?></h2>
		
        <?php if( isset($_GET['settings-updated']) ) { ?>
    		<div id="message" class="updated">
        		<p><strong><?php _e('Settings saved.') ?></strong> <a href="admin.php?page=wpvideocoach">View the video page</a>.</p>
    		</div>
		<?php } ?>
        
    	<form method="post" action="options.php" id="frm1">
		<?php settings_fields( 'wpvideocoach-settings-group' ); ?>
        

            <div id="options-container">
            	<div id="wpvideocoach-general-settings-tab" class="tabcontent">
            	<div id="upper-container-left">
            		<div id="licensebox">
                		<h3><?php echo __('Unlock the Videos', 'wp-video-coach'); ?></h3>
                		<label for="wpvideocoach_client_id" class="nopointer"><?php echo __('Enter your Codeleon username:', 'wp-video-coach'); ?></label>
						<input type="text" name="wpvideocoach_client_id" value="<?php echo wpvideocoach_client_id() ?>" />
                        <label for="wpvideocoach_client_password" class="nopointer"><?php echo __('Enter your Codeleon password:', 'wp-video-coach'); ?></label>
						<input type="password" name="wpvideocoach_client_password" value="<?php echo wpvideocoach_client_password() ?>" />
                        <br />
                        <a href="http://codeleon.com/member/signup/7wG8x2fG" target="_blank" class="license-button"><?php echo __('Subscribe Now!', 'wp-video-coach'); ?></a>
                        <div class="clear"></div>
                    	<p class="nounderline"><?php echo __('To display WordPress tutorial videos on all your client websites, you will need a valid subscription. If you don’t have a valid subscription yet,', 'wp-video-coach'); ?> <a href="http://codeleon.com/member/signup/7wG8x2fG" target="_blank"><?php echo __('create your subscription', 'wp-video-coach'); ?></a>.</p>
                    	
                	</div><!--licensebox-->
                </div><!--upper-container-left-->
                <div id="upper-container-right">
                	<div id="supportbox">
                		<h3><?php echo __('Support', 'wp-video-coach'); ?></h3>
                        <ul>
                        	<li><a href="http://www.codeleon.com/contact" target="_blank" class="contactus"><?php echo __('Contact us', 'wp-video-coach'); ?></a></li>
                            <li><a onclick="TINY.box.show({iframe:'http://www.codeleon.com/embeds/901',boxid:'frameless',width:800,height:450,fixed:true,maskopacity:10})" class="how-to-name"><?php echo __('How to set up WP Video Coach video', 'wp-video-coach'); ?></a></li>
                        </ul>
                        <ul>
                        	<li><a href="http://wordpress.org/plugins/wp-video-coach" target="_blank"><?php echo __('Rate our plugin on WordPress.org', 'wp-video-coach'); ?></a></li>
                            <li><a href="http://www.codeleon.com/send/surveys.php?id=3" target="_blank"><?php echo __('Leave us a testimonial', 'wp-video-coach'); ?></a></li>
                            <li><a href="http://www.codeleon.com/send/surveys.php?id=4" target="_blank"><?php echo __('Help us improve', 'wp-video-coach'); ?></a></li>
                            <li><a href="http://www.codeleon.com/affiliates" target="_blank"><?php echo __('Make money promoting us', 'wp-video-coach'); ?></a></li>
                        </ul>
                        <ul>
                            <li><a href="http://twitter.com/codeleoncom" target="_blank"><?php echo __('Follow us on Twitter', 'wp-video-coach'); ?></a></li>
                            <li><a href="http://www.facebook.com/codeleoncom" target="_blank"><?php echo __('Follow us on Facebook', 'wp-video-coach'); ?></a></li>
                            <li><a href="http://plus.google.com/116000141335169770939" target="_blank"><?php echo __('Follow us on Google+', 'wp-video-coach'); ?></a></li>
                        </ul>
                	</div><!--supportbox-->
                </div><!--upper-container-right-->
                <div class="clear"></div>
                
                </div><!--wpvideocoach-general-settings-tab-->
                <div id="wpvideocoach-customization-settings-tab" class="tabcontent">
                
            		<div class="optiongroup">
                        <h3><?php echo __('Branding', 'wp-video-coach'); ?></h3>
                        <p><?php echo __('The following fields allow you to rename our plugin and add your own icons, in order to reinforce your own branding and offer your clients an even better experience.', 'wp-video-coach'); ?></p>
                        <div class="optionleft">
                            <label for="wpvideocoach_custom_menu_title" class="nopointer"><?php echo __('Plugin menu title', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" name="wpvideocoach_custom_menu_title" value="<?php echo wpvideocoach_custom_menu_title(); ?>" />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Keep it short, e.g. "Video Tutorial"', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_custom_title" class="nopointer"><?php echo __('Plugin title', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" name="wpvideocoach_custom_title" value="<?php echo wpvideocoach_custom_title(); ?>" />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Title as it appears on the videos page', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                        	<div class="preview-icon"><img src="<?php echo wpvideocoach_custom_menu_icon(); ?>" height="16px" width="16px" /></div><!--preview-icon-->
                            <div class="iconlabel"><label for="wpvideocoach_custom_menu_icon" class="nopointer"><?php echo __('Plugin menu icon', 'wp-video-coach'); ?></label></div><!--iconlabel-->
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" name="wpvideocoach_custom_menu_icon" value="<?php echo wpvideocoach_custom_menu_icon(); ?>" />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('URL for plugin menu icon', 'wp-video-coach'); ?> <span class="highlight">16 x 16 px</span></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>

                    </div><!--optiongroup-->
                    
                    <div class="optiongroup">
                        <h3><?php echo __('Language', 'wp-video-coach'); ?></h3>
                        <p><?php echo __('Select a language for the videos.', 'wp-video-coach'); ?></p>
                        <div class="optionleft">
                            <label for="wpvideocoach_language" class="nopointer"><?php echo __('Video language', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                        	<script type="text/javascript">
								<!-- Clears language-based text fields on language change-->
								function clearFields() {
									document.getElementById('introduction1').value = "";
									document.getElementById('introduction2').value = "";
									document.getElementById('cat0').value = "";
									document.getElementById('cat1').value = "";
									document.getElementById('cat2').value = "";
									document.getElementById('cat3').value = "";
									document.getElementById('cat4').value = "";
									document.getElementById('cat5').value = "";
									document.getElementById('cat6').value = "";
									document.getElementById('cat7').value = "";
									document.getElementById('cat8').value = "";
									document.getElementById('cat9').value = "";
									document.getElementById('cat10').value = "";
									document.getElementById('cat11').value = "";
									document.getElementById('toolbar1').value = "";
									document.getElementById('slider1').value = "";
									document.getElementById('slider2').value = "";
								}
							</script>
                            <select name="wpvideocoach_language" onchange='clearFields()'>
							<option value="english" <?php if (get_option('wpvideocoach_language')== 'english') echo 'selected="selected"'; ?>><?php echo __('English', 'wp-video-coach'); ?></option>
						</select>
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            
                        </div><!--optionlast-->
                        <div class="clear"></div>
                    </div><!--optiongroup-->
                    
                    <div class="optiongroup">
                        <h3><?php echo __('Introduction', 'wp-video-coach'); ?></h3>
                        <p><?php echo __('You can completely hide the introduction or personalize it for your clients, welcoming them to the video tutorial page.', 'wp-video-coach'); ?></p>
                        <div class="optionleft">
                            <label for="wpvideocoach_introduction" class="nopointer"><?php echo __('Introduction box', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                        	<input name="wpvideocoach_introduction" id="introduction-show" type="radio" value="0" onclick="document.getElementById('introduction1').disabled=false;document.getElementById('introduction2').disabled=false;" class="radiobutton" <?php echo wpvideocoach_show_introduction(); ?> /> <label for="introduction-show" class="radiobutton-label">Show</label>
                            <input name="wpvideocoach_introduction" id="introduction-hide" type="radio" value="1" onclick="document.getElementById('introduction1').disabled=true;document.getElementById('introduction2').disabled=true;" class="radiobutton" <?php echo wpvideocoach_hide_introduction(); ?> /> <label for="introduction-hide" class="radiobutton-label">Hide</label>
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_introduction_box_background_color" class="nopointer"><?php echo __('Introduction box background color', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="introduction5" name="wpvideocoach_introduction_box_background_color" value="<?php echo wpvideocoach_get_introduction_box_background_color(); ?>" class="wpvideocoach-color" data-default-color="#FFFFFF" />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_introduction_title" class="nopointer"><?php echo __('Introduction title', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="introduction1" name="wpvideocoach_introduction_title" value="<?php echo wpvideocoach_introduction_title(); ?>" <?php echo wpvideocoach_hide_introduction_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Say something like "Welcome Steven!"', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_introduction_title_color" class="nopointer"><?php echo __('Introduction title color', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="introduction3" name="wpvideocoach_introduction_title_color" value="<?php echo wpvideocoach_get_introduction_title_color(); ?>" class="wpvideocoach-color" data-default-color="#000" />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_introduction_text" class="nopointer"><?php echo __('Introduction text', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <textarea id="introduction2" name="wpvideocoach_introduction_text" <?php echo wpvideocoach_hide_introduction_disable_fields(); ?>><?php echo wpvideocoach_introduction_text(); ?></textarea>
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Detailed introduction for your client', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_introduction_text_color" class="nopointer"><?php echo __('Introduction text color', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="introduction5" name="wpvideocoach_introduction_text_color" value="<?php echo wpvideocoach_get_introduction_text_color(); ?>" class="wpvideocoach-color" data-default-color="#000" />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                    </div><!--optiongroup-->
                    
                    <div class="optiongroup">
                        <h3><?php echo __('Video Link', 'wp-video-coach'); ?></h3>
                        <p><?php echo __('You can change the colors of the video link.', 'wp-video-coach'); ?></p>
                        <div class="optionleft">
                            <label for="wpvideocoach_video_link_color" class="nopointer"><?php echo __('Video link color', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                        	<input type="text" id="wpvideocoach_video_link_color" name="wpvideocoach_video_link_color" value="<?php echo wpvideocoach_get_video_link_color(); ?>" class="wpvideocoach-color" data-default-color="#21759B" />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                        	
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_video_link_hover_color" class="nopointer"><?php echo __('Video link color on hover', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="wpvideocoach_video_link_hover_color" name="wpvideocoach_video_link_hover_color" value="<?php echo wpvideocoach_get_video_link_hover_color(); ?>" class="wpvideocoach-color" data-default-color="#0099D5" />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                    </div><!--optiongroup-->
                    
                    <div class="optiongroup">
                        <h3><?php echo __('Toolbar Link', 'wp-video-coach'); ?></h3>
                        <p><?php echo __('By default, the plugin will add a link to the admin toolbar, allowing your clients to easily reach the video page.', 'wp-video-coach'); ?></p>
                        <div class="optionleft">
                            <label for="wpvideocoach_toolbar_link" class="nopointer"><?php echo __('Toolbar link', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                        	<input name="wpvideocoach_toolbar_link" id="toolbar-show" type="radio" value="0" onclick="document.getElementById('toolbar1').disabled=false;" class="radiobutton" <?php echo wpvideocoach_show_toolbar_link(); ?> /> <label for="toolbar-show" class="radiobutton-label">Show</label>
                            <input name="wpvideocoach_toolbar_link" id="toolbar-hide" type="radio" value="1" onclick="document.getElementById('toolbar1').disabled=true;" class="radiobutton" <?php echo wpvideocoach_hide_toolbar_link(); ?> /> <label for="toolbar-hide" class="radiobutton-label">Hide</label>
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_toolbar_link_title" class="nopointer"><?php echo __('Toolbar link title', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="toolbar1" name="wpvideocoach_toolbar_link_title" value="<?php echo wpvideocoach_toolbar_link_title(); ?>" <?php echo wpvideocoach_hide_toolbar_disable_field(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Default: How to Videos', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                    </div><!--optiongroup-->
                    
                    <div class="optiongroup">
                        <h3><?php echo __('Help Tabs', 'wp-video-coach'); ?></h3>
                        <p><?php echo __('By default, the plugin will replace WordPress contextual help with an overview of relevant videos. You can also add your own support URL to be shown in the sidebar.', 'wp-video-coach'); ?></p>
                        <div class="optionleft">
                            <label for="wpvideocoach_help_tabs" class="nopointer"><?php echo __('Help tabs', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                        	<input name="wpvideocoach_help_tabs" id="help-tabs-show" type="radio" value="0" onclick="document.getElementById('support1').disabled=false;document.getElementById('support2').disabled=false;" class="radiobutton" <?php echo wpvideocoach_show_help_tabs(); ?> /> <label for="help-tabs-show" class="radiobutton-label">Show</label>
                            <input name="wpvideocoach_help_tabs" id="help-tabs-hide" type="radio" value="1" onclick="document.getElementById('support1').disabled=true;document.getElementById('support2').disabled=true;" class="radiobutton" <?php echo wpvideocoach_hide_help_tabs(); ?> /> <label for="help-tabs-hide" class="radiobutton-label">Hide</label>
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                        	
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_help_tabs_title" class="nopointer"><?php echo __('Your support page title', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="support1" name="wpvideocoach_help_tabs_title" value="<?php echo wpvideocoach_custom_support_title(); ?>" <?php echo wpvideocoach_hide_support_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_help_tabs_url" class="nopointer"><?php echo __('Your support page URL', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="support2" name="wpvideocoach_help_tabs_url" value="<?php echo wpvideocoach_custom_support_url(); ?>" <?php echo wpvideocoach_hide_support_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                    </div><!--optiongroup-->
                    
                    <div class="optiongroup">
                        <h3><?php echo __('Dashboard Slider', 'wp-video-coach'); ?></h3>
                        <p><?php echo __('By default, the plugin will create a dashboard slider, allowing your clients to watch videos straight from the dashboard.', 'wp-video-coach'); ?></p>
                        <div class="optionleft">
                            <label for="wpvideocoach_dashboard_slider" class="nopointer"><?php echo __('Dashboard slider', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                        	<input name="wpvideocoach_dashboard_slider" id="dashboard-slider-show" type="radio" value="0" onclick="document.getElementById('slider1').disabled=false;document.getElementById('slider2').disabled=false;" class="radiobutton" <?php echo wpvideocoach_show_dashboard_slider(); ?> /> <label for="dashboard-slider-show" class="radiobutton-label">Show</label>
                            <input name="wpvideocoach_dashboard_slider" id="dashboard-slider-hide" type="radio" value="1" onclick="document.getElementById('slider1').disabled=true;document.getElementById('slider2').disabled=true;" class="radiobutton" <?php echo wpvideocoach_hide_dashboard_slider(); ?> /> <label for="dashboard-slider-hide" class="radiobutton-label">Hide</label>
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_dashboard_slider_title" class="nopointer"><?php echo __('Dashboard slider title', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="slider1" name="wpvideocoach_dashboard_slider_title" value="<?php echo wpvideocoach_dashboard_slider_title(); ?>" <?php echo wpvideocoach_hide_dashboard_slider_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Default: How to Videos', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_dashboard_slider_introduction" class="nopointer"><?php echo __('Dashboard slider introduction', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <textarea id="slider2" name="wpvideocoach_dashboard_slider_introduction" <?php echo wpvideocoach_hide_dashboard_slider_disable_fields(); ?>><?php echo wpvideocoach_dashboard_slider_introduction(); ?></textarea>
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Detailed introduction for your client', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                    </div><!--optiongroup-->
                    
                    <div class="optiongroup">
                        <h3><?php echo __('Advanced', 'wp-video-coach'); ?></h3>
                        <p><?php echo __('How about adding your own content to the video tutorial page? I.e. you can add links to your own website, provide your clients with more information about your services or even promote other products. Simply enter your HTML in the Additional HTML box and it will appear right below the videos. If you are a designer guru, feel free to enter custom CSS to override the plugin CSS values.', 'wp-video-coach'); ?></p>
                        <div class="optionleft">
                            <label for="wpvideocoach_additional_html" class="nopointer"><?php echo __('Additional HTML', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <textarea name="wpvideocoach_additional_html"><?php echo wpvideocoach_additional_html(); ?></textarea>
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_custom_css" class="nopointer"><?php echo __('Custom CSS', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <textarea name="wpvideocoach_custom_css"><?php echo wpvideocoach_custom_css(); ?></textarea>
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                    </div><!--optiongroup-->
                
            	</div><!--wpvideocoach-customization-settings-tab-->
                
                <div id="wpvideocoach-categories-settings-tab" class="tabcontent">
                	<div class="optiongroup">
                        <h3><?php echo __('Video Categories', 'wp-video-coach'); ?></h3>
                        <p><?php echo __('You can completely hide all category titles or rename them if you feel it better suits your clients.', 'wp-video-coach'); ?></p>
                        <div class="optionleft">
                            <label for="wpvideocoach_categories"><?php echo __('Category titles', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                        	<input name="wpvideocoach_categories" id="categories-show" type="radio" value="0" onclick="<?php echo wpvideocoach_categories_enable_fields(); ?>" class="radiobutton" <?php echo wpvideocoach_show_categories(); ?> /> <label for="categories-show" class="radiobutton-label">Show</label>
                            <input name="wpvideocoach_categories" id="categories-hide" type="radio" value="1" onclick="<?php echo wpvideocoach_categories_disable_fields(); ?>" class="radiobutton" <?php echo wpvideocoach_hide_categories(); ?> /> <label for="categories-hide" class="radiobutton-label">Hide</label>
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_categories_color" class="nopointer"><?php echo __('Category titles color', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="cat_color" name="wpvideocoach_categories_color" value="<?php echo wpvideocoach_get_categories_color(); ?>" class="wpvideocoach-color" data-default-color="#000" />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_video_cat1" class="nopointer"><?php echo __('Rename category', 'wp-video-coach'); ?> <span class="highlight-custom">01</span></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="cat1" name="wpvideocoach_video_cat1" value="<?php echo wpvideocoach_video_category_one(); ?>" <?php echo wpvideocoach_hide_categories_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Default: Getting Started', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_video_cat2" class="nopointer"><?php echo __('Rename category', 'wp-video-coach'); ?> <span class="highlight-custom">02</span></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="cat2" name="wpvideocoach_video_cat2" value="<?php echo wpvideocoach_video_category_two(); ?>" <?php echo wpvideocoach_hide_categories_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Default: Publishing Content', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_video_cat3" class="nopointer"><?php echo __('Rename category', 'wp-video-coach'); ?> <span class="highlight-custom">03</span></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="cat3" name="wpvideocoach_video_cat3" value="<?php echo wpvideocoach_video_category_three(); ?>" <?php echo wpvideocoach_hide_categories_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Default: Organizing Content', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_video_cat4" class="nopointer"><?php echo __('Rename category', 'wp-video-coach'); ?> <span class="highlight-custom">04</span></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="cat4" name="wpvideocoach_video_cat4" value="<?php echo wpvideocoach_video_category_four(); ?>" <?php echo wpvideocoach_hide_categories_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Default: Organizing Discussion', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_video_cat5" class="nopointer"><?php echo __('Rename category', 'wp-video-coach'); ?> <span class="highlight-custom">05</span></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="cat5" name="wpvideocoach_video_cat5" value="<?php echo wpvideocoach_video_category_five(); ?>" <?php echo wpvideocoach_hide_categories_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Default: Changing Appearance', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_video_cat6" class="nopointer"><?php echo __('Rename category', 'wp-video-coach'); ?> <span class="highlight-custom">06</span></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="cat6" name="wpvideocoach_video_cat6" value="<?php echo wpvideocoach_video_category_six(); ?>" <?php echo wpvideocoach_hide_categories_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Default: User Management', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_video_cat7" class="nopointer"><?php echo __('Rename category', 'wp-video-coach'); ?> <span class="highlight-custom">07</span></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="cat7" name="wpvideocoach_video_cat7" value="<?php echo wpvideocoach_video_category_seven(); ?>" <?php echo wpvideocoach_hide_categories_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Default: Website Management', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_video_cat8" class="nopointer"><?php echo __('Rename category', 'wp-video-coach'); ?> <span class="highlight-custom">08</span></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="cat8" name="wpvideocoach_video_cat8" value="<?php echo wpvideocoach_video_category_eight(); ?>" <?php echo wpvideocoach_hide_categories_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Default: Quick Tips &amp; Tricks', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_video_cat9" class="nopointer"><?php echo __('Rename category', 'wp-video-coach'); ?> <span class="highlight-custom">09</span></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="cat9" name="wpvideocoach_video_cat9" value="<?php echo wpvideocoach_video_category_nine(); ?>" <?php echo wpvideocoach_hide_categories_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Default: WordPress SEO', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_video_cat10" class="nopointer"><?php echo __('Rename category', 'wp-video-coach'); ?> <span class="highlight-custom">10</span></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="cat10" name="wpvideocoach_video_cat10" value="<?php echo wpvideocoach_video_category_ten(); ?>" <?php echo wpvideocoach_hide_categories_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Default: NextGEN Gallery', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_video_cat11" class="nopointer"><?php echo __('Rename category', 'wp-video-coach'); ?> <span class="highlight-custom">11</span></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="cat11" name="wpvideocoach_video_cat11" value="<?php echo wpvideocoach_video_category_eleven(); ?>" <?php echo wpvideocoach_hide_categories_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Default: All in One SEO Pack', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_video_cat12" class="nopointer"><?php echo __('Rename category', 'wp-video-coach'); ?> <span class="highlight-custom">12</span></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="cat12" name="wpvideocoach_video_cat12" value="<?php echo wpvideocoach_video_category_twelve(); ?>" <?php echo wpvideocoach_hide_categories_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Default: Google XML Sitemaps', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_video_cat13" class="nopointer"><?php echo __('Rename category', 'wp-video-coach'); ?> <span class="highlight-custom">13</span></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="cat13" name="wpvideocoach_video_cat13" value="<?php echo wpvideocoach_video_category_thirteen(); ?>" <?php echo wpvideocoach_hide_categories_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Default: Contact Form 7', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                        
                        <div class="optionleft">
                            <label for="wpvideocoach_custom_videos_title" class="nopointer"><?php echo __('Custom videos title', 'wp-video-coach'); ?></label>
                        </div><!--optionleft-->
                        <div class="optionmiddle">
                            <input type="text" id="cat0" name="wpvideocoach_custom_videos_title" value="<?php echo wpvideocoach_custom_video_category(); ?>" <?php echo wpvideocoach_hide_categories_disable_fields(); ?> />
                        </div><!--optionmiddle-->
                        <div class="optionlast">
                            <p><?php echo __('Default: More Videos', 'wp-video-coach'); ?></p>
                        </div><!--optionlast-->
                        <div class="clear"></div>
                    </div><!--optiongroup-->
                </div><!--wpvideocoach-categories-settings-tab-->
                
                <div id="wpvideocoach-videos-settings-tab" class="tabcontent">
                	<div class="optiongroup">
                        <h3><?php echo __('Videos', 'wp-video-coach'); ?></h3>
                        <p><?php echo __('Depending on the way you have configured their installation, your clients may not use all the functionalities within WordPress. If this is the case, you can easily turn off individual videos here.', 'wp-video-coach'); ?></p>

                        <div class="optionfirst">
                            <input id="wpvideocoach_hide_cat1" type="checkbox" value="1" onclick="<?php echo wpvideocoach_display_check_one() ?>" <?php echo wpvideocoach_checked_one() ?> />
                            <label for="wpvideocoach_hide_cat1"><strong>Disable "Getting Started" category</strong></label>
                            <div class="clear"></div>
                            <?php echo wpvideocoach_hide_videos_one() ?>
                            
                            <br />
                            <input id="wpvideocoach_hide_cat2" type="checkbox" value="1" onclick="<?php echo wpvideocoach_display_check_two() ?>" <?php echo wpvideocoach_checked_two() ?> />
                            <label for="wpvideocoach_hide_cat2"><strong>Disable "Publishing Content" category</strong></label>
                            <div class="clear"></div>
                            <?php echo wpvideocoach_hide_videos_two() ?>
                            
                            <br />
                            <input id="wpvideocoach_hide_cat3" type="checkbox" value="1" onclick="<?php echo wpvideocoach_display_check_three() ?>" <?php echo wpvideocoach_checked_three() ?> />
                            <label for="wpvideocoach_hide_cat3"><strong>Disable "Organizing Content" category</strong></label>
                            <div class="clear"></div>
                            <?php echo wpvideocoach_hide_videos_three() ?>
                        </div><!--optionfirst-->
                        <div class="optionsecond">
                            <input id="wpvideocoach_hide_cat4" type="checkbox" value="1" onclick="<?php echo wpvideocoach_display_check_four() ?>" <?php echo wpvideocoach_checked_four() ?> />
                            <label for="wpvideocoach_hide_cat4"><strong>Disable "Organizing Discussion" category</strong></label>
                            <div class="clear"></div>
                            <?php echo wpvideocoach_hide_videos_four() ?>
                            
                            <br />
                            <input id="wpvideocoach_hide_cat5" type="checkbox" value="1" onclick="<?php echo wpvideocoach_display_check_five() ?>" <?php echo wpvideocoach_checked_five() ?> />
                            <label for="wpvideocoach_hide_cat5"><strong>Disable "Changing Appearance" category</strong></label>
                            <div class="clear"></div>
                            <?php echo wpvideocoach_hide_videos_five() ?>
                            
                            <br />
                            <input id="wpvideocoach_hide_cat6" type="checkbox" value="1" onclick="<?php echo wpvideocoach_display_check_six() ?>" <?php echo wpvideocoach_checked_six() ?> />
                            <label for="wpvideocoach_hide_cat6"><strong>Disable "User Management" category</strong></label>
                            <div class="clear"></div>
                            <?php echo wpvideocoach_hide_videos_six() ?>
                            
                            <br />
                            <input id="wpvideocoach_hide_cat7" type="checkbox" value="1" onclick="<?php echo wpvideocoach_display_check_seven() ?>" <?php echo wpvideocoach_checked_seven() ?> />
                            <label for="wpvideocoach_hide_cat7"><strong>Disable "Website Management" category</strong></label>
                            <div class="clear"></div>
                            <?php echo wpvideocoach_hide_videos_seven() ?>
                            
                            <br />
                            <input id="wpvideocoach_hide_cat8" type="checkbox" value="1" onclick="<?php echo wpvideocoach_display_check_eight() ?>" <?php echo wpvideocoach_checked_eight() ?> />
                            <label for="wpvideocoach_hide_cat8"><strong>Disable "Quick Tips &amp; Tricks" category</strong></label>
                            <div class="clear"></div>
                            <?php echo wpvideocoach_hide_videos_eight() ?>
                        </div><!--optionsecond-->
                        <div class="optionthird">
                            <input id="wpvideocoach_hide_cat9" type="checkbox" value="1" onclick="<?php echo wpvideocoach_display_check_nine() ?>" <?php echo wpvideocoach_checked_nine() ?> />
                            <label for="wpvideocoach_hide_cat9"><strong>Disable "WordPress SEO" category</strong></label>
                            <div class="clear"></div>
                            <?php echo wpvideocoach_hide_videos_nine() ?>
                            
                            <br />
                            <input id="wpvideocoach_hide_cat10" type="checkbox" value="1" onclick="<?php echo wpvideocoach_display_check_ten() ?>" <?php echo wpvideocoach_checked_ten() ?> />
                            <label for="wpvideocoach_hide_cat10"><strong>Disable "NextGEN Gallery" category</strong></label>
                            <div class="clear"></div>
                            <?php echo wpvideocoach_hide_videos_ten() ?>
                            
                            <br />
                            <input id="wpvideocoach_hide_cat11" type="checkbox" value="1" onclick="<?php echo wpvideocoach_display_check_eleven() ?>" <?php echo wpvideocoach_checked_eleven() ?> />
                            <label for="wpvideocoach_hide_cat11"><strong>Disable "All in One SEO" category</strong></label>
                            <div class="clear"></div>
                            <?php echo wpvideocoach_hide_videos_eleven() ?>
                            
                            <br />
                            <input id="wpvideocoach_hide_cat12" type="checkbox" value="1" onclick="<?php echo wpvideocoach_display_check_twelve() ?>" <?php echo wpvideocoach_checked_twelve() ?> />
                            <label for="wpvideocoach_hide_cat12"><strong>Disable "Google XML Sitemaps" category</strong></label>
                            <div class="clear"></div>
                            <?php echo wpvideocoach_hide_videos_twelve() ?>
                            
                            <br />
                            <input id="wpvideocoach_hide_cat13" type="checkbox" value="1" onclick="<?php echo wpvideocoach_display_check_thirteen() ?>" <?php echo wpvideocoach_checked_thirteen() ?> />
                            <label for="wpvideocoach_hide_cat13"><strong>Disable "Contact Form 7" category</strong></label>
                            <div class="clear"></div>
                            <?php echo wpvideocoach_hide_videos_thirteen() ?>
                        </div><!--optionthird-->
                        <div class="clear"></div>
                    </div><!--optiongroup-->
                
                </div><!--wpvideocoach-videos-settings-tab-->
                
                <div id="wpvideocoach-thumbnails-settings-tab" class="tabcontent">
                	<div class="optiongroup">
                        <h3><?php echo __('Video Thumbnails', 'wp-video-coach'); ?></h3>
                        <p class="nounderline"><?php echo __('You can easily change the video thumbnails in order to match icon colors to your own icon.', 'wp-video-coach'); ?>
                        <!--Icons8/VisualFarm allowed the use of video icons with link on Settings Page: @https://getsatisfaction.com/icons8/topics/use_on_wordpress_plugin-->
                        <a href="http://www.icons8.com" target="_blank"><?php echo __('Video icons by Icon8.com', 'wp-video-coach'); ?></a>.</p>
                        
                        <div id="thumbs-en">
                            <div class="thumb1">
                                <div class="radiocontainer">
                                    <input name="wpvideocoach_thumbnails" type="radio" id="thumb0" value="0" <?php if (get_option('wpvideocoach_thumbnails')== '') echo 'checked="checked"';if (get_option('wpvideocoach_thumbnails')== '0') echo 'checked="checked"'; ?> />
                                </div><!--radiocontainer-->
                                <label for="thumb0"><img src="<?php echo plugins_url(); ?>/wp-video-coach/thumbnails/0/preview.jpg" /></label>
                                <p><?php echo __('White', 'wp-video-coach'); ?></p>
                            </div><!--thumb1-->
                            <div class="thumb2">
                                <div class="radiocontainer">
                                    <input name="wpvideocoach_thumbnails" type="radio" id="thumb1" value="1" <?php if (get_option('wpvideocoach_thumbnails')== '1') echo 'checked="checked"'; ?> />
                                </div><!--radiocontainer-->
                                <label for="thumb1"><img src="<?php echo plugins_url(); ?>/wp-video-coach/thumbnails/1/preview.jpg" /></label>
                                <p><?php echo __('Blue', 'wp-video-coach'); ?></p>
                            </div><!--thumb2-->
                            <div class="thumb3">
                                <div class="radiocontainer">
                                    <input name="wpvideocoach_thumbnails" type="radio" id="thumb2" value="2" <?php if (get_option('wpvideocoach_thumbnails')== '2') echo 'checked="checked"'; ?> />
                                </div><!--radiocontainer-->
                                <label for="thumb2"><img src="<?php echo plugins_url(); ?>/wp-video-coach/thumbnails/2/preview.jpg" /></label>
                                <p><?php echo __('Red', 'wp-video-coach'); ?></p>
                            </div><!--thumb3-->
                            <div class="thumb4">
                                <div class="radiocontainer">
                                    <input name="wpvideocoach_thumbnails" type="radio" id="thumb3" value="3" <?php if (get_option('wpvideocoach_thumbnails')== '3') echo 'checked="checked"'; ?> />
                                </div><!--radiocontainer-->
                                <label for="thumb3"><img src="<?php echo plugins_url(); ?>/wp-video-coach/thumbnails/3/preview.jpg" /></label>
                                <p><?php echo __('Green', 'wp-video-coach'); ?></p>
                            </div><!--thumb4-->
                            <div class="thumb5">
                                <div class="radiocontainer">
                                    <input name="wpvideocoach_thumbnails" type="radio" id="thumb4" value="4" <?php if (get_option('wpvideocoach_thumbnails')== '4') echo 'checked="checked"'; ?> />
                                </div><!--radiocontainer-->
                                <label for="thumb4"><img src="<?php echo plugins_url(); ?>/wp-video-coach/thumbnails/4/preview.jpg" /></label>
                                <p><?php echo __('Yellow', 'wp-video-coach'); ?></p>
                            </div><!--thumb5-->
                            <div class="clear"></div>
                        </div><!--thumbs-en-->
                        
                        <h3><?php echo __('Custom Thumbnails', 'wp-video-coach'); ?></h3>
                        
                        <div class="custom-thumb-left">
                            <input name="wpvideocoach_thumbnails" type="radio" id="thumbcustom" value="custom" <?php if (get_option('wpvideocoach_thumbnails')== 'custom') echo 'checked="checked"'; ?> />
                        </div><!--custom-thumb-left-->
                        <div class="custom-thumb-middle">
                            <label for="thumbcustom"><?php echo __('Use custom thumbnails', 'wp-video-coach'); ?></label>
                        </div><!--custom-thumb-middle-->
                        <div class="custom-thumb-right">
                            <p><?php echo __('You can even create your own video thumbnails to strengthen your brand identity. Before selecting this option, create video thumbnails for all videos. Make sure that the width of the images is', 'wp-video-coach'); ?> <span class="highlight">215 px</span>.</p>
                            <p><a onclick="wpvideocoach_show_video_titles()" class="how-to-name"><?php echo __('How to name the images', 'wp-video-coach'); ?></a></p>
                            <script type="text/javascript">
                                function wpvideocoach_show_video_titles() {
                                    // Get the DOM reference
                                    var contentId = document.getElementById("how-to-name-images");
                                    // Toggle 
                                    contentId.style.display == "block" ? contentId.style.display = "none" : 
                                    contentId.style.display = "block"; 
                                }
                            </script>
                            <div id="how-to-name-images" style="display:none;">
                                <div id="how-to-name-images-left">
                                    <ul>
                                        <li><span class="highlight">001.jpg</span> <?php echo __('A Quick Introduction', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">002.jpg</span> <?php echo __('How to Use the Admin Toolbar', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">003.jpg</span> <?php echo __('How to Customize the Work Area', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">004.jpg</span> <?php echo __('Posts Versus Pages', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">005.jpg</span> <?php echo __('How to Add a New Post', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">006.jpg</span> <?php echo __('How to Edit or Delete a Post', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">007.jpg</span> <?php echo __('How to Add a New Page', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">008.jpg</span> <?php echo __('How to Edit or Delete a Page', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">009.jpg</span> <?php echo __('How to Format Text', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">010.jpg</span> <?php echo __('How to Publish in Text Editor', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">011.jpg</span> <?php echo __('How to Use the More Tag', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">012.jpg</span> <?php echo __('How to Use Excerpts', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">013.jpg</span> <?php echo __('How to Use QuickPress', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">014.jpg</span> <?php echo __('How to Schedule Posts and Pages', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">015.jpg</span> <?php echo __('How to Add Images', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">016.jpg</span> <?php echo __('How to Edit Images', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">017.jpg</span> <?php echo __('How to Use Featured Images', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">018.jpg</span> <?php echo __('How to Add Videos', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">019.jpg</span> <?php echo __('How to Add Media Files', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">020.jpg</span> <?php echo __('How to Undo Changes', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">021.jpg</span> <?php echo __('How to Restore Autosaves', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">022.jpg</span> <?php echo __('How to Publish via Email', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">023.jpg</span> <?php echo __('How to Use PressThis', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">024.jpg</span> <?php echo __('How to Manage Categories', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">025.jpg</span> <?php echo __('How to Manage Tags', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">026.jpg</span> <?php echo __('How to Set Up a Homepage', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">027.jpg</span> <?php echo __('How to Set Up Permalinks', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">028.jpg</span> <?php echo __('How to Manage Comments', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">029.jpg</span> <?php echo __('How to Disable Comments', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">030.jpg</span> <?php echo __('How to Prevent Comment Spam', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">031.jpg</span> <?php echo __('How to Change Comment Settings', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">032.jpg</span> <?php echo __('How to Change the Theme', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">033.jpg</span> <?php echo __('How to Use Widgets', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">034.jpg</span> <?php echo __('How to Create a Custom Menu', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">035.jpg</span> <?php echo __('How to Use Plugins', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">036.jpg</span> <?php echo __('Understanding User Permissions', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">037.jpg</span> <?php echo __('How to Create a User', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">038.jpg</span> <?php echo __('How to Edit or Delete a User', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">039.jpg</span> <?php echo __('How to Edit Your Profile', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">040.jpg</span> <?php echo __('How to Create an Avatar', 'wp-video-coach'); ?></li>
                                    </ul>
                                </div><!--how-to-name-images-left-->
                                <div id="how-to-name-images-right">
                                    <ul>
                                        <li><span class="highlight">041.jpg</span> <?php echo __('How to Change Settings', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">042.jpg</span> <?php echo __('How to Import Data', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">043.jpg</span> <?php echo __('How to Export Data', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">044.jpg</span> <?php echo __('How to Update WordPress', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">045.jpg</span> <?php echo __('How to Update Themes and Plugins', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">046.jpg</span> <?php echo __('How to Add a Hyperlink', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">047.jpg</span> <?php echo __('How to Upload a Clickable PDF', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">048.jpg</span> <?php echo __('How to Paste Content from MS Word', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">049.jpg</span> <?php echo __('How to Edit the URL', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">050.jpg</span> <?php echo __('How to Make a Post Sticky', 'wp-video-coach'); ?></li>
                                    </ul>
                                    <ul>
                                        <li><span class="highlight">101.jpg</span> <?php echo __('How to Install WordPress SEO', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">102.jpg</span> <?php echo __('How to Change SEO Settings', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">103.jpg</span> <?php echo __('How to Manage SEO Options', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">104.jpg</span> <?php echo __('How to Change Social Settings', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">105.jpg</span> <?php echo __('How to Create an XML Sitemap', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">106.jpg</span> <?php echo __('How to Change Permalink Settings', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">107.jpg</span> <?php echo __('How to Enable Breadcrumbs', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">108.jpg</span> <?php echo __('How to Change RSS Settings', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">109.jpg</span> <?php echo __('How to Import and Export Data', 'wp-video-coach'); ?></li>
                                    </ul>
                                    <ul>
                                        <li><span class="highlight">121.jpg</span> <?php echo __('How to Install NextGEN Gallery', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">122.jpg</span> <?php echo __('How to Create a Gallery', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">123.jpg</span> <?php echo __('How to Publish a Gallery', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">124.jpg</span> <?php echo __('How to Create an Album', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">125.jpg</span> <?php echo __('How to Manage Image Tags', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">126.jpg</span> <?php echo __('How to Change Gallery Settings', 'wp-video-coach'); ?></li>
                                    </ul>
                                    <ul>
                                        <li><span class="highlight">131.jpg</span> <?php echo __('How to Install All in One SEO Pack', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">132.jpg</span> <?php echo __('How to Manage SEO Settings', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">133.jpg</span> <?php echo __('How to Change SEO Options', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">134.jpg</span> <?php echo __('How to Build an XML Sitemap', 'wp-video-coach'); ?></li>
                                    </ul>
                                    <ul>
                                        <li><span class="highlight">141.jpg</span> <?php echo __('How to Install Google XML Sitemaps', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">142.jpg</span> <?php echo __('How to Generate an XML Sitemap', 'wp-video-coach'); ?></li>
                                    </ul>
                                    <ul>
                                        <li><span class="highlight">151.jpg</span> <?php echo __('How to Install Contact Form 7', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">152.jpg</span> <?php echo __('How to Create a New Form', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">153.jpg</span> <?php echo __('How to Edit or Delete a Form', 'wp-video-coach'); ?></li>
                                    </ul>
                                    <ul>
                                        <li><span class="highlight">901.jpg</span> <?php echo __('How to Set Up WP Video Coach*', 'wp-video-coach'); ?></li>
                                        <li><span class="highlight">902.jpg</span> <?php echo __('How to Unlock the Videos*', 'wp-video-coach'); ?></li>
                                    </ul>
                                    <p>* These videos appear in the Help tabs of WP Video Coach pages only.</p>
                                </div><!--how-to-name-images-right-->
                                <div class="clear"></div>
                            </div><!--how-to-name-images-->
                            <p><?php echo __('Upload your images to', 'wp-video-coach'); ?> <span class="highlight">wp-content/plugins/wp-video-coach/thumbnails/custom/</span> <?php echo __('folder, then select this option.', 'wp-video-coach'); ?></p>
                        </div><!--custom-thumb-right-->
                        <div class="clear"></div>
                    </div><!--optiongroup-->
                </div><!--wpvideocoach-thumbnails-settings-tab-->
                
                <div id="wpvideocoach-custom-videos-settings-tab" class="tabcontent">
                	<div class="optiongroup">
                        <h3><?php echo __('Custom Videos', 'wp-video-coach'); ?></h3>
                        <p><?php echo __('Add your own videos to the video tutorial page. Simply enter a title and URL for each video and your custom videos will appear alongside our videos.', 'wp-video-coach'); ?></p>
                        <?php echo wpvideocoach_show_custom_videos_fields(); ?>
                        
                        <div id="more-custom-videos" style="display:none;">
                        	<?php echo wpvideocoach_show_more_custom_videos_fields(); ?>
                        </div><!--more-custom-videos-->
                        <div id="add-custom-button">
                            <input type="button" class="add-custom-videos" value="<?php echo __('Show More', 'wp-video-coach'); ?>" onclick="wpvideocoach_show_more_custom_videos()" />
                            <script type="text/javascript">
                                function wpvideocoach_show_more_custom_videos() {
                                    document.getElementById('more-custom-videos').style.display = "block";
                                }
                            </script>
                        </div><!--add-custom-button-->
                    </div><!--optiongroup-->
                </div><!--wpvideocoach-custom-videos-settings-tab-->
                
                <script type="text/javascript">
						var wpthumbs=new ddtabcontent("wpvideocoach-menu-tabs") //enter ID of Tab Container
						wpthumbs.setpersist(true) //toogle persistence of the tabs' state
						wpthumbs.setselectedClassTarget("link") //"link" or "linkparent"
						wpthumbs.init()
				</script>
                
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
                
            </div><!--options-container-->
            

<?php }

function wpvideocoach_main_page() {
	
	{ ?>
    <div class="wrap">
		<h2><?php echo wpvideocoach_custom_title(); ?></h2>
    </div><!--wrap-->
    
    <div id="videocoach">
    	<?php 
		echo wpvideocoach_video_link_color();
		echo wpvideocoach_add_custom_css();
        echo wpvideocoach_display_introduction();
        echo wpvideocoach_show_video_category_one();
        echo wpvideocoach_show_video_category_two();
        echo wpvideocoach_show_video_category_three();
        echo wpvideocoach_show_video_category_four();
        echo wpvideocoach_show_video_category_five();
		echo wpvideocoach_show_video_category_six();
		echo wpvideocoach_show_video_category_seven();
		echo wpvideocoach_show_video_category_eight();
		echo wpvideocoach_show_video_category_nine();
		echo wpvideocoach_show_video_category_ten();
		echo wpvideocoach_show_video_category_eleven();
		echo wpvideocoach_show_video_category_twelve();
		echo wpvideocoach_show_video_category_thirteen();
        echo wpvideocoach_show_custom_video_category();
        echo wpvideocoach_add_additional_html();
		?>
	</div><!--videocoach-->

<?php }


} ?>