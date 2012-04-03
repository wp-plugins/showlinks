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

function showlinksfunc() {
    wp_list_bookmarks('title_li=&categorize=0');
}

add_shortcode('showlinks', 'showlinksfunc');

?>
