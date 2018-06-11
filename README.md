# Wordpress-Countdown-Shortcode-Plugin
Plugin for Wordpress to add countdown shortcodes using moment.js library

# Installation instructions

1. Add the functions.php code to your theme's functions.php
2. Add moment.js to your theme's /js folder

# Usage

Use `[countdown date="XX/XX/XXXX"]` shortcode anywhere in your pages, posts and widget text.

`date` is a required parameter.

Example:

`[countdown date="1/1/2020"]` will appear as `in 3 years`

# Known issues

Only supports one countdown displayed right now.

# To-do

1. Package as a proper Wordpress plugin
2. Investigate adding to Wordpress.org's plugin hosting and library
