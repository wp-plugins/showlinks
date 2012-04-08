=== Show Links ===
Contributors: niry
Author URI: http://www.kafit.se/
Plugin URI: http://oxo.nu/tag/showlinks
Donate link:
Tags: admin, plugin, links, shortcode
Requires at least: 2.1
Tested up to: 3.3.1
Stable tag: 1.01

A small plugin whose only purpose is to show links added with the Dashboard, using a shortcode.

== Description ==
A small plugin whose only purpose is to show links added with the Dashboard, using a shortcode.

== Installation ==
Place showlinks.php the plugin directory, activate it in the Dashboard, add the short code [showlinks] to any page or post.

Available parameters:
* category=<comma-separated ID-list> // Cannot be used along with category name
* category_name="<category title>" // Cannot be used along with category
* show_images=1 or 0 (1=true (default), 0=false)
* show_name=1 or 0 (1=true, 0=false (default)) // Only active when picture is set for link
* show_description=1 or 0 (1=true, 0=false (default)

Examples:
* To show category ID's 2 and 5 along with the description
* [showlinks category=2,5 show_description=1]

* To show link category "Räksmörgås" (Yes, this is some what stupid when using characters like this... use ID's instead if possible.)
* [showlink category_name="Räksmörgås"]

* Done!

== Changelog ==

= 1.0 =
* We removed all the code written when I was overthinking and left one line...

= 1.01 =
* Added the options category, category_name, show_images, show_name and show_description.

== Upgrade Notice ==

= 1.01 =
Added a few of the parameters available with wp_list_bookmarks, if you want to limit or enhance the output in some way you want this upgrade.
