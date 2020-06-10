<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001S'");
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
			<?php $book = '00001S'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Auto da Compadecida é uma peça teatral em forma de auto, em três atos, escrita pelo autor brasileiro Ariano Suassuna em 1955. Sua primeira encenação aconteceu em 1956, no Recife, em Pernambuco. A peça também foi encenada em 1974, com direção de João Cândido.

					Trata-se de um drama ocorrido na região Nordeste do Brasil, com elementos da tradição da literatura de cordel, do gênero comédia e traços do barroco católico brasileiro. A obra mistura cultura popular e tradição religiosa.

					Na escrita, apresenta traços de linguagem oral, demonstrando na fala do personagem sua classe social. Há também regionalismos, pelo fato de a história se passar no nordeste, região em que o autor nasceu.

					Da literatura de cordel, Suassuna pegou emprestado o personagem João Grilo, personagem folclórico presente tanto no Brasil, quanto em Portugal.[1] Também buscou inspiração em dois folhetos de Leandro Gomes de Barros (1865-1918), "O Dinheiro", também chamado de "O testamento do cachorro" e "O cavalo que defecava dinheiro".[2][3]

					Auto da Compadecida projetou Suassuna em todo o país e foi considerada por Sábato Magaldi, em 1962,"o texto mais popular do moderno teatro brasileiro".Anuário - Academia Brasileira de Letras no Google Livros A peça foi adaptada para o cinema pela primeira vez em 1969, com o filme A Compadecida.[4] A segunda adaptação foi em 1987, com o filme Os Trapalhões no Auto da Compadecida.[5]

					Em 1999, foi apresentada como uma minissérie pela Rede Globo de Televisão (em que houve o acréscimo do artigo “o” antes do nome original).[6] Essa foi a adaptação mais conhecida, e foi editada em 2000 para exibição nos cinemas. Nela aparecem alguns personagens, como o Cabo Setenta, Rosinha e Vicentão, que não fazem parte da peça original, mas da obra Torturas de um Coração, além de elementos de O Santo e a Porca, ambas de autoria de Ariano Suassuna.[7]
					<hr>
				</div>
			</div>
			<?php $book = '00001S'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'SUASSUNAariano'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>