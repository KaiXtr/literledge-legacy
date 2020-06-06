<?php
	if (!isset($_POST['cookieagree'])) {setcookie('cookieagree',true,time() + (86400 * 10000), '/');}
	header('location: ' . $_SERVER["HTTP_REFERER"]);
	exit;
?>