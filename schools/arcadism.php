<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Arcadism';
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
			echo "O Arcadismo foi um movimento literário que surgiu na Europa no século XVIII, e por isso também é chamado de Setecentismo (escritores do século 18). O Arcadismo faz parte de um movimento artístico maior chamado Neoclassicismo, que também se manifestou na pintura, escutura & arquitetura. A Etimologia da palavra ".'"arcadismo"'." deriva de um semideus da mitologia grega, Arcas, filho de Zeus & Calisto, que por sua vez, originou o nome Arcádia, uma região no sul da Grécia. Ele se manifestou em países como a França, Itália & Espanha, mas causou maior renovação em Portugal, pois durante este tempo a cidade de Lisboa estava sendo reformada por Marquês de Pombal, depois do grande terremoto de Lisboa de 1755, e no chamado Período Pombalino, foi fundada a Árcadia Lusitana, uma associação literária que visava resgatar os valores renascentistas para Portugal.<br />
				<br />
				Tanto o Neoclassicismo quanto sua manifestação literária, o Arcadismo, possuem muitas influências da cultura greco-romana, relembrando inclusive os ideais Renascentistas. Diversos gêneros literários da literatura clássica foram reinventados como o gênero Épico, Lírico e Satírico, que eram os gêneros propostos pelo filósofo <a href='users/ARISTOTLE.php'>Aristóteles</a>. A literatura arcadista é conhecida por fazer referência á mitologia grega e suas divindades, utilizando a estética pagã. <br />
				<br />
				Além disso, priorizaram a razão, a valorização á ciência e os ideais Iluministas vigentes em seu tempo. E por este motivo os escritores arcadistas se opõem ao <a href='schools/baroque.php'>Barroco</a>, um movimento literário baseado na religião, antíteses e paradoxos, contrastando com a simplicidade e a racionalidade do Arcadismo. Os apoiadores do Arcadismo defendiam que um poema deveria ser natural e simples como a natureza, removendo assim os detalhes considerados inúteis e as palavras complicadas.<br />
				É importante acrescentar que o que era considerado de difícil entendimento no século 17 é bem diferente do conceito aplicado aos dias de hoje, pois a língua é viva e está sempre em constante desenvolvimento.<br />
				<br />
				Porém, a característica principal do movimento Arcadista é buscar a beleza da vida na paz e o sentido da vida na <b>natureza</b>, buscando se afastar do estilo de vida urbano e do ambiente da cidade. Por esta razão os escritores arcadistas buscam sempre se aproximar de uma vida idealizada, baseada no estilo de vida bucólico, pastoral, do campo, diferentes da vida que levavam no ambiente urbano. Geralmente os escritores arcadistas usam pseudônimos para se passarem por um alter-ego, um personagem, um eu-lírico que vive em uma realidade diferente do autor. Vários termos em latim foram cunhados para representar estes ideais de escapismo, são eles:
				<br />
				<ul>
				<li><b>Fugere Urbem: </b>Fugir do urbano, para os arcadistas, a cidade não era o ambiente ideal para viver, portanto, a fuga da urbanidade era uma meta a ser alcançada.</li>
				<li><b>Locus Amoenus: </b>Lugar ameno, esse preceito afirma que o campo, o ambiente bucólico, é o ideal para o homem.</li>
				<li><b>Carpe Diem: </b>Aproveite o momento, segundo esse preceito, é necessário aproveitar o presente para contemplar a realidade, sem preocupar-se com o futuro.</li>
				<li><b>Aurea Mediocritas: </b>Segundo essa expressão, o homem mediano é aquele que alcança a felicidade, não se devendo, assim, procurar riquezas e posses em vida.</li>
				<li><b>Inutilia Truncat: </b>Cortar o inútil, entendendo-se esse inútil como o excesso de rebuscamento da literatura Barroca.</li>
				</ul>
				Durante o tempo em que o Arcadismo se popularizou na Europa, muitos acontecimentos influenciaram os rumos deste movimento literário, são estes grandes eventos como a Independência dos Estados Unidos, a Revolução Francesa e a Revolução Industrial. Este era o tempo em que a burguesia estava conquistando poder e influência mundial, em detrimento da Aristocracia e das monarquias, este tempo eram os últimos anos da Idade Moderna.<br />
				<br />";
			}

			if ($_COOKIE['lang'] == 'en') {
			echo "Arcadism was a literary movement that emerged in Europe in the 18th century, which is why it is also called eighteenth century (18th century writers). Arcadism is part of a larger artistic movement called Neoclassicism, which also manifested itself in painting, sculpture & architecture. The Etymology of the word ". '" Arcadism "'." derives from a demigod of Greek mythology, Arcas, son of Zeus & Callisto, who in turn gave the name Arcádia, a region in southern Greece. It manifested itself in countries like France, Italy & Spain, but caused greater renewal in Portugal, because during this time the city of Lisbon was being renovated by Marquis de Pombal, after the great Lisbon earthquake of 1755, and in the so-called Pombaline Period , Árcadia Lusitana was founded, a literary association that aimed to rescue Renaissance values ​​for Portugal. <br />
				<br />
				Both Neoclassicism and its literary manifestation, Arcadism, have many influences from Greco-Roman culture, even recalling Renaissance ideals. Several literary genres of classical literature were reinvented as the Epic, Lyrical and Satirical genres, which were the genres proposed by the philosopher <a href='users/ARISTOTLE.php'> Aristotle </a>. Arcadian literature is known to refer to Greek mythology and its deities, using pagan aesthetics. <br />
				<br />
				In addition, they prioritized reason, the valorization of science and the Illuminist ideals in force at the time. And for this reason, arcadist writers are opposed to <a href='schools/baroque.php'> Baroque </a>, a literary movement based on religion, antitheses and paradoxes, contrasting with the simplicity and rationality of Arcadism. Supporters of Arcadism argued that a poem should be natural and simple like nature, thus removing details considered useless and complicated words. <br />
				It is important to add that what was considered difficult to understand in the 17th century is quite different from the concept applied today, as the language is alive and is always in constant development. <br />
				<br />
				However, the main characteristic of the Arcadist movement is to seek the beauty of life in peace and the meaning of life in <b> nature </b>, seeking to move away from the urban lifestyle and the city environment. For this reason, arcade writers always seek to approach an idealized life, based on the bucolic, pastoral, rural lifestyle, different from the life they led in the urban environment. Generally, arcade writers use pseudonyms to pass for an alter-ego, a character, a lyrical self who lives in a different reality from the author. Several Latin terms were coined to represent these ideals of escapism, they are:
				<br />
				<ul>
				<li> <b> Fugere Urbem: </b> Fleeing the urban, for arcaders, the city was not the ideal environment to live, therefore, the escape from urbanity was a goal to be achieved. </li>
				<li> <b> Locus Amoenus: </b> A pleasant place, this precept states that the countryside, the bucolic environment, is ideal for man. </li>
				<li> <b> Carpe Diem: </b> Take advantage of the moment, according to this precept, it is necessary to take advantage of the present to contemplate reality, without worrying about the future. </li>
				<li> <b> Aurea Mediocritas: </b> According to this expression, the average man is one who achieves happiness, and therefore, one should not seek wealth and possessions in life. </li>
				<li> <b> Inutilia Truncat: </b> Cut out the useless, understanding the useless as the excess of Baroque literature. </li>
				</ul>
				During the time when Arcadism became popular in Europe, many events influenced the direction of this literary movement, these are great events like the Independence of the United States, the French Revolution and the Industrial Revolution. This was the time when the bourgeoisie was gaining world power and influence, to the detriment of Aristocracy and monarchies, this time was the last years of the Modern Age. <br />
				<br />";
			}

			if ($_COOKIE['lang'] == 'es') {
			echo "El arcadismo fue un movimiento literario que surgió en Europa en el siglo XVIII, por eso también se le llama siglo XVIII (escritores del siglo XVIII). El arcadismo es parte de un movimiento artístico más grande llamado Neoclasicismo, que también se manifestó en la pintura, la escultura y la arquitectura. La Etimología de la palabra ". '" Arcadismo "'." deriva de un semidiós de la mitología griega, Arcas, hijo de Zeus y Calisto, que a su vez le dio el nombre de Arcádia, una región del sur de Grecia. Se manifestó en países como Francia, Italia y España, pero causó una mayor renovación en Portugal, porque durante este tiempo la ciudad de Lisboa fue renovada por el marqués de Pombal, después del gran terremoto de Lisboa de 1755, y en el llamado Período Pombalino. , Se fundó Árcadia Lusitana, una asociación literaria que tenía como objetivo rescatar los valores del Renacimiento para Portugal. <br />
				<br />
				Tanto el neoclasicismo como su manifestación literaria, el arcadismo, tienen muchas influencias de la cultura grecorromana, e incluso recuerdan los ideales del Renacimiento. Varios géneros literarios de la literatura clásica se reinventaron como los géneros épico, lírico y satírico, que fueron los géneros propuestos por el filósofo <a href='users/ARISTOTLE.php'> Aristóteles </a>. Se sabe que la literatura arcadiana se refiere a la mitología griega y sus deidades, usando estética pagana. <br />
				<br />
				Además, priorizaron la razón, la valorización de la ciencia y los ideales iluministas vigentes en ese momento. Y por esta razón, los escritores arcadistas se oponen al <a href='schools/baroque.php'> Baroque </a>, un movimiento literario basado en la religión, las antítesis y las paradojas, que contrasta con la simplicidad y la racionalidad del arcadismo. Los partidarios del arcadismo argumentaron que un poema debería ser natural y simple como la naturaleza, eliminando así los detalles considerados palabras inútiles y complicadas. <br />
				Es importante agregar que lo que se consideró difícil de entender en el siglo XVII es muy diferente del concepto aplicado hoy, ya que el lenguaje está vivo y siempre está en constante desarrollo. <br />
				<br />
				Sin embargo, la característica principal del movimiento arcadista es buscar la belleza de la vida en paz y el significado de la vida en la <b> naturaleza </b>, buscando alejarse del estilo de vida urbano y del entorno de la ciudad. Por esta razón, los escritores de arcade siempre buscan acercarse a una vida idealizada, basada en el estilo de vida bucólico, pastoral y rural, diferente de la vida que llevaron en el entorno urbano. En general, los escritores de arcade usan seudónimos para pasar por un alter-ego, un personaje, un yo lírico que vive en una realidad diferente a la del autor. Se acuñaron varios términos latinos para representar estos ideales de escapismo, son:
				<br />
				<ul>
				<li> <b> Fugere Urbem: </b> Huyendo de lo urbano, para los arqueros, la ciudad no era el entorno ideal para vivir, por lo tanto, el escape de la urbanidad era un objetivo a alcanzar. </li>
				<li> <b> Locus Amoenus: </b> Un lugar agradable, este precepto establece que el campo, el ambiente bucólico, es ideal para el hombre. </li>
				<li> <b> Carpe Diem: </b> Aproveche el momento, de acuerdo con este precepto, es necesario aprovechar el presente para contemplar la realidad, sin preocuparse por el futuro. </li>
				<li> <b> Aurea Mediocritas: </b> De acuerdo con esta expresión, el hombre promedio es aquel que logra la felicidad, y por lo tanto, uno no debe buscar riqueza y posesiones en la vida. </li>
				<li> <b> Inutilia Truncat: </b> Recorta lo inútil, entendiendo lo inútil como el exceso de literatura barroca. </li>
				</ul>
				Durante el tiempo en que el Arcadismo se hizo popular en Europa, muchos eventos influyeron en la dirección de este movimiento literario, estos son grandes eventos como la Independencia de los Estados Unidos, la Revolución Francesa y la Revolución Industrial. Este fue el momento en que la burguesía estaba ganando poder e influencia mundial, en detrimento de la aristocracia y las monarquías, esta vez fueron los últimos años de la Edad Moderna. <br />
				<br />";
			}
		?>
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "Escritores Arcadistas";}
						if ($_COOKIE['lang'] == 'en') {echo "Arcadism Writers";}
						if ($_COOKIE['lang'] == 'es') {echo "Escritores Arcadistas";}
					?>
					</h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('BOCAGEbarbosa','ANTONIOgonzaga','BASILIOgama','STRITAdurao','MANUELcosta');
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
		<!--<div class='brow'>
			Referências Biliográficas
			<br />
			<i>• <a href='https://pt.wikipedia.org/wiki/Arcadismo'>Wikipedia</a> • <a href='https://www.infoescola.com/literatura/arcadismo/'>Infoescola</a> • <a href='http://www.soliteratura.com.br/arcadismo/'>Só Literatura</a></i>
		</div>-->
		<?php include '../design/footer.php' ?>
	</body>
</html>