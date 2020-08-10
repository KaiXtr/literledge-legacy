<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			$v = 'Sitemap';
			include 'design/metadata.php';
		?>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div class='content'>
			<div class='brow home'>
				<img src='media/images/icons/logo-<?php echo $_COOKIE['theme'] ?>.png' />
				<?php
					$folders = array('','academies/','books/','prizes/','schools/','users/');
					foreach ($folders as $dir) {	
						$pgs = glob($dir.'*.php');
						echo "<h1>".$dir."</h1>";
						foreach ($pgs as $x) {
							if ($x != 'sitemap.php') {
								if ($x != 'index.php') {
									$v = file_get_contents($x);
									$v = substr($v, strpos($v,'{$v = ')+7);
									$v = substr($v, 0, strpos($v,"';"));
								}
								else {$v = 'Home';}
								echo "<a href='".$x."'>".$x."</a><br />";
							}
						}
						echo "<hr>";
					}
				?>
			</div>
		</div>
		<?php include 'design/footer.php' ?>
	</body>
</html>