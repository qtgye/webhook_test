<?php 

$post = $_POST;
$command = 'echo '.json_encode($post);

shell_exec($command);

echo '<pre style="display: table; font-size: 10px">';
	var_dump($post);
echo '</pre>';

?>

