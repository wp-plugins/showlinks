<?php
/**
 * @package Show_Links
 * @version 1.02
 */
/*
Plugin Name: Show Links
Plugin URI: http://oxo.nu/tag/showlinks
Description: Show links added with the dashboard using a shortcode [showlinks] in posts.
Author: Niklas Rydén
Version: 1.02
Author URI: http://kafit.se/
*/

function showlinksfunc($slparams) {
//  The line below is only for debugging while coding...you can delete it if it bothers you.
//    printf('<pre>');print_r($slparams);printf('</pre>');

    // The base parameters we want to use...
    $parameters = 'title_li=&categorize=0&echo=0';

    // Comma-separated ID-list
    if (isset($slparams['category'])) { $parameters = $parameters.'&category='.$slparams['category']; }

    // The actual category name...yes...it's kind of...stupid...need to change this to permalink somehow to avoid melt down.
    if (isset($slparams['category_name'])) { $parameters = $parameters.'&category_name='.$slparams['category_name']; }

    // 1 = true (default), 0 = false
    if (isset($slparams['show_images'])) { $parameters = $parameters.'&show_images='.$slparams['show_images']; }

    // 1 = true, 0 = false (default)   Only needed when using images.
    if (isset($slparams['show_name'])) { $parameters = $parameters.'&show_name='.$slparams['show_name']; }

    // 1 = true, 0 = false (default)
    if (isset($slparams['show_description'])) { $parameters = $parameters.'&show_description='.$slparams['show_description']; }

    return wp_list_bookmarks($parameters);
}

add_shortcode('showlinks', 'showlinksfunc');

?>
