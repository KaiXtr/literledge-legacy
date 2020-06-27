<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Modernism';
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
			O Modernismo Brasileiro se iniciou no início do século XX, após a Semana de Arte Moderna de 1922. Era um tempo turbulento no país, o Brasil recém proclamado república enfrentava conflitos e falhou em criar uma identidade nacional para a população, além disso, a Primeira Guerra Mundial estava acontecendo no mundo. Assim, inspirados pelas <b>vanguardas européias</b> que se popularizavam fora do país, vários artistas brasileiros trouxeram a bagagem cultural da Europa para o Brasil numa busca por uma identidade artística única, original, contra a tradição vigente de seu tempo e livre das influências estrangeiras. Embora o Modernismo tenha sido influênciado pela arte européia, o princípio do Modernismo era de transformar tudo o que fosse de fora em algo brasileiro e único, ideal esse que originaria o <b>Movimento Antropofágico</b>. Dentre os mais importantes artistas do Modernismo estão <a href='users/ANDRADEmario'>Mário de Andrade</a>, <a href='users/OSWALDandrade'>Oswald de Andrade</a>, Tarsila do Amaral, Anita Malfatti e Menotti del Picchia. Juntos eles formaram o <b>Grupo dos Cinco.</b><br />
			<br />
			Juntamente com os ideais já estabelecidos pelo <a href='schools/pre-modernism.php'>Pré-Modernismo</a>, é feita a Semana de Arte Moderna de 1922, ano em que o Brasil completava 100 anos de sua independência. O evento durou de 13 á 18 de fevereiro e aconteceu no Teatro Municipal de São Paulo. De início, as ideais modernistas tiveram recepção negativa de muitos críticos e vários artistas foram vaiados durante os eventos. O Modernismo brasileiro é marcado pela liberdade estética, quebra das regras impostas sobre a arte, linguagem humorística e informal, ruptura com o passado e muito experimentalismo. O Modernismo é dividido em três fases, cada uma com suas pequenas nuâncias: <br />
			<br />
			<b>Fase Heróica (1922-1930): </b>também conhecida como Fase de Destruição, a primeira fase foi a mais radical e inovadora dentre os três. Manifestos e revistas eram publicadas para divulgar os ideais modernistas. Mereçem destaque as revistas Klaxon, Estética, A Revista, Terra Roxa e Outras Terras e a Revista de Antropofagia. Já entre os manifestos estavam o Manifesto Pau-Brasil, o Manifesto Antropófago, o Manifesto Regionalista e o Manifesto Nhengaçu Verde-Amarelo. Todos esses manifestos originaram escolas de arte diferentes que seguiriam rumos separados com o tempo.<br />
			<br />
			<b>Fase de Consolidação (1930-1945): </b>na segunda fase do modernismo, o movimento amadurece e estabelece uma consolidação da poesia brasileira, uma grande vitória alcançada pelos Modernistas. Foi o período onde artistas nacionalistas e regionalistas se dividiram: neste tempo, o fascismo se expandiu e a Segunda Guerra Mundial começava, daí surgiu a AIB (Ação Integralista Brasileira), um movimento ufanista que ganhou apoio dos artistas mais nacionalistas, cujo pensamento era de total reprovação á cultura estrangeira e devoto á cultura brasileira. Enquanto os artistas mais regionalistas foram contra o nacionalismo irracional e seguem o pensamento de agregação cultural do Antropofagismo e visão crítica sobre o próprio país. É um período marcado por uma literatura mais pessimista, individualista e psicológica.<br />
			<br />
			<b>Pós-Modernismo (1945): </b> uns estudiosos consideram que o Modernismo chega ao seu fim nos anos 60, outros dizem que foi nos anos 80, e ainda outros dizem que o Modernismo perdura até hoje. É a fase menos energética do Modernismo, certos valores que eram combatidos pelos antigos Modernistas voltam á tona como a linguagem formal e a valorização da métrica. Surgem os artistas neoparnasianos, os chamados da geração de 45.
			<br />
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1> Escritores Modernistas </h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('ANDRADEmario','BANDEIRAmanuel','OSWALDandrade','CABRALmelo','MEIRELEScecilia','GRACILIANOramos','DRUMMONDandrade','LISPECTORclarice','AMADOjorge','VERISSIMOerico','GUIMARAESrosa','QUEIROZrachel');
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