# latest-post-shortcode
Simple shortcode for WordPress for latest post with featured images and excerpt

WordPress Gutenberg team will add 'this' functionality to Latest Posts block, but until they do so I have created simple shortcode

Usage: 
  - Just copy from functions.php in to theme functions.php and edit if needed.
  - Add shortcode in editor [sh_latest_posts total="3" per_line="3"] or use echo do_shortcode('[sh_latest_posts total="3" per_line="3"]') on page template.

Shortcode parameters: 
  - total parameter sets limit for number of posts, if left unset it will default to 3
  - per_line sets class for styling post-columns-$number, if left unset it will default to 3


I just hope that this helps :)
