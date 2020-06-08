<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000010'");
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
			<?php $book = '000010'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Morte e Vida severina é um livro de poema regionalista e modernista do escritor brasileiro João Cabral de Melo Neto, escrito entre 1954 e 1955 e publicado em 1955.

					A obra narra o sofrimento enfrentado por Severino apresentando um poema dramático que relata a dura trajetória de um migrante sertanejo (retirante) em busca de uma vida mais fácil e favorável na capital pernambucana.

					O poema é narrativo com seu gênero predominantemente lírico, mas com presença dramática. Consiste em duas partes: antes de chegar em Recife e depois. Antes de chegar chamamos de caminho ou fuga da morte; e depois em o presépio ou encontro da vida. O poema é feito em redondilha maior (sete sílabas métricas).

					O espaço possui um movimento de deslocamento: o retirante faz a travessia da Caatinga, passando pelo Agreste, para a Zona da Mata, até chegar ao Recife, ou seja, sai da serra, mais especificamente da Serra da Costela, e vai para o litoral (mangue). Durante esse deslocamento em buscas da vida, depara-se com tantas mortes e miséria que pensa em se atirar no rio onde ele se encontrava e apressar a própria morte. A história é narrada em primeira pessoa, pelo personagem Severino e é composta de monólogos e diálogos com outros personagens.

					A primeira representação de Morte e Vida Severina se deu com um grupo de teatro do Pará em 1957. A peça foi ensaiada e montada pela primeira vez em Belém pelo grupo Norte Teatro Escola e depois foi levada para o I Festival Nacional de Teatro de Estudantes, em Recife (1957), sendo promovido por Paschoal Carlos Magno. A montagem foi premiada, tendo o ator Carlos Miranda, intérprete de Severino, obtido o primeiro prêmio como revelação de ator.[4].
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					</ul>
					<hr>
					</div>
			</div>
			<?php $book = '000010'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'CABRALmelo'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>