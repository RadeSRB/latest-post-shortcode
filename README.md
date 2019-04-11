# latest-post-shortcode
Simple shortcode for WordPress for latest post with featured images and excerpt

WordPress Gutenberg team will add 'this' functionality to Latest Posts block, but until they do so I have created simple shortcode

Usage [sh_latest_posts total="3" per_line="3"]
  - total parameter sets limit for number of posts, if left unset it will default to 3
  - per_line sets class for styling post-columns-$number, if left unset it will default to 3
