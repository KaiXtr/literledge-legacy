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
		include 'design/metadata.php';
		$qry = $_GET['w'];
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
						<div class='manlan' lang='pt'> Insira seu email, iremos enviar um link para recuperar sua senha. </div>
						<div class='manlan' lang='en'> Insert your email, we will send a link to recover your password. </div>
					</span> <br />
					<?php
						if ($qry == '1') {
							$errl = "<span class='error'>";
							if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
								{$errl = $errl."Não foi encontrado nenhum usuário com o email inserido.";}
							else if ($_COOKIE['lang'] == 'en')
								{$errl = $errl."Not found any user with the inserted email.";}
							echo $errl ."</span>";
							}
						if ($qry == '2') {
							$errl = "<span>";
							if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
								{$errl = $errl."Foi enviado um email para recuperar sua senha";}
							else if ($_COOKIE['lang'] == 'en')
								{$errl = $errl."An email to recover your password was send.";}
							echo $errl ."</span>";
							}
						if ($qry != '2') {
							echo "
							<input type='text'  id='user' class='textbox' name='email' /> <br />
							<input type='submit' class='btpress' /> <br />";
						}
					?>
				</form>
			</div>
		</div>

		<?php include 'design/footer.php' ?>
	</body>
</html>