<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000Z'");
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
			<?php $book = '00000Z'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Recordações do Escrivão Isaías Caminha é o primeiro romance do escritor brasileiro Lima Barreto. Com referência auto-biográfica, tem como tema o racismo e a subordinação. Sua primeira publicação foi no ano de 1909, por A.M. Teixeira & CIA, pela Livraria Clássica de Lisboa, do qual Antonio Maria era proprietário. No ano de 1909, Lima Barreto lhe enviou uma carta agradecendo e oferecendo, como pagamento da edição e publicação, uma quantidade em livros para comercialização. 

					Monteiro Lobato não fez restrições à linguagem do autor, criticada na época por conta de \"alguns deslizes\". Lobato gostou do texto e o elogiou ao amigo Godofredo Rangel:

					O jornal \"O Globo\" da ficção de Barreto, e nele alvo de críticas duras, era na verdade o prestigioso Correio da Manhã, segundo Lobato. Os jornalistas da época tentaram ignorar a obra devido à ofensa da denúncia, o que certamente prejudicou muito o início da carreira de Lima. Ainda segundo Lobato, Lima é o criador de uma nova fórmula de romance: a crítica social sem doutrinarismo dogmático.

					Lima chegou a trabalhar no Correio da Manhã, mas com a publicação de Recordações do Escrivão Isaías Caminhas − onde faz críticas contundentes a Edmundo Bittencourt, o proprietário do jornal − Lima Barreto tornou-se persona non grata, não só nesse jornal como em todos os outros grande jornais do Rio de Janeiro.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Recordações do Escrivão Isaías Caminha é o primeiro romance do escritor brasileiro Lima Barreto. Com referência auto-biográfica, tem como tema o racismo e a subordinação. Sua primeira publicação foi no ano de 1909, por A.M. Teixeira & CIA, pela Livraria Clássica de Lisboa, do qual Antonio Maria era proprietário. No ano de 1909, Lima Barreto lhe enviou uma carta agradecendo e oferecendo, como pagamento da edição e publicação, uma quantidade em livros para comercialização. 

					Monteiro Lobato não fez restrições à linguagem do autor, criticada na época por conta de \"alguns deslizes\". Lobato gostou do texto e o elogiou ao amigo Godofredo Rangel:

					O jornal \"O Globo\" da ficção de Barreto, e nele alvo de críticas duras, era na verdade o prestigioso Correio da Manhã, segundo Lobato. Os jornalistas da época tentaram ignorar a obra devido à ofensa da denúncia, o que certamente prejudicou muito o início da carreira de Lima. Ainda segundo Lobato, Lima é o criador de uma nova fórmula de romance: a crítica social sem doutrinarismo dogmático.

					Lima chegou a trabalhar no Correio da Manhã, mas com a publicação de Recordações do Escrivão Isaías Caminhas − onde faz críticas contundentes a Edmundo Bittencourt, o proprietário do jornal − Lima Barreto tornou-se persona non grata, não só nesse jornal como em todos os outros grande jornais do Rio de Janeiro.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Recordações do Escrivão Isaías Caminha é o primeiro romance do escritor brasileiro Lima Barreto. Com referência auto-biográfica, tem como tema o racismo e a subordinação. Sua primeira publicação foi no ano de 1909, por A.M. Teixeira & CIA, pela Livraria Clássica de Lisboa, do qual Antonio Maria era proprietário. No ano de 1909, Lima Barreto lhe enviou uma carta agradecendo e oferecendo, como pagamento da edição e publicação, uma quantidade em livros para comercialização. 

					Monteiro Lobato não fez restrições à linguagem do autor, criticada na época por conta de \"alguns deslizes\". Lobato gostou do texto e o elogiou ao amigo Godofredo Rangel:

					O jornal \"O Globo\" da ficção de Barreto, e nele alvo de críticas duras, era na verdade o prestigioso Correio da Manhã, segundo Lobato. Os jornalistas da época tentaram ignorar a obra devido à ofensa da denúncia, o que certamente prejudicou muito o início da carreira de Lima. Ainda segundo Lobato, Lima é o criador de uma nova fórmula de romance: a crítica social sem doutrinarismo dogmático.

					Lima chegou a trabalhar no Correio da Manhã, mas com a publicação de Recordações do Escrivão Isaías Caminhas − onde faz críticas contundentes a Edmundo Bittencourt, o proprietário do jornal − Lima Barreto tornou-se persona non grata, não só nesse jornal como em todos os outros grande jornais do Rio de Janeiro.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					</ul>
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00000Z'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'BARRETOlima'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>