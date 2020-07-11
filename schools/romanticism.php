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
		<?php
			if ($_COOKIE['lang'] == 'pt') {
				echo "O Romantismo surgiu na Alemanha do século XIX no movimento Sturm und Drang (Tempestade e Ímpeto, em português), e se espalhou por toda a Europa. O Romantismo surge no contexto do início da idade contemporânea, da revolução francesa e a ascenção da classe burguesa no poder. A etimologia de seu nome vem da cidade de Roma e os idiomas românicos, isso pois os livros eram escritos em suas línguas locais, ao invés do latim. A burguesia buscou influenciar o mundo através da ideologia e da arte, e assim surge uma estética literária que valorizou os ideais da burguesia e as emoções, oposta ao Clacissimo e ao <a href='schools/arcadism.php'>Arcadismo</a>, considerado arte da nobreza. Na literatura romântica, três temas principais são aboradados: <b>o amor, a fé e a nação</b>, sendo que o nacionalismo é uma característca recorrente dos românticos. <br />
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
				<br />";
			}
			if ($_COOKIE['lang'] == 'en') {
				echo "Romanticism emerged in 19th century Germany in the Sturm und Drang movement (Tempest and Momentum, in Portuguese), and spread throughout Europe. Romanticism arises in the context of the beginning of the contemporary age, the French revolution and the rise of the bourgeois class in power. The etymology of its name comes from the city of Rome and the Romance languages, this because the books were written in their local languages, instead of Latin. The bourgeoisie sought to influence the world through ideology and art, and thus a literary aesthetic emerged that valued the ideals of the bourgeoisie and emotions, as opposed to Clacissimo and <a href='schools/arcadism.php'> Arcadism </ a >, considered art of the nobility. In romantic literature, three main themes are addressed: <b> love, faith and nation </b>, with nationalism being a recurring feature of romantics. <br />
				<br />
				A fundamental characteristic of Romanticism is the use and abuse of <b> universal emotions </b>, feelings that can be understood by any person in the world, be it sadness, love, hate or many others. Romantic stories explore these themes in such a way that they look like real events, through writing similar to a letter or diary. Romanticism sought original ideas to the detriment of the Greco-Roman and classical influences prevailing until then, that is why <b> meritocracy and individuality </b> are valued in romanticism, because the most valued artists are those who express their emotions, ideas and feelings, and are also extolled as characteristics of romantic heroes, if they run after their dreams, anything is possible. In this way, the plot of the stories became <b> Egocentric </b>, centered on the protagonist, for him, everything will always work out and everything revolves around his convictions, the characters of the plots are also idealized and distorted, the idealization of the perfect woman and the figure of the villains are created. <br />
				<br />
				Another great feature of Romanticism is <b> escapism and utopia </b>, through the imagination of romantic writers it is possible to write an ideal and perfect world, different from the hard and difficult reality, thus, many authors sought this utopia in the tales cavalry of medieval times. A great influence for this utopian thought of romanticism was the French Revolution, because after the bourgeois revolutionaries' delusion with the regime established by Robespiérre, they sought in art the dream of the bourgeois world. Romanticism is divided into three phases: <br />
				<br />
				<b> Ultrassentimental Romanticism: </b> In this phase, romantic literature addresses the suffering of the passionate and depressed protagonist, and exalts exacerbated sentimentality. In Germany, Johann Goethe was the most expressive author. <br />
				<br />
				<b> Social Romanticism: </b> in this phase, social ills and injustices started to be addressed, but without ceasing to have romantic characteristics, the greatest representative of this phase was the French <a href = 'schools / HUGOvictor.php '> Victor Hugo </a>. <br />
				<br />
				<b> Nationalistic Romanticism: </b> in this phase, the love for the homeland, the reporting of historical facts and the creation of national symbols was a recurring characteristic, leading to the creation of <a href='schools/indianism.php'> Indianism </a> in Brazil. <br />
				<br />";
			}
			if ($_COOKIE['lang'] == 'es') {
				echo "El romanticismo surgió en la Alemania del siglo XIX en el movimiento Sturm und Drang (Tempest and Momentum, en portugués), y se extendió por toda Europa. El romanticismo surge en el contexto del comienzo de la era contemporánea, la revolución francesa y el surgimiento de la clase burguesa en el poder. La etimología de su nombre proviene de la ciudad de Roma y las lenguas romances, esto porque los libros fueron escritos en sus idiomas locales, en lugar de latín. La burguesía buscó influir en el mundo a través de la ideología y el arte, y así surgió una estética literaria que valoraba los ideales de la burguesía y las emociones, a diferencia de Clacissimo y <a href='schools/arcadism.php'> Arcadism </ a >, considerado arte de la nobleza. En la literatura romántica, se abordan tres temas principales: <b> amor, fe y nación </b>, siendo el nacionalismo una característica recurrente de los románticos. <br />
				<br />
				Una característica fundamental del romanticismo es el uso y abuso de <b> emociones universales </b>, sentimientos que pueden ser entendidos por cualquier persona en el mundo, ya sea tristeza, amor, odio u muchos otros. Las historias románticas exploran estos temas de tal manera que parecen eventos reales, a través de una escritura similar a una carta o diario. El romanticismo buscó ideas originales en detrimento de las influencias grecorromanas y clásicas que prevalecían hasta entonces, por eso la <b> meritocracia e individualidad </b> se valoran en el romanticismo, porque los artistas más valorados son aquellos que expresan sus emociones, ideas y sentimientos, y también son ensalzados como características de héroes románticos, si corren tras sus sueños, todo es posible. De esta manera, la trama de las historias se volvió <b> Egocéntrica </b>, centrada en el protagonista, para él, todo siempre funcionará y todo gira en torno a sus convicciones, los personajes de las tramas también están idealizados y distorsionados, Se crea la idealización de la mujer perfecta y la figura de los villanos. <br />
				<br />
				Otra gran característica del romanticismo es <b> escapismo y utopía </b>, a través de la imaginación de los escritores románticos es posible escribir un mundo ideal y perfecto, diferente de la realidad dura y difícil, por lo tanto, muchos autores buscaron esta utopía en las historias. caballería de la época medieval. Una gran influencia para este pensamiento utópico del romanticismo fue la Revolución Francesa, porque después de la desilusión de los revolucionarios burgueses con el régimen establecido por Robespiérre, buscaron en el arte el sueño del mundo burgués. El romanticismo se divide en tres fases: <br />
				<br />
				<b> Romanticismo ultrasensorial: </b> En esta fase, la literatura romántica aborda el sufrimiento del protagonista apasionado y deprimido, y exalta el sentimentalismo exacerbado. En Alemania, Johann Goethe fue el autor más expresivo. <br />
				<br />
				<b> Romanticismo social: </b> en esta fase, los males e injusticias sociales comenzaron a abordarse, pero sin dejar de tener características románticas, el mayor representante de esta fase fue el francés <a href = 'schools / HUGOvictor.php '> Victor Hugo </a>. <br />
				<br />
				<b> Romanticismo nacionalista: </b> en esta fase, el amor por la patria, la divulgación de hechos históricos y la creación de símbolos nacionales fue una característica recurrente, que condujo a la creación de <a href='schools/indianism.php'> Indianismo </a> en Brasil. <br />
				<br />";
			}
		?>
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "Escritores Românticos";}
						if ($_COOKIE['lang'] == 'en') {echo "Romanticism Writers";}
						if ($_COOKIE['lang'] == 'es') {echo "Escritores del Romanticismo";}
					?>
					</h1>
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