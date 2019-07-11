<?php

	$foo = preg_replace('/\s+/', '', file_get_contents("base64test.txt"));
	$data = base64_decode($foo);
	file_put_contents('image.jpg',$data)

?>