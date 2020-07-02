<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Impressionism';
			$v = $ltslst[$lts].' - ';
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='banner' style='background-image: url("media/images/banners/<?php echo strtolower($lts); ?>.jpg")'></div>
		<?php echo "<div id='profile'> <h1 id='litername'> ".$ltslst[$lts]." </h1> </div>"; ?>
		<div id='bio'>
			O Impressionismo foi um movimento de vanguarda que surgiu no final do século XIX na França, e se manifestou principalmente na pintura e nas artes plásticas. Os impressionistas criticaram os padrões vigentes e buscaram inovações da maneira de se fazer arte. O nome do movimento veio de um crítico de arte, que chamou as pinturas de impressionistas e inacabadas para descrevê-las, isto pois ao invés das pinturas retratarem a realidade com fidelidade, elas passam uma impressão da realidade. Assim, os pintores impressionistas se preocupavam mais com a luz e as sombras da paisagem, por isso pintavam seus quadros em vários horários do dia.<br />
			<br />
			Apesar de ter se manifestado na literatura, <b>o Impressionismo não criou uma escola literária,</b> contudo, características da pintura Impressionista pode ser observada na literatura. Os escritores impressionistas tiveram uma preocupação maior em descrever detalhadamente aspectos psicológicos dos personagens e impressões sensorias de uma cena, além de dar mais importância ás emoções dos personagens e ás metáforas. As tramas passaram a dar mais importância á narrativa em detrimento da estrutura, geralmente seguindo assim uma narrativa não-linear. Os principais temas abordados nestas obras envolvem a mente do indivíduo e suas questões psicológicas e introspectivas, como o tempo, as memórias, a frustração e a morte. O tempo é um tema especial para os impressionistas, seguindo a visão de resgatar o tempo perdido, os impressionistas retratam a paisagem fragmentada e momentânea, como algo que deve ser admirado, e não justificado. <br />
			<br />
			Por possuir uma linguagem mais difícil de se entender, os livros de caráter impressionista necessitam por sua vez de leitores de caráter intelectual, indo contra a literatura democrática do <a href='schools/realism.php'>Realismo</a> e do <a href='schools/naturalism.php'>Naturalismo</a>.
			<br />
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1> Escritores Impressionistas </h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('POMPEIAraul','GRACAaranha','MACHADOassis','QUEIROZeca');
							for ($x=0;$x<sizeof($a);$x++) {
								$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$a[$x]."'");
								$n = $find->fetch_assoc();
								if ($n[$_COOKIE['lang']] == null) {$nm = $n['pt'];}
								else {$nm = $n[$_COOKIE['lang']];}

								echo "<a href='users/".$a[$x].".php'>
										<button class='portraits'>
											<img class='profilepic' src='media/images/profilepics/".$a[$x].".jpg' />
											<h2> ".$nm." </h2>
										</button>
									</a>";
								}
							$conn->close();
							}
					?>
				</div>
			</div>
			<?php $schl = $lts; include '../design/auctorbooks.php'; ?>
		</div>
		<?php include '../design/footer.php' ?>
	</body>
</html>