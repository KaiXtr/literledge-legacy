<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php $v = ''; include 'design/metadata.php'; $error = $_GET['error']; ?>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div class='content'>
			<div class='login'>
				<form action='http://localhost/literledge/profile_edit.php' method='post'>
					<h1> Recuperar sua senha </h1> <br />
					<?php
						$errl = "<span class='error'>";
						if ($error == '1') {$errl = $errl."As senhas não coincidem";}
						echo $errl ."</span>";
					?>
					<div class='passbox'>
						<input type='password'  id='pass' class='textbox' name='password' />
						<input type='checkbox' onclick='showhide("pass")' />
					</div>
					<div class='passbox'>
						<input type='password'  id='conf' class='textbox' name='confirm' />
						<input type='checkbox' onclick='showhide("conf")' />
					</div>
					<input type='submit' class='btpress' /> <br />
				</form>
			</div>
		</div>

		<?php include 'design/footer.php' ?>
	</body>
</html>