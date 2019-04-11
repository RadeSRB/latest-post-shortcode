<?php
function sh_add_latest_posts($atts = null) { 
	global $post;

	$a = shortcode_atts( array(
		'total' => 3,
		'per_line' => 3
	), $atts );

	if($a['total'] != 0) {
		$args = array('posts_per_page' => $a['total']);
	} else {
		$args = array('posts_per_page' => 3);
	}
	

	$getPosts = get_posts($args);
	
	$html = '<div class="post-items post-columns-' . $a['per_line'] . '">';
	foreach ( $getPosts as $post ) {
		$title = get_the_title();
		$link = get_the_permalink();
		if(get_comments_number() == 0) {
			$comments = 'No Comments';
		} else {
			$comments = get_comments_number();
		}
		$excerpt = get_the_excerpt();

		$html .= '<div class="post-item">';			

			$html .= '<a href="' . $link . '">';
			if (has_post_thumbnail()) {				
				$post_thumbnail_id = get_post_thumbnail_id($post);
				$imgLink = wp_get_attachment_image_url($post_thumbnail_id, 'news-thumbnail');

				$html .= '<figure class="wp-block-image">';
					$html .= '<img src="' . $imgLink . '" alt="' . $title . '">';
				$html .= '</figure>';
			} else {
				$html .= '<figure class="wp-block-image">';
					$html .= '<img src="' . get_template_directory_uri() . '/img/placeholder.jpg" alt="' . $title . '">';
				$html .= '</figure>';
			}
			$html .= '</a>';

			$html .= '<a href="' . $link . '">';
				$html .= '<h2 class="post-title">' . $title . '</h2>';
			$html .= '</a>';

			$html .= '<p class="light-text">' . get_the_date() . ' - ' . $comments . '</p>';

			$html .= '<p class="post-excerpt">' . $excerpt . '</p>';

			$html .= '<a href="' . $link . '" class="orange-link">Read More &#187;</a>';

		$html .= '</div>';
	}
	$html .= '</div>';
	wp_reset_postdata();
	return $html;
}
add_shortcode( 'sh_latest_posts', 'sh_add_latest_posts' );
