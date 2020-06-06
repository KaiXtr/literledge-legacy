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
				<form action='account/account_sign.php' method='post'>
					<div class='manlan' lang='pt'> <h1> Cadastre-se no Literledge </h1> </div>
					<div class='manlan' lang='en'> <h1> Sign in Literledge </h1> </div>
					<div class='manlan' lang='es'> <h1> Registrarse en Literledge </h1> </div>
					<br />
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
						<div class='manlan' lang='pt'> nome </div>
						<div class='manlan' lang='en'> name </div>
						<div class='manlan' lang='es'> nombre </div>
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
						<div class='manlan' lang='pt'> você não pode alterar essa informação </div>
						<div class='manlan' lang='en'> you can't change this information </div>
						<div class='manlan' lang='es'> no puedes cambiar esta información </div>
					</span> <br />
					<div class='selectrow'>
						<span id='text'>
							<div class='manlan' lang='pt'> gênero </div>
							<div class='manlan' lang='en'> gender </div>
							<div class='manlan' lang='es'> género </div>
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
							<div class='manlan' lang='pt'> nacimento </div>
							<div class='manlan' lang='en'> birth </div>
							<div class='manlan' lang='es'> nascimiento </div>
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
							<div class='manlan' lang='pt'> país </div>
							<div class='manlan' lang='en'> country </div>
							<div class='manlan' lang='es'> país </div>
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
						<div class='manlan' lang='pt'> senha </div>
						<div class='manlan' lang='en'> password </div>
						<div class='manlan' lang='es'> contraseña </div>
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
						<div class='manlan' lang='pt'> confirme a senha </div>
						<div class='manlan' lang='en'> confirm password </div>
						<div class='manlan' lang='es'> confira la contraseña </div>
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
						<div class='manlan' lang='pt'>
							<input type='checkbox' /> Li e concordo com os <a href='about.php'> termos e condições </a>
						</div>
						<div class='manlan' lang='en'>
							<input type='checkbox' /> I Agree with <a href='about.php'> terms of service </a>
						</div>
						<div class='manlan' lang='es'>
							<input type='checkbox' /> Leí y Acepto los <a href='about.php'> términos y condiciones </a>
						</div>
					</span> <br />
					<div class='manlan' lang='pt'> <input type='submit' class='btpress' value='Cadastrar' /> </div>
					<div class='manlan' lang='en'> <input type='submit' class='btpress' value='Sign in' /> </div>
					<br />
					<a id='signin' href='login.php'>
						<div class='manlan' lang='pt'> já tenho uma conta </div>
						<div class='manlan' lang='en'> I already have an account </div>
						<div class='manlan' lang='es'> Ya tengo una cuenta </div>
					</a>
				</form>
			</div>
		</div>

		<?php include 'design/footer.php' ?>
	</body>
</html>