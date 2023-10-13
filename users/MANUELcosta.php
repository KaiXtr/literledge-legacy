<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='MANUELcosta'");
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

		<?php $user = 'MANUELcosta'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Cláudio Manuel da Costa (Vila do Ribeirão do Carmo, Minas Gerais, 5 de junho de 1729 — Vila Rica, Minas Gerais, 4 de julho de 1789) foi um advogado, minerador e poeta brasileiro no Brasil Colônia.

			Destacou-se pela sua obra poética e pelo seu envolvimento na Inconfidência Mineira. Foi também advogado de prestígio, fazendeiro abastado, cidadão ilustre, pensador de mente aberta e amigo do Aleijadinho, a quem teria possibilitado o acesso às bibliotecas clandestinas que seriam mais tarde apreendidas aos Inconfidentes.

			Como poeta, transitou entre o Barroco - marca dos seus escritos de juventude, enquanto era estudante de Cânones na Universidade de Coimbra (1749) - e o arcadismo - a partir do seu contato com o iluminismo, que concebia práticas mais racionais nas belas-letras.

			Especula-se que tenha traduzido A Riqueza das Nações e a Teoria dos Sentimentos Morais, de Adam Smith, para o português. Há quem afirme ter tido ligações com os Illuminati, sociedade secreta de cunho iluminista criada na Baviera e que teria influenciado inúmeras revoluções.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Cl%C3%A1udio_Manuel_da_Costa' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Cláudio Manuel da Costa (Vila do Ribeirão do Carmo, Minas Gerais, 5 de junho de 1729 — Vila Rica, Minas Gerais, 4 de julho de 1789) foi um advogado, minerador e poeta brasileiro no Brasil Colônia.

			Destacou-se pela sua obra poética e pelo seu envolvimento na Inconfidência Mineira. Foi também advogado de prestígio, fazendeiro abastado, cidadão ilustre, pensador de mente aberta e amigo do Aleijadinho, a quem teria possibilitado o acesso às bibliotecas clandestinas que seriam mais tarde apreendidas aos Inconfidentes.

			Como poeta, transitou entre o Barroco - marca dos seus escritos de juventude, enquanto era estudante de Cânones na Universidade de Coimbra (1749) - e o arcadismo - a partir do seu contato com o iluminismo, que concebia práticas mais racionais nas belas-letras.

			Especula-se que tenha traduzido A Riqueza das Nações e a Teoria dos Sentimentos Morais, de Adam Smith, para o português. Há quem afirme ter tido ligações com os Illuminati, sociedade secreta de cunho iluminista criada na Baviera e que teria influenciado inúmeras revoluções.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Cl%C3%A1udio_Manuel_da_Costa' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Cláudio Manuel da Costa (Vila do Ribeirão do Carmo, Minas Gerais, 5 de junho de 1729 — Vila Rica, Minas Gerais, 4 de julho de 1789) foi um advogado, minerador e poeta brasileiro no Brasil Colônia.

			Destacou-se pela sua obra poética e pelo seu envolvimento na Inconfidência Mineira. Foi também advogado de prestígio, fazendeiro abastado, cidadão ilustre, pensador de mente aberta e amigo do Aleijadinho, a quem teria possibilitado o acesso às bibliotecas clandestinas que seriam mais tarde apreendidas aos Inconfidentes.

			Como poeta, transitou entre o Barroco - marca dos seus escritos de juventude, enquanto era estudante de Cânones na Universidade de Coimbra (1749) - e o arcadismo - a partir do seu contato com o iluminismo, que concebia práticas mais racionais nas belas-letras.

			Especula-se que tenha traduzido A Riqueza das Nações e a Teoria dos Sentimentos Morais, de Adam Smith, para o português. Há quem afirme ter tido ligações com os Illuminati, sociedade secreta de cunho iluminista criada na Baviera e que teria influenciado inúmeras revoluções.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Cl%C3%A1udio_Manuel_da_Costa' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='MANUELcosta'; include '../design/poemfind.php'; ?>
		<?php $user = 'MANUELcosta'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>