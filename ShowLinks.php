<?php
/**
 * @package Show_Links
 * @version 1.0
 */
/*
Plugin Name: Show Links
Plugin URI: http://oxo.nu/tag/showlinks
Description: Show links added with the dashboard using a shortcode [showlinks] in posts.
Author: Niklas Rydén
Version: 1.0
Author URI: http://kafit.se/
*/

function showlinksfunc($slparams) {
    $parameters = 'title_li=&categorize=0';
    if (isset($slparams['category_name'])) { 
	$parameters = $parameters.'&category_name='.$slparams['category_name'];
    }
    wp_list_bookmarks($parameters);
}

add_shortcode('showlinks', 'showlinksfunc');

?>
