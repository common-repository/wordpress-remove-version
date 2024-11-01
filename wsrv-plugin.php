<?php
/*
Plugin Name: Wordpress Remove Version
Author: Jearvon Dharrie
Version: 1.0
Author: <a href="http://jearvondharrie.com">Jearvon Dharrie</a>
Description: Wordpress Secure Remove Version safely and securely removes the version number from the head of the site and the rss feed using the_generator filter.
*/

//function returns an empty string which repalces the version number
function wpsrv()
{
	return '';
}

add_filter('the_generator', 'wpsrv');

