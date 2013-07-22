<?php
/*
Plugin Name: Google Analytics Visits by PepLamb
Plugin URI: http://peplamb.com/google-analytics-visits/
Description: <a href="http://peplamb.com/google-analytics-visits/" target="_blank">Google Analytics Visits</a> by <strong><a href="http://peplamb.com/" target="_blank">PepLamb</a></strong>! This plugin uses Google Analytics API to fetch data from your analytics account and displays user visits from each country in the widget. You will have to enter the account details in the options page <i>Google Analytics Visits</i>. Please <strong><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=TV873GDVX3MQC&lc=US&item_name=PepLamb&item_number=Google%20Analytics%20Visits&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">donate</a></strong> to encourage us make more innovative plugins as this, thank you for your support!
Version: 1.1.1
Author: PepLamb
Author URI: http://peplamb.com/
*/
/*  Copyright 2009  PepLamb  (email : contact@peplamb.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
class GoogleAnalyticsVisits extends WP_Widget {

    function GoogleAnalyticsVisits() {
        $widget_ops = array('classname' => 'widget_text', 'description' => __('Google Analytics Visits by PepLamb'));
        $control_ops = array('width' => 400, 'height' => 350);
        $this->WP_Widget('GoogleAnalyticsVisits', __('Google Analytics Visits'), $widget_ops, $control_ops);
    }

    function widget( $args, $instance ) {
        extract($args);
        $title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
        echo $before_widget;
        if ( !empty( $title ) ) {
            echo $before_title . $title . $after_title;
        }
        ?>
            <div class="GoogleAnalyticsVisits"><?php GoogleAnalyticsVisits_print(); ?></div>
        <?php
        echo $after_widget;
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;
    }

    function form( $instance ) {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
        $title = strip_tags($instance['title']);
?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

        <p>
            <center>If you like this widget and find it useful, help keep this plugin free and actively developed by clicking the donate button<br />
                <?php GoogleAnalyticsVisits_donate(); ?>
            </center>
        </p>
<?php
    }
}
function GoogleAnalyticsVisitsInit() {
    register_widget('GoogleAnalyticsVisits');
}

add_action('widgets_init', 'GoogleAnalyticsVisitsInit');

if($_POST['Submit'] == "Save") {
    $expire = mktime(date("H"), date("i"), date("s"), date("m")  , date("d"), date("Y")) + (60 * $_POST['GoogleAnalyticsVisits_cacheExpiresMinutes']);
    $now    = mktime(date("H"), date("i"), date("s"), date("m")  , date("d"), date("Y"));
    if(
        (
            $_POST['GoogleAnalyticsVisits_cacheEnable'] == 'yes' || 
            get_option('GoogleAnalyticsVisits_cacheEnable')             != $_POST['GoogleAnalyticsVisits_cacheEnable']
        )
        &&
        (
            get_option('GoogleAnalyticsVisits_displayVisits')           != $_POST['GoogleAnalyticsVisits_displayVisits'] ||
            get_option('GoogleAnalyticsVisits_displayTotalVisits')      != $_POST['GoogleAnalyticsVisits_displayTotalVisits'] ||
            get_option('GoogleAnalyticsVisits_displayPageviews')        != $_POST['GoogleAnalyticsVisits_displayPageviews'] ||
            get_option('GoogleAnalyticsVisits_displayTotalPageviews')   != $_POST['GoogleAnalyticsVisits_displayTotalPageviews'] ||
            get_option('GoogleAnalyticsVisits_maxResults')              != $_POST['GoogleAnalyticsVisits_maxResults'] ||
            get_option('GoogleAnalyticsVisits_cacheExpires')            <= $now
        )
    ) {
        update_option('GoogleAnalyticsVisits_cache',                GoogleAnalyticsVisits_widget_output());
    }

    update_option('GoogleAnalyticsVisits_username'  ,               $_POST['GoogleAnalyticsVisits_username']);
    if($_POST['GoogleAnalyticsVisits_password'])
        update_option('GoogleAnalyticsVisits_password',             $_POST['GoogleAnalyticsVisits_password']);
    update_option('GoogleAnalyticsVisits_profileID' ,               $_POST['GoogleAnalyticsVisits_profileID']);
    
    update_option('GoogleAnalyticsVisits_maxResults',               $_POST['GoogleAnalyticsVisits_maxResults']);

    update_option('GoogleAnalyticsVisits_cacheEnable',              $_POST['GoogleAnalyticsVisits_cacheEnable']);
    
    update_option('GoogleAnalyticsVisits_cacheExpiresMinutes',      $_POST['GoogleAnalyticsVisits_cacheExpiresMinutes']);
    
    update_option('GoogleAnalyticsVisits_cacheExpires',             $expire);

    update_option('GoogleAnalyticsVisits_displayVisits' ,           $_POST['GoogleAnalyticsVisits_displayVisits']);
    update_option('GoogleAnalyticsVisits_displayTotalVisits',       $_POST['GoogleAnalyticsVisits_displayTotalVisits']);
    update_option('GoogleAnalyticsVisits_displayPageviews' ,        $_POST['GoogleAnalyticsVisits_displayPageviews']);
    update_option('GoogleAnalyticsVisits_displayTotalPageviews',    $_POST['GoogleAnalyticsVisits_displayTotalPageviews']);
}

function GoogleAnalyticsVisits_donate() {
?>
    <a target="_blank" title="Donate" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=TV873GDVX3MQC&lc=US&item_name=PepLamb&item_number=Google%20Analytics%20Visits&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted">
        <img src="<?php echo WP_PLUGIN_URL; ?>/google-analytics-visits/images/donate.jpg" alt="Donate with Paypal" />
    </a>
<?php
}

function GoogleAnalyticsVisits_activate() {
    if(!get_option('GoogleAnalyticsVisits_maxResults'))
        add_option('GoogleAnalyticsVisits_maxResults', '10');
        
    if(!get_option('GoogleAnalyticsVisits_cacheEnable'))
        add_option('GoogleAnalyticsVisits_cacheEnable', 'yes');
    if(!get_option('GoogleAnalyticsVisits_cacheExpiresMinutes'))
        add_option('GoogleAnalyticsVisits_cacheExpiresMinutes', '60');

    if(!get_option('GoogleAnalyticsVisits_displayVisits'))
        add_option('GoogleAnalyticsVisits_displayVisits', 'yes');
    if(!get_option('GoogleAnalyticsVisits_displayTotalVisits'))
        add_option('GoogleAnalyticsVisits_displayTotalVisits', 'yes');
    if(!get_option('GoogleAnalyticsVisits_displayPageviews'))
        add_option('GoogleAnalyticsVisits_displayPageviews', 'yes');
    if(!get_option('GoogleAnalyticsVisits_displayTotalPageviews'))
        add_option('GoogleAnalyticsVisits_displayTotalPageviews', 'yes');
}
function GoogleAnalyticsVisits_deactivate() {
}
register_activation_hook( __FILE__, 'GoogleAnalyticsVisits_activate');
register_deactivation_hook( __FILE__, 'GoogleAnalyticsVisits_deactivate' );

function GoogleAnalyticsVisits_options() {
?>
<div class="wrap">
    <div class="icon32" id="icon-options-general"><br/></div>
    <h2>Google Analytics Visits Options</h2>
    <p>by <strong><a href="http://peplamb.com/" target="_blank">PepLamb</a></strong></p>

    <div style="width:400px;">
        <div style="float:left;background-color:white;padding: 10px 10px 10px 10px;margin-right:15px;border: 1px solid #ddd;">
            <div style="width:350px;height:130px;">
                <h3>Donate</h3>
                <em>If you like this plugin and find it useful, help keep this plugin free and actively developed by clicking the <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=TV873GDVX3MQC&lc=US&item_name=PepLamb&item_number=Google%20Analytics%20Visits&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank"><strong>donate</strong></a> button.  Also, don't forget to follow us on <a href="http://twitter.com/peplamb/" target="_blank"><strong>Twitter</strong></a>.</em>
            </div>
            <a target="_blank" title="Donate" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=TV873GDVX3MQC&lc=US&item_name=PepLamb&item_number=Google%20Analytics%20Visits&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted">
                <img src="<?php echo WP_PLUGIN_URL; ?>/google-analytics-visits/images/donate.jpg" alt="Donate with Paypal" />
            </a>

            <a target="_blank" title="Follow us on Twitter" href="http://twitter.com/peplamb/">
                <img src="<?php echo WP_PLUGIN_URL; ?>/google-analytics-visits/images/twitter.jpg" alt="Follow Us on Twitter" />
            </a>
        </div>
    </div>
    <div style="clear:both";></div>

    <form method="post">
        <table class="form-table">
            <tbody>
                <tr valign="top">
                    <th scope="row"><label for="GoogleAnalyticsVisits_username">Username:</label></th>
                    <td>
                        <input type="text" class="regular-text" value="<?php echo get_option('GoogleAnalyticsVisits_username'); ?>" name="GoogleAnalyticsVisits_username"/>
                        <span class="setting-description"></span>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="GoogleAnalyticsVisits_password">Password:</label></th>
                    <td>
                        <input type="password" class="regular-text" value="" name="GoogleAnalyticsVisits_password"/><br />
                        <span class="setting-description"><?php echo get_option('GoogleAnalyticsVisits_password')?"Password is protected or re-enter password to change!":""; ?></span>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="GoogleAnalyticsVisits_profileID">Profile ID:</label></th>
                    <td>
                        <input type="text" class="regular-text" value="<?php echo get_option('GoogleAnalyticsVisits_profileID'); ?>" name="GoogleAnalyticsVisits_profileID"/>
                        <span class="setting-description"></span>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="GoogleAnalyticsVisits_maxResults">Max Results:</label></th>
                    <td>
                        <input type="text" class="small-text" value="<?php echo get_option('GoogleAnalyticsVisits_maxResults'); ?>" name="GoogleAnalyticsVisits_maxResults"/>
                        <span class="setting-description">Example: 10 or 15 or 20 etc</span>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="GoogleAnalyticsVisits_cacheEnable">Enable Cache?</label></th>
                    <td>
                        <fieldset><legend class="hidden">Enable Cache?</legend>
                            <input type="radio" <?php echo get_option('GoogleAnalyticsVisits_cacheEnable')=='yes'   ?'checked="checked"':''; ?> value="yes" name="GoogleAnalyticsVisits_cacheEnable"/> Yes
                            <input type="radio" <?php echo get_option('GoogleAnalyticsVisits_cacheEnable')=='no'    ?'checked="checked"':''; ?> value="no"  name="GoogleAnalyticsVisits_cacheEnable"/> No
                        </fieldset>
                        <span class="setting-description"></span>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="GoogleAnalyticsVisits_cacheExpiresMinutes">If Cache Enabled, Cache Expires in :</label></th>
                    <td>
                        <input type="text" class="small-text" value="<?php echo get_option('GoogleAnalyticsVisits_cacheExpiresMinutes'); ?>" name="GoogleAnalyticsVisits_cacheExpiresMinutes"/> Minutes<br />
                        <span class="setting-description">Example: 30 or 60 (for 1 hour) or 1440 (60 minutes x 24 hours = 1440 minutes for 1 day) etc</span>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="GoogleAnalyticsVisits_displayVisits">Display Visits?</label></th>
                    <td>
                        <fieldset><legend class="hidden">Display Visits?</legend>
                            <input type="radio" <?php echo get_option('GoogleAnalyticsVisits_displayVisits')=='yes'   ?'checked="checked"':''; ?> value="yes" name="GoogleAnalyticsVisits_displayVisits"/> Yes
                            <input type="radio" <?php echo get_option('GoogleAnalyticsVisits_displayVisits')=='no'    ?'checked="checked"':''; ?> value="no"  name="GoogleAnalyticsVisits_displayVisits"/> No
                        </fieldset>
                        <span class="setting-description"></span>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="GoogleAnalyticsVisits_displayTotalVisits">Display Total Visits?</label></th>
                    <td>
                        <fieldset><legend class="hidden">Display Visits?</legend>
                            <input type="radio" <?php echo get_option('GoogleAnalyticsVisits_displayTotalVisits')=='yes'   ?'checked="checked"':''; ?> value="yes" name="GoogleAnalyticsVisits_displayTotalVisits"/> Yes
                            <input type="radio" <?php echo get_option('GoogleAnalyticsVisits_displayTotalVisits')=='no'    ?'checked="checked"':''; ?> value="no"  name="GoogleAnalyticsVisits_displayTotalVisits"/> No
                        </fieldset>
                        <span class="setting-description"></span>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="GoogleAnalyticsVisits_displayPageviews">Display Pageviews?</label></th>
                    <td>
                        <fieldset><legend class="hidden">Display Pageviews?</legend>
                            <input type="radio" <?php echo get_option('GoogleAnalyticsVisits_displayPageviews')=='yes'   ?'checked="checked"':''; ?> value="yes" name="GoogleAnalyticsVisits_displayPageviews"/> Yes
                            <input type="radio" <?php echo get_option('GoogleAnalyticsVisits_displayPageviews')=='no'    ?'checked="checked"':''; ?> value="no"  name="GoogleAnalyticsVisits_displayPageviews"/> No
                        </fieldset>
                        <span class="setting-description"></span>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="GoogleAnalyticsVisits_displayTotalPageviews">Display Total Pageviews?</label></th>
                    <td>
                        <fieldset><legend class="hidden">Display Total Pageviews?</legend>
                            <input type="radio" <?php echo get_option('GoogleAnalyticsVisits_displayTotalPageviews')=='yes'   ?'checked="checked"':''; ?> value="yes" name="GoogleAnalyticsVisits_displayTotalPageviews"/> Yes
                            <input type="radio" <?php echo get_option('GoogleAnalyticsVisits_displayTotalPageviews')=='no'    ?'checked="checked"':''; ?> value="no"  name="GoogleAnalyticsVisits_displayTotalPageviews"/> No
                        </fieldset>
                        <span class="setting-description"></span>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="submit">
            <input type="submit" value="Save" class="button-primary" name="Submit"/>
        </p>
    </form>
    <div style="float:left;">
        <h3>Preview</h3>
        <?php GoogleAnalyticsVisits_print() ?>
    </div>
<?php
}
function GoogleAnalyticsVisits_menu() {
    add_options_page('Google Analytics Visits', 'Google Analytics Visits', 8, __FILE__, 'GoogleAnalyticsVisits_options');
}
add_action('admin_menu', 'GoogleAnalyticsVisits_menu');

function GoogleAnalyticsVisits_print() {
    $GAV_cEn = get_option('GoogleAnalyticsVisits_cacheEnable');
    $GAV_cEM = get_option('GoogleAnalyticsVisits_cacheExpiresMinutes');
    $GAV_cEx = get_option('GoogleAnalyticsVisits_cacheExpires');
    $GAV_che = get_option('GoogleAnalyticsVisits_cache');

    if(!function_exists('wp_cache_get'))
        include (ABSPATH.'wp-includes/cache.php');
    
    if($GAV_cEn == 'yes') {
        $now = mktime(date("H"), date("i"), date("s"), date("m")  , date("d"), date("Y"));
        if(!$GAV_che) {
            $expire = $now + (60 * $GAV_cEM);
            update_option('GoogleAnalyticsVisits_cacheExpires',  $expire);
            update_option('GoogleAnalyticsVisits_cache',  GoogleAnalyticsVisits_widget_output());
            $output = get_option('GoogleAnalyticsVisits_cache');
        }
        else if($now > $GAV_cEx) {
            $expire = $now + (60 * $GAV_cEM);
            update_option('GoogleAnalyticsVisits_cacheExpires',  $expire);
            update_option('GoogleAnalyticsVisits_cache',  GoogleAnalyticsVisits_widget_output());
            $output = get_option('GoogleAnalyticsVisits_cache');
        }
        else
            $output = get_option('GoogleAnalyticsVisits_cache');
    }
    else {
        $output = GoogleAnalyticsVisits_widget_output();
    }
/*
    if($GAV_cEn == 'yes') {
        $output = wp_cache_get('GoogleAnalyticsVisits_settings', 'GoogleAnalyticsVisits_cache');
        if($output == false) {
            $output = GoogleAnalyticsVisits_widget_output()."<br />CACHE DOEN'T EXIST SO CREATED";
            $expire = 60 * $GAV_cEx;
            echo "Expire: ".$expire."<br />";
            echo "Time Now: ".mktime(date("H"), date("i"), date("s"), date("m")  , date("d"), date("Y"))."<br ?>";
            wp_cache_set('GoogleAnalyticsVisits_settings', $output, 'GoogleAnalyticsVisits_cache', $expire);
        }
    }
    else
        $output = GoogleAnalyticsVisits_widget_output()."<br />NOT FROM CACHE";
*/
    
    echo $output;
}
function GoogleAnalyticsVisits_widget_output() {
    $GAV_usr = get_option('GoogleAnalyticsVisits_username');
    $GAV_pwd = get_option('GoogleAnalyticsVisits_password');
    $GAV_pID = get_option('GoogleAnalyticsVisits_profileID');
    
    $GAV_mRs = get_option('GoogleAnalyticsVisits_maxResults');
    
    define('ga_email',      $GAV_usr);
    define('ga_password',   $GAV_pwd);
    define('ga_profile_id', $GAV_pID);
    
    if(!ga_email || !ga_password || !ga_profile_id) {
        echo "<b>Google Analytics Visits Error</b>: please enter your account details in the options page.";
        return;
    }

    if(!class_exists('gapi'))
        require 'gapi.class.php';
    
    $ga = new gapi(ga_email, ga_password);
    $ga->requestReportData(ga_profile_id, array('country'), array('visits', 'pageviews'), '-visits', null, null, null, null, $GAV_mRs);
    
    $GAV_dVs = get_option('GoogleAnalyticsVisits_displayVisits');
    $GAV_dTVs= get_option('GoogleAnalyticsVisits_displayTotalVisits');
    $GAV_dPv = get_option('GoogleAnalyticsVisits_displayPageviews');
    $GAV_dTPv= get_option('GoogleAnalyticsVisits_displayTotalPageviews');

    $output = '<table class="GoogleAnalyticsVisits_table">';
    $output .= '    <tr class="GoogleAnalyticsVisits_tr">'."\n";
    $output .= '        <th class="GoogleAnalyticsVisits_th_country">Country</th>'."\n";
    if($GAV_dVs == 'yes')
        $output .= '        <th class="GoogleAnalyticsVisits_th_visits"><span class="GoogleAnalyticsVisits_th_span" title="Visits in percentage">V (%)<span></th>'."\n";
    if($GAV_dPv == 'yes')
        $output .= '        <th class="GoogleAnalyticsVisits_th_pageviews"><span class="GoogleAnalyticsVisits_th_span" title="Pageviews in percentage">PV (%)<span></th>'."\n";
    $output .= '    </tr>'."\n";
    foreach($ga->getResults() as $result) {
        $output .= '    <tr class="GoogleAnalyticsVisits_tr">'."\n";
        $output .= '        <td class="GoogleAnalyticsVisits_td_country">'.($result->getCountry()).'</td>'."\n";
        if($GAV_dVs == 'yes')
            $output .= '        <td class="GoogleAnalyticsVisits_td_visits">'.(round(($result->getVisits() * 100) / $ga->getVisits(), 0)).'</td>'."\n";
        if($GAV_dPv == 'yes')
            $output .= '        <td class="GoogleAnalyticsVisits_td_pageview">'.(round(($result->getPageviews() * 100) / $ga->getPageviews(), 0)).'</td>'."\n";
        $output .= '    </tr>'."\n";
    }
    $output .= '</table>'."\n";
    
    $output .= '<table class="GoogleAnalyticsVisits_table">'."\n";
    
    $output .= '    <tr class="GoogleAnalyticsVisits_tr">'."\n";
    $output .= '        <th class="GoogleAnalyticsVisits_th">Total Countries:</th>'."\n";
    $output .= '        <td class="GoogleAnalyticsVisits_td">'.$ga->getTotalResults().'</td>'."\n";
    $output .= '    </tr>'."\n";
    
    if($GAV_dTVs == 'yes') {
        $output .= '    <tr class="GoogleAnalyticsVisits_tr">'."\n";
        $output .= '        <th class="GoogleAnalyticsVisits_th">Total Visits:</th>'."\n";
        $output .= '        <td class="GoogleAnalyticsVisits_td">'.$ga->getVisits().'</td>'."\n";
        $output .= '    </tr>'."\n";
    }
    
    if($GAV_dTPv == 'yes') {
        $output .= '    <tr class="GoogleAnalyticsVisits_tr">'."\n";
        $output .= '        <th class="GoogleAnalyticsVisits_th">Total Pageviews:</th>'."\n";
        $output .= '        <td class="GoogleAnalyticsVisits_td">'.$ga->getPageviews().'</td>'."\n";
        $output .= '    </tr>'."\n";
    }
    
    $output .= '</table>'."\n<!-- Google Analytics Visits by PepLamb (PepLamb.com) -->";
    
    return $output;
}
?>