=== TMT Deal Posts ===
Contributors: alan
Tags: custom-post-type, deals
Requires at least: 3.0
Tested up to: 3.6
Stable tag: 01
License: GPLv2 or later

Deal Posts enables the custom post type "Deals".

== Description ==

Deal Posts enables the custom post type "Deals".

== Installation ==


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
register_post_type( $post_type, $args ) http://codex.wordpress.org/Function_Reference/register_post_type
get_post_types( $args, $output, $operator ) http://codex.wordpress.org/Function_Reference/get_post_types