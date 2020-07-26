<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000A'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']].' - ';
			}
			include '../design/metadata.php'; 
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '00000A'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "<a name='goto1'></a>
						<h1> Resenha </h1>
						Originalmente Iracema - Lenda do Ceará, é um romance brasileiro publicado em 1865 e escrito por José de Alencar, faz parte da trilogia indianista do autor, 
						sendo os outros dois romances O Guarani e Ubirajara. Para José de Alencar, Iracema é uma \"Lenda do Ceará\". É também, segundo diversos historiadores e 
						críticos, uma prosa, uma obra poética ou um épico, todos esses termos enfatizam características da obra como o heroísmo, a narrativa, a mitologia e a 
						poesia. Iracema é um anagrama da palavra \"América\", mas também tem seu significado em Tupi e Nheengatu, que é \"saída de mel, saída de abelhas, enxame\". 
						Apesar de José de Alencar explicar que Iracema é um termo da língua tupi que significa \"lábios de mel\", não existe esse sentido para a palavra na lígua 
						tupi. Além da protagonista, vários personagens indígenas possuem nomes vindos do tupi, obviamente. Dentre eles estão Caubi (ka'aoby, mato verde), Moacir 
						(moasy, dolorido / magoado) e Irapuã (eirapu'a, designação para as abelhas tropicais sem ferrão.)
						<br />
						O encontro da natureza e da civilização, representados em Iracema e Martim, é marcado pela diferenciação da medida do tempo na obra, aparece tanto uma 
						medida baseada na percepção da natureza, como o sol e as estrelas, quanto uma medida histórica e cronológica. A história se passa no início do século XVII,
						neste contexto Portugal foi invadido pela Espanha e assim vigorou a União Ibérica, e por isso a dinastia castelhana reinava tanto na metrópole Portugal 
						quanto em suas colônias ultramarinas, como o Brasil. Na obra também é possível perceber a exaltação à beleza nacional através de diversas figuras de
						linguagem, como metáforas e comparações.<br />
						<hr>
						<a name='goto2'></a>
						<h1> Personagens </h1>
						<ul>
						<li><b>Iracema: </b>índia da tribo dos tabajaras, fez um voto de virgindade. Filha de Araquém, velho pajé.</li>
						<li><b>Martim: </b>guerreiro branco, se apaixona por Iracema, amigo dos potiguaras, que lhe deram o nome de Coatiabo.</li>
						<li><b>Andira: </b>velho guerreiro, irmão de Araquém</li>
						<li><b>Caubi: </b>índio tabajara, irmão de Iracema.</li>
						<li><b>Moacir: </b>filho de Iracema e Martim, o primeiro brasileiro miscigenado.</li>
						<li><b>Poti: </b>herói dos potiguaras, amigo que se considerava irmão de Martim.</li>
						<li><b>Irapuã: </b>chefe dos guerreiros Tabajaras, apaixonado por Iracema.</li>
						<li><b>Jacaúna: </b>chefe dos guerreiros potiguaras, irmão de Poti.</li>
						<li><b>Araquém: </b>pajé da tribo tabajara. Pai de Iracema e Caubi.</li>
						<li><b>Batuirité: </b>o avô de Poti. Chama Martim de \"Gavião Branco\".</li>
						<li><b>Japi: </b>cão de Martim. \"Japi\" é o nome de um pássaro (Cacicus cela).</li>
						</ul>
						<hr>
						<a name='goto3'></a>
						<h1> Adaptações </h1>
						<a href='https://m.imdb.com/title/tt0184619/' target='_blank'> Iracema, a Virgem dos Lábios de Mel (1979) - Carlos Coimbra
						</a>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "<a name='goto1'> </a>
						<h1> Review </h1>
						Originally Iracema - The Legend of Ceará, it is a Brazilian novel published in 1865 and written by José de Alencar, it is part of the author's Indianist 
						trilogy, the other two novels being The Guarani and Ubirajara. For José de Alencar, Iracema is a \"Legend of Ceará\" (Ceará is a Brazilian federative state). 
						It is also, according to several historians and critics, a prose, a poetic work or an epic, all of these terms emphasize characteristics of the work such 
						as heroism, narrative, mythology and poetry. Iracema is an anagram of the word \"America\", but it also has its meaning in Tupi and Nheengatu, which is 
						\"honey out, bee out, swarm\". Although José de Alencar explains that Iracema is a term in the Tupi language that means \"lips of honey\", there is no such 
						meaning for the word in Tupi language. In addition to the protagonist, several indigenous characters have names coming from the Tupi, obviously. Among them 
						are Caubi (ka'aoby, green forest), Moacir (moasy, sore / hurt) and Irapuã (eirapu'a, designation for stingless tropical bees.)
						<br />
						The encounter of nature and civilization, represented in Iracema and Martim, is marked by the differentiation of the measure of time in the work.
						measure based on the perception of nature, such as the sun and stars, as well as a historical and chronological measure. The story takes place in the early 
						17th century, in this context Portugal was invaded by Spain and thus the Iberian Union prevailed, which is why the Castilian dynasty reigned so much in the 
						metropolis Portugal and in its overseas colonies, such as Brazil. In the work it is also possible to perceive the exaltation of national beauty through 
						several figures of language, such as metaphors and comparisons. <br />
						<hr>
						<a name='goto2'> </a>
						<h1> Characters </h1>
						<ul>
						<li><b> Iracema: </b>an Indian from the Tabajaras tribe, took a vow of virginity. Daughter of Araquém, old shaman. </li>
						<li><b> Martim: </b>white warrior, falls in love with Iracema, a friend of the potiguaras, who gave him the name Coatiabo. </li>
						<li><b> Andira: </b>old warrior, brother of Araquém </li>
						<li><b> Caubi: </b>Tabajara Indian, brother of Iracema. </li>
						<li><b> Moacir: </b>son of Iracema and Martim, the first mixed Brazilian. </li>
						<li><b> Poti: </b>hero of the potiguaras, friend who considered himself brother of Martim. </li>
						<li><b> Irapuã: </b>chief of the Tabajaras warriors, in love with Iracema. </li>
						<li><b> Jacaúna: </b>chief of the potiguaras warriors, brother of Poti. </li>
						<li><b> Araquém: </b>shaman of the tabajara tribe. Father of Iracema and Caubi. </li>
						<li><b> Batuirité: </b>Poti's grandfather. He calls Martim \"White Hawk\". </li>
						<li><b> Japi: </b>Martim's dog. \"Japi\" is the name of a bird (Cacicus cela). </li>
						</ul>
						<hr>
						<a name='goto3'> </a>
						<h1> Adaptations </h1>
						<a href='https://m.imdb.com/title/tt0184619/' target='_blank'> Iracema, a Virgem dos Lábios de Mel (1979) - Carlos Coimbra
						</a>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "<a name='goto1'> </a>
						<h1> Revisión </h1>
						Originalmente Iracema - La leyenda de Ceará, es una novela brasileña publicada en 1865 y escrita por José de Alencar, es parte de la Indianist del autor.
						trilogía, las otras dos novelas son The Guarani y Ubirajara. Para José de Alencar, Iracema es una \"Leyenda de Ceará\" (Ceará es un estado federativo 
						brasileño). También es, según varios historiadores y críticos, una prosa, una obra poética o una epopeya, todos estos términos enfatizan las 
						características de la obra, como heroísmo, narrativa, mitología y poesía. Iracema es un anagrama de la palabra \"América\", pero también tiene su significado 
						en Tupi y Nheengatu, que es \"Miel, abeja, enjambre\". Aunque José de Alencar explica que Iracema es un término en el idioma tupí que significa \"labios de 
						miel\", no existe tal significado de la palabra en idioma tupí. Además del protagonista, varios personajes indígenas tienen nombres que provienen de los 
						Tupi, obviamente. Entre ellos son Caubi (ka'aoby, bosque verde), Moacir (moasy, dolor / dolor) e Irapuã (eirapu'a, designación para las abejas tropicales 
						sin aguijón).
						<br />
						El encuentro de la naturaleza y la civilización, representado en Iracema y Martim, está marcado por la diferenciación de la medida del tiempo en el trabajo.
						medida basada en la percepción de la naturaleza, como el sol y las estrellas, así como una medida histórica y cronológica. La historia tiene lugar a 
						principios de Siglo XVII, en este contexto Portugal fue invadido por España y por lo tanto prevaleció la Unión Ibérica, por lo que la dinastía castellana 
						reinó tanto en el metrópolis de Portugal y en sus colonias de ultramar, como Brasil. En el trabajo también es posible percibir la exaltación de la belleza 
						nacional a través de varias figuras del lenguaje, como metáforas y comparaciones. <br />
						<hr>
						<a name='goto2'> </a>
						<h1> Personajes </h1>
						<ul>
						<li><b> Iracema: </b>un indio de la tribu Tabajaras, hizo un voto de virginidad. Hija de Araquém, viejo chamán. </li>
						<li><b> Martim: </b>guerrero blanco, se enamora de Iracema, un amigo de las potiguaras, que le dio el nombre de Coatiabo. </li>
						<li><b> Andira: </b>viejo guerrero, hermano de Araquém </li>
						<li><b> Caubi: </b>indio Tabajara, hermano de Iracema. </li>
						<li><b> Moacir: </b>hijo de Iracema y Martim, el primer brasileño mixto. </li>
						<li><b> Poti: </b>héroe de las potiguaras, amigo que se consideraba hermano de Martim. </li>
						<li><b> Irapuã: </b>jefe de los guerreros Tabajaras, enamorado de Iracema. </li>
						<li><b> Jacaúna: </b>jefe de los guerreros potiguaras, hermano de Poti. </li>
						<li><b> Araquém: </b>chamán de la tribu tabajara. Padre de Iracema y Caubi. </li>
						<li><b> Batuirité: </b>el abuelo de Poti. Él llama a Martim \"White Hawk\". </li>
						<li><b> Japi: </b>el perro de Martim. \"Japi\" es el nombre de un pájaro (Cacicus cela). </li>
						</ul>
						<hr>
						<a name='goto3'> </a>
						<h1> Adaptaciones </h1>
						<a href='https://m.imdb.com/title/tt0184619/' target='_blank'> Iracema, a Virgem dos Lábios de Mel (1979) - Carlos Coimbra
						</a>
						<hr>";
					}
				?>
			</div>
			<?php $book = '00000A'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'ALENCARjose'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>