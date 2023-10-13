<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Modernism';
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
				echo "O Modernismo Brasileiro se iniciou no início do século XX, após a Semana de Arte Moderna de 1922. Era um tempo turbulento no país, o Brasil recém proclamado república enfrentava conflitos e falhou em criar uma identidade nacional para a população, além disso, a Primeira Guerra Mundial estava acontecendo no mundo. Assim, inspirados pelas <b>vanguardas européias</b> que se popularizavam fora do país, vários artistas brasileiros trouxeram a bagagem cultural da Europa para o Brasil numa busca por uma identidade artística única, original, contra a tradição vigente de seu tempo e livre das influências estrangeiras. Embora o Modernismo tenha sido influênciado pela arte européia, o princípio do Modernismo era de transformar tudo o que fosse de fora em algo brasileiro e único, ideal esse que originaria o <b>Movimento Antropofágico</b>. Dentre os mais importantes artistas do Modernismo estão <a href='users/ANDRADEmario'>Mário de Andrade</a>, <a href='users/OSWALDandrade'>Oswald de Andrade</a>, Tarsila do Amaral, Anita Malfatti e Menotti del Picchia. Juntos eles formaram o <b>Grupo dos Cinco.</b><br />
				<br />
				Juntamente com os ideais já estabelecidos pelo <a href='schools/pre-modernism.php'>Pré-Modernismo</a>, é feita a Semana de Arte Moderna de 1922, ano em que o Brasil completava 100 anos de sua independência. O evento durou de 13 á 18 de fevereiro e aconteceu no Teatro Municipal de São Paulo. De início, as ideais modernistas tiveram recepção negativa de muitos críticos e vários artistas foram vaiados durante os eventos. O Modernismo brasileiro é marcado pela liberdade estética, quebra das regras impostas sobre a arte, linguagem humorística e informal, ruptura com o passado e muito experimentalismo. O Modernismo é dividido em três fases, cada uma com suas pequenas nuâncias: <br />
				<br />
				<b>Fase Heróica (1922-1930): </b>também conhecida como Fase de Destruição, a primeira fase foi a mais radical e inovadora dentre os três. Manifestos e revistas eram publicadas para divulgar os ideais modernistas. Mereçem destaque as revistas Klaxon, Estética, A Revista, Terra Roxa e Outras Terras e a Revista de Antropofagia. Já entre os manifestos estavam o Manifesto Pau-Brasil, o Manifesto Antropófago, o Manifesto Regionalista e o Manifesto Nhengaçu Verde-Amarelo. Todos esses manifestos originaram escolas de arte diferentes que seguiriam rumos separados com o tempo.<br />
				<br />
				<b>Fase de Consolidação (1930-1945): </b>na segunda fase do modernismo, o movimento amadurece e estabelece uma consolidação da poesia brasileira, uma grande vitória alcançada pelos Modernistas. Foi o período onde artistas nacionalistas e regionalistas se dividiram: neste tempo, o fascismo se expandiu e a Segunda Guerra Mundial começava, daí surgiu a AIB (Ação Integralista Brasileira), um movimento ufanista que ganhou apoio dos artistas mais nacionalistas, cujo pensamento era de total reprovação á cultura estrangeira e devoto á cultura brasileira. Enquanto os artistas mais regionalistas foram contra o nacionalismo irracional e seguem o pensamento de agregação cultural do Antropofagismo e visão crítica sobre o próprio país. É um período marcado por uma literatura mais pessimista, individualista e psicológica.<br />
				<br />
				<b>Pós-Modernismo (1945): </b> uns estudiosos consideram que o Modernismo chega ao seu fim nos anos 60, outros dizem que foi nos anos 80, e ainda outros dizem que o Modernismo perdura até hoje. É a fase menos energética do Modernismo, certos valores que eram combatidos pelos antigos Modernistas voltam á tona como a linguagem formal e a valorização da métrica. Surgem os artistas neoparnasianos, os chamados da geração de 45.
				<br />";
			}
			if ($_COOKIE['lang'] == 'en') {
				echo "Brazilian Modernism began at the beginning of the 20th century, after the Week of Modern Art in 1922. It was a turbulent time in the country, Brazil, recently proclaimed a republic, faced conflicts and failed to create a national identity for the population. World War was going on in the world. Thus, inspired by the <b> European avant-garde </b> that became popular outside the country, several Brazilian artists brought the cultural baggage of Europe to Brazil in a search for a unique, original artistic identity, against the prevailing tradition of their time and free from foreign influences. Although Modernism was influenced by European art, the principle of Modernism was to transform everything from the outside into something Brazilian and unique, an ideal that would originate the <b> Anthropophagic Movement </b>. Among the most important modernist artists are <a href='users/ANDRADEmario'> Mário de Andrade </a>, <a href='users/OSWALDandrade'> Oswald de Andrade </a>, Tarsila do Amaral, Anita Malfatti and Menotti del Picchia. Together they formed the <b> Group of Five. </b> <br />
				<br />
				Together with the ideals already established by <a href='schools/pre-modernism.php'> Pre-Modernism </a>, the 1922 Modern Art Week is held, the year in which Brazil celebrated 100 years of independence . The event lasted from 13 to 18 February and took place at the Municipal Theater of São Paulo. At first, modernist ideals received negative reception from many critics and several artists were booed during the events. Brazilian Modernism is marked by aesthetic freedom, breaking the rules imposed on art, humorous and informal language, rupture with the past and a lot of experimentalism. Modernism is divided into three phases, each with its small nuances: <br />
				<br />
				<b> Heroic Phase (1922-1930): </b> also known as the Destruction Phase, the first phase was the most radical and innovative of the three. Manifestos and magazines were published to publicize modernist ideals. The magazines Klaxon, Estética, The Magazine, Terra Roxa and Other Lands and the Revista de Antropofagia deserve special mention. Among the manifestos were the Pau-Brasil Manifesto, the Anthropophagic Manifesto, the Regionalist Manifesto and the Nhengaçu Green-Yellow Manifesto. All of these manifestos gave rise to different art schools that would follow separate paths over time. <br />
				<br />
				<b> Consolidation Phase (1930-1945): </b> in the second phase of modernism, the movement matures and establishes a consolidation of Brazilian poetry, a great victory achieved by Modernists. It was the period when nationalist and regionalist artists were divided: at this time, fascism expanded and the Second World War began, then came the AIB (Ação Integralista Brasileira), a proud movement that gained support from the most nationalist artists, whose thought was total disapproval of foreign culture and devoted to Brazilian culture. While the most regionalist artists were against irrational nationalism and followed the thought of cultural aggregation of Anthropophagy and a critical view of the country itself. It is a period marked by a more pessimistic, individualistic and psychological literature. <br />
				<br />
				<b> Post-Modernism (1945): </b> some scholars consider that Modernism came to an end in the 1960s, others say it was in the 1980s, and still others say that Modernism lasts until today. It is the least energetic phase of Modernism, certain values ​​that were fought by the old Modernists come back to the fore as the formal language and the valorization of the metric. Neoparnasian artists appear, the so-called 45 generation.
					<br />";
			}
			if ($_COOKIE['lang'] == 'es') {
				echo "El modernismo brasileño comenzó a principios del siglo XX, después de la Semana del Arte Moderno en 1922. Fue un momento turbulento en el país, Brasil, recientemente proclamó una república, enfrentó conflictos y no logró crear una identidad nacional para la población. La guerra mundial estaba ocurriendo en el mundo. Así, inspirados por la <b> vanguardia europea </b> que se hizo popular fuera del país, varios artistas brasileños trajeron el bagaje cultural de Europa a Brasil en busca de una identidad artística única y original, en contra de la tradición prevaleciente de su tiempo y libre de influencias extranjeras. Aunque el modernismo fue influenciado por el arte europeo, el principio del modernismo fue transformar todo desde el exterior en algo brasileño y único, un ideal que originaría el <b> movimiento antropofágico </b>. Entre los artistas modernistas más importantes se encuentran <a href='users/ANDRADEmario'> Mário de Andrade </a>, <a href='users/OSWALDandrade'> Oswald de Andrade </a>, Tarsila do Amaral, Anita Malfatti y Menotti del Picchia. Juntos formaron el <b> Grupo de los Cinco. </b> <br />
				<br />
				Junto con los ideales ya establecidos por <a href='schools/pre-modernism.php'> Premodernismo </a>, se celebra la Semana de Arte Moderno de 1922, el año en que Brasil celebró 100 años de independencia . El evento duró del 13 al 18 de febrero y tuvo lugar en el Teatro Municipal de São Paulo. Al principio, los ideales modernistas recibieron una recepción negativa de muchos críticos y varios artistas fueron abucheados durante los eventos. El modernismo brasileño está marcado por la libertad estética, rompiendo las reglas impuestas sobre el arte, el lenguaje humorístico e informal, la ruptura con el pasado y mucho experimentalismo. El modernismo se divide en tres fases, cada una con sus pequeños matices: <br />
				<br />
				<b> Fase heroica (1922-1930): </b> también conocida como la Fase de destrucción, la primera fase fue la más radical e innovadora de las tres. Se publicaron manifiestos y revistas para dar a conocer los ideales modernistas. Las revistas Klaxon, Estética, The Magazine, Terra Roxa and Other Lands y la Revista de Antropofagia merecen una mención especial. Entre los manifiestos estaban el Manifiesto Pau-Brasil, el Manifiesto Antropófago, el Manifiesto Regionalista y el Manifiesto Verde-Amarillo Nhengaçu. Todos estos manifiestos dieron lugar a diferentes escuelas de arte que seguirían caminos separados con el tiempo. <br />
				<br />
				<b> Fase de consolidación (1930-1945): </b> en la segunda fase del modernismo, el movimiento madura y establece una consolidación de la poesía brasileña, una gran victoria lograda por los modernistas. Fue el período en que los artistas nacionalistas y regionalistas se dividieron: en este momento, el fascismo se expandió y comenzó la Segunda Guerra Mundial, luego vino el AIB (Ação Integralista Brasileira), un movimiento orgulloso que obtuvo el apoyo de los artistas más nacionalistas, cuyo pensamiento fue desaprobación total de la cultura extranjera y dedicada a la cultura brasileña. Mientras que los artistas más regionalistas estaban en contra del nacionalismo irracional y seguían el pensamiento de la agregación cultural de la Antropofagia y una visión crítica del país mismo. Es un período marcado por una literatura más pesimista, individualista y psicológica. <br />
				<br />
				<b> Postmodernismo (1945): </b> algunos estudiosos consideran que el modernismo llegó a su fin en la década de 1960, otros dicen que fue en la década de 1980 y otros dicen que el modernismo dura hasta hoy. Es la fase menos enérgica del modernismo, ciertos valores a los que se opusieron los antiguos modernistas vuelven a la palestra como el lenguaje formal y la valorización de la métrica. Aparecen artistas neoparnasianos, la llamada generación 45.
				<br />";
			}
		?>
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "Escritores Modernistas";}
						if ($_COOKIE['lang'] == 'en') {echo "Modernism Writers";}
						if ($_COOKIE['lang'] == 'es') {echo "Escritores del Modernismo";}
					?>
					</h1>
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