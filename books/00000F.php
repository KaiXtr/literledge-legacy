<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000F'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']];
			}
			include '../design/metadata.php'; 
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '00000F'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Os Sertões é um livro do escritor e jornalista brasileiro Euclides da Cunha, publicado em 1902. É considerado como o primeiro livro-reportagem brasileiro.
					Trata da Guerra de Canudos (1896-1897), no interior da Bahia. Euclides da Cunha presenciou uma parte da guerra como correspondente do jornal O Estado de S. Paulo. Pertence, ao mesmo tempo, à prosa científica e à prosa artística. Pode ser entendido como uma obra de Sociologia, Geografia, História ou crítica humana, mas não é errado lê-lo como uma epopeia da vida sertaneja em sua luta diária contra a paisagem e a incompreensão da elite.

					O crítico Enio Squeff considera Os Sertões uma das três grandes epopeias da língua portuguesa, podendo ser comparada à Ilíada — assim como Os Lusíadas podem ser comparados à Eneida e Grande Sertão: Veredas, à Odisseia.

					Considerada uma obra pré-modernista, o estilo de Os sertões é conflituoso, angustiado, torturado. Dá a impressão de sofrimento e luta. O autor faz uso de muitas figuras de linguagem, às vezes omite as conjunções (assindetismo), outras repete-as reiteradamente (polissindetismo). Ocorre, com frequência, a mistura de termos de alta erudição tecno-científica com regionalismos populares e neologismos do próprio autor.

					Euclides da Cunha compartilha de uma visão eugênica á respeito do racismo, ele deixa claro o que pensa sobre os mestiços ao afirmar que são raças inferiores.

					Como contribuição às ciências sociais, encontra-se nesta obra de Euclides da Cunha a separação da nação brasileira entre os povos litorâneos e os interioranos. A compreensão de cada uma dessas partes permitiria a compreensão do país como um todo, uma vez que se tinha nas cidades litorâneas polos de desenvolvimento político e econômico e no interior do país condições de atraso econômico que subjugavam suas populações à fome e à miserabilidade. No entanto, ao analisar os fatos ocorridos em Canudos, o autor refuta a noção de que no litoral se encontrariam condições de avanço civilizatório em oposição ao interior. Pelo contrário, aponta que tanto os litorâneos quanto os interioranos, cada qual em suas especificidades, se encontrariam em um estádio bárbaro de sociedade, bastava atentar para a crueldade com que se reprimiu o movimento de Antônio Conselheiro. Além do que, tanto uns quanto os outros eram dados ao fanatismo, fosse pela República de Floriano Peixoto, fosse pela religiosidade de Conselheiro.

					Esta sua noção de estádios bárbaros e civilizados de sociedade estão em consonância a seu pensamento evolucionista spenceriano. Também se alinha com isso sua metodologia em compreender as singularidades de cada elemento separadamente para, enfim, compreender o todo. No caso, buscou compreender as populações litorâneas e as interioranas como elementos do Brasil como um todo.
					<hr>
					<a name='goto2'></a>
					<h1> Curiosidades </h1>
					<ul>
					<li>O poeta e compositor Edeor de Paula compôs o samba-enredo Os Sertões para o desfile de 1976 da Em Cima da Hora.</li>
					<li>Em dezembro de 2010, foi lançada a versão em hq pela editora Desiderata, com roteiro de Carlos Ferreira e desenhos de Rodrigo Rosa.</li>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "<a name='goto1'> </a>
					<h1> Review </h1>
					Os Sertões is a book by Brazilian writer and journalist Euclides da Cunha, published in 1902. It is considered as the first Brazilian book-report.
					It deals with the Canudos War (1896-1897), in the interior of Bahia. Euclides da Cunha witnessed part of the war as a correspondent for the newspaper O Estado de S. Paulo. It belongs, at the same time, to scientific prose and artistic prose. It can be understood as a work of Sociology, Geography, History or human criticism, but it is not wrong to read it as an epic of country life in its daily struggle against the landscape and the incomprehension of the elite.

					The critic Enio Squeff considers Os Sertões to be one of the three great epics of the Portuguese language, which can be compared to Ilíada - just like Os Lusíadas can be compared to Eneida and Grande Sertão: Veredas, to Odisseia.

					Considered a pre-modernist work, the style of Os sertões is conflicted, distressed, tortured. It gives the impression of suffering and struggle. The author makes use of many figures of speech, sometimes omitting conjunctions (asymmetric), sometimes repeating them over and over again (polysymbolism). There is often a mixture of terms of high techno-scientific scholarship with popular regionalisms and neologisms of the author himself.

					Euclides da Cunha shares a eugenic vision about racism, he makes clear what he thinks about mestizos when he says that they are inferior races.

					As a contribution to the social sciences, in this work by Euclides da Cunha is the separation of the Brazilian nation between coastal and interior peoples. The understanding of each one of these parts would allow the understanding of the country as a whole, since the coastal cities had poles of political and economic development and in the interior of the country conditions of economic backwardness that subjugated their populations to hunger and poverty. However, when analyzing the events that occurred in Canudos, the author refutes the notion that on the coast there would be conditions for civilizing advancement as opposed to the interior. On the contrary, it points out that both the coastlines and the interiors, each in their specificities, would find themselves in a barbaric stage of society, it was enough to pay attention to the cruelty with which the movement of Antônio Conselheiro was repressed. In addition to that, both were given to fanaticism, either by the Republic of Floriano Peixoto, or by the religiousness of Conselheiro.

					His notion of barbaric and civilized stages of society is in line with his Spencerian evolutionary thinking. This also aligns its methodology in understanding the singularities of each element separately in order to, finally, understand the whole. In this case, it sought to understand coastal and interior populations as elements of Brazil as a whole.
					<hr>
					<a name='goto2'> </a>
					<h1> Curiosities </h1>
					<ul>
					<li> The poet and composer Edeor de Paula composed the samba-enredo Os Sertões for the 1976 parade of Em Cima da Hora. </li>
					<li> In December 2010, the HQ version was released by the publisher Desiderata, with a script by Carlos Ferreira and drawings by Rodrigo Rosa. </li>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "<a name='goto1'> </a>
					<h1> Revisión </h1>
					Os Sertões es un libro del escritor y periodista brasileño Euclides da Cunha, publicado en 1902. Está considerado como el primer libro-informe brasileño.
					Se trata de la Guerra de los Canudos (1896-1897), en el interior de Bahía. Euclides da Cunha fue testigo de parte de la guerra como corresponsal del periódico O Estado de S. Paulo. Pertenece, al mismo tiempo, a la prosa científica y a la prosa artística. Puede entenderse como una obra de sociología, geografía, historia o crítica humana, pero no está mal interpretarlo como una epopeya de la vida en el campo en su lucha diaria contra el paisaje y la incomprensión de la élite.

					El crítico Enio Squeff considera que Os Sertões es una de las tres grandes epopeyas de la lengua portuguesa, que se puede comparar con Ilíada, al igual que Os Lusíadas se puede comparar con Eneida y Grande Sertão: Veredas, con Odisseia.

					Considerado un trabajo premodernista, el estilo de Os sertões es conflictivo, angustiado, torturado. Da la impresión de sufrimiento y lucha. El autor hace uso de muchas formas de hablar, a veces omite conjunciones (asimetrías), otras veces las repite repetidamente (polisimbolismo). A menudo hay una mezcla de términos de alta tecnología tecnocientífica con regionalismos populares y neologismos del propio autor.

					Euclides da Cunha comparte una visión eugenésica sobre el racismo, deja en claro lo que piensa sobre los mestizos al afirmar que son razas inferiores.

					Como contribución a las ciencias sociales, en este trabajo de Euclides da Cunha está la separación de la nación brasileña entre los pueblos costeros e interiores. La comprensión de cada una de estas partes permitiría la comprensión del país en su conjunto, ya que las ciudades costeras tenían polos de desarrollo político y económico y en el interior del país condiciones de atraso económico que sometieron a sus poblaciones al hambre y la pobreza. Sin embargo, al analizar los eventos que ocurrieron en Canudos, el autor refuta la noción de que en la costa habría condiciones para el avance civilizador en oposición al interior. Por el contrario, señala que tanto las costas como los interiores, cada uno en sus especificidades, se encontrarían en una etapa bárbara de la sociedad, fue suficiente para prestar atención a la crueldad con la que se reprimió el movimiento de Antônio Conselheiro. Además de eso, ambos fueron dados al fanatismo, ya sea por la República de Floriano Peixoto, o por la religiosidad de Conselheiro.

					Su noción de etapas bárbaras y civilizadas de la sociedad está en línea con su pensamiento evolutivo de Spencer. Esto también alinea su metodología en la comprensión de las singularidades de cada elemento por separado para, finalmente, comprender el todo. En este caso, buscó entender a las poblaciones costeras e interiores como elementos de Brasil en su conjunto.
					<hr>
					<a name='goto2'> </a>
					<h1> Curiosidades </h1>
					<ul>
					<li> El poeta y compositor Edeor de Paula compuso el samba-enredo Os Sertões para el desfile de 1976 de Em Cima da Hora. </li>
					<li> En diciembre de 2010, la versión HQ fue lanzada por la editorial Desiderata, con un guión de Carlos Ferreira y dibujos de Rodrigo Rosa. </li>
						";
					}
				?>
			</div>
			<?php $book = '00000F'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'CUNHAeuclides'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>