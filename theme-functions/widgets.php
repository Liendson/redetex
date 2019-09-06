<?php 
function footer_widgets_init() {

	register_sidebar(array(
		'name'          => 'Opções Rodapé - Coluna 1',
		'id'            => 'rodape_1',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	));

	register_sidebar(array(
		'name'          => 'Opções Rodapé - Coluna 2',
		'id'            => 'rodape_2',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	));

	register_sidebar(array(
		'name'          => 'Opções Rodapé - Coluna 3',
		'id'            => 'rodape_3',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	));

	register_sidebar(array(
		'name'          => 'Opções Rodapé - Coluna 4',
		'id'            => 'rodape_4',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	));

	register_sidebar(array(
		'name'          => 'Acessibilidade',
		'id'            => 'acessibilidade_wg',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	));

}
add_action('widgets_init', 'footer_widgets_init');

?>