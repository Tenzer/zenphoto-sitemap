<?php

/**
 * Generates a sitemap.org compatible XML file, for use with Google and other search engines.
 *
 * Renders the sitemap if a gallery page is called with "?sitemap" in the URL.
 *
 * @author Jeppe Toustrup (Tenzer)
 * @version 2
 * @package plugins
 */

$plugin_description = 'Here goes some description about zenphoto-sitemap';
$plugin_author = 'Jeppe Toustrup (Tenzer)';
$plugin_version = '2';
$plugin_URL = 'http://tenzer.dk/open-source/zenphoto-sitemap';

// Check if '?sitemap' is specified. If it isn't then we should stop execution of this script.
if(!isset($_GET['sitemap'])) {
	return;
}

/**
 * Simple helper function which simply outputs a string and ends it of with a new-line.
 * @param  $string The string to output
 * @return void
 */
function echonl($string) {
	echo($string . "\n");
}

// Output content type and charset
header('Content-Type: text/xml;charset=utf-8');

// Output XML file headers
echonl('<?xml version="1.0" encoding="UTF-8"?>');
echonl('<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">');

// End off the <urlset> tag
echonl('</urlset>');

// Stop execution of the rest of Zenphoto
exit();