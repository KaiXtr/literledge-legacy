<?php
	if (session_status() == PHP_SESSION_NONE) {session_start();}
	if (!isset($_COOKIE['lang'])) {header('location: http://localhost/literledge/design/cookieset.php?l='.substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2));}
	if (!isset($_COOKIE['theme'])) {header('location: http://localhost/literledge/design/cookieset.php?t=sepia');}
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

	$devlprs = array('KaiXtr');
?>
<base href='http://localhost/literledge/' />
<meta charset='utf-8' />
<meta name='refresh' content='60' />
<meta http-equiv="Content-Language" content="pt, en, es">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta name='keywords' content='mattkai, matt, kai, ebooks, epub, livros, digitais, pdf, wikipedia, livro, livros, books, libros, libro, book, liter, ledge, literledge
literature, knowledge, search, study, pensador, filosofia, sociologia, saraiva, amazon, americanas, gratuito, grátis, free, download, baixar, público, domínio, domain, public,
resumo, review, autores, escritores, movimentos, ler, escritor' />

<link rel='shortcut icon' type='image/svg+xml' sizes='any' href='favicon.svg' />
<link rel='stylesheet' type='text/css' media='screen and (min-width: 720px) and (max-width: 2500px)' href='styles/style-screen.css' />
<link rel='stylesheet' type='text/css' media='screen and (min-width: 0px) and (max-width: 720px)' href='styles/style-mobile.css' />
<link rel='stylesheet' type='text/css' media='screen' href='styles/theme-<?php echo $_COOKIE['theme']; ?>.css' title='<?php echo $_COOKIE['theme']; ?>' />

<script src="scripts/jquery-3.5.1.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js" type="text/javascript"></script>
<script src='scripts/script.js'type='text/javascript'></script>
<!--script src="https://www.google.com/recaptcha/api.js"></script>-->