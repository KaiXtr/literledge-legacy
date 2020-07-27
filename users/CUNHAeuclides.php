<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='CUNHAeuclides'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['pt'].' - ';}
				else {$v = $i[$_COOKIE['lang']].' - ';}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'CUNHAeuclides'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Euclides Rodrigues Pimenta da Cunha[nota 1] (Cantagalo, 20 de janeiro de 1866 — Rio de Janeiro, 15 de agosto de 1909)[1] foi um escritor e jornalista brasileiro. <br />
			<br />
			Nascido em Cantagalo, estudou na Escola Politécnica e na Escola Militar da Praia Vermelha, tornando-se brevemente um militar. Ingressou no jornal <br />
			A Província de S. Paulo — hoje O Estado de S. Paulo — enquanto recebia título de bacharel e primeiro-tenente. Em 1897, tornou-se jornalista <br />
			correspondente de guerra e cobriu alguns dos principais acontecimentos da Guerra de Canudos, conflito dos sertanejos da Bahia liderados pelo religioso <br />
			Antônio Conselheiro contra o Exercito Brasileiro. Os escritos de sua experiência em Canudos renderam-lhe a publicação de Os Sertões, considerado uma <br />
			obra notável do movimento pré-modernista que, além de narrar a guerra, relata a vida e sociedade de um povo negligenciado e esquecido pela metrópole. <br />
			<br />
			Reconhecido por seu trabalho, foi eleito para a Academia Brasileira de Letras em 1903. Viajou para a região norte do Brasil em uma campanha de demarcação de <br />
			suas fronteiras, a qual chefiou. Lá, escreveu obras de denúncia e, ao voltar para o Rio de Janeiro, trabalhou no gabinete do Barão de Rio Branco. <br />
			Seu casamento com Ana Emília Ribeiro foi marcado pela infidelidade de sua esposa, que teve dois filhos fora do casamento, frutos de seu caso extraconjugal <br />
			com o militar Dilermando de Assis. Ao saber do caso, Euclides tentou assassinar o amante de sua esposa, contudo foi morto por este em 15 de agosto de 1909, <br />
			no que ficou conhecido como \"Tragédia da Piedade\". <br />
			<br />
			Sua obra continua relevante no âmbito nacional e é estudada no mundo acadêmico. Cidades fortemente ligadas a sua vida comemoram a Semana Euclidiana, <br />
			em razão de Os Sertões. A obra é reconhecida por seu regionalismo e neologismo, típicos do período pré-modernista e influentes nas origens do modernismo. <br />
			No centenário de sua morte foi realizado em sua cidade natal uma série de exposições do Projeto 100 Anos Sem Euclides. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Euclides_da_Cunha' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Euclides Rodrigues Pimenta da Cunha[nota 1] (Cantagalo, 20 de janeiro de 1866 — Rio de Janeiro, 15 de agosto de 1909)[1] foi um escritor e jornalista brasileiro. <br />
			<br />
			Nascido em Cantagalo, estudou na Escola Politécnica e na Escola Militar da Praia Vermelha, tornando-se brevemente um militar. Ingressou no jornal <br />
			A Província de S. Paulo — hoje O Estado de S. Paulo — enquanto recebia título de bacharel e primeiro-tenente. Em 1897, tornou-se jornalista <br />
			correspondente de guerra e cobriu alguns dos principais acontecimentos da Guerra de Canudos, conflito dos sertanejos da Bahia liderados pelo religioso <br />
			Antônio Conselheiro contra o Exercito Brasileiro. Os escritos de sua experiência em Canudos renderam-lhe a publicação de Os Sertões, considerado uma <br />
			obra notável do movimento pré-modernista que, além de narrar a guerra, relata a vida e sociedade de um povo negligenciado e esquecido pela metrópole. <br />
			<br />
			Reconhecido por seu trabalho, foi eleito para a Academia Brasileira de Letras em 1903. Viajou para a região norte do Brasil em uma campanha de demarcação de <br />
			suas fronteiras, a qual chefiou. Lá, escreveu obras de denúncia e, ao voltar para o Rio de Janeiro, trabalhou no gabinete do Barão de Rio Branco. <br />
			Seu casamento com Ana Emília Ribeiro foi marcado pela infidelidade de sua esposa, que teve dois filhos fora do casamento, frutos de seu caso extraconjugal <br />
			com o militar Dilermando de Assis. Ao saber do caso, Euclides tentou assassinar o amante de sua esposa, contudo foi morto por este em 15 de agosto de 1909, <br />
			no que ficou conhecido como \"Tragédia da Piedade\". <br />
			<br />
			Sua obra continua relevante no âmbito nacional e é estudada no mundo acadêmico. Cidades fortemente ligadas a sua vida comemoram a Semana Euclidiana, <br />
			em razão de Os Sertões. A obra é reconhecida por seu regionalismo e neologismo, típicos do período pré-modernista e influentes nas origens do modernismo. <br />
			No centenário de sua morte foi realizado em sua cidade natal uma série de exposições do Projeto 100 Anos Sem Euclides. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Euclides_da_Cunha' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Euclides Rodrigues Pimenta da Cunha[nota 1] (Cantagalo, 20 de janeiro de 1866 — Rio de Janeiro, 15 de agosto de 1909)[1] foi um escritor e jornalista brasileiro. <br />
			<br />
			Nascido em Cantagalo, estudou na Escola Politécnica e na Escola Militar da Praia Vermelha, tornando-se brevemente um militar. Ingressou no jornal <br />
			A Província de S. Paulo — hoje O Estado de S. Paulo — enquanto recebia título de bacharel e primeiro-tenente. Em 1897, tornou-se jornalista <br />
			correspondente de guerra e cobriu alguns dos principais acontecimentos da Guerra de Canudos, conflito dos sertanejos da Bahia liderados pelo religioso <br />
			Antônio Conselheiro contra o Exercito Brasileiro. Os escritos de sua experiência em Canudos renderam-lhe a publicação de Os Sertões, considerado uma <br />
			obra notável do movimento pré-modernista que, além de narrar a guerra, relata a vida e sociedade de um povo negligenciado e esquecido pela metrópole. <br />
			<br />
			Reconhecido por seu trabalho, foi eleito para a Academia Brasileira de Letras em 1903. Viajou para a região norte do Brasil em uma campanha de demarcação de <br />
			suas fronteiras, a qual chefiou. Lá, escreveu obras de denúncia e, ao voltar para o Rio de Janeiro, trabalhou no gabinete do Barão de Rio Branco. <br />
			Seu casamento com Ana Emília Ribeiro foi marcado pela infidelidade de sua esposa, que teve dois filhos fora do casamento, frutos de seu caso extraconjugal <br />
			com o militar Dilermando de Assis. Ao saber do caso, Euclides tentou assassinar o amante de sua esposa, contudo foi morto por este em 15 de agosto de 1909, <br />
			no que ficou conhecido como \"Tragédia da Piedade\". <br />
			<br />
			Sua obra continua relevante no âmbito nacional e é estudada no mundo acadêmico. Cidades fortemente ligadas a sua vida comemoram a Semana Euclidiana, <br />
			em razão de Os Sertões. A obra é reconhecida por seu regionalismo e neologismo, típicos do período pré-modernista e influentes nas origens do modernismo. <br />
			No centenário de sua morte foi realizado em sua cidade natal uma série de exposições do Projeto 100 Anos Sem Euclides. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Euclides_da_Cunha' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='CUNHAeuclides'; include '../design/poemfind.php'; ?>
		<?php $user = 'CUNHAeuclides'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>