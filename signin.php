<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php session_start();
		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
			{$v = 'Cadastrar - ';}
		else if ($_COOKIE['lang'] == 'en')
			{$v = 'Sign in - ';}
		else if ($_COOKIE['lang'] == 'es')
			{$v = 'Registrarse - ';}
		include 'design/metadata.php';
		if (@$_GET['error'] == true) {$error = $_GET['error'];} else {$error = '';}
		if (isset($_SESSION['user'])) {header('location: index.php');} ?>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div class='content'>
			<div class='login'>
				<form action='account/account_sign.php' method='post'><h1>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "Cadastre-se no Literledge";}
						if ($_COOKIE['lang'] == 'en') {echo "Sign in Literledge";}
						if ($_COOKIE['lang'] == 'es') {echo "Registrarse en Literledge";}
					?>
					</h1><br />
					<?php
						$errl = "<span class='error'>";
						if (strpos($error, '6') != false) {
							if ((!isset($_COOKIE['lang'])) || ($_COOKIE['lang'] == 'pt')) {$errl = $errl."Preencha um email válido";}
							else if ($_COOKIE['lang'] == 'en') {$errl = $errl."Insert a valid email";}
						}
						if (strpos($error, '9') != false) {
							if ((!isset($_COOKIE['lang'])) || ($_COOKIE['lang'] == 'pt')) {$errl = $errl."Este email já está em uso";}
							else if ($_COOKIE['lang'] == 'en') {$errl = $errl."This email is already being used";}
						}
						echo $errl ."</span>";
					?>
					<span id='text'> email </span> <br />
					<input type='text' class='textbox' name='email' /> <br />

					<?php
						$errl = "<span class='error'>";
						if (strpos($error, '3') != false) {
							if ((!isset($_COOKIE['lang'])) || ($_COOKIE['lang'] == 'pt')) {$errl = $errl."Preencha seu nome";}
							else if ($_COOKIE['lang'] == 'en') {$errl = $errl."Insert your name";}
						}
						echo $errl ."</span>";
					?>
					<span id='text'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "nome";}
							if ($_COOKIE['lang'] == 'en') {echo "name";}
							if ($_COOKIE['lang'] == 'es') {echo "nombre";}
						?>
					</span> <br />
					<input type='text' class='textbox' name='name' /> <br />
					<?php
						$errl = "<span class='error'>";
						if (strpos($error, '4') != false) {
							if ((!isset($_COOKIE['lang'])) || ($_COOKIE['lang'] == 'pt')) {$errl = $errl."Preencha seu nick";}
							else if ($_COOKIE['lang'] == 'en') {$errl = $errl."Insert your nick";}
						}
						if (strpos($error, '8') != false) {
							if ((!isset($_COOKIE['lang'])) || ($_COOKIE['lang'] == 'pt')) {$errl = $errl."Este nick já está em uso";}
							else if ($_COOKIE['lang'] == 'en') {$errl = $errl."This nick is already being used";}
						}
						echo $errl ."</span>";
					?>
					<span id='text'> nick </span> <br />
					<input type='text' class='textbox' name='nick' /> <br />
					<span id='text'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "você não pode alterar essa informação";}
							if ($_COOKIE['lang'] == 'en') {echo "you can't change this information";}
							if ($_COOKIE['lang'] == 'es') {echo "no puedes cambiar esta información";}
						?>
					</span> <br />
					<div class='selectrow'>
						<span id='text'>
							<?php
								if ($_COOKIE['lang'] == 'pt') {echo "gênero";}
								if ($_COOKIE['lang'] == 'en') {echo "gender";}
								if ($_COOKIE['lang'] == 'es') {echo "género";}
							?>
						</span>
						<select class='selectbox' name='gender'>
							<?php
								$c = array('M','F','A','O');
								for ($x = 0; $x < sizeof($c); $x++)
									{echo "<option>" .$c[$x]. "</option>";}
							?>
						</select> <br />
					</div>

					<div class='selectrow'>
						<span id='text'>
							<?php
								if ($_COOKIE['lang'] == 'pt') {echo "nacimento";}
								if ($_COOKIE['lang'] == 'en') {echo "birth";}
								if ($_COOKIE['lang'] == 'es') {echo "nascimiento";}
							?>
						</span>
						<select class='selectbox' name='by'>
							<?php
								for ($x = date('Y') - 7; $x >= date('Y') - 100; $x-=1)
									{echo "<option>" .$x. "</option>";}
							?>
						</select>
						<select class='selectbox' name='bm'>
							<?php
								for ($x = 1; $x <= 12; $x++)
									{echo "<option>" .$x. "</option>";}
							?>
						</select>
						<select class='selectbox' name='bd'>
							<?php
								for ($x = 1; $x <= 30; $x++)
									{echo "<option>" .$x. "</option>";}
							?>
						</select>
					</div>

					<div class='selectrow'>
						<span id='text'>
							<?php
								if ($_COOKIE['lang'] == 'pt') {echo "país";}
								if ($_COOKIE['lang'] == 'en') {echo "country";}
								if ($_COOKIE['lang'] == 'es') {echo "país";}
							?>
						</span>
						<select class='selectbox' name='country'>
							<?php
								$c = array('BRA','CAN','FRA','GER','ITA','USA');
								for ($x = 0; $x < sizeof($c); $x++)
									{echo "<option>" .$c[$x]. "</option>";}
							?>
						</select> <br />
					</div> <br />

					<?php
						$errl = "<span class='error'>";
						if (strpos($error, '1') != false) {
							if ((!isset($_COOKIE['lang'])) || ($_COOKIE['lang'] == 'pt')) {$errl = $errl."A senha é muito fraca";}
							else if ($_COOKIE['lang'] == 'en') {$errl = $errl."Password is too weak";}
						}
						echo $errl ."</span>";
					?>
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

					<?php
						$errl = "<span class='error'>";
						if (strpos($error, '2') != false) {
							if ((!isset($_COOKIE['lang'])) || ($_COOKIE['lang'] == 'pt')) {$errl = $errl."As senhas não se coincidem";}
							else if ($_COOKIE['lang'] == 'en') {$errl = $errl."Passwords don't match";}
						}
						echo $errl ."</span>";
					?>
					<span id='text'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "confirme a senha";}
							if ($_COOKIE['lang'] == 'en') {echo "confirm password";}
							if ($_COOKIE['lang'] == 'es') {echo "confira la contraseña";}
						?>
					</span> <br />
					<div class='passbox'>
						<input type='password' id='conf' class='textbox' name='confirm' />
						<button type='button' id='shconf' class='passeye' onclick='showhide("conf","shconf")'></button>
					</div>

					<?php
						$errl = "<span class='error'>";
						if (strpos($error, '5') != false) {
							if ((!isset($_COOKIE['lang'])) || ($_COOKIE['lang'] == 'pt')) {$errl = $errl."Aceite os termos e condições";}
							else if ($_COOKIE['lang'] == 'en') {$errl = $errl."Accept the terms of service";}
						}
						echo $errl ."</span>";
					?>
					<span id='checkbox'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "Li e concordo com os <a href='about.php'> termos e condições";}
							if ($_COOKIE['lang'] == 'en') {echo "I Agree with <a href='about.php'> terms of service";}
							if ($_COOKIE['lang'] == 'es') {echo "Leí y Acepto los <a href='about.php'> términos y condiciones";}
						?>
					</span> <br />
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "<input type='submit' class='btpress' value='Cadastrar' />";}
						if ($_COOKIE['lang'] == 'en') {echo "<input type='submit' class='btpress' value='Sign in' />";}
						if ($_COOKIE['lang'] == 'es') {echo "<input type='submit' class='btpress' value='Registrarse' />";}
					?>
					<br />
					<a id='signin' href='login.php'>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "já tenho uma conta";}
						if ($_COOKIE['lang'] == 'en') {echo "I already have an account";}
						if ($_COOKIE['lang'] == 'es') {echo "Ya tengo una cuenta";}
					?>
					</a>
				</form>
			</div>
		</div>

		<?php include 'design/footer.php' ?>
	</body>
</html>