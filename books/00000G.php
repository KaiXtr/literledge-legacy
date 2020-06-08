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
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					A Divina Comédia [1] (em italiano: Divina Commedia, originalmente Comedìa e, mais tarde, denominada Divina Comédia por Giovanni Boccaccio)[2] é um poema de viés épico e teológico da literatura italiana e mundial, escrito por Dante Alighieri no século XIV e dividido em três partes: o Inferno, o Purgatório e o Paraíso.
					Escrito originalmente em italiano vulgar baseado no dialeto toscano da época e bastante semelhante ao italiano atual, e não em latim como fazia-se comum à época, trata-se de um poema articulado por trilogias, entre elas as formadas por Razão - Humano - Fé, Onça - Leão - Loba, Pai - Filho - Espírito Santo; e com final feliz segundo sugerido pelo próprio nome: à época em que Dante escreveu o poema os textos eram separados entre Comédia, obras dotadas de finais felizes, e Tragédias, com finais contrastantes aos das Comédias[1].

					Não há registro da data exata em que foi escrita, mas as opiniões mais reconhecidas asseguram que o Inferno pode ter sido composto entre 1304 e 1307-1308, o Purgatório de 1307-1308 a 1313-1314 e, por último, o Paraíso, de 1313-1314 a 1321 (esta última data coincide com a morte de Dante[3]).

					O poema - talvez o maior do Ocidente - descreve uma viagem onde se sucedem diversos acontecimentos.[4] Sua força está na riqueza das alegorias, que tornam o relato atemporal.

					Dante escreveu a "Comédia" - um poema de estrutura épica, com propósitos filosóficos - no seu dialeto local, o florentino, que é uma variedade do toscano. O poeta demonstrou que o florentino (muito próximo do que hoje é conhecido como língua italiana), uma língua vulgar (em oposição ao latim, que se considerava como a língua apropriada para discursos mais sérios), era adequado para o mais elevado tipo de expressão, estabelecendo-o como italiano padrão. De fato, é a matriz do italiano atual.

					Há quem veja esta obra como a Suma Teológica, de São Tomás de Aquino, em verso[5].

					Grandes pintores de diferentes épocas criaram ilustrações para a Divina Comédia, destacando-se Botticelli, Gustave Doré e Dalí[1].[6]

					A Divina Comédia é a fonte original mais acessível para a cosmovisão medieval, que dividia o Universo em círculos concêntricos. A obra moderna mais conhecida a respeito dessa cosmovisão é The Discarded Image, de C. S. Lewis, ilustrada por Gustave Doré.

					Explicações sobre o sentido do simbolismo na obra são complexas e muito debatidas, como é o caso de se saber exatamente o significado da amada Beatriz: seria ela apenas um amor carnal, o estado, a igreja, o amor metafísico ou outro? O próprio Dante confirma esta complexidade afirmando que a obra possui quatro sentidos sobrepostos: literal, moral, alegórico e místico.[7]

					Cada uma das três partes do poema (Inferno, Purgatório e Paraíso) está dividida em 33 cantos, com mais um a título de introdução, a obra soma 100 cantos, número que significaria a perfeição da perfeição. Além do próprio Dante, três são os personagens principais: Virgílio, guia no inferno e purgatório, Beatriz guia no paraíso terrestre e São Bernardo, guia nas esferas celestes. A obra soma também 14.233 versos em, a partir de então chamados, "tercetos dantescos".[8]

					Em 1919, Miguel Asín Palacios, um estudioso espanhol e sacerdote católico, publicou La Escatología musulmana en la Divina Comedia (Escatologia Islâmica na Divina Comédia), um relato de paralelos entre a filosofia islâmica inicial e a Divina Comédia. Palacios argumentou que Dante derivou muitas características e episódios sobre o além a partir dos escritos espirituais de Ibn Arabi e do Isra e Mi'raj ou a jornada noturna de Maomé para o céu. Este último é descrito no ahadith e no Kitab al Miraj (traduzido para o latim em 1264 ou pouco antes[10] como Liber Scalae Machometi, "O Livro da Escada de Maomé"), e tem semelhanças significativas com o Paradiso, como as sete partes da divisão do Paraíso, embora isso não seja exclusivo do Kitab al Miraj ou da cosmologia islâmica.[11]

					Algumas "semelhanças superficiais"[12] da Divina Comédia ao Resalat Al-Ghufran ou Epístola do Perdão de Al-Ma'arri também foram mencionadas neste debate. O Resalat Al-Ghufran descreve a jornada do poeta nos reinos da vida após a morte e inclui o diálogo com as pessoas no Céu e Inferno, embora, ao contrário do Kitab al Miraj, haja pouca descrição desses locais[13], e é improvável que Dante fez empréstimo deste trabalho.[14][15]

					Dante, no entanto, viveu em uma Europa de substancial contato literário e filosófico com o mundo muçulmano, encorajado por fatores como o averroísmo ("Averrois, che'l gran comento feo" Commedia, Inferno, IV, 144, significando "Averróis, que escreveu o grande comentário") e o patrocínio de Alfonso X de Castela. Dos doze sábios que Dante encontra no canto X do Paradiso, Tomás de Aquino e, mais ainda, Siger de Brabante foram fortemente influenciado pelos comentaristas árabes sobre Aristóteles.[16] O misticismo cristão medieval também compartilhava a influência neoplatônica dos sufis, como Ibn Arabi. O filósofo Frederick Copleston argumentou em 1950 que o respeitoso tratamento de Dante a Averróis, Avicena e Siger de Brabante indica seu reconhecimento de uma "considerável dívida" para com a filosofia islâmica.[16]

					Embora essa influência filosófica seja geralmente reconhecida, muitos acadêmicos não ficaram satisfeitos com o fato de Dante ter sido influenciado pelo Kitab al Miraj. O orientalista do século XX Francesco Gabrieli expressou ceticismo em relação às alegadas semelhanças, e à falta de evidência de um veículo através do qual poderiam ter sido transmitidas a Dante. Mesmo assim, enquanto rejeitava a probabilidade de algumas influências postuladas no trabalho de Palacios,[17] Gabrieli admitiu que era “pelo menos possível, se não provável, que Dante pudesse ter conhecido o Liber Scalae e tirado dele certas imagens e conceitos da escatologia muçulmana". Pouco antes de sua morte, a filóloga italiana Maria Corti assinalou que, durante sua estada na corte de Alfonso X, o mentor de Dante, Brunetto Latini, conheceu Bonaventura de Siena, um toscano que traduziu o Kitab al Miraj do árabe para o latim. Corti especula que Brunetto pode ter fornecido uma cópia dessa obra a Dante.[18] René Guénon, um convertido sufi e estudioso de Ibn Arabi, rejeitou em O Esoterismo de Dante a teoria de sua influência (direta ou indireta) sobre Dante.[19] A teoria de Palacios de que Dante foi influenciado por Ibn Arabi foi satirizada pelo acadêmico turco Orhan Pamuk em seu romance O Livro Negro.[20]
					<hr>
				</div>
			</div>
			<?php $book = '00000G'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'ALIGHIERIdante'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>