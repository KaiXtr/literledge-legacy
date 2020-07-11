<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Indianism';
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
		<?php
			if ($_COOKIE['lang'] == 'pt') {
				echo 'O Indianismo foi uma vertente literária brasileira do período romantista. É caracterizada principalmente pela valorização do indígena na literatura, algo proveniente da figura do <b>"bom selvagem"</b>, ou seja, um ser humano puro e inocente, afastado do ambiente urbano e vivendo em conexão com a natureza, ideal este criado pelo iluminista <a href='."'users/ROUSSEAUjeanjacques.php'>Jean-Jacques Rousseau</a>. Este é um estilo de vida romantizado desde o Brasil colonial, tanto pelo <a href='schools/romanticism.php'>Romantismo</a>, quanto pelo <a href='schools/arcadism.php'>Arcadismo</a>. O indígena também serve como uma troca da figura do cavaleiro na literatura romântica, um personagem que representa o bom herói, corajoso e honesto.<br />
				<br />
				O Indianismo também tratará do <b>nacionalismo brasileiro</b> colocando o indígena como o herói da nação e o verdadeiro brasileiro, ajudando na criação de uma identidade nacional no Brasil imperial, distante dos valores lusitanos dos antigos colonizadores portugueses. Além do indígena, o vocabulário indígena, principalmente dos idiomas tupi-guarani, são amplamente utilizados na literatura indianista, além da retratação do estilo de vida dos indígenas. No geral, o Indianismo também traz várias características do romantismo, como as influências das histórias medievais e o retorno ao passado histórico. Como o Brasil não possuía um passado de cavaleiros e heróis, os personagens que restaram foram os indígenas. <br />
				<br />
				A influência do indianismo pode ser vista no <a href='schools/modernism.php'>Modernismo Brasileiro</a>, onde a cultura indígena é novamente retratada como a raíz do povo brasileiro e da identidade nacional, principalmente na obra <a href='books/00000H.php'>Macunaíma</a>, de <a href='users/ANDRADEmario.php'>Mário de Andrade</a>.
				<br />";
			}
			if ($_COOKIE['lang'] == 'en') {
				echo 'Indianism was a Brazilian literary aspect of the Romantic period. It is characterized mainly by the valorization of the indigenous in literature, something that comes from the <b> "good savage" </b> figure, that is, a pure and innocent human being, removed from the urban environment and living in connection with nature, ideal created by the illuminist <a href='."'users/ROUSSEAUjeanjacques.php'> Jean-Jacques Rousseau </a> This is a lifestyle romanticized since colonial Brazil, both for <a href = 'schools / romanticism .php '> Romanticism </a>, as well as for <a href='schools/arcadism.php'> Arcadismo </a>. The indigenous also serves as an exchange of the figure of the knight in romantic literature, a character that represents the good hero, brave and honest. <br />
				<br />
				Indianism will also deal with <b> Brazilian nationalism </b> placing the indigenous as the hero of the nation and the true Brazilian, helping to create a national identity in imperial Brazil, distant from the Portuguese values ​​of the former Portuguese colonizers. In addition to the indigenous, the indigenous vocabulary, mainly of the Tupi-Guarani languages, are widely used in Indianist literature, in addition to portraying the lifestyle of the indigenous people. In general, Indianism also brings several characteristics of romanticism, such as the influences of medieval stories and the return to the historical past. As Brazil did not have a past of knights and heroes, the remaining characters were the indigenous people. <br />
				<br />
				The influence of Indianism can be seen in <a href='schools/modernism.php'> Brazilian Modernism </a>, where indigenous culture is again portrayed as the root of the Brazilian people and national identity, especially in the work <a href = 'books / 00000H.php'> Macunaíma </a>, by <a href='users/ANDRADEmario.php'> Mário de Andrade </a>.
				<br />";
			}
			if ($_COOKIE['lang'] == 'es') {
				echo 'El indigenismo fue un aspecto literario brasileño del período romántico. Se caracteriza principalmente por la valorización de lo indígena en la literatura, algo que proviene de la figura <b> "buen salvaje" </b>, es decir, un ser humano puro e inocente, alejado del entorno urbano y que vive en conexión con la naturaleza, ideal creado por el iluminista <a href='."'users/ROUSSEAUjeanjacques.php'> Jean-Jacques Rousseau </a> Este es un estilo de vida idealizado desde el Brasil colonial, tanto para <a href = 'escuelas / romanticismo .php '> Romanticismo </a>, así como para <a href='schools/arcadism.php'> Arcadismo </a>. El indígena también sirve como un intercambio de la figura del caballero en la literatura romántica, un personaje que representa el buen héroe, valiente y honesto. <br />
				<br />
				El indigenismo también se ocupará del <b> nacionalismo brasileño </b> colocando a los indígenas como el héroe de la nación y el verdadero brasileño, ayudando a crear una identidad nacional en el Brasil imperial, distante de los valores lusitanos de los antiguos colonizadores portugueses. Además del indígena, el vocabulario indígena, principalmente de las lenguas tupi-guaraníes, se usa ampliamente en la literatura indigenista, además de retratar el estilo de vida de los pueblos indígenas. En general, el indigenismo también trae varias características del romanticismo, como las influencias de las historias medievales y el regreso al pasado histórico. Como Brasil no tenía un pasado de caballeros y héroes, los personajes restantes eran los pueblos indígenas. <br />
				<br />
				La influencia del indigenismo se puede ver en <a href='schools/modernism.php'> Modernismo brasileño </a>, donde la cultura indígena se representa nuevamente como la raíz del pueblo brasileño y la identidad nacional, especialmente en el trabajo <a href = 'books / 00000H.php'> Macunaíma </a>, por <a href='users/ANDRADEmario.php'> Mário de Andrade </a>.
				<br />";
			}
		?>
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "Escritores Indianistas";}
						if ($_COOKIE['lang'] == 'en') {echo "Indianism Writers";}
						if ($_COOKIE['lang'] == 'es') {echo "Escritores del Indianismo";}
					?>
					</h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('ALENCARjose','DIASgoncalves');
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