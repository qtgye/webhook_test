<?php 

$post = $_POST;
$command = 'git pull origin 2>&1';

echo '<pre style="display: table; font-size: 10px">';
	var_dump($post);
echo '</pre>';

if ( $post && $post["payload"] ) {
	$output = shell_exec($command);
	echo $output;
	return;
}

echo 'Unauthorized deployment';
echo '<pre style="display: table; font-size: 10px">';
	var_dump($post);
echo '</pre>';

// echo '<pre style="display: table; font-size: 10px">';
// 	var_dump($post["payload"]);
// echo '</pre>';


?>

