<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000G'");
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
			<?php $book = '00000G'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					A Divina Comédia  (em italiano: Divina Commedia, originalmente Comedìa e, mais tarde, denominada Divina Comédia por Giovanni Boccaccio) é um poema de viés épico e teológico da literatura italiana e mundial, escrito por Dante Alighieri no século XIV e dividido em três partes: o Inferno, o Purgatório e o Paraíso.
					Escrito originalmente em italiano vulgar baseado no dialeto toscano da época e bastante semelhante ao italiano atual, e não em latim como fazia-se comum à época, trata-se de um poema articulado por trilogias, entre elas as formadas por Razão - Humano - Fé, Onça - Leão - Loba, Pai - Filho - Espírito Santo; e com final feliz segundo sugerido pelo próprio nome: à época em que Dante escreveu o poema os textos eram separados entre Comédia, obras dotadas de finais felizes, e Tragédias, com finais contrastantes aos das Comédias.

					Não há registro da data exata em que foi escrita, mas as opiniões mais reconhecidas asseguram que o Inferno pode ter sido composto entre 1304 e 1307-1308, o Purgatório de 1307-1308 a 1313-1314 e, por último, o Paraíso, de 1313-1314 a 1321 (esta última data coincide com a morte de Dante).

					O poema - talvez o maior do Ocidente - descreve uma viagem onde se sucedem diversos acontecimentos. Sua força está na riqueza das alegorias, que tornam o relato atemporal.

					Dante escreveu a \"Comédia\" - um poema de estrutura épica, com propósitos filosóficos - no seu dialeto local, o florentino, que é uma variedade do toscano. O poeta demonstrou que o florentino (muito próximo do que hoje é conhecido como língua italiana), uma língua vulgar (em oposição ao latim, que se considerava como a língua apropriada para discursos mais sérios), era adequado para o mais elevado tipo de expressão, estabelecendo-o como italiano padrão. De fato, é a matriz do italiano atual.

					Há quem veja esta obra como a Suma Teológica, de São Tomás de Aquino, em verso.

					Grandes pintores de diferentes épocas criaram ilustrações para a Divina Comédia, destacando-se Botticelli, Gustave Doré e Dalí.

					A Divina Comédia é a fonte original mais acessível para a cosmovisão medieval, que dividia o Universo em círculos concêntricos. A obra moderna mais conhecida a respeito dessa cosmovisão é The Discarded Image, de C. S. Lewis, ilustrada por Gustave Doré.

					Explicações sobre o sentido do simbolismo na obra são complexas e muito debatidas, como é o caso de se saber exatamente o significado da amada Beatriz: seria ela apenas um amor carnal, o estado, a igreja, o amor metafísico ou outro? O próprio Dante confirma esta complexidade afirmando que a obra possui quatro sentidos sobrepostos: literal, moral, alegórico e místico.

					Cada uma das três partes do poema (Inferno, Purgatório e Paraíso) está dividida em 33 cantos, com mais um a título de introdução, a obra soma 100 cantos, número que significaria a perfeição da perfeição. Além do próprio Dante, três são os personagens principais: Virgílio, guia no inferno e purgatório, Beatriz guia no paraíso terrestre e São Bernardo, guia nas esferas celestes. A obra soma também 14.233 versos em, a partir de então chamados, \"tercetos dantescos\".

					Em 1919, Miguel Asín Palacios, um estudioso espanhol e sacerdote católico, publicou La Escatología musulmana en la Divina Comedia (Escatologia Islâmica na Divina Comédia), um relato de paralelos entre a filosofia islâmica inicial e a Divina Comédia. Palacios argumentou que Dante derivou muitas características e episódios sobre o além a partir dos escritos espirituais de Ibn Arabi e do Isra e Mi'raj ou a jornada noturna de Maomé para o céu. Este último é descrito no ahadith e no Kitab al Miraj (traduzido para o latim em 1264 ou pouco antes[10] como Liber Scalae Machometi, \"O Livro da Escada de Maomé\"), e tem semelhanças significativas com o Paradiso, como as sete partes da divisão do Paraíso, embora isso não seja exclusivo do Kitab al Miraj ou da cosmologia islâmica.[11]

					Algumas \"semelhanças superficiais\"[12] da Divina Comédia ao Resalat Al-Ghufran ou Epístola do Perdão de Al-Ma'arri também foram mencionadas neste debate. O Resalat Al-Ghufran descreve a jornada do poeta nos reinos da vida após a morte e inclui o diálogo com as pessoas no Céu e Inferno, embora, ao contrário do Kitab al Miraj, haja pouca descrição desses locais[13], e é improvável que Dante fez empréstimo deste trabalho.[14][15]

					Dante, no entanto, viveu em uma Europa de substancial contato literário e filosófico com o mundo muçulmano, encorajado por fatores como o averroísmo (\"Averrois, che'l gran comento feo\" Commedia, Inferno, IV, 144, significando \"Averróis, que escreveu o grande comentário\") e o patrocínio de Alfonso X de Castela. Dos doze sábios que Dante encontra no canto X do Paradiso, Tomás de Aquino e, mais ainda, Siger de Brabante foram fortemente influenciado pelos comentaristas árabes sobre Aristóteles.[16] O misticismo cristão medieval também compartilhava a influência neoplatônica dos sufis, como Ibn Arabi. O filósofo Frederick Copleston argumentou em 1950 que o respeitoso tratamento de Dante a Averróis, Avicena e Siger de Brabante indica seu reconhecimento de uma \"considerável dívida\" para com a filosofia islâmica.[16]

					Embora essa influência filosófica seja geralmente reconhecida, muitos acadêmicos não ficaram satisfeitos com o fato de Dante ter sido influenciado pelo Kitab al Miraj. O orientalista do século XX Francesco Gabrieli expressou ceticismo em relação às alegadas semelhanças, e à falta de evidência de um veículo através do qual poderiam ter sido transmitidas a Dante. Mesmo assim, enquanto rejeitava a probabilidade de algumas influências postuladas no trabalho de Palacios,[17] Gabrieli admitiu que era “pelo menos possível, se não provável, que Dante pudesse ter conhecido o Liber Scalae e tirado dele certas imagens e conceitos da escatologia muçulmana\". Pouco antes de sua morte, a filóloga italiana Maria Corti assinalou que, durante sua estada na corte de Alfonso X, o mentor de Dante, Brunetto Latini, conheceu Bonaventura de Siena, um toscano que traduziu o Kitab al Miraj do árabe para o latim. Corti especula que Brunetto pode ter fornecido uma cópia dessa obra a Dante.[18] René Guénon, um convertido sufi e estudioso de Ibn Arabi, rejeitou em O Esoterismo de Dante a teoria de sua influência (direta ou indireta) sobre Dante.[19] A teoria de Palacios de que Dante foi influenciado por Ibn Arabi foi satirizada pelo acadêmico turco Orhan Pamuk em seu romance O Livro Negro.[20]
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "<a name='goto1'> </a>
					<h1> Review </h1>
					The Divine Comedy  (in Italian: Divina Commedia, originally Comedìa and later called Divine Comedy by Giovanni Boccaccio)  is a poem of epic and theological bias in Italian and world literature, written by Dante Alighieri in the century XIV and divided into three parts: Hell, Purgatory and Paradise.
					Originally written in ordinary Italian based on the Tuscan dialect of the time and quite similar to current Italian, and not in Latin as was common at the time, it is a poem articulated by trilogies, including those formed by Reason - Human - Faith , Onça - Leão - Loba, Pai - Filho - Espírito Santo; and with a happy ending as suggested by its name: at the time when Dante wrote the poem the texts were separated between Comedy, works with happy endings, and Tragedies, with contrasting endings to those of Comedies .

					There is no record of the exact date on which it was written, but the most recognized opinions assure that Hell may have been composed between 1304 and 1307-1308, Purgatory from 1307-1308 to 1313-1314 and, finally, Paradise, from 1313-1314 to 1321 (this last date coincides with the death of Dante ).

					The poem - perhaps the greatest in the West - describes a journey where several events take place.  Its strength is in the wealth of allegories, which make the story timeless.

					Dante wrote \"Comedy\" - a poem of epic structure, with philosophical purposes - in his local dialect, Florentine, which is a variety of Tuscan. The poet demonstrated that Florentine (very close to what is now known as the Italian language), a vulgar language (as opposed to Latin, which was considered as the appropriate language for more serious speeches), was suitable for the highest type of expression , establishing it as standard Italian. In fact, it is the matrix of the current Italian.

					Some see this work as the Summa Teológica, by São Tomás de Aquino, in verse .

					Great painters from different eras created illustrations for the Divine Comedy, standing out Botticelli, Gustave Doré and Dalí . 

					Divine Comedy is the most accessible original source for the medieval worldview, which divided the Universe into concentric circles. The best-known modern work on this worldview is The Discarded Image, by C. S. Lewis, illustrated by Gustave Doré.

					Explanations about the meaning of the symbolism in the work are complex and much debated, as is the case of knowing exactly the meaning of the beloved Beatriz: would she be just a carnal love, the state, the church, the metaphysical love or another? Dante himself confirms this complexity by stating that the work has four overlapping meanings: literal, moral, allegorical and mystical. 

					Each of the three parts of the poem (Inferno, Purgatório and Paraíso) is divided into 33 songs, with one more as an introduction, the work adds 100 songs, a number that would mean the perfection of perfection. In addition to Dante himself, three are the main characters: Virgílio, guide in hell and purgatory, Beatriz guide in earthly paradise and São Bernardo, guide in the celestial spheres. The work also adds 14,233 verses in, from then on, called \"Dantesque triplets\". 

					In 1919, Miguel Asín Palacios, a Spanish scholar and Catholic priest, published La Escatología musulmana en la Divina Comedia (Islamic Eschatology in Divine Comedy), an account of parallels between early Islamic philosophy and Divine Comedy. Palacios argued that Dante derived many characteristics and episodes about the afterlife from the spiritual writings of Ibn Arabi and Isra and Mi'raj or Muhammad's night journey to heaven. The latter is described in ahadith and Kitab al Miraj (translated into Latin in 1264 or shortly before [10] as Liber Scalae Machometi, \"The Book of the Ladder of Muhammad\"), and has significant similarities with Paradiso, as the seven parts of the Paradise division, although this is not exclusive to Kitab al Miraj or Islamic cosmology. [11]

					Some \"superficial similarities\" [12] from the Divine Comedy to Resalat Al-Ghufran or Al-Ma'arri's Epistle of Forgiveness were also mentioned in this debate. Resalat Al-Ghufran describes the poet's journey into the realms of the afterlife and includes dialogue with people in Heaven and Hell, although, unlike Kitab al Miraj, there is little description of these places [13], and it is unlikely that Dante borrowed this work. [14] [15]

					Dante, however, lived in a Europe of substantial literary and philosophical contact with the Muslim world, encouraged by factors such as averroism (\"Averrois, che'l gran comento feo \" Commedia, Inferno, IV, 144, meaning \" Averroes, who wrote the big comment \") and the sponsorship of Alfonso X of Castile. Of the twelve sages that Dante finds in corner X of the Paradiso, Thomas Aquinas and, even more so, Siger of Brabant were strongly influenced by Arab commentators on Aristotle. [16] Medieval Christian mysticism
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "<a name='goto1'> </a>
					<h1> Revisión </h1>
					La Divina Comedia  (en italiano: Divina Commedia, originalmente Comedia y luego llamada Divina Comedia de Giovanni Boccaccio)  es un poema de sesgo épico y teológico en la literatura italiana y mundial, escrito por Dante Alighieri en el siglo XIV y dividido en tres partes: Infierno, Purgatorio y Paraíso.
					Originalmente escrito en italiano ordinario basado en el dialecto toscano de la época y bastante similar al italiano actual, y no en latín como era común en ese momento, es un poema articulado por trilogías, incluidas las formadas por Reason - Human - Faith , Onça - Leão - Loba, Pai - Filho - Espírito Santo; y con un final feliz como lo sugiere su nombre: en el momento en que Dante escribió el poema, los textos se separaron entre Comedia, obras con finales felices y Tragedias, con finales contrastantes con los de Comedias .

					No hay registro de la fecha exacta en la que se escribió, pero las opiniones más reconocidas aseguran que el Infierno pudo haber sido compuesto entre 1304 y 1307-1308, el Purgatorio de 1307-1308 a 1313-1314 y, finalmente, el Paraíso, de 1313-1314 a 1321 (esta última fecha coincide con la muerte de Dante ).

					El poema, quizás el más grande de Occidente, describe un viaje en el que tienen lugar varios eventos.  Su fuerza está en la riqueza de alegorías, que hacen que la historia sea atemporal.

					Dante escribió \"Comedia\", un poema de estructura épica, con fines filosóficos, en su dialecto local, florentino, que es una variedad de toscano. El poeta demostró que el florentino (muy cercano a lo que ahora se conoce como el idioma italiano), un idioma vulgar (a diferencia del latín, que se consideraba el idioma apropiado para los discursos más serios), era adecuado para el tipo más alto de expresión. , estableciéndolo como estándar italiano. De hecho, es la matriz del italiano actual.

					Algunos ven este trabajo como la Summa Teológica, de Santo Tomás de Aquino, en el verso .

					Grandes pintores de diferentes épocas crearon ilustraciones para la Divina Comedia, destacando Botticelli, Gustave Doré y Dalí . 

					La Divina Comedia es la fuente original más accesible para la cosmovisión medieval, que divide el Universo en círculos concéntricos. La obra moderna más conocida sobre esta cosmovisión es La imagen descartada, de C. S. Lewis, ilustrada por Gustave Doré.

					Las explicaciones sobre el significado del simbolismo en la obra son complejas y muy debatidas, como es el caso de conocer exactamente el significado de la amada Beatriz: ¿sería solo amor carnal, el estado, la iglesia, el amor metafísico u otro? El mismo Dante confirma esta complejidad al afirmar que la obra tiene cuatro significados superpuestos: literal, moral, alegórico y místico. 

					Cada una de las tres partes del poema (Inferno, Purgatório y Paraíso) se divide en 33 canciones, con una más como introducción, el trabajo agrega 100 canciones, un número que significaría la perfección de la perfección. Además del propio Dante, tres son los personajes principales: Virgílio, guía en el infierno y el purgatorio, Beatriz guía en el paraíso terrenal y São Bernardo, guía en las esferas celestes. El trabajo también agrega 14,233 versos en, a partir de entonces, llamados \"trillizos Dantescos\". 

					En 1919, Miguel Asín Palacios, un erudito español y sacerdote católico, publicó La Escatología musulmana en la Divina Comedia, una relación de paralelismos entre la filosofía islámica temprana y la Divina comedia. Palacios argumentó que Dante derivó muchas características y episodios sobre el más allá de los escritos espirituales de Ibn Arabi e Isra y Mi'raj o el viaje nocturno de Mahoma al cielo. Este último se describe en ahadith y Kitab al Miraj (traducido al latín en 1264 o poco antes [10] como Liber Scalae Machometi, \"El libro de la escalera de Muhammad\"), y tiene similitudes significativas con Paradiso, como las siete partes de la división Paraíso, aunque esto no es exclusivo de Kitab al Miraj o la cosmología islámica. [11]

					Algunas \"similitudes superficiales\" [12] de la Divina Comedia a Resalat Al-Ghufran o la Epístola del Perdón de Al-Ma'arri también se mencionaron en este debate. Resalat Al-Ghufran describe el viaje del poeta a los reinos de la vida futura e incluye el diálogo con personas en el Cielo y el Infierno, aunque, a diferencia de Kitab al Miraj, hay poca descripción de estos lugares [13], y es poco probable que Dante tomó prestado este trabajo. [14] [15]

					Dante, sin embargo, vivió en una Europa de contacto literario y filosófico sustancial con el mundo musulmán, alentado por factores como el averroísmo (\"Averrois, che'l gran comento feo \" Commedia, Inferno, IV, 144, que significa \" Averroes, quien escribió el gran comentario \") y el patrocinio de Alfonso X de Castilla. De los doce sabios que Dante encuentra en la esquina X del Paraíso, Tomás de Aquino y, aún más, Siger de Brabante fueron fuertemente influenciados por los comentaristas árabes sobre Aristóteles. [16] Misticismo cristiano medieval
						";
					}
				?>
			</div>
			<?php $book = '00000G'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'ALIGHIERIdante'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>