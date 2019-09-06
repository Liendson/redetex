<?php
$role_object = get_role('editor');
$role_object->add_cap('edit_theme_options');
$role_object->add_cap('manage_options');

$role_object2 = get_role('contributor');
$role_object2->add_cap('read_pages');
$role_object2->add_cap('edit_pages');
$role_object2->remove_cap('edit_theme_options');
$role_object2->remove_cap('manage_options');

function esconde_menu() {
	global $submenu;
	unset($submenu['themes.php'][6]);
	unset($submenu['themes.php'][11]);

	remove_menu_page('edit.php');
	remove_menu_page('edit-comments.php');
	remove_menu_page('tools.php');
	remove_menu_page('edit.php?post_type=acf');
	
	remove_submenu_page('themes.php', 'themes.php');
	remove_submenu_page('options-general.php', 'options-general.php');
	remove_submenu_page('options-general.php', 'options-writing.php');
	remove_submenu_page('options-general.php', 'options-reading.php');
	remove_submenu_page('options-general.php', 'options-discussion.php');
	remove_submenu_page('options-general.php', 'options-media.php');
	remove_submenu_page('options-general.php', 'options-permalink.php');
}

if ( is_user_logged_in() ) {
	$user = new WP_User($user_ID);
	if($user->roles[0] != 'administrator'){
		add_action('admin_head', 'esconde_menu');
	}
}
?>