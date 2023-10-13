<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='QUINTANAmario'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['pt'];}
				else {$v = $i[$_COOKIE['lang']];}
			}
			require '../design/metadata.php';
		?>
	</head>
	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>
		<?php $user = 'QUINTANAmario'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Mário de Miranda Quintana (Alegrete, 30 de julho de 1906 — Porto Alegre, 5 de maio de 1994) foi um poeta, tradutor e jornalista brasileiro.

Mário Quintana fez as primeiras letras em sua cidade natal, mudando-se em 1919 para Porto Alegre, onde estudou no Colégio Militar, publicando ali suas primeiras produções literárias. Trabalhou para a Editora Globo e depois na farmácia paterna. Considerado o \"poeta das coisas simples\", com um estilo marcado pela ironia, pela profundidade e pela perfeição técnica, ele trabalhou como jornalista quase toda a sua vida. Traduziu mais de cento e trinta obras da literatura universal, entre elas Em Busca do Tempo Perdido de Marcel Proust, Mrs Dalloway de Virginia Woolf, e Palavras e Sangue, de Giovanni Papini.

Em 1953, Quintana trabalhou no jornal Correio do Povo, como colunista da página de cultura, que saía aos sábados, e em 1977 saiu do jornal. Em 1940, ele lançou o seu primeiro livro de várias poesias, A Rua dos Cataventos, iniciando a sua carreira de poeta, escritor e autor infantil. Em 1966, foi publicada a sua Antologia Poética, com sessenta poemas, organizada por Rubem Braga e Paulo Mendes Campos, e lançada para comemorar seus sessenta anos de idade, sendo por esta razão o poeta saudado na Academia Brasileira de Letras por Augusto Meyer e Manuel Bandeira, que recita o poema Quintanares, de sua autoria, em homenagem ao colega gaúcho. No mesmo ano ganhou o Prêmio Fernando Chinaglia da União Brasileira de Escritores de melhor livro do ano. Em 1976, ao completar 70 anos, recebeu a medalha Negrinho do Pastoreio do governo do estado do Rio Grande do Sul. Em 1980 recebeu o prêmio Machado de Assis, da Academia Brasileira de Letras, pelo conjunto da obra.";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Mário de Miranda Quintana (July 30, 1906 – May 5, 1994) was a Brazilian writer and translator.

He became known as the poet of \"simple things\", and his style is marked by irony, profundity and technical perfection. The main themes of his poetry include death, the lost childhood and time. Quintana also worked as a journalist and translated into Portuguese innumerable books, such as Mrs. Dalloway by Virginia Woolf.";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Mário Quintana (Alegrete, 30 de julio de 1906-Porto Alegre, 5 de mayo de 1994) fue un poeta brasileño. Quintana hizo sus primeras letras en su ciudad natal, se mudó en 1919 para Porto Alegre, donde estudió en el Colegio Militar de Porto Alegre, publicó allí sus primeras producciones literarias. Trabajó para la Editora Globo y en la farmacia paterna. Considerado el \"poeta de las cosas simples\", con un estilo marcado por la ironía, por la profundidad y por la perfección técnica, trabajó como periodista casi toda su vida. Tradujo más de 130 obras de la literatura universal, entre ellas En busca del tiempo perdido de Marcel Proust, Mrs Dalloway de Virginia Woolf y Palabras y Sangre, de Giovanni Papini.";
				}
			?>
		</div>
		<?php $auctor='QUINTANAmario'; include '../design/poemfind.php'; ?>
		<?php $user = 'QUINTANAmario'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>