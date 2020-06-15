<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
			{$v = 'Contatos - ';}
		else if ($_COOKIE['lang'] == 'en')
			{$v = 'Contacts - ';}
		else if ($_COOKIE['lang'] == 'es')
			{$v = 'Contactos - ';}
		include 'design/metadata.php'; ?>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>s

		<div class='login'>
			<h1> Email </h1>
			<a href='mailto:thekaixtr@gmail.com?subject=SweetWords&body=Please send me a copy of your new program!' target='_top'>
			Send Feedback
			</a>
			<a href='https://mail.google.com/mail/u/0/#inbox?compose=new' target='_blank'>
			Send Feedback
			</a>
		</div>

		<?php include 'design/footer.php' ?>
	</body>
</html>