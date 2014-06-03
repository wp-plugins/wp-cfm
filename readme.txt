=== WP-CFM ===
Contributors: mgibbs189
Donate link: http://forumone.com/
Tags: configuration, settings, configuration management, features
Requires at least: 3.9
Tested up to: 3.9.1
Stable tag: trunk
License: GPL2

WP-CFM: Configuration Management for WordPress

== Description ==

Deploying database changes in WordPress is hard, especially when working on teams with multiple developers. This project aims at solving this problem by storing database configuration in the filesystem. It's like Drupal's "Features" module for WordPress.

[See Screenshot](http://i.imgur.com/opQhDUa.png)

= Documentation =
[GitHub](http://forumone.github.io/wp-cfm/)

== Installation ==

1. Download and activate the plugin.
2. Browse to `Settings > WP-CFM` to configure.

== Changelog ==

= 1.0.3 =
* Added relative plugin URL (props @tormjens)
* Added subtle admin screen animations
* Better file error handling
* CFS integration - each field group now has its own configuration item
* Added `wpcfm_pull_callback` filter
* Moved the "all" bundle handler from the ajax class to readwrite

= 1.0.2 =
* Fix: error when Custom Field Suite isn't active

= 1.0.1 =
* Custom Field Suite integration