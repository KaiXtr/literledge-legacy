<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php $v = 'Página perdida - '; include 'design/metadata.php'; ?>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div class='content'>
			<div class='login'>
				<img src='media/images/icons/logo-<?php echo $_COOKIE['theme'] ?>.png' />
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "<h1> Não tem nada aqui... </h1>
						Parece que este endereço não existe aqui, verifique o URL inserido na busca do seu navegador.";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "<h1> There's nothing here... </h1>
					It looks like this address doesn't exist here, check the URL entered in your browser search.";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "<h1> No hay nada aquí... </h1>
					Parece que esta dirección no existe aquí, verifique la URL ingresada en la búsqueda de su navegador.";
					}
				?>
			</div>
		</div>

		<?php include 'design/footer.php' ?>
	</body>
</html>