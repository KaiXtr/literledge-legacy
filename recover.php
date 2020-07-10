<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
		if (session_status() == PHP_SESSION_NONE) {session_start();}
		if (isset($_SESSION['user'])) {header("location: index.php");}
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
		<?php
			include 'design/header.php';
			include 'design/lateralbar.php';
			$pass = false;
			if (@$_GET['w']) {$error = $_GET['w'];}
			else {$error = '';}

			if ((@$_GET['t'])&&(@$_GET['e'])) {
				require 'account/mysql_connect.php';
				if ($notcon == null) {
					$find = $conn->query("SELECT code FROM users WHERE email='".$_GET['e']."'");
					if ($find->num_rows > 0) {
						$i = $find->fetch_assoc();
						if ($i['code'] == $_GET['t']) {
							$pass = true;
						}
						else {$error = '5';}
					}
					else {$error = '4';}
				$conn->close();
				}
				else {$error = '3';}
			}

			echo "<div class='content'>
				<div class='login'>";
			if ($pass == false) {
				echo "<form action='account/account_recover.php' method='post'>
					<h1> Recuperar sua senha </h1> <br />";
				if ($error != '2') {
					if ($_COOKIE['lang'] == 'pt') {echo "Insira seu email, iremos enviar um link para recuperar sua senha.";}
					if ($_COOKIE['lang'] == 'en') {echo "Insert your email, we will send a link to recover your password.";}
					if ($_COOKIE['lang'] == 'es') {echo "Inserte su correo electrónico, le enviaremos un enlace para recuperar su contraseña.";}
				}
				echo "<br />";
				if ($error == '1') {
					$errl = "<span class='error'>";
					if ($_COOKIE['lang'] == 'pt') {$errl = $errl."Não foi encontrado nenhum usuário com o email inserido.";}
					if ($_COOKIE['lang'] == 'en') {$errl = $errl."Not found any user with the inserted email.";}
					if ($_COOKIE['lang'] == 'es') {$errl = $errl."No se ha encontrado ningún usuario con el correo electrónico insertado.";}
					echo $errl ."</span>";
					}
				if ($error == '2') {
					$errl = "<span>";
					if ($_COOKIE['lang'] == 'pt') {$errl = $errl."Foi enviado um email para recuperar sua senha.";}
					if ($_COOKIE['lang'] == 'en') {$errl = $errl."An email to recover your password was send.";}
					if ($_COOKIE['lang'] == 'es') {$errl = $errl."Se envió un correo electrónico para recuperar su contraseña.";}
					echo $errl ."</span>";
					}
				if ($error == '3') {
					$errl = "<span class='error'>";
					if ($_COOKIE['lang'] == 'pt') {$errl = $errl."Não foi possível se conectar ao servidor.";}
					if ($_COOKIE['lang'] == 'en') {$errl = $errl."Could not connect to the server.";}
					if ($_COOKIE['lang'] == 'es') {$errl = $errl."No se puede conectar con el servidor.";}
					echo $errl ."</span>";
					}
				if ($error == '4') {
					$errl = "<span class='error'>";
					if ($_COOKIE['lang'] == 'pt') {$errl = $errl."Não foi encontrado nenhuma conta com o email recebido.";}
					if ($_COOKIE['lang'] == 'en') {$errl = $errl."No account was found with the email received.";}
					if ($_COOKIE['lang'] == 'es') {$errl = $errl."No se encontró ninguna cuenta con el correo electrónico recibido.";}
					echo $errl ."</span>";
					}
				if ($error == '5') {
					$errl = "<span class='error'>";
					if ($_COOKIE['lang'] == 'pt') {$errl = $errl."O código recebido é inválido ou expirou.";}
					if ($_COOKIE['lang'] == 'en') {$errl = $errl."The received code is invalid or has expired.";}
					if ($_COOKIE['lang'] == 'es') {$errl = $errl."El código recibido no es válido o ha expirado.";}
					echo $errl ."</span>";
					}
				if ($error != '2') {
					echo "<input type='text'  id='user' class='textbox' name='email' /> <br />
						<input type='submit' class='btpress' /> <br />";
				}
				echo "</form>";
			}
			if ($pass == true) {
				echo "<form action='account/account_recover.php?e=".$_GET['e']."&t=".$_GET['t']."' method='post'>
						<div class='passrow'>";
						$errl = "<span class='error'>";
						if (strpos($error, '1') != false) {
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."Senha incorreta";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."Incorrect password";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."Contraseña incorrecta";}
						}
						if (strpos($error, '5') != false) {
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."Preencha os campos vazios";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."Insert the empty fields";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."Rellene los campos vacios";}
						}
						echo $errl ."</span>";
					echo "<span id='text'>";
						if ($_COOKIE['lang'] == 'pt') {echo "senha antiga";}
						if ($_COOKIE['lang'] == 'en') {echo "old password";}
						if ($_COOKIE['lang'] == 'es') {echo "contraseña anterior";}
					echo "</span> <br />
							<div class='passbox'>
								<input type='password' id='newp' class='textbox' name='oldpassword' />
								<button type='button' id='shnewp' class='passeye' onclick='showhide(".'"newp"'.",".'"shnewp"'.")'></button>
							</div>
						</div>
						<div class='passrow'>";
						$errl = "<span class='error'>";
						if (strpos($error, '2') != false) {
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."A senha é igual a antiga";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."Password is the same as the old one";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."La contraseña es la misma que la anterior.";}
						}
						if (strpos($error, '4') != false) {
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."A senha é muito fraca";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."Password is too weak";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."La contraseña es demasiado débil";}
						}
						echo $errl ."</span>";
					echo "<span id='text'>";
						if ($_COOKIE['lang'] == 'pt') {echo "senha nova";}
						if ($_COOKIE['lang'] == 'en') {echo "new password";}
						if ($_COOKIE['lang'] == 'es') {echo "nueva contraseña";}
					echo "</span> <br />
							<div class='passbox'>
								<input type='password' id='pass' class='textbox' name='newpassword' onkeyup='passbar();' />
								<button type='button' id='shpass' class='passeye' onclick='showhide(".'"pass"'.",".'"shpass"'.")'></button>
							</div>
							<canvas id='passbar' width='96' height='10'></canvas>
						</div>
						<div class='passrow'>";
						$errl = "<span class='error'>";
						if (strpos($error, '3') != false) {
							if ($_COOKIE['lang'] == 'pt') {$errl = $errl."As senhas não coincidem";}
							if ($_COOKIE['lang'] == 'en') {$errl = $errl."Passwords don't match";}
							if ($_COOKIE['lang'] == 'es') {$errl = $errl."Las contraseñas no coinciden";}
						}
						echo $errl ."</span>";
					echo "<span id='text'>";
						if ($_COOKIE['lang'] == 'pt') {echo "confirme a senha";}
						if ($_COOKIE['lang'] == 'en') {echo "confirm the password";}
						if ($_COOKIE['lang'] == 'es') {echo "confirma la contraseña";}
					echo "</span> <br />
							<div class='passbox'>
								<input type='password' id='conf' class='textbox' name='confirm' />
								<button type='button' id='shconf' class='passeye' onclick='showhide(".'"conf"'.",".'"shconf"'.")'></button>
							</div>
						</div>
					<input type='submit' class='btpress' value='Salvar' /> 
				</form>";
			}
			echo "</div>
			</div>";

			include 'design/footer.php';
		?>
	</body>
</html>