<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php $v = ''; include 'design/metadata.php'; $qry = $_GET['w']; ?>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div class='content'>
			<div class='login'>
				<form action='http://localhost/literledge/account_recover.php' method='post'>
					<h1> Recuperar sua senha </h1> <br />
					<span id='text'> Insira seu email, iremos enviar um link para recuperar sua senha. </span> <br />
					<?php
						if ($qry == '1') {
							$errl = "<span class='error'>";
							$errl = $errl."Não foi encontrado nenhum usuário com o email inserido.";
							echo $errl ."</span>";
							}
						if ($qry == '2') {
							$errl = "<span>";
							$errl = $errl."Foi enviado um email para recuperar sua senha";
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