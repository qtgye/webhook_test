<?php 

$post = $_POST;
$command = 'git pull origin 2>&1';

// if ( $post && $post["payload"] ) {
// 	$output = shell_exec($command);
// 	echo '<pre style="display: table; font-size: 10px">';
// 		var_dump($output);
// 	echo '</pre>';

// }
// echo '<pre style="display: table; font-size: 10px">';
// 	var_dump($post["payload"]);
// echo '</pre>';

	$output = shell_exec($command);
	echo '<pre style="display: table; font-size: 10px">';
		var_dump($output);
	echo '</pre>';
	

?>

