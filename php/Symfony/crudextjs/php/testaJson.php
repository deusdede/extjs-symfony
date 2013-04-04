<?php
    parse_str(file_get_contents("php://input"),$post_vars);

	echo "<pre>";
	print_r($post_vars);
	echo "</pre>";
