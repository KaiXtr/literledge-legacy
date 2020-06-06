<?php
	if (session_status() == PHP_SESSION_NONE) {session_start();}
	if (!isset($_COOKIE['lang'])) {header('location: http://localhost/literledge/design/langset.php?l='.substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2));}
?>
<title> <?php echo $v; ?> Literledge </title>
<meta name='author' content='Matt kai' />
<?php
	if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
		{echo "<meta name='description' content='Livros gratuitos para todos.' />";}
	else if ($_COOKIE['lang'] == 'en')
		{echo "<meta name='description' content='Free ebooks for everyone.' />";}
	else if ($_COOKIE['lang'] == 'es')
		{echo "<meta name='description' content='Libros gratuitos para todos.' />";}

	if ((isset($_COOKIE['user'])) && (isset($_COOKIE['password']))) {
		$_SESSION['user'] = $_COOKIE['user'];
		$_SESSION['password'] = $_COOKIE['password'];
		}
?>
<base href='http://localhost/literledge/' />
<meta name='keywords' content='mattkai, matt, kai, ebooks, epub, livros, digitais' />
<meta name='refresh' content='60' />
<meta charset='utf-8' />
<meta http-equiv="Content-Language" content="pt-br, en, es, fr, it">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='shortcut icon' type='image/x-ico' href='favicon.ico'/>
<link rel='stylesheet' type='text/css' media='screen' href='style-screen.css' />
<link rel='stylesheet' type='text/css' media='portable' href='style-mobile.css' />
<script src="jquery-3.5.1.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js" type="text/javascript"></script>
<script type='text/javascript' src='script.js'></script>