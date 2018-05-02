<?php
	global $wpdb;

	get_header();

	$sql = "SELECT * FROM $wpdb->posts WHERE post_status = 'publish' AND NOT post_type = 'page' ORDER BY post_date DESC";
	$linha = $wpdb->get_results($sql);

	foreach ($linha as $linha) {
		echo "<h1>" . $linha->post_title . "</h1>";
		echo "<p class='conteudo'>" . $linha->post_content  . "</p>";
		echo "<p class='data-modificacao'>" . $linha->post_modified . "</p>";
		echo "<hr>";
	}
?>