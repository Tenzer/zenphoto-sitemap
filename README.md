Zenphoto-sitemap
================
This is a plugin for [Zenphoto][1] which generates a [sitemaps.org][2]
compatible sitemap for the gallery, when the gallery is accessed with `?sitemap`
in the URL. The sitemap contains links to all public and non-password protected
albums and images within Zenphoto.

The sitemap creates URLs depending on whether [`mod_rewrite`][3] is enabled or
not, so you still will get those nice clean links from the search engines that
we all like, even if this plugin is enabled.


Installation
------------
The installation procedure for this plugin is really simple:

1.  Place `zenphoto-sitemap.php` inside the `plugins/` folder of your Zenphoto
    installation.
2.  Activate the plugin from the Zenphoto administration panel, under the
    *Plugins* tab.
3.  Verify that you are shown an XML file when browsing
    `[your gallery URL]/?sitemap`.

That's it, then you are free to submit the address to search engines such as
[Google][4], [Bing][5] and so on.


Robots.txt
----------
Consider adding a reference to the sitemap to the galleries `robots.txt` file
located in the root of your Zenphoto installation. That will make search engines
able to find the sitemap on their own, if they are able to follow such
references.
Simply add the line `Sitemap: [your gallery link]/?sitemap` to the beginning of
`robots.txt`, and you are done.


Bug reports and feature requests
--------------------------------
You are of course welcome to post bug reports and feature requests for this
plugin, this should either be on the [GitHub issue tracker][6], or as a comment
on my [blog][7].


Contributers
------------
Malte Müller (acrylian)


- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -


Changelog
---------

### 1.0.0 - 2008-11-26 ###
* Initial version

### 1.0.1 - 2009-01-24 ###
* Removed the `<priority>` tag from the root page, since it didn't do any good
  and generated an error message from Google.
* Added header information to be sent out with the sitemap. (Thank you Adrien
  Gibrat)

### 1.0.2 - 2009-02-26 ###
* Made handling of non-alphanumeric characters correct, so they will be URL
  encoded. (Thank you 'suxab' for reporting this)

### 2.0.0 - 2010-02-19 ###
* Revamp of the entire code - Now one big sitemap is generated instead of one
  index which then points to a sitemap for each gallery. This will decrease the
  amount of SQL queries and HTTP requests needed, all in all making the plugin
  more eco friendly ;)


[1]: http://www.zenphoto.org/
[2]: http://sitemaps.org/
[3]: http://en.wikipedia.org/wiki/Rewrite_engine
[4]: http://www.google.com/support/webmasters/bin/answer.py?hl=en&answer=34609
[5]: http://www.bing.com/toolbox/posts/archive/2009/10/09/submit-a-sitemap-to-bing.aspx
[6]: http://github.com/Tenzer/zenphoto-sitemap/issues
[7]: http://tenzer.dk/
