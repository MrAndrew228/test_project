<?php


if (!function_exists('custom_pagination')) :
	function custom_pagination($pages = '', $range = 2)
	{
		global $paged;
		global $wp_query;

		$showitems = ($range * 2) + 1;
		if (empty($paged)) $paged = 1;

		if ($pages == '') {
			$pages = $wp_query->max_num_pages;
			if (!$pages) {
				$pages = 1;
			}
		}

		if ($pages != 1) {
			echo "<ul class=\"pagination-list\">";
			if ($paged != 1) {
				echo '<li class="prev-pag""> <a class="pagination-link--wide first" href="' . get_pagenum_link($paged - 1) . '"></a> </li>';
			}

			for ($i = 1; $i <= $pages; $i++) {
				if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
					$active = ($paged == $i) ? "active" : "";
					$first = ($i == 1) ? "first-number" : "";
					echo '<li class="decor-li ' . $active . ' ' . $first . '"> <a class="pagination-link" href="' . get_pagenum_link($i) . '">' . $i . '</a> </li>';
				}
			}

			if ($paged != $pages) {
				echo '<li class="next-pag"> <a class="pagination-link--wide last" href="' . get_pagenum_link($paged + 1) . '"></a> </li>';
			}
			echo "</ul>";
		}
	}
endif;

function register_my_cpts_events()
{

	/**
	 * Post Type: Events.
	 */

	$labels = [
		"name" => __("Events", "text_project"),
		"singular_name" => __("Event", "text_project"),
		"menu_name" => __("Events", "text_project"),
	];

	$args = [
		"label" => __("Events", "text_project"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "events", "with_front" => true],
		"query_var" => true,
		"supports" => ["title", "editor", "thumbnail", "excerpt", "custom-fields"],
	];

	register_post_type("events", $args);
}

add_action('init', 'register_my_cpts_events');



if (function_exists('add_theme_support')) {
	// Add Menu Support
	add_theme_support('menus');

	// Add Thumbnail Theme Support
	add_theme_support('post-thumbnails');
}