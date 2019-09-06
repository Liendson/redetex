<?php
add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {
	$labels = array(
		"name" => "Destaques",
		"singular_name" => "",
		);

	$args = array(
		"labels"              => $labels,
		"description"         => "",
		"public"              => true,
		"show_ui"             => true,
		"show_in_rest"        => false,
		"has_archive"         => false,
		"show_in_menu"        => true,
		"exclude_from_search" => false,
		"capability_type"     => "post",
		"map_meta_cap"        => true,
		"hierarchical"        => false,
		"rewrite"             => array( "slug" => "destaques", "with_front" => true ),
		"query_var"           => true,
				
		"supports" => array( "title", "revisions", "thumbnail", "author" ),				
	);
	register_post_type( "destaques", $args );

	$labels = array(
		"name" => "Publicidades",
		"singular_name" => "Publicidade",
		);

	$args = array(
		"labels"        	    => $labels,
		"description" 		    => "",
		"public" 			    => true,
		"show_ui" 			    => true,
		"show_in_rest" 		 => false,
		"has_archive"    	    => false,
		"show_in_menu" 		 => true,
		"exclude_from_search" => false,
		"capability_type" 	 => "post",
		"map_meta_cap" 		 => true,
		"hierarchical" 		 => false,
		"rewrite" 			    => array( "slug" => "publicidade", "with_front" => true ),
		"query_var"           => true,
		"supports"            => array( "title", "thumbnail", "author" ),				
	);
	register_post_type("publicidade", $args);

	$labels = array(
		"name"          => "Chamadas da Página Inicial",
		"singular_name" => "Chamada da Página Inicial",
		);

	$args = array(
		"labels"              => $labels,
		"description" 		    => "",
		"public"              => true,
		"show_ui"             => true,
		"show_in_rest"        => false,
		"has_archive"         => false,
		"show_in_menu"        => true,
		"exclude_from_search" => false,
		"capability_type"     => "post",
		"map_meta_cap"        => true,
		"hierarchical"        => false,
		"rewrite"             => array("slug" => "chamadas-index", "with_front" => true),
		"query_var"           => true,
		"supports"            => array("title", "revisions", "thumbnail", "author"),				
	);
	register_post_type("chamadas-index", $args);

}

add_action('init', 'cptui_register_my_taxes');
function cptui_register_my_taxes() {

	$labels = array(
		"name"  => "Categorias Perguntas Frequentes",
		"label" => "Categorias Perguntas Frequentes",
	);

	$args = array(
		"labels"            => $labels,
		"hierarchical"      => true,
		"label" 			     => "Categorias Perguntas Frequentes",
		"show_ui" 		     => true,
		"query_var" 	     => true,
		"rewrite" 		     => array('slug' => 'categorias-perguntas-frequentes', 'with_front' => true),
		"show_admin_column" => false,
	);
	register_taxonomy("categorias-perguntas-frequentes", array("perguntas-frequentes"), $args);

	$labels = array(
		"name"  => "Categorias Chamadas",
		"label" => "Categorias Chamadas",
	);

	$args = array(
		"labels"            => $labels,
		"hierarchical"      => true,
		"label"      	     => "Categorias Chamadas",
		"show_ui" 		     => true,
		"query_var" 	     => true,
		"rewrite" 		     => array( 'slug' => 'categorias-chamadas', 'with_front' => true ),
		"show_admin_column" => false,
	);
	register_taxonomy("categorias-chamadas", array("chamadas-index"), $args);

}

?>