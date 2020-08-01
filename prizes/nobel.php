<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$prz = 'nobel';
			$v = $przlst[$prz].' - ';
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
			echo "O Nobel de Literatura (em sueco: Nobelpriset i litteratur) é concedido anualmente pela Academia Sueca a autores que fizeram notáveis contribuições ao campo da literatura. É um dos cinco Prêmios Nobel criados em razão do desejo expresso pelo testamento de Alfred Nobel em 1895, atribuídos para contribuições destacáveis em química, física, literatura, paz e fisiologia ou medicina. Segundo os escritos do testamento, o prêmio é administrado pela Fundação Nobel e concedido por um comitê que consiste em 5 membros eleitos pela Academia Sueca. O primeiro Nobel de Literatura foi concedido em 1901 ao francês Sully Prudhomme. Cada laureado recebe uma medalha, um diploma e um prêmio monetário que varia ao longo dos anos. Em 1901, Prudhomme recebeu 150 782 de coroas, o equivalente a 8 823 637,78 de coroas em janeiro de 2018, enquanto que Kazuo Ishiguro, laureado de 2017, recebeu a quantia de oito milhões de coroas. O prêmio é apresentado em Estocolmo em uma cerimônia anual em 10 de dezembro, aniversário da morte de Nobel.<br />
				<br />
				Até 2019, o Nobel de Literatura foi concedido a um total de 116 indivíduos. Ao receber o prêmio, em 1958, Boris Pasternak foi forçado a recusá-lo publicamente sob pressão do governo da União Soviética. Em 1964, Jean-Paul Sartre anunciou que não gostaria de aceitar Nobel, dando continuidade a uma prática sua de recusar todas as honrarias oficiais que recebe. No entanto, o comitê do Nobel não reconhece as recusas e inclui Pasternak e Sartre em sua lista de laureados.<br />
				<br />
				Catorze mulheres receberam o Nobel de Literatura, mais que qualquer outro Prêmio Nobel, à exceção do da Paz. Desde a primeira entrega do Nobel de Literatura, houve quatro momentos nos quais o prêmio foi dado a duas pessoas (1904, 1917, 1966, 1974). Em sete anos, o prêmio não foi concedido (1914, 1918, 1935 e de 1940 a 1943). O país com o maior número de laureados é a França (15), seguida dos Estados Unidos e do Reino Unido (11). Os únicos sul-americanos a ganharem o prêmio foram os chilenos Gabriela Mistral (1954) e Pablo Neruda (1971), o colombiano Gabriel Garcia Márquez (1982) e o peruano Mario Vargas Llosa (2010). O único falante de língua portuguesa a receber a premiação foi José Saramago (1998).";
			}

			if ($_COOKIE['lang'] == 'en') {
			echo "The Nobel Prize for Literature (in Swedish: Nobelpriset i litteratur) is awarded annually by the Swedish Academy to authors who have made outstanding contributions to the field of literature. It is one of five Nobel Prizes created due to the desire expressed by Alfred Nobel's will in 1895, awarded for outstanding contributions in chemistry, physics, literature, peace and physiology or medicine. According to the will's writings, the prize is administered by the Nobel Foundation and awarded by a committee consisting of 5 members elected by the Swedish Academy. The first Nobel Prize for Literature was awarded in 1901 to the French Sully Prudhomme. Each laureate receives a medal, a diploma and a monetary prize that varies over the years. In 1901, Prudhomme received 150 782 crowns, equivalent to 8 823 637.78 crowns in January 2018, while Kazuo Ishiguro, a 2017 laureate, received the sum of eight million crowns. The award is presented in Stockholm at an annual ceremony on December 10, the anniversary of Nobel's death. <br />
				<br />
				By 2019, the Nobel Prize for Literature was awarded to a total of 116 individuals. Upon receiving the award in 1958, Boris Pasternak was forced to refuse it publicly under pressure from the government of the Soviet Union. In 1964, Jean-Paul Sartre announced that he would not like to accept Nobel, continuing his practice of refusing all official honors he receives. However, the Nobel committee does not recognize the refusals and includes Pasternak and Sartre in its list of laureates. <br />
				<br />
				Fourteen women received the Nobel Prize for Literature, more than any other Nobel Prize, except for the Peace Prize. Since the first Nobel Prize for Literature, there have been four times when the prize has been given to two people (1904, 1917, 1966, 1974 ). In seven years, the prize was not awarded (1914, 1918, 1935 and from 1940 to 1943). The country with the highest number of laureates is France (15), followed by the United States and the United Kingdom (11). The only South Americans to win the prize were Chileans Gabriela Mistral (1954) and Pablo Neruda (1971), Colombian Gabriel Garcia Márquez (1982) and Peruvian Mario Vargas Llosa (2010). The only Portuguese speaker to receive the award was José Saramago (1998).";
			}

			if ($_COOKIE['lang'] == 'es') {
			echo "El Premio Nobel de Literatura (en sueco: Nobelpriset i litteratur) es otorgado anualmente por la Academia Sueca a autores que han realizado contribuciones sobresalientes en el campo de la literatura. Es uno de los cinco Premios Nobel creados debido al deseo expresado por el testamento de Alfred Nobel en 1895, otorgado por contribuciones sobresalientes en química, física, literatura, paz y fisiología o medicina. Según los escritos del testamento, el premio es administrado por la Fundación Nobel y otorgado por un comité compuesto por 5 miembros elegidos por la Academia Sueca. El primer Premio Nobel de Literatura fue otorgado en 1901 al francés Sully Prudhomme. Cada laureado recibe una medalla, un diploma y un premio monetario que varía con los años. En 1901, Prudhomme recibió 150 782 coronas, equivalentes a 8 823 637.78 coronas en enero de 2018, mientras que Kazuo Ishiguro, un laureado de 2017, recibió la suma de ocho millones de coronas. El premio se entrega en Estocolmo en una ceremonia anual el 10 de diciembre, aniversario de la muerte de Nobel. <br />
				<br />
				Para 2019, el Premio Nobel de Literatura se otorgó a un total de 116 personas. Al recibir el premio en 1958, Boris Pasternak se vio obligado a rechazarlo públicamente bajo la presión del gobierno de la Unión Soviética. En 1964, Jean-Paul Sartre anunció que no le gustaría aceptar el Nobel, continuando con su práctica de rechazar todos los honores oficiales que recibe. Sin embargo, el comité Nobel no reconoce las negativas e incluye a Pasternak y Sartre en su lista de galardonados. <br />
				<br />
				Catorce mujeres recibieron el Premio Nobel de Literatura, más que cualquier otro Premio Nobel, excepto el Premio de la Paz. Desde el primer Premio Nobel de Literatura, ha habido cuatro ocasiones en que el premio ha sido otorgado a dos personas (1904, 1917, 1966, 1974 ) En siete años, el premio no fue otorgado (1914, 1918, 1935 y de 1940 a 1943). El país con el mayor número de galardonados es Francia (15), seguido de los Estados Unidos y el Reino Unido (11). Los únicos sudamericanos que ganaron el premio fueron los chilenos Gabriela Mistral (1954) y Pablo Neruda (1971), el colombiano Gabriel García Márquez (1982) y el peruano Mario Vargas Llosa (2010). El único hablante portugués que recibió el premio fue José Saramago (1998).";
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
								array('YEAR'=>'1907','AUCTOR'=>'KIPLINGrudyard','CITATION'=>'em consideração ao poder de observação, originalidade de imaginação, virilidade de ideias e talento notável para a narração que caracterizam as criações deste autor mundialmente famoso'),
								array('YEAR'=>'1929','AUCTOR'=>'MANNthomas','CITATION'=>'principalmente por seu grande romance, Buddenbrooks, que ganhou reconhecimento cada vez maior como uma das obras clássicas da literatura contemporânea'),
								array('YEAR'=>'1954','AUCTOR'=>'HEMINGWAYernest','CITATION'=>'por sua maestria da arte narrativa, mais recentemente demonstrada em "O Velho e O Mar", e pela influência que exerceu no estilo contemporâneo'),
								array('YEAR'=>'1964','AUCTOR'=>'SARTREjeanpaul','CITATION'=>'que pelo seu trabalho, rico em idéias e preenchido com o espírito da liberdade e em busca da verdade, exerceu uma influência profunda na nossa época'),
							);
							for ($x=0;$x<sizeof($a);$x++) {
								$find = $conn->query("SELECT pt,".$_COOKIE['lang'].",country FROM users WHERE nick='".$a[$x]['AUCTOR']."'");
								$n = $find->fetch_assoc();
								if ($n[$_COOKIE['lang']] == null) {$nm = $n['pt'];}
								else {$nm = $n[$_COOKIE['lang']];}

								echo "<a href='users/".$a[$x]['AUCTOR'].".php'>
										<button class='portraits citation'>
											<div class='cinfo'>
												<img class='profilepic' src='media/images/profilepics/".$a[$x]['AUCTOR'].".jpg' />
												<h2> ".$nm." </h2>
											</div>
											<div class='ctext'>
											\"".$a[$x]['CITATION']."\"
											<br /><br />
											<b>".$a[$x]['YEAR']."
												<img src='media/images/icons/flags/".$n["country"].".png' height='30' title='Icons made by Freepik' 
												alt='".$n["country"]."' /></b>
											</div>
										</button>
									</a>";
								}
							$conn->close();
							}
					?>
				</div>
			</div>
		</div>
		<?php include '../design/footer.php' ?>
	</body>
</html>