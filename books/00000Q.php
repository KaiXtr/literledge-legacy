<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000Q'");
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
			<?php $book = '00000Q'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Chamado de Cthulhu é um conto de horror do escritor norte-americano H. P. Lovecraft, contando a investigação sobre um ser extraterrestre e do\"antigos\"ue na mitologi\"lovecraftiana\"eriam criaturas cósmicas, vindas à Terra antes desta abrigar a vida.

					Cthulhu é um deus que nas primeiras páginas do conto aparece como um ídolo de argila quase indescritível, possuindo um culto multimilenar dedicado a trazê-lo de volta - um retorno que desencadearia o fim da Humanidade.

					O conto foi escrito em 1926 e foi publicado pela primeira vez na revista estadunidense Weird Tales ("Contos Estranhos\"em fevereiro de 1928.

					Existe também um RPG com esse nome, baseado na mitologia de Lovecraft, bem como quatro músicas da banda norte-americana Metallica (The Call of Ktulu, do álbum Ride The Lightning, The Thing That Should Not Be, do álbum Master of Puppets, All Nightmare Long, do álbum Death Magnetic \"Dream No More\"do álbum Hardwired...to Self-Destruct). E uma música brasileir\"O Chamado\"ela banda Nardones. Diversas paródias a músicas bastante conhecidas podem ser encontradas na internet, Entre elas, a Aleluia de Handel (Oh, Cthulhu) , If I Only Had a Brain (If I were a Deep One) de O mágico de Oz, e Hey There Cthulhu.

					Em 2015, a editora brasileira Draco anunciou uma seleção para uma antologia de quadrinhos baseada em O Chamado de Cthulhu, lançada em 2016 com o título O Despertar de Cthulhu em Quadrinhos.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Chamado de Cthulhu é um conto de horror do escritor norte-americano H. P. Lovecraft, contando a investigação sobre um ser extraterrestre e do\"antigos\"ue na mitologi\"lovecraftiana\"eriam criaturas cósmicas, vindas à Terra antes desta abrigar a vida.

					Cthulhu é um deus que nas primeiras páginas do conto aparece como um ídolo de argila quase indescritível, possuindo um culto multimilenar dedicado a trazê-lo de volta - um retorno que desencadearia o fim da Humanidade.

					O conto foi escrito em 1926 e foi publicado pela primeira vez na revista estadunidense Weird Tales ("Contos Estranhos\"em fevereiro de 1928.

					Existe também um RPG com esse nome, baseado na mitologia de Lovecraft, bem como quatro músicas da banda norte-americana Metallica (The Call of Ktulu, do álbum Ride The Lightning, The Thing That Should Not Be, do álbum Master of Puppets, All Nightmare Long, do álbum Death Magnetic \"Dream No More\"do álbum Hardwired...to Self-Destruct). E uma música brasileir\"O Chamado\"ela banda Nardones. Diversas paródias a músicas bastante conhecidas podem ser encontradas na internet, Entre elas, a Aleluia de Handel (Oh, Cthulhu) , If I Only Had a Brain (If I were a Deep One) de O mágico de Oz, e Hey There Cthulhu.

					Em 2015, a editora brasileira Draco anunciou uma seleção para uma antologia de quadrinhos baseada em O Chamado de Cthulhu, lançada em 2016 com o título O Despertar de Cthulhu em Quadrinhos.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Chamado de Cthulhu é um conto de horror do escritor norte-americano H. P. Lovecraft, contando a investigação sobre um ser extraterrestre e do\"antigos\"ue na mitologi\"lovecraftiana\"eriam criaturas cósmicas, vindas à Terra antes desta abrigar a vida.

					Cthulhu é um deus que nas primeiras páginas do conto aparece como um ídolo de argila quase indescritível, possuindo um culto multimilenar dedicado a trazê-lo de volta - um retorno que desencadearia o fim da Humanidade.

					O conto foi escrito em 1926 e foi publicado pela primeira vez na revista estadunidense Weird Tales ("Contos Estranhos\"em fevereiro de 1928.

					Existe também um RPG com esse nome, baseado na mitologia de Lovecraft, bem como quatro músicas da banda norte-americana Metallica (The Call of Ktulu, do álbum Ride The Lightning, The Thing That Should Not Be, do álbum Master of Puppets, All Nightmare Long, do álbum Death Magnetic \"Dream No More\"do álbum Hardwired...to Self-Destruct). E uma música brasileir\"O Chamado\"ela banda Nardones. Diversas paródias a músicas bastante conhecidas podem ser encontradas na internet, Entre elas, a Aleluia de Handel (Oh, Cthulhu) , If I Only Had a Brain (If I were a Deep One) de O mágico de Oz, e Hey There Cthulhu.

					Em 2015, a editora brasileira Draco anunciou uma seleção para uma antologia de quadrinhos baseada em O Chamado de Cthulhu, lançada em 2016 com o título O Despertar de Cthulhu em Quadrinhos.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00000Q'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'HPLOVECRAFT'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>