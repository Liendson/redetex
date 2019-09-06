<?php

// função que chama o menu principal
function add_menu_principal() {
  $menuPrincipal = array(
    'theme_location'  => '',
    'menu'            => 'Menu Principal',
    'container'       => '',
    'container_class' => '',
    'container_id'    => '',
    'menu_class'      => '',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
  );

  return wp_nav_menu ($menuPrincipal);
}

// Mudar logo e link do Wp-admin
function page_login_logo(){
  echo "<style>body.login #login h1 a { background: url('".get_stylesheet_directory_uri()."/dist/imagens/logo-admin.png') no-repeat scroll center top transparent; width:320px; height:109px; }</style>\n";
}

add_action("login_head", "page_login_logo");

// Esconder a versão do Wordpress
remove_action('wp_head', 'wp_generator');

add_action( 'after_setup_theme', 'tema_setup' );
function tema_setup() {
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
  if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
      array(
        'menu' => 'Menu Superior'
      )
    );
  }
  add_image_size( 'img-destaque', 1200, 330, true); //painel de destaques
  add_image_size( 'img-destaque-smartphone', 667, 387, true); // 375x387 painel de destaques
  add_image_size( 'img-conteudo', 427, 284, true); //imagem do conteúdo
  add_image_size( 'img-publicidade', 960, 115, true); //banner publicidade rodapé
  add_image_size( 'img-publicidade-smartphone', 345, 115, true); //banner publicidade rodapé
  add_image_size( 'img-chamada-index', 375, 189, true); //chamada da Página Inicial
  add_image_size( 'img-galeria', 970, 400, true); //galeria de fotos
  add_image_size( 'thumb-galeria', 100, 75, true); //thumb da galeria de fotos
  add_image_size( 'thumb-busca', 170, 120, true); //thumb do resultado da busca
}
add_filter('image_size_names_choose', 'my_image_sizes');

function my_image_sizes($sizes) {
	$addsizes = array(
		"img-destaque"               => __( "Destaque"),
    "img-destaque-smartphone"    => __( "Destaque Smartphone"),
		"img-conteudo"               => __( "Imagem conteúdo"),
		"img-publicidade"            => __( "Publicidade"),
    "img-publicidade-smartphone" => __( "Publicidade Smartphone"),
		"img-chamada-index"          => __( "Chamada da Página Inicial"),
    "img-galeria"                => __( "Galeria de fotos"),
		"thumb-galeria"              => __( "Thumb da galeria de fotos"),
    "thumb-busca"                => __( "Thumb da busca")
	);
	$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}

function wordpress_pagination() {
  global $wp_query;

  $big = 999999999;

  echo paginate_links( array(
    'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format'  => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total'   => $wp_query->max_num_pages
  ) );
}

// Disable WordPress Admin Bar for all users but admins.
show_admin_bar(false);

// Múltiplas imagens destacadas
if (class_exists('MultiPostThumbnails')) {
  new MultiPostThumbnails(
    array(
      'label'     => 'Imagem para Smartphone',
      'id'        => 'destaque-smartphone',
      'post_type' => 'destaques'
    )
  );
  new MultiPostThumbnails(
    array(
      'label'     => 'Imagem para Smartphone',
      'id'        => 'publicidade-smartphone',
      'post_type' => 'publicidade'
    )
  );
}

// Data local
function exibeData(){
  $dia     = date('j');
  $mes     = date('n');
  $mes_ar  = array('', 'janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro');
  $ano     = date('Y');
  $dtFinal = $dia." de ".$mes_ar[$mes]." de ".$ano;

  return $dataFinal;
}

// Exibir no resultado da busca apenas os post types que estão no array
// https://wp-mix.com/wordpress-exclude-custom-post-type-search/

function shapeSpace_filter_search($query) {
  if (!$query->is_admin && $query->is_search) {
    $query->set('post_type', array('post', 'page'));
  }
  return $query;
}
add_filter('pre_get_posts', 'shapeSpace_filter_search');

// FUNÇÕES ADICIONAIS
include "theme-functions/configuracoes.php";
include "theme-functions/widgets.php";
include "theme-functions/limitador-posts.php";