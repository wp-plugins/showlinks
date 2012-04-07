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
//    printf('<pre>');print_r($slparams);printf('</pre>');
    $parameters = 'title_li=&categorize=0';
    if (isset($slparams['category_name'])) { 
	$parameters = $parameters.'&category_name='.$slparams['category_name'];
        printf('<pre>');print_r('AAAAAAAAAAAAAAAAAAAAAAAA');printf('</pre>');
    } else {
//	$parameters = $parameters.'&categorize=0';
    }
    wp_list_bookmarks($parameters);
}

add_shortcode('showlinks', 'showlinksfunc');

?>
