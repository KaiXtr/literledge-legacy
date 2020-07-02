<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Realism';
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
			O Realismo surgiu no final do século XIX e questiona o <a href='schools/romanticism.php'>Romantismo</a> e sua visão fantasiosa da realidade. O realismo tem como base os ideais da filosofia <b>Positivista</b> e das ciências da natureza, bem mais explorados pelo <a href='schools/naturalism.php'>Naturalismo</a>, e surge no contexto da Segunda Revolução Industrial e suas consequências para a sociedade. A Europa viveu um período de mudanças na vida dos indivíduos e da ascensão do capitalismo, e assim, o <b>êxodo rural</b> crescia cada vez mais em prol de uma vida melhor nas cidades, onde a sociedade foi dividida entre o <b>proletariado</b>, a classe operária, e a <b>burguesia</b>, dona dos meios de produção. Também foi o período no qual a teoria do <b>Evolucionismo</b> de Charles Darwin crescia na comunidade científica e a eletricidade repercutia em grandes avanços tecnológicos. Ou seja, foi um período de grandes injustiças sociais e valorização da ciência. <br />
			<br />
			O realismo foi oficialmente consolidado após a publicação de <b>Madame Bovary</b>, de <a href='FLAUBERTgustave'>Gustave Flaubert</a>, na França. O livro chocou os leitores ao criticar a visão fantasiosa e ilusória das relações amorosas através de Emma, uma mulher que é desiludida do sonho de matrimônio ao enxergar que o seu pretendente não era nada do que ela esperava. Os realistas deixaram de lado as representações idealizadas e românticas para buscar retratar a realidade como ela é, com todos os seus defeitos e falhas, abrindo espaço para <b>críticas e denúncias sociais</b>, sendo a classe burguesa o principal alvo das críticas.<br />
			<br />
			Em Portugal, o principal representante foi <a href='users/QUEIROZeca.php'>Eça de Queiroz</a>.
			<br />
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1> Escritores Realistas </h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('MACHADOassis','FLAUBERTgustave','HUGOvictor','QUEIROZeca','DICKENScharles','POMPEIAraul','AZEVEDOaluisio');
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