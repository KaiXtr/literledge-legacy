<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='ELIOTgeorge'");
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

		<?php $user = 'ELIOTgeorge'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div class='manlan' lang='pt'>
				George Eliot, pseudônimo de Mary Ann Evans (Nuneaton, 22 de novembro de 1819 — Londres, 22 de dezembro de 1880), foi uma romancista autodidata britânica.

				Usava um nom de plume masculino para que seus trabalhos fossem levados a sério. À época, outras autoras publicavam trabalhos sob seus verdadeiros nomes, porém, Eliot queria escapar de estereótipos que ditavam que mulheres só escreviam romances leves. Outro fator que pode ter levado Eliot a usar um pseudônimo masculino era o desejo de preservar sua vida íntima, sobretudo seu relacionamento com George Henry Lewes, um homem casado, com quem viveu por mais de vinte anos.[1]

				Estreou na literatura ao realizar as traduções de “A vida de Jesus” de David Strauss, e “A essência do cristianismo”, de Ludwig Feuerbach.[2] Sob o pseudônimo George Eliot, foi autora de várias poesias, manuscritos e sete romances, sendo os mais famosos: “Adam Bede” (1859), “O moinho à beira do rio” (1860), “Silas Marner: o tecelão de Raveloe” (1861), e “Middlemarch: um estudo da vida provinciana” (1871-1872). Os temas mais recorrentes em seus romances são: a discussão em torno dos papéis de gênero e das regras de conduta moral próprios da sociedade vitoriana, o debate sobre a legitimidade das configurações familiares que fugiam ao modelo tradicional nuclear formado, especificamente, por pai, mãe e filhos, e a idealização da parentalidade como uma relação de não dominação, além da apresentação de personagens destoantes das regras morais tradicionais da sociedade inglesa do século XIX.[3]

				Desenvolveu o método da análise psicológico característico da ficção moderna. Sua obra Brasil: Middlemarch: um estudo da vida provinciana /Portugal: A vida era assim em Middlemarch (1872) é considerada um dos maiores romances do século XIX.
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/George_Eliot' > Wikipedia </a>
			</div>
		</div>
		<?php $auctor='ELIOTgeorge'; include '../design/poemfind.php'; ?>
		<?php $user = 'ELIOTgeorge'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>