<?php

$plugin_description = 'Here goes some description about zenphoto-sitemap';
$plugin_author = 'Jeppe Toustrup';
$plugin_version = '2';
$plugin_URL = 'http://tenzer.dk/open-source/zenphoto-sitemap';

# Check if '?sitemap' is specified. If it isn't then we should stop execution of this script.
if(!isset($_GET['sitemap'])) {
	return;
}

