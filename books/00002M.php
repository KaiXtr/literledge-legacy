<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00002M'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']].' - ';
			}
			include '../design/metadata.php'; 
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '00002M'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					As alegres aventuras de Robin Hood de grande renome em Nottinghamshire é um romance de 1883do ilustrador e escritor americano Howard Pyle . Consistindo em uma série de episódios da história do fora- da- lei inglês Robin Hood e sua banda de Merry Men , o romance compila o material tradicional em uma narrativa coerente em um colorido, inventadoidioma inglês antigo que preserva o sabor das baladas, e adapta-o para crianças . O romance é notável por abordar o tema de Robin Hood, que havia sido cada vez mais popular no século XIX, em uma nova direção que influenciou escritores, artistas e cineastas posteriores no século seguinte. 
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					As alegres aventuras de Robin Hood de grande renome em Nottinghamshire é um romance de 1883do ilustrador e escritor americano Howard Pyle . Consistindo em uma série de episódios da história do fora- da- lei inglês Robin Hood e sua banda de Merry Men , o romance compila o material tradicional em uma narrativa coerente em um colorido, inventadoidioma inglês antigo que preserva o sabor das baladas, e adapta-o para crianças . O romance é notável por abordar o tema de Robin Hood, que havia sido cada vez mais popular no século XIX, em uma nova direção que influenciou escritores, artistas e cineastas posteriores no século seguinte. 
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					As alegres aventuras de Robin Hood de grande renome em Nottinghamshire é um romance de 1883do ilustrador e escritor americano Howard Pyle . Consistindo em uma série de episódios da história do fora- da- lei inglês Robin Hood e sua banda de Merry Men , o romance compila o material tradicional em uma narrativa coerente em um colorido, inventadoidioma inglês antigo que preserva o sabor das baladas, e adapta-o para crianças . O romance é notável por abordar o tema de Robin Hood, que havia sido cada vez mais popular no século XIX, em uma nova direção que influenciou escritores, artistas e cineastas posteriores no século seguinte. 
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00002M'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'PYLEhoward'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>