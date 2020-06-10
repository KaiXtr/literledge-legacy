<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='SUASSUNAariano'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['name'].' - ';}
				else {$v = $i[$_COOKIE['lang']].' - ';}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'SUASSUNAariano'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Ariano Vilar Suassuna (Cidade da Parahyba, 16 de junho de 1927 — Recife, 23 de julho de 2014) foi um dramaturgo, romancista, ensaísta, poeta e professor brasileiro.[1]

			Idealizador do Movimento Armorial e autor das obras Auto da Compadecida e O Romance d'A Pedra do Reino e o Príncipe do Sangue do Vai-e-Volta, foi um preeminente defensor da cultura do Nordeste do Brasil.

			Foi Secretário de Cultura de Pernambuco (1994-1998) e Secretário de Assessoria do governador Eduardo Campos até abril de 2014.[2]
			Ariano Vilar Suassuna nasceu na cidade de Parahyba, atual João Pessoa, no dia 16 de junho de 1927, filho de Rita de Cássia Dantas Villar e João Suassuna.[3] Seu pai era então o presidente do estado da Paraíba.[nota 1] Ariano nasceu nas dependências do Palácio da Redenção,[5] sede do Executivo paraibano. No ano seguinte, o pai deixa o governo da Paraíba, e a família passou a morar no sertão, na Fazenda Acauã, em Sousa.[1]

			Com a Revolução de 1930, João Suassuna foi assassinado por motivos políticos no Rio de Janeiro, e a família mudou-se para Taperoá, onde morou de 1933 a 1937. Nessa cidade, Ariano fez seus primeiros estudos e assistiu pela primeira vez a uma peça de mamulengos e a um desafio de viola, cujo caráter de "improvisação" seria uma das marcas registradas também da sua produção teatral.[6]
			O assassinato de João Suassuna ocorreu como desdobramento da comoção posterior ao assassinato de João Pessoa, governador da Paraíba e candidato a Vice-Presidente do Brasil na chapa de Getúlio Vargas. Ariano Suassuna atribuía à família Pessoa, a encomenda do assassinato de seu pai, contratando o pistoleiro Miguel Laves de Souza, que atirou na vítima pelas costas, no Rio de Janeiro.[8] Em razão disso, não concordava com a alteração do nome da cidade onde nasceu, de "Parahyba" para "João Pessoa", em homenagem ao governador assassinado.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Ariano_Suassuna' > Wikipedia </a>
		</div>
		<div class='content'>
			<?php $auctor='SUASSUNAariano'; include '../design/poemfind.php'; ?>
		</div>
		<?php $user = 'SUASSUNAariano'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>