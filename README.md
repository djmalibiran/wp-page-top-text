# WP Page Top Text
A simple WordPress plugin that adds a customizable text area above all pages.

## Description
This plugin registers a new section in the WordPress customizer that allows the admin to enter text that will be displayed at the top of all pages.

The admin can customize:

- Page top text
- Background color
- Text color

This creates a nice way to add announcements, notifications, or other bits of textsite-wide.

The output is added via the wp_body_open hook. Text and color values are properly escaped for security.

## Features
- Adds new section to customizer for entering page top text
- Option to set background and text color
- Textarea input validated and sanitized
- Output escaped to prevent XSS issues
- Simple lightweight plugin

This plugin makes customizing a global site-wide text block simple and easy. Great for notifications, announcements, or general text.

## How to Install?
Download the plugin as zip file and install it on your WordPress site.

## Change Text
 To change the text, text color, and background color, go to Dashboard > Appearance > Customize > Page Top Text. Customize the settings and click save changes.