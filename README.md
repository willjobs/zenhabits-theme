# zenhabits-theme (zh2.1)
A fork of the "zh2" theme by Leo Babauta of Zen Habits. Includes responsive layout and font size and improvements to functionality.

No copyright.

Original theme at: https://zenhabits.net/theme/ (archive: https://web.archive.org/web/20161229052432/http://zenhabits.net/theme/)
Original install instructions: https://zenhabits.net/install/ (archive: https://web.archive.org/web/20170110012614/http://zenhabits.net/install/)

First commit is the original zh2 theme. Second commit is the forked/updated theme.

Demo: http://willjobs.net/blog

Screenshots: http://imgur.com/a/50ceV

# Author Notes
* In addition to the changes listed below, I use the Jetpack plugin with "tiled galleries", "photon", and "carousel" enabled for pretty presentation of image galleries
* To include youtube videos in a post that resize based on window size, copy the embed code from youtube (don't just paste a link to a youtube video), and edit the embed code to remove the height and width attributes. They are defined in style.css

# List of changes:
## CSS
- changed from spaces to tabs
- removed padding from main container
- changed fonts and line heights to use vmin units to allow text to resize with different windows sizes (with em units as fallback)
- increased opacity of headings
- swapped colors of links in post text to make it lighter than regular body text, and change to dark on hover, to make it more visually distinguishable

## Archives
- removed Search
- added quotes around class names (typo in original)
- added indicator of when a post is updated, after the post title (e.g., "Title title title (Updated: 01.13.2017)")

## Header
- changed viewport to allow user to zoom in and out on page (for mobile devices) with range of scale from 0.25 to 12
- changed link to favicon to look one directory up from blog directory instead of looking in the same directory as the blog. This assumes blog is a subdirectory of the root directory; e.g., willjobs.net/blog.
- changed header links to have one link to go to blog home, and one link to go to site home (e.g., willjobs.net/blog and willjobs.net, respectively)

## Navigation (new)
- moved post date into this, and added code to include when post was updated (in addition to original publish date)
- included a link to the previous post (if it exists) and the next post (if it exists) in the format
	&laquo; Previous post: Title
	Next post: Title &raquo;

## Footer
- removed the subscribe links and footer links
- added a "Back to Home" link for blogs that are hosted as a subdirectory (e.g., willjobs.net/blog); the link will take you back to the root directory (e.g., willjobs.net)

## Index
- added link to navigation template part

## Single
- added link to navigation template part at top of post
- removed code to allow user comments
