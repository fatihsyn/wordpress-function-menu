<?php
//Menu Area
function functionname()
{
	$supports = array(
		'title',
		'operation',
		'excerpt',
		'post-formats',
		'page-attributes'
	);
	$labels = array(
		'name' => _x('MenuName', 'plural'),
		'singular_name' => _x('Menu Name', 'singular'),
		'menu_name' => _x('Menu Name', 'admin menu'),
		'name_admin_bar' => _x('Menu Name', 'admin bar'),
		'add_new' => _x('Add İtems', 'add new'),
		'add_new_item' => __('Add İtems'),
		'new_item' => __('Add İtems'),
		'edit_item' => __('Edit'),
		'view_item' => __('Show'),
		'all_items' => __('All Name'),
		'search_items' => __('Search'),
		'not_found' => __('Not Found.'),
	);
	$args = array(
		'supports' => $supports,
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'show_in_admin_bar'   => false
	);
	register_post_type('functionname', $args);
	register_taxonomy_for_object_type('category', 'page');
}
add_action('init', 'functionname');

//Site Show Area

function FunctionNames($atts = array())
{
	$args = array(
		'post_type' => 'MenuName',
		'posts_per_page' => isset($atts["limit"]) ?: 10, // OTO LİMİT limit="20"
		'orderby'           => 'meta_value ID',
		'order'             => 'ASC'
	);
	$q = new WP_Query($args);
	$why = '';
	if (count($q->posts)) {
		foreach ($q->posts as $i => $WHY) {
      $why .= 'FOREACH';
		};
	}

  $mes = '//HTML AREA START//
        '.$why.'
  			//HTML AREA STOP//
';
	return $mes;
}
add_shortcode('functionname', 'functionnames');
 ?>
