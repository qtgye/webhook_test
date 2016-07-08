<?php 

$post = $_POST;
$command = 'echo '.json_encode($post);

shell_exec($command);