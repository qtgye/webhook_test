<?php 

$post = $_POST;
$command = 'git pull origin 2>&1';

if ( $post && $post["payload"] ) {
	$payload = json_decode($post['payload']);

	if ( $payload->pusher->email == 'buquia.jace@gmail.com' ) {
		$output = shell_exec($command);
		echo $output;
		return;
	}	
}

echo 'Unauthorized deployment';
echo '<pre style="display: table; font-size: 10px">';
	var_dump($post);
echo '</pre>';

// echo '<pre style="display: table; font-size: 10px">';
// 	var_dump($post["payload"]);
// echo '</pre>';


?>

