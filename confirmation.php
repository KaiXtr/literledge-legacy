<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
		if (session_status() == PHP_SESSION_NONE) {session_start();}
		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
			{$v = 'Confirmação da conta - ';}
		else if ($_COOKIE['lang'] == 'en')
			{$v = 'Account confirmation - ';}
		else if ($_COOKIE['lang'] == 'es')
			{$v = 'Confirmación de la cuenta - ';}
		include 'design/metadata.php';
		?>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div class='content'>
			<div class='login'>
				<h1> Confirmação de conta</h1> <br />
				<?php
					if (@$_GET['e'] == false) {
						if ($_COOKIE['lang'] == 'pt') {echo "Enviamos um código para seu email para confirmar sua conta.";}
						if ($_COOKIE['lang'] == 'en') {echo "We sent a code to your email to confirm your account.";}
						if ($_COOKIE['lang'] == 'es') {echo "Enviamos un código a su correo electrónico para confirmar su cuenta.";}
					}
					else if ($_GET['e'] == '1') {
						if ($_COOKIE['lang'] == 'pt') {echo "O código para confirmação de conta expirou, clique aqui para reenviar o código.";}
						if ($_COOKIE['lang'] == 'en') {echo "The account verification code has expired, click here to resend the code.";}
						if ($_COOKIE['lang'] == 'es') {echo "El código de verificación de la cuenta ha caducado, haga clic aquí para reenviar el código.";}
					}
				?>
				<br />
			</div>
		</div>

		<?php include 'design/footer.php' ?>
	</body>
</html>