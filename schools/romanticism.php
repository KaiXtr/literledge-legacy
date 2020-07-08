<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Romanticism';
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
			O Romantismo surgiu na Alemanha do século XIX no movimento Sturm und Drang (Tempestade e Ímpeto, em português), e se espalhou por toda a Europa. O Romantismo surge no contexto do início da idade contemporânea, da revolução francesa e a ascenção da classe burguesa no poder. A etimologia de seu nome vem da cidade de Roma e os idiomas românicos, isso pois os livros eram escritos em suas línguas locais, ao invés do latim. A burguesia buscou influenciar o mundo através da ideologia e da arte, e assim surge uma estética literária que valorizou os ideais da burguesia e as emoções, oposta ao Clacissimo e ao <a href='schools/arcadism.php'>Arcadismo</a>, considerado arte da nobreza. Na literatura romântica, três temas principais são aboradados: <b>o amor, a fé e a nação</b>, sendo que o nacionalismo é uma característca recorrente dos românticos. <br />
			<br />
			Uma característica fundamental do Romantismo, é o uso e abuso das <b>emoções universais</b>, sentimentos que podem ser compreendidos por quaisquer pessoas do mundo, sejam eles tristeza, amor, ódio ou muitos outros. As histórias românticas exploram esses temas de tal forma que se parecem com fatos reais, através de uma escrita semelhante á de uma carta ou diário. O Romantismo buscou idéias originais em detrimento das influênicas greco-romanas e clássicas vigentes até então, por isso a <b>meritocracia e a individualidade</b> são valorizados no romantismo, pois os artistas mais valorizados são os que expressam suas emoções, idéias e sentimentos, e também são exaltadas como características dos heróis românticos, se eles correrem atrás de seus sonhos, tudo é possível. Dessa maneira, a trama das histórias passaram a ser <b>Egocêntricas</b>, centradas no protagonista, para ele, tudo sempre irá dar certo e tudo gira em torno de suas convicções, os personagens das tramas também são idealizados e distorcidos, é criada a idealização da mulher perfeita e a figura dos vilões.<br />
			<br />
			Outra grande característica do Romantismo é o <b>escapismo e a utopia</b>, através da imaginação dos escritores românticos é possível escrever um mundo ideal e perfeito, diferente da realidade dura e difícil, assim, muitos autores buscaram essa utopia nos contos de cavalaria dos tempos medievais. Uma grande influência para esse pensamento utópico do romantismo foi a Revolução Francesa, pois após a deilusão dos revolucionários burgueses com o regime instaurado por Robespiérre, eles buscaram na arte o sonho do mundo burguês. O Romantismo é dividido em três fases: <br />
			<br />
			<b>Romantismo Ultrassentimental:</b> nessa fase, a literatura romântica aborda o sofrimento do protagonista apaixonado e depressivo, e exalta o sentimentalismo exacerbado. Na Alemanha, Johann Goethe foi o autor mais expressivo.<br />
			<br />
			<b>Romantismo Social:</b> nessa fase, as mazelas e injustiças sociais passaram a ser abordadas, mas sem deixar de possuir as características românticas, o maior representante dessa fase foi o francês <a href='schools/HUGOvictor.php'>Victor Hugo</a>.<br />
			<br />
			<b>Romantismo Nacionalista:</b> nessa fase, o amor pela pátria, a relatação de fatos históricos e a criação de símbolos nacionais foi uma característica recorrente, levando a criação do <a href='schools/indianism.php'>Indianismo</a> no Brasil.<br />
			<br />
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1> Escritores Românticos </h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('HUGOvictor','ALENCARjose','DIASgoncalves');
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