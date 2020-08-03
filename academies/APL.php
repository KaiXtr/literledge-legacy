<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$aca = 'APL';
			$v = $acalst[$aca];
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='banner' style='background-image: url("media/images/banners/<?php echo $aca; ?>.jpg")'></div>
		<?php echo "<div id='profile'><a href='http://novo.aplpb.com.br/' target='_blank'>
			<h1 id='litername'> ".$acalst[$aca]." </h1>
			<h2 id='nickname'>novo.aplpb.com.br</h2></a></div>"; ?>
		<div id='bio'>
		<?php
			if ($_COOKIE['lang'] == 'pt') {
			echo "A Academia Paraibana de Letras foi fundada em 14 de setembro de 1941. Inicialmente, a APL contou com 10 cadeiras, número, depois, aumentado para 30. Em 1959, com a reforma dos estatutos criaram-se mais 10, fixando-se, oficialmente, em 40.";
			}

			if ($_COOKIE['lang'] == 'en') {
			echo "Academia Paraibana de Letras was founded on September 14, 1941. Initially, APL had 10 seats, the number of which was later increased to 30. In 1959, with the reform of the statutes, another 10 were created and officially established in 40.";
			}

			if ($_COOKIE['lang'] == 'es') {
			echo "La Academia Paraibana de Letras fue fundada el 14 de septiembre de 1941. Inicialmente, APL tenía 10 escaños, el número de los cuales luego se aumentó a 30. En 1959, con la reforma de los estatutos, se crearon otros 10 y se establecieron oficialmente en 40.";
			}
		?>
		</div>
		<div class='content'>
			<?php
				require '../account/mysql_connect.php';
				if ($notcon == null) {
					$find = $conn->query("SELECT nick,academy FROM users WHERE academy REGEXP '^".$aca."' ORDER BY academy");
					if ($find->num_rows > 0) {
						$ac = array();
						while ($i = $find->fetch_assoc()) {
							if (!array_key_exists(substr($i['academy'], 4,2), $ac)) {
								$ac[substr($i['academy'], 4,2)] = array();
							}
							$ac[substr($i['academy'], 4,2)][substr($i['academy'], 7,2)] = $i['nick'];
						}
						foreach ($ac as $chr => $ind) {
							echo "<div class='brow'><div class='blabel'><h1>";
							if ($_COOKIE['lang'] == 'pt') {echo "Posição ".$chr;}
							if ($_COOKIE['lang'] == 'en') {echo "Position ".$chr;}
							if ($_COOKIE['lang'] == 'es') {echo "Posición ".$chr;}
							echo "</h1></div><div class='displaybooks'>";
							foreach ($ind as $pos => $val) {
								$name = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$val."'");
								$n = $name->fetch_assoc();
								if ($n[$_COOKIE['lang']] == null) {$nm = $n['pt'];}
								else {$nm = $n[$_COOKIE['lang']];}
								if (array_key_exists($chr, $acalst)) {$acachr = $acalst[$chr];}
								else {$acachr = $chr;}
								if (array_key_exists($pos, $acalst)) {$acapos = $acalst[$pos];}
								else {$acapos = "Posição ".$pos;}
								echo "<a href='users/".$val.".php'>
										<button class='portraits'>
											<img class='profilepic' src='media/images/profilepics/".$val.".jpg' />
											<h2> ".$nm." </h2>
											<span class='acainfo'>Cadeira ".$acachr." | ".$acapos."</span>
										</button>
									</a>";
							}
							echo "</div></div>";
						}
					}
				$conn->close();
				}
			?>
		</div>
		<script type='text/javascript'>
			if ($(window).width() < 720) {
				if ($('#litername').height() >= '120') {document.getElementById('litername').style.top = '80px';}
				else if ($('#litername').height() >= '80') {document.getElementById('litername').style.top = '120px';}
			}
			else if ($(window).width() < 2500) {
				if ($('#litername').height() >= '345') {document.getElementById('litername').style.top = '120px';}
				else if ($('#litername').height() >= '230') {document.getElementById('litername').style.top = '220px';}
			}
		</script>
		<?php include '../design/footer.php' ?>
	</body>
</html>