<?php 

$post = $_POST;
$command = 'git pull';

if ( $_POST && $_POST['payload'] ) {
	$output = shell_exec($command);
	echo '<pre style="display: table; font-size: 10px">';
		var_dump($output);
	echo '</pre>';

}
echo '<pre style="display: table; font-size: 10px">';
	var_dump($post["payload"]);
echo '</pre>';

?>

