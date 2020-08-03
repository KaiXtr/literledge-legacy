<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Symbolism';
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
				echo "O Simbolismo foi uma escola literária de origem Francesa que nasceu no final do século XIX. Teve grande influência principalmente para a poesia, mas também contribuiu para a prosa, por ser o último movimento literário criado antes do Modernismo, é considerado um movimento <b>pré-moderno.</b> O nome vem da principal premissa do simbolismo, que é resgatar a simbologia e a linguagem universal, através de palavras que mesmo fora de um contexto, todos possam entender. Os simbolistas estudam a natureza e decifram sua essência e seu comportamento além do material, se preocupando mais com o estado espiritual das coisas e se afastando tanto da objetividade do <a href='schools/realism.php'>Realismo</a> quanto as representações animalescas do <a href='schools/naturalism.php'>Naturalismo.</a> Também foi contra o rigor da métrica do <a href='schools/parnassianism.php'>Parnasianismo</a>, pois adotaram uma poesia menos rígida, com mais musicalidade e liberdade de escrita.<br />
				<br />
				Assim como vários movimentos literários de seu tempo, o Simbolismo também foi fortemente influenciado pela filosofia <b>Positivista</b> de Augusto Comte e pelas crescentes descobertas científicas de Charles Darwin, e viveu no contexto da Segunda Revolução Industrial e seus efeitos na sociedade. Assim como o Realismo e o Naturalismo, o Simbolismo também observa a realidade criada pela industrialização e pela urbanização e as injustiças sociais causadas pelos mesmos, uma realidade que contradiz a idéia de progresso das fábricas e avanços tecnológicos. Como os simbolistas tem um enfoque maior na esfera espiritual, eles buscam uma reconectividade entre o terreno e o celestial, o céu e a terra, o bem e o mal, buscando o resgate de uma humanidade deteriorada, por conta disto eram chamados de <i>decadentistas</i> e <i>malditos</i>. Os simbolistas criticaram os ideais racionalistas e cientificistas de seu tempo, pois em meio á tantos avanços tecnológicos e estudos científicos, algo estava faltando: os valores transcendentais e a existência individual, segundo eles. Por essa aproximação com algo fora da realidade, o Simbolismo tem certas características em comum com o <a href='schools/romanticism.php'>Romantismo</a>.<br />
				<br />
				Na poesia simbolista, a característica mais comum é a abordagem da <b>temática psicológica, espiritual e religiosa</b>, que envolve não só as religiões judaico-cristãs, mas também as tradições e crenças orientais. Através de descrições sombrias, antíteses e contradições, o jogo de palavras cria uma conexão entre o terreno e o celestial, algo já praticado no período do <a href='schools/baroque.php'>Barroco</a>. A idéia de <b>vazio e silêncio</b> é constantemente apresentada nos poemas simbolistas através de rupturas sintáticas, espaços vazios, reticências e pausas. Além disto, sinestesias são muito utilizadas, ou seja, descrições do empírico e das sensações dos 5 sentidos, que vão além de uma simples descrição de objetos materiais, mas dos símbolos da natureza. <br />
				<br />
				Na França, a figura principal foi <a href='users/BAUDELAIREcharles.php'>Charles Baudelaire</a>, o precursor do Simbolismo, apesar de ter sido grande influência no movimento, ele já não estava vivo quando o Simbolismo surgiu, por isso é considerado um pré-simbolista. Já no Brasil, o simbolismo não teve grande repercussão e não possui o mesmo caráter boêmio da cena francesa.
				<br />";
			}
			if ($_COOKIE['lang'] == 'en') {
				echo "Symbolism was a literary school of French origin that was born in the late 19th century. It had a great influence mainly on poetry, but it also contributed to prose, being the last literary movement created before Modernism, it is considered a pre-modern <b> movement. </b> The name comes from the main premise of symbolism, which is to rescue the symbology and the universal language, through words that even outside a context, everyone can understand. Symbolists study nature and decipher its essence and behavior beyond the material, being more concerned with the spiritual state of things and moving away both from the objectivity of <a href='schools/realism.php'> Realism </a> and the animal representations of <a href='schools/naturalism.php'> Naturalism. </a> It was also against the rigor of the <a href='schools/parnassianism.php'> Parnasianism </a> metric, as they adopted a less rigid poetry, with more musicality and freedom of writing. <br />
				<br />
				Like several literary movements of its time, Symbolism was also strongly influenced by Augusto Comte's <b> Positivist </b> philosophy and by Charles Darwin's growing scientific discoveries, and lived in the context of the Second Industrial Revolution and its effects on society . Like Realism and Naturalism, Symbolism also observes the reality created by industrialization and urbanization and the social injustices caused by them, a reality that contradicts the idea of ​​progress in factories and technological advances. As the symbolists have a greater focus on the spiritual sphere, they seek a reconnectivity between the earth and the celestial, heaven and earth, good and evil, seeking the rescue of a deteriorated humanity, because of this they were called <i > decadent </i> and <i> accursed </i>. Symbolists criticized the rationalist and scientific ideals of their time, because in the midst of so many technological advances and scientific studies, something was missing: transcendental values ​​and individual existence, according to them. Because of this approach to something out of reality, Symbolism has certain characteristics in common with <a href='schools/romanticism.php'> Romanticism </a>. <br />
				<br />
				In symbolist poetry, the most common feature is the <b> psychological, spiritual and religious </b> approach, which involves not only Judeo-Christian religions, but also Eastern traditions and beliefs. Through dark descriptions, antitheses and contradictions, the play on words creates a connection between the earth and the celestial, something already practiced in the <a href='schools/baroque.php'> Baroque </a> period. The idea of ​​<b> emptiness and silence </b> is constantly presented in symbolist poems through syntactic ruptures, empty spaces, reticences and pauses. In addition, synesthesias are widely used, that is, descriptions of the empirical and the sensations of the 5 senses, which go beyond a simple description of material objects, but of the symbols of nature. <br />
				<br />
				In France, the main figure was <a href='users/BAUDELAIREcharles.php'> Charles Baudelaire </a>, the forerunner of Symbolism, although he was a major influence on the movement, he was no longer alive when Symbolism appeared, so he is considered a pre-symbolist. In Brazil, the symbolism did not have much repercussion and does not have the same bohemian character as the French scene.
				<br />";
			}
			if ($_COOKIE['lang'] == 'es') {
				echo "El simbolismo fue una escuela literaria de origen francés que nació a fines del siglo XIX. Tuvo una gran influencia principalmente en la poesía, pero también contribuyó a la prosa, siendo el último movimiento literario creado antes del Modernismo, se considera un <b> movimiento premoderno. </b> El nombre proviene de la premisa principal del simbolismo, que es rescatar la simbología y el lenguaje universal, a través de palabras que incluso fuera de un contexto, todos pueden entender. Los simbolistas estudian la naturaleza y descifran su esencia y comportamiento más allá del material, se preocupan más por el estado espiritual de las cosas y se alejan tanto de la objetividad del <a href='schools/realism.php'> Realismo </a> como las representaciones animales de <a href='schools/naturalism.php'> Naturalism. </a> También fue en contra del rigor de la métrica <a href='schools/parnassianism.php'> Parnasianism </a>, ya que adoptaron una poesía menos rígida, con más musicalidad y libertad de escritura. <br />
				<br />
				Al igual que varios movimientos literarios de su tiempo, el simbolismo también estuvo fuertemente influenciado por la filosofía <b> positivista </b> de Augusto Comte y por los crecientes descubrimientos científicos de Charles Darwin, y vivió en el contexto de la Segunda Revolución Industrial y sus efectos en la sociedad. . Al igual que el realismo y el naturalismo, el simbolismo también observa la realidad creada por la industrialización y la urbanización y las injusticias sociales causadas por ellas, una realidad que contradice la idea de progreso en las fábricas y los avances tecnológicos. Como los simbolistas tienen un mayor enfoque en la esfera espiritual, buscan una reconexión entre la tierra y lo celestial, el cielo y la tierra, el bien y el mal, buscando el rescate de una humanidad deteriorada, por eso se les llamó <i > decadente </i> y <i> maldito </i>. Los simbolistas criticaron los ideales racionalistas y científicos de su tiempo, porque en medio de tantos avances tecnológicos y estudios científicos, faltaba algo: valores trascendentales y existencia individual, según ellos. Debido a este enfoque de algo fuera de la realidad, el simbolismo tiene ciertas características en común con <a href='schools/romanticism.php'> Romanticismo </a>. <br />
				<br />
				En la poesía simbolista, la característica más común es el enfoque <b> psicológico, espiritual y religioso </b>, que involucra no solo las religiones judeocristianas, sino también las tradiciones y creencias orientales. A través de sombrías descripciones, antítesis y contradicciones, el juego de palabras crea una conexión entre la tierra y lo celestial, algo ya practicado en el período <a href='schools/baroque.php'> Baroque </a>. La idea de <b> vacío y silencio </b> se presenta constantemente en poemas simbolistas a través de rupturas sintácticas, espacios vacíos, reticencias y pausas. Además, las sinestesias son ampliamente utilizadas, es decir, descripciones de lo empírico y las sensaciones de los 5 sentidos, que van más allá de una simple descripción de los objetos materiales, sino de los símbolos de la naturaleza. <br />
				<br />
				En Francia, la figura principal era <a href='users/BAUDELAIREcharles.php'> Charles Baudelaire </a>, el precursor del simbolismo, aunque fue una influencia importante en el movimiento, ya no estaba vivo cuando apareció el simbolismo, entonces es considerado un pre-simbolista. En Brasil, el simbolismo no tuvo mucha repercusión y no tiene el mismo carácter bohemio que la escena francesa.
				<br />";
			}
		?>
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "Escritores Simbolistas";}
						if ($_COOKIE['lang'] == 'en') {echo "Symbolism Writers";}
						if ($_COOKIE['lang'] == 'es') {echo "Escritores del Simbolismo";}
					?>
					</h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('BAUDELAIREcharles','ANJOSaugusto','CRUZsousa','GILKAmachado','QUEIROZeca');
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