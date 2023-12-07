=== Page Top Text ===
Contributors: darylmalibiran, darell1130
Donate link: https://www.paypal.com/paypalme/DarylMalibiran
Tags: announcement, notification, banner, bar, top
Requires at least: 5.2
Tested up to: 6.4.2
Stable tag: 1.2.0
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A simple WordPress plugin that adds a customizable text area above all pages.

== Description ==

This plugin registers a new section in the WordPress customizer that allows the admin to enter text that will be displayed at the top of all pages.

The admin can customize:

* Page top text
* Background color
* Text color

This creates a nice way to add announcements, notifications, or other bits of textsite-wide.

The output is added via the `wp_body_open hook`. Text and color values are properly escaped for security.

## Features

* Adds new section to customizer for entering page top text
* Option to set background and text color
* Textarea input validated and sanitized
* Output escaped to prevent XSS issues
* Simple lightweight plugin

This plugin makes customizing a global site-wide text block simple and easy. Great for notifications, announcements, or general text.

== Frequently Asked Questions ==

= How to Install? =

Download the plugin as zip file or from WordPress Plugin Directory and install it on your WordPress site.

= How to add or edit the text? =

To change the text, text color, and background color, go to Dashboard > Appearance > Customize > Page Top Text. Customize the settings and click save changes.

== Screenshots ==

1. Live preview of Page Top Text settings on Customizer page.

== Changelog ==

= 1.2.0 =
* Enhanced code formatting to adhere to WordPress PHP Coding Standards.
* Prepared plugin for submission to the WordPress Plugin Directory.

= 1.1.0 =
* Improved security measures and implemented uninstall hooks.

= 1.0.0 =
* Initial release of the plugin, made it publicly available.