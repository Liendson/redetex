<?php

add_action( 'admin_menu', 'redetex_add_admin_menu' );
add_action( 'admin_init', 'redetex_settings_init' );

function redetex_add_admin_menu(  ) { 

	add_options_page( 'Opções Gerais', 'Opções Gerais', 'manage_options', 'redetex', 'redetex_options_page' );

}

function redetex_settings_init(  ) { 

	register_setting( 'pluginPage', 'redetex_settings' );
	add_settings_field('redetex_text_field_1', __( 'Link do Instagram', 'wordpress' ), 'redetex_text_field_2_render', 'pluginPage', 'redetex_pluginPage_section');
	add_settings_field('redetex_textarea_field_1', __( 'Endereço', 'wordpress' ), 'redetex_textarea_field_1_render', 'pluginPage', 'redetex_pluginPage_section');

}

function redetex_text_field_1_render() { 

	$options = get_option('redetex_settings');
	?>
	<input type='text' name='redetex_settings[redetex_text_field_1]' value='<?php echo $options['redetex_text_field_1']; ?>'>
	<?php

}

function redetex_textarea_field_1_render() { 

	$options = get_option('redetex_settings');
	?>
	<textarea cols='40' rows='5' name='redetex_settings[redetex_textarea_field_1]'> 
		<?php echo $options['redetex_textarea_field_1']; ?>
 	</textarea>
	<?php

}

function redetex_settings_section_callback() { 

	echo __( 'Insira as informações abaixo:', 'wordpress' );

}

function redetex_options_page(  ) { 

	?>
	<form action='options.php' method='post'>
		
		<h2>Opções Gerais</h2>
		
		<?php
		settings_fields('pluginPage');
		do_settings_sections('pluginPage');
		submit_button();
		?>
		
	</form>
	<?php

}

?>