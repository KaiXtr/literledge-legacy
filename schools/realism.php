<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Realism';
			$v = $ltslst[$lts];
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='banner' style='background-image: url("media/images/banners/<?php echo strtolower($lts); ?>.jpg")'></div>
		<?php echo "<div id='profile'> <h1 id='litername'> ".$ltslst[$lts]." </h1> </div>"; ?>
		<div id='bio'>
		<?php
			if ($_COOKIE['lang'] == 'pt') {
				echo "O Realismo surgiu no final do século XIX e questiona o <a href='schools/romanticism.php'>Romantismo</a> e sua visão fantasiosa da realidade. O realismo tem como base os ideais da filosofia <b>Positivista</b> e das ciências da natureza, bem mais explorados pelo <a href='schools/naturalism.php'>Naturalismo</a>, e surge no contexto da Segunda Revolução Industrial e suas consequências para a sociedade. A Europa viveu um período de mudanças na vida dos indivíduos e da ascensão do capitalismo, e assim, o <b>êxodo rural</b> crescia cada vez mais em prol de uma vida melhor nas cidades, onde a sociedade foi dividida entre o <b>proletariado</b>, a classe operária, e a <b>burguesia</b>, dona dos meios de produção. Também foi o período no qual a teoria do <b>Evolucionismo</b> de Charles Darwin crescia na comunidade científica e a eletricidade repercutia em grandes avanços tecnológicos. Ou seja, foi um período de grandes injustiças sociais e valorização da ciência. <br />
				<br />
				O realismo foi oficialmente consolidado após a publicação de <b>Madame Bovary</b>, de <a href='FLAUBERTgustave'>Gustave Flaubert</a>, na França. O livro chocou os leitores ao criticar a visão fantasiosa e ilusória das relações amorosas através de Emma, uma mulher que é desiludida do sonho de matrimônio ao enxergar que o seu pretendente não era nada do que ela esperava. Os realistas deixaram de lado as representações idealizadas e românticas para buscar retratar a realidade como ela é, com todos os seus defeitos e falhas, abrindo espaço para <b>críticas e denúncias sociais</b>, sendo a classe burguesa o principal alvo das críticas.<br />
				<br />
				Em Portugal, o principal representante foi <a href='users/QUEIROZeca.php'>Eça de Queiroz</a>.
				<br />";
			}
			if ($_COOKIE['lang'] == 'en') {
				echo "Realism emerged in the late 19th century and questions <a href='schools/romanticism.php'> Romanticism </a> and its fanciful view of reality. Realism is based on the ideals of <b> Positivist </b> philosophy and the natural sciences, much more explored by <a href='schools/naturalism.php'> Naturalismo </a>, and arises in the context of Second Industrial Revolution and its consequences for society. Europe lived a period of changes in the lives of individuals and the rise of capitalism, and thus, the <b> rural exodus </b> grew more and more in favor of a better life in cities, where society was divided between the <b> proletariat </b>, the working class, and the <b> bourgeoisie </b>, owner of the means of production. It was also the period in which Charles Darwin's theory of evolutionism grew in the scientific community and electricity was reflected in major technological advances. In other words, it was a period of great social injustices and valorization of science. <br />
				<br />
				The realism was officially consolidated after the publication of <b> Madame Bovary </b>, by <a href='FLAUBERTgustave'> Gustave Flaubert </a>, in France. The book shocked readers by criticizing the fanciful and illusory view of love relationships through Emma, ​​a woman who is disillusioned from the dream of marriage when she sees that her suitor was not at all what she expected. The realists left aside idealized and romantic representations to try to portray reality as it is, with all its defects and flaws, making room for <b> criticism and social denunciations </b>, with the bourgeois class being the main target of criticism. <br />
				<br />
				In Portugal, the main representative was <a href='users/QUEIROZeca.php'> Eça de Queiroz </a>.
				<br />";
			}
			if ($_COOKIE['lang'] == 'es') {
				echo "El realismo surgió a fines del siglo XIX y cuestiona <a href='schools/romanticism.php'> Romanticismo </a> y su fantasiosa visión de la realidad. El realismo se basa en los ideales de la filosofía <b> positivista </b> y las ciencias naturales, mucho más exploradas por <a href='schools/naturalism.php'> Naturalismo </a>, y surge en el contexto de Segunda revolución industrial y sus consecuencias para la sociedad. Europa vivió un período de cambios en la vida de las personas y el surgimiento del capitalismo y, por lo tanto, el <b> éxodo rural </b> creció cada vez más a favor de una vida mejor en las ciudades, donde la sociedad estaba dividida entre <b> proletariado </b>, la clase obrera y la <b> burguesía </b>, propietaria de los medios de producción. También fue el período en que la teoría del evolucionismo de Charles Darwin creció en la comunidad científica y la electricidad se reflejó en importantes avances tecnológicos. En otras palabras, fue un período de grandes injusticias sociales y valorización de la ciencia. <br />
				<br />
				El realismo se consolidó oficialmente después de la publicación de <b> Madame Bovary </b>, por <a href='FLAUBERTgustave'> Gustave Flaubert </a>, en Francia. El libro sorprendió a los lectores al criticar la visión fantasiosa e ilusoria de las relaciones amorosas a través de Emma, ​​una mujer que se desilusiona del sueño del matrimonio cuando ve que su pretendiente no era para nada lo que esperaba. Los realistas dejaron de lado las representaciones idealizadas y románticas para tratar de retratar la realidad tal como es, con todos sus defectos y defectos, abriendo espacio para <b> críticas y denuncias sociales </b>, siendo la clase burguesa el objetivo principal de crítica. <br />
				<br />
				En Portugal, el representante principal fue <a href='users/QUEIROZeca.php'> Eça de Queiroz </a>.
				<br />";
			}
		?>
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "Escritores Realistas";}
						if ($_COOKIE['lang'] == 'en') {echo "Realism Writers";}
						if ($_COOKIE['lang'] == 'es') {echo "Escritores del Realismo";}
					?>
					</h1>
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