=== TMT Deal Posts ===
Contributors: alan
Tags: custom-post-type, deals
Requires at least: 3.0
Tested up to: 3.6
Stable tag: 01
License: GPLv2 or later

Deal Posts enables the custom post type "Deals".

== Description ==
User Stories: https://trello.com/b/XsZ4mXhM/tjd-plugin
Deal Posts enables the custom post type "Deals".

== Installation ==
Wordpress <http://wordpress.org/latest.tar.gz>

Clone this repo in wordpress/wp-content/plugins/tmt-deal-post .

Plug-ins:
	advanced-custom-fields <http://www.advancedcustomfields.com/>
	acf flexible content field <http://download.advancedcustomfields.com/FC9O-H6VN-E4CL-LT33/trunk/>
Theme:
	tjd-theme <https://github.com/igelman/tjd-theme.git>


== Changelog ==

== Development ==

Set up phpunit for Wordpress.
http://stackoverflow.com/questions/9138215/unit-testing-wordpress-plugins
In brief:
1. Install wordpress-tests somewhere outside the htmldocs path (I use ~/src/) with command "git clone https://github.com/nb/wordpress-tests.git".
2. Create database wordpress-tests.
3. Copy sample config and edit db settings in unittests-config.php.
4. Edit $path in ./tests/boostrap.php

== References ==
http://justintadlock.com/archives/2010/04/29/custom-post-types-in-wordpress
Cheatsheet https://gist.github.com/justintadlock/6552000
Metabox: http://wp.tutsplus.com/tutorials/plugins/how-to-create-custom-wordpress-writemeta-boxes/

WordPress Code
register_post_type( $post_type, $args ) http://codex.wordpress.org/Function_Reference/register_post_type
get_post_types( $args, $output, $operator ) http://codex.wordpress.org/Function_Reference/get_post_types

PHPUnit
http://www.maxcutler.com/2012/06/30/wordpress-unit-tests-sprint-a-primer/

== Requirements ==
As end user, I want to read the following content:
	Title
	Details
	Coupon code
	Deal expiration
	Image
	Links

As producer, I want to program the following metacontent:
	Post available date
	Post expiration date
	Main link
	Merchant
	Product types (clothing/shoes, clothing/dresses, electronics/laptops, ...)
	Deal type (coupon, sale, ...)
	Content types (featured, todays tips, listings, ...)