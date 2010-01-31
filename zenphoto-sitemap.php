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

// Output content type and charset
header('Content-Type: text/xml;charset=utf-8');

// Output XML file headers
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<urlset xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\" xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";

// End off the <urlset> tag
echo '</urlset>';

// Stop execution of the rest of Zenphoto
exit();