<?php
/**
 * Plugin Name:       Micke's Plugin
 * Plugin URI:        https://github.com/limikael/mickesplugin
 * Description:       A plugin that does nothing useful, which is useful for testing.
 * Version:           0.0.1
 * Author:            Mikael Lindqvist
 * License:           GNU General Public License v2
 * GitHub Plugin URI: https://github.com/limikael/mickesplugin
 */

function mickesplugin_page() {
	echo "<h1>Micke's Plugin</h1>";
	echo "<p>Hello and welcome to Micke's Plugin.</p>";
	echo "<p>We hope that you enjoy your experience. Hello again final test</p>";
}

function mickesplugin_admin_menu() {
	add_menu_page(
		"Micke's Plugin",
		"Micke's Plugin",
		"manage_options",
		"mickesplugin",
		"mickesplugin_page"
	);
}

add_action("admin_menu","mickesplugin_admin_menu");
