<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php session_start();
		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
			{$v = 'Entrar - ';}
		else if ($_COOKIE['lang'] == 'en')
			{$v = 'Log in - ';}
		else if ($_COOKIE['lang'] == 'es')
			{$v = 'Iniciar Sesión - ';}
		include 'design/metadata.php';
		if (@$_GET['error'] == true) {$error = $_GET['error'];} else {$error = '';}
		if (isset($_SESSION['user'])) {header('location: index.php');} ?>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div class='content'>
			<div class='login'>
				<form action='account/account_log.php' method='post'><h1>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "Entrar no Literledge";}
						if ($_COOKIE['lang'] == 'en') {echo "Log in Literledge";}
						if ($_COOKIE['lang'] == 'es') {echo "Iniciar Sesión en Literledge";}
					?>
					</h1><br />
					<?php
						$errl = "<span class='error'>";
						if ($error == '1') {
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."Dados incorretos";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."Incorrect credentials";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."Dados incorrectos";}
						}
						if ($error == '2') {
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."Faça o teste reCaptcha";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."Take the reCaptcha test";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."Toma la prueba reCaptcha";}
						}
						echo $errl ."</span>";
					?>
					<span id='text'> email </span> <br />
					<input type='text'  id='user' class='textbox' name='user' /> <br />
					<span id='text'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "senha";}
							if ($_COOKIE['lang'] == 'en') {echo "password";}
							if ($_COOKIE['lang'] == 'es') {echo "contraseña";}
						?>
					</span> <br />
					<div class='passbox'>
						<input type='password' id='pass' class='textbox' name='password' />
						<button type='button' id='shpass' class='passeye' onclick='showhide("pass","shpass")'></button>
					</div>
					<br />
					<div class="g-recaptcha" data-sitekey="6LcXVK8ZAAAAAJrra9Cn34FMr-NvkRlbz8f8p-IZ" style='width: 304px; margin-left: 16%;'></div>
					<br />
					<span id='checkbox'>
						<input type='checkbox' name='remember' />
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "Lembre-se de mim";}
							if ($_COOKIE['lang'] == 'en') {echo "Remember me";}
							if ($_COOKIE['lang'] == 'es') {echo "Acuérdate de mim";}
						?>
					</span>
					 | 
					<a id='signin' href='recover.php'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "Esqueci a senha";}
							if ($_COOKIE['lang'] == 'en') {echo "I forgot the password";}
							if ($_COOKIE['lang'] == 'es') {echo "Olvidé la contraseña";}
						?>
					</a>
					<br />
					<input type='submit' class='btpress' /> <br />
					<a id='signin' href='signin.php'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "Criar uma conta";}
							if ($_COOKIE['lang'] == 'en') {echo "Create an account";}
							if ($_COOKIE['lang'] == 'es') {echo "Crear una cuenta";}
						?>
					</a>
				</form>
			</div>
		</div>

		<?php include 'design/footer.php' ?>
	</body>
</html>