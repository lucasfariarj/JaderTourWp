<?php

//Clear header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

//Remove menus contents
function remover_do_menu(){
    remove_menu_page( 'edit-comments.php' );
}

add_action( 'admin_menu', 'remover_do_menu' );

//Include custom menu
add_theme_support('menus');

function custom_post_type_services() {

	/**
	 * Post Type: Services.
	 */

	$labels = [
		"name" => __( "Serviços", "custom-post-type-ui" ),
		"singular_name" => __( "serviço", "custom-post-type-ui" ),
		"menu_name" => __( "Meus Serviços", "custom-post-type-ui" ),
		"all_items" => __( "Todos os Serviços", "custom-post-type-ui" ),
		"add_new" => __( "Adicionar Novo", "custom-post-type-ui" ),
		"add_new_item" => __( "Adicionar novo serviço", "custom-post-type-ui" ),
		"edit_item" => __( "Editar serviço", "custom-post-type-ui" ),
		"new_item" => __( "Novo serviço", "custom-post-type-ui" ),
		"view_item" => __( "Ver serviço", "custom-post-type-ui" ),
		"view_items" => __( "Ver serviços", "custom-post-type-ui" ),
		"search_items" => __( "Procurar meus serviços", "custom-post-type-ui" ),
		"not_found" => __( "Nenhum serviço encontrado", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "Nenhum serviço encontrado na lixeira", "custom-post-type-ui" ),
		"parent" => __( "Serviço ascendente", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Serviço ascendente", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Serviços", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "Lista de serviços oferecidos por você",
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
		"rewrite" => [ "slug" => "servicos", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-camera-alt",
		"supports" => [ "title", "editor" ],
		"taxonomies" => [ "cidades" ],
		"show_in_graphql" => false,
	];

	register_post_type( "servicos", $args );
}

add_action( 'init', 'custom_post_type_services' );


function custom_poost_type_taxonomy() {

	/**
	 * Taxonomy: Cities
	 */

	$labels = [
		"name" => __( "Cidades", "custom-post-type-taxonomy" ),
		"singular_name" => __( "cidade", "custom-post-type-taxonomy" ),
		"menu_name" => __( "Cidades Disponíveis", "custom-post-type-taxonomy" ),
	];

	
	$args = [
		"label" => __( "Cidades", "custom-post-type-taxonomy" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'cidades', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "cidades",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "cidades", [ "servicos" ], $args );
}
add_action( 'init', 'custom_poost_type_taxonomy' );











?>