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
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div class='content'>
			<div class='login'>
				<form action='account/account_log.php' method='post'>
					<div class='manlan' lang='pt'> <h1> Entrar no Literledge </h1> </div>
					<div class='manlan' lang='en'> <h1> Log in Literledge </h1> </div>
					<div class='manlan' lang='es'> <h1> Iniciar Sesión en Literledge </h1> </div>
					<br />
					<?php
						$errl = "<span class='error'>";
						if ($error == '1') {
							if ((!isset($_COOKIE['lang'])) || ($_COOKIE['lang'] == 'pt')) {$errl = $errl."Dados incorretos";}
							else if ($_COOKIE['lang'] == 'en') {$errl = $errl."Incorrect credentials";}
							else if ($_COOKIE['lang'] == 'es') {$errl = $errl."Dados incorrectos";}
						}
						echo $errl ."</span>";
					?>
					<span id='text'> email </span> <br />
					<input type='text'  id='user' class='textbox' name='user' /> <br />
					<span id='text'>
						<div class='manlan' lang='pt'> senha </div>
						<div class='manlan' lang='en'> password </div>
						<div class='manlan' lang='es'> contraseña </div>
					</span> <br />
					<div class='passbox'>
						<input type='password' id='pass' class='textbox' name='password' />
						<button type='button' id='shpass' class='passeye' onclick='showhide("pass","shpass")'></button>
					</div>
					<a id='signin' href='recover.php'>
						<div class='manlan' lang='pt'> Esqueci a senha </div>
						<div class='manlan' lang='en'> I forgot the password </div>
						<div class='manlan' lang='es'> Olvidé la contraseña </div>
					</a>
					<span id='checkbox'>
						<div class='manlan' lang='pt'> <input type='checkbox' name='remember' /> Lembre-se de mim </div>
						<div class='manlan' lang='en'> <input type='checkbox' name='remember' /> Remember me </div>
						<div class='manlan' lang='es'> <input type='checkbox' name='remember' /> Acuérdate de mim </div>
					</span>
					<input type='submit' class='btpress' /> <br />
					<a id='signin' href='signin.php'>
						<div class='manlan' lang='pt'> Criar uma conta </div>
						<div class='manlan' lang='en'> Create an account </div>
						<div class='manlan' lang='es'> Crear una cuenta </div>
					</a>
				</form>
			</div>
		</div>

		<?php include 'design/footer.php' ?>
	</body>
</html>