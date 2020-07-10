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
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>

	<body>
		<?php
			include 'design/header.php';
			include 'design/lateralbar.php';
			include 'design/array_lists.php';
		?>

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
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."Preencha um email válido";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."Insert a valid email";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."Rellene un correo electrónico válido";}
						}
						if (strpos($error, '9') != false) {
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."Este email já está em uso";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."This email is already being used";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."Este correo electrónico ya está en uso";}
						}
						echo $errl ."</span>";
					?>
					<span id='text'> email </span> <br />
					<input type='text' class='textbox' name='email' /> <br />

					<?php
						$errl = "<span class='error'>";
						if (strpos($error, '3') != false) {
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."Preencha seu nome";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."Insert your name";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."Escribe tu nombre";}
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
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."Preencha seu nick";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."Insert your nick";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."Completa tu nick";}
						}
						if (strpos($error, '8') != false) {
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."Este nick já está em uso";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."This nick is already being used";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."Este nick ya está en uso";}
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
									{echo "<option value=".$c[$x].">" .$gndlst[$c[$x]]. "</option>";}
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
								$c = array();
								foreach ($coulst as $x => $v) {
									$c[] = $x;
								}
								for ($x = 0; $x < sizeof($c); $x++)
									{echo "<option value=".$c[$x].">" .$coulst[$c[$x]]. "</option>";}
							?>
						</select> <br />
					</div> <br />

					<?php
						$errl = "<span class='error'>";
						if (strpos($error, '1') != false) {
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."A senha é muito fraca";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."Password is too weak";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."La contraseña es demasiado débil";}
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
						<input type='password' id='pass' class='textbox' name='password' onkeyup='passbar();' />
						<button type='button' id='shpass' class='passeye' onclick='showhide("pass","shpass")'></button>
					</div> <br />
					<canvas id='passbar' width='96' height='10'></canvas>
					<?php
						$errl = "<span class='error'>";
						if (strpos($error, '2') != false) {
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."As senhas não se coincidem";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."Passwords don't match";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."Las contraseñas no coinciden";}
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
					<br />
					<?php
						$errl = "<span class='error'>";
						if (strpos($error, '0') != false) {
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."Faça o teste reCaptcha";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."Take the reCaptcha test";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."Toma la prueba reCaptcha";}
						}
						echo $errl ."</span> <br />";
					?>
					<div class="g-recaptcha" data-sitekey="6LcXVK8ZAAAAAJrra9Cn34FMr-NvkRlbz8f8p-IZ" style='width: 304px; margin-left: 16%;'></div>
					<?php
						$errl = "<span class='error'>";
						if (strpos($error, '5') != false) {
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."Aceite os termos e condições";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."Accept the terms of service";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."Aceptar los términos y condiciones";}
						}
						echo $errl ."</span> <br />";
					?>
					<span id='checkbox'><input type='checkbox' name='check' />
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "Li e concordo com os <u><a href='terms.php' target='_blank'> termos e condições</a></u>";}
							if ($_COOKIE['lang'] == 'en') {echo "I Agree with <u><a href='terms.php' target='_blank'> terms of service</a></u>";}
							if ($_COOKIE['lang'] == 'es') {echo "Leí y Acepto los <u><a href='terms.php' target='_blank'> términos y condiciones</a></u>";}
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