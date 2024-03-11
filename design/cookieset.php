<?php
	if (isset($_POST['lang'])) {setcookie('lang',$_POST['lang'],time() + (86400 * 10000), '/');}
	else if (isset($_GET['l'])) {setcookie('lang',$_GET['l'],time() + (86400 * 10000), '/');}

	if (isset($_POST['theme'])) {setcookie('theme',$_POST['theme'],time() + (86400 * 10000), '/');}
	else if (isset($_GET['t'])) {setcookie('theme',$_GET['t'],time() + (86400 * 10000), '/');}

	if (isset($_GET['c'])) {setcookie('cookieagree',true,time() + (86400 * 10000), '/');}

	//header('location: ' . $_SERVER["HTTP_REFERER"]);
	header('location: https://localhost:81/literledge');
	exit;
?>