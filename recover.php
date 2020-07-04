<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
		if (session_status() == PHP_SESSION_NONE) {session_start();}
		if (isset($_SESSION['user'])) {header("location: login.php");}
		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
			{$v = 'Recuperar senha - ';}
		else if ($_COOKIE['lang'] == 'en')
			{$v = 'Recover password - ';}
		else if ($_COOKIE['lang'] == 'es')
			{$v = 'Recuperar la contraseña - ';}
		include 'design/metadata.php';
		?>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div class='content'>
			<div class='login'>
				<form action='account/account_recover.php' method='post'>
					<h1> Recuperar sua senha </h1> <br />
					<span id='text'>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "Insira seu email, iremos enviar um link para recuperar sua senha.";}
						if ($_COOKIE['lang'] == 'en') {echo "Insert your email, we will send a link to recover your password.";}
						if ($_COOKIE['lang'] == 'es') {echo "Inserte su correo electrónico, le enviaremos un enlace para recuperar su contraseña.";}
					?>
					</span> <br />
					<?php
						if ($_GET['w'] == '1') {
							$errl = "<span class='error'>";
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."Não foi encontrado nenhum usuário com o email inserido.";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."Not found any user with the inserted email.";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."No se ha encontrado ningún usuario con el correo electrónico insertado.";}
							echo $errl ."</span>";
							}
						if ($_GET['w'] == '2') {
							$errl = "<span>";
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."Foi enviado um email para recuperar sua senha";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."An email to recover your password was send.";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."Se envió un correo electrónico para recuperar su contraseña.";}
							echo $errl ."</span>";
							}
						if ($_GET['w'] != '2') {
							echo "<input type='text'  id='user' class='textbox' name='email' /> <br />
								<input type='submit' class='btpress' /> <br />";
						}
					?>
				</form>
			</div>
		</div>

		<?php include 'design/footer.php' ?>
	</body>
</html>