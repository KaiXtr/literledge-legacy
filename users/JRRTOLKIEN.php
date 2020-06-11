<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='JRRTOLKIEN'");
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

		<?php $user = 'JRRTOLKIEN'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			John Ronald Reuel Tolkien,[1] CBE,[2] FRSL, conhecido internacionalmente por J. R. R. Tolkien (Bloemfontein, 3 de janeiro de 1892 — Bournemouth, 2 de setembro de 1973),[3] <br />
			foi um premiado escritor, professor universitário e filólogo britânico, nascido na África, que recebeu o título de doutor em Letras e Filologia pela Universidade de <br />
			Liège e Dublin, em 1954,[4][5] e autor das obras como O Hobbit, O Senhor dos Anéis e O Silmarillion.[6] Em 28 de março de 1972, Tolkien foi nomeado <br />
			Comandante da Ordem do Império Britânico pela Rainha Elizabeth II. <br />
			<br />
			Tolkien nasceu em Bloemfontein, na República do Estado Livre de Orange, na atual África do Sul, e, aos três anos de idade, com a sua mãe e irmão, <br />
			passou a viver na Inglaterra, terra natal de seus pais. Desde pequeno fascinado pela linguística, fez a licenciatura na faculdade de Letras em Exeter. <br />
			Participou ativamente da Primeira Guerra Mundial, e logo depois começou a escrever os primeiros rascunhos do que se tornaria o seu "mundo secundário", <br />
			complexo e cheio de vida, denominado Eä, palco das suas mundialmente famosas obras como O Hobbit, O Senhor dos Anéis e O Silmarillion, esta última, <br />
			sua maior paixão, postumamente publicada, que é considerada a sua principal obra, embora não a mais famosa.[7][8] <br />
			<br />
			Tornou-se filólogo e professor universitário, tendo sido professor de anglo-saxão (e considerado um dos maiores especialistas do assunto) na <br />
			Universidade de Oxford de 1925 a 1945, e de inglês e literatura inglesa na mesma universidade de 1945 a 1959. Mesmo precedido de outros célebres escritores de <br />
			fantasia e ficção, tais como Júlio Verne, Edgar Rice Burroughs, Robert E. Howard, E. R. Eddison e William Morris, devido à grande popularidade do seu trabalho, <br />
			Tolkien ficou conhecido como o "pai da moderna literatura fantástica"[9] e é amplamente considerado como um dos maiores e sem dúvida o mais bem sucedido autor da <br />
			literatura fantástica de todos os tempos. Tolkien foi indicado duas vezes ao prêmio Nobel da literatura, a primeira vez em 1961, pelo seu amigo C.S.Lewis, <br />
			e a segunda em 1967, pelo sueco Gösta Holm[10] no qual não ganhou nenhuma das vezes[11] <br />
			<br />
			As suas obras foram traduzidas para mais de cinquenta idiomas, vendendo mais de 200 milhões de cópias e influenciando continuadamente gerações e gerações.[12] <br />
			Em 2008, The Times listou Tolkien como o sexto entre os maiores escritores Britânicos desde 1945.[13] Em 2009, a revista Forbes listou as 13 celebridades mortas <br />
			que mais lucraram no respectivo ano. Tolkien alcançou a quinta posição, com ganhos estimados em 50 milhões de dólares.[14] <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/J._R._R._Tolkien' > Wikipedia </a>
			<br />
			<iframe width="560" height="315" src="https://www.youtube.com/embed/XR-4vMEiQ_U?start=141" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<?php $auctor='JRRTOLKIEN'; include '../design/poemfind.php'; ?>
		<?php $user = 'JRRTOLKIEN'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>