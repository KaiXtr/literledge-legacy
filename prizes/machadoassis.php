<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$prz = 'machadoassis';
			$v = $przlst[$prz];
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='banner' style='background-image: url("media/images/banners/prz<?php echo strtolower($prz); ?>.jpg")'></div>
		<?php echo "<div id='profile'> <h1 id='litername'> ".$przlst[$prz]." </h1> </div>"; ?>
		<div id='bio'>
		<?php
			if ($_COOKIE['lang'] == 'pt') {
			echo "Prêmio Machado de Assis é o principal prêmio literário brasileiro, oferecido pela <a href='academies/ABL.php'>Academia Brasileira de Letras</a> a escritores brasileiros, pelo conjunto de sua obra, desde 1941.<br />
				Os vencedores recebem um valor em dinheiro, um diploma e, desde 1998, um troféu criado pelo escultor Mário Agostinelli – um pequeno busto de Machado de Assis.";
			}

			if ($_COOKIE['lang'] == 'en') {
			echo "Machado de Assis Prize is the main Brazilian literary prize, offered by the <a href='academies/ABL.php'>Academia Brasileira de Letras</a> to Brazilian writers, for the whole of their work, since 1941. <br />
				The winners receive a cash prize, a diploma and, since 1998, a trophy created by the sculptor Mário Agostinelli - a small bust of Machado de Assis.";
			}

			if ($_COOKIE['lang'] == 'es') {
			echo "El Premio Machado de Assis es el principal premio literario brasileño, ofrecido por la <a href='academies/ABL.php'>Academia Brasileira de Letras</a> a escritores brasileños, por su trabajo en general, desde 1941. <br />
				Los ganadores reciben un premio en efectivo, un diploma y, desde 1998, un trofeo creado por el escultor Mário Agostinelli, un pequeño busto de Machado de Assis.";
			}
		?>
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "Laureados";}
						if ($_COOKIE['lang'] == 'en') {echo "Laureates";}
						if ($_COOKIE['lang'] == 'es') {echo "Galardonados";}
					?>
					</h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array(
								array('YEAR'=>'1953','AUCTOR'=>'VERISSIMOerico'),
								array('YEAR'=>'1958','AUCTOR'=>'QUEIROZrachel'),
								array('YEAR'=>'1965','AUCTOR'=>'MEIRELEScecilia'),
								array('YEAR'=>'1977','AUCTOR'=>'BOPPraul'),
								array('YEAR'=>'1979','AUCTOR'=>'GILKAmachado'),
							);
							for ($x=0;$x<sizeof($a);$x++) {
								$find = $conn->query("SELECT pt,".$_COOKIE['lang'].",country FROM users WHERE nick='".$a[$x]['AUCTOR']."'");
								$n = $find->fetch_assoc();
								if ($n[$_COOKIE['lang']] == null) {$nm = $n['pt'];}
								else {$nm = $n[$_COOKIE['lang']];}

								echo "<a href='users/".$a[$x]['AUCTOR'].".php'>
										<button class='portraits'>
											<img class='profilepic' src='media/images/profilepics/".$a[$x]['AUCTOR'].".jpg' />
											<h2> ".$nm." </h2>
											<b>".$a[$x]['YEAR']."</b>
										</button>
									</a>";
								}
							$conn->close();
							}
					?>
				</div>
			</div>
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