<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='%bid%'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']];
			}
			include '../design/metadata.php'; 
		?>
	</head>
	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>
		<div id='bookinfo'>
			<?php $book = '%bid%'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "%binfopt%";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "%binfoen%";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "%binfoes%";
					}
				?>
			</div>
			<?php $book = '%bid%'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = '%bauctor%'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>