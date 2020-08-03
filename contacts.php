<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
			{$v = 'Contatos';}
		else if ($_COOKIE['lang'] == 'en')
			{$v = 'Contacts';}
		else if ($_COOKIE['lang'] == 'es')
			{$v = 'Contactos';}
		include 'design/metadata.php'; ?>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div class='login'>
			<h1> Contate-nos</h1>
			<?php
				if (@$_GET['t'] == true) {
					if ($_GET['t'] == 1) {echo 'Obrigado por nos contatar!';}
					if ($_GET['t'] == 2) {echo 'Não foi possível enviar sua mensagem, tente novamente mais tarde.';}
				}
			?>
			<form action='account/send_email.php' method='post'>
				<span id='text'> Nome </span> <br />
				<input type='text' id='user' class='textbox' name='name' /> <br />
				<span id='text'> Email </span> <br />
				<input type='text' id='user' class='textbox' name='email' /> <br />
				<span id='text'> Mensagem </span> <br />
				<textarea id='user' class='textbox long' name='message'></textarea> <br />
				<input type='submit' class='btpress' /> <br />
			</form>
		</div>
		<?php include 'design/footer.php' ?>
	</body>
</html>