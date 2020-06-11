<?php
	if (isset($_POST['lang'])) {setcookie('lang',$_POST['lang'],time() + (86400 * 10000), '/');}
	else if (isset($_GET['l'])) {setcookie('lang',$_GET['l'],time() + (86400 * 10000), '/');}

	if (!isset($_POST['cookieagree'])) {setcookie('cookieagree',true,time() + (86400 * 10000), '/');}

	header('location: ' . $_SERVER["HTTP_REFERER"]);
	exit;
?>