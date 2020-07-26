<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00002L'");
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
			<?php $book = '00002L'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Robinson Crusoe é um romance escrito por Daniel Defoe e publicado originalmente em 1719 no Reino Unido. Epistolar, confessional e didático em seu tom, a obra é a autobiografia fictícia do personagem-título, um náufrago que passou 28 anos em uma remota ilha tropical próxima a Trinidad, encontrando canibais, cativos e revoltosos antes de ser resgatado. O livro foi originalmente publicado na forma de folhetins em The Daily Post, sendo o primeiro romance-folhetim.

					O título original da obra é The Life and Strange Surprizing Adventures of Robinson Crusoe, of York, Mariner: Who lived Eight and Twenty Years, all alone in an un‐inhabited Island on the Coast of America, near the Mouth of the Great River of Oroonoque; Having been cast on Shore by Shipwreck, wherein all the Men perished but himself. With An Account how he was at last as strangely deliver’d by Pyrates, tendo sido lançada em Lisboa à época em edição traduzida para o português e cujo título era Aventuras de Robinson Crusoé. No mesmo ano, foi lançada a segunda e menos conhecida parte do romance, intitulada The Farther Adventures of Robinson Crusoe, Being the Second and Last Part OF His Life, And of the Strange Surprising Accounts of his Travels Round three Parts of the Globe e cujo título então em português foi Vida e Aventuras admiráveis de Robinson Crusoé, que contém a sua tornada à sua ilha, as suas novas viagens, e as suas reflexões.

					Supõe-se que o enredo básico tenha sido influenciado pela história de Alexander Selkirk, um náufrago escocês que viveu durante quatro anos em uma ilha do Pacífico chamada \"Más a Tierra\" (renomeada em 1966 para Ilha Robinson Crusoe). Os aspectos da ilha onde Crusoe viveu provavelmente foram baseados na ilha caribenha de Tobago. É também provável que Defoe tenha sido influenciado pela tradução em latim ou inglês de O Filósofo Autodidata, de Ibn Tufail, romance do século XII na época recém-lançado pela primeira vez na Europa e que também gira em torno de um personagem isolado em uma ilha deserta.

					No final do século XIX, nenhum livro na história da literatura ocidental tinha mais reimpressões, spin-offs e traduções (até mesmo para idiomas como inuíte, copta e maltês) do que Robinson Crusoe, com quase 700 versões incluindo edições infantis sem texto, apenas com imagens.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Robinson Crusoe é um romance escrito por Daniel Defoe e publicado originalmente em 1719 no Reino Unido. Epistolar, confessional e didático em seu tom, a obra é a autobiografia fictícia do personagem-título, um náufrago que passou 28 anos em uma remota ilha tropical próxima a Trinidad, encontrando canibais, cativos e revoltosos antes de ser resgatado. O livro foi originalmente publicado na forma de folhetins em The Daily Post, sendo o primeiro romance-folhetim.

					O título original da obra é The Life and Strange Surprizing Adventures of Robinson Crusoe, of York, Mariner: Who lived Eight and Twenty Years, all alone in an un‐inhabited Island on the Coast of America, near the Mouth of the Great River of Oroonoque; Having been cast on Shore by Shipwreck, wherein all the Men perished but himself. With An Account how he was at last as strangely deliver’d by Pyrates, tendo sido lançada em Lisboa à época em edição traduzida para o português e cujo título era Aventuras de Robinson Crusoé. No mesmo ano, foi lançada a segunda e menos conhecida parte do romance, intitulada The Farther Adventures of Robinson Crusoe, Being the Second and Last Part OF His Life, And of the Strange Surprising Accounts of his Travels Round three Parts of the Globe e cujo título então em português foi Vida e Aventuras admiráveis de Robinson Crusoé, que contém a sua tornada à sua ilha, as suas novas viagens, e as suas reflexões.

					Supõe-se que o enredo básico tenha sido influenciado pela história de Alexander Selkirk, um náufrago escocês que viveu durante quatro anos em uma ilha do Pacífico chamada \"Más a Tierra\" (renomeada em 1966 para Ilha Robinson Crusoe). Os aspectos da ilha onde Crusoe viveu provavelmente foram baseados na ilha caribenha de Tobago. É também provável que Defoe tenha sido influenciado pela tradução em latim ou inglês de O Filósofo Autodidata, de Ibn Tufail, romance do século XII na época recém-lançado pela primeira vez na Europa e que também gira em torno de um personagem isolado em uma ilha deserta.

					No final do século XIX, nenhum livro na história da literatura ocidental tinha mais reimpressões, spin-offs e traduções (até mesmo para idiomas como inuíte, copta e maltês) do que Robinson Crusoe, com quase 700 versões incluindo edições infantis sem texto, apenas com imagens.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Robinson Crusoe é um romance escrito por Daniel Defoe e publicado originalmente em 1719 no Reino Unido. Epistolar, confessional e didático em seu tom, a obra é a autobiografia fictícia do personagem-título, um náufrago que passou 28 anos em uma remota ilha tropical próxima a Trinidad, encontrando canibais, cativos e revoltosos antes de ser resgatado. O livro foi originalmente publicado na forma de folhetins em The Daily Post, sendo o primeiro romance-folhetim.

					O título original da obra é The Life and Strange Surprizing Adventures of Robinson Crusoe, of York, Mariner: Who lived Eight and Twenty Years, all alone in an un‐inhabited Island on the Coast of America, near the Mouth of the Great River of Oroonoque; Having been cast on Shore by Shipwreck, wherein all the Men perished but himself. With An Account how he was at last as strangely deliver’d by Pyrates, tendo sido lançada em Lisboa à época em edição traduzida para o português e cujo título era Aventuras de Robinson Crusoé. No mesmo ano, foi lançada a segunda e menos conhecida parte do romance, intitulada The Farther Adventures of Robinson Crusoe, Being the Second and Last Part OF His Life, And of the Strange Surprising Accounts of his Travels Round three Parts of the Globe e cujo título então em português foi Vida e Aventuras admiráveis de Robinson Crusoé, que contém a sua tornada à sua ilha, as suas novas viagens, e as suas reflexões.

					Supõe-se que o enredo básico tenha sido influenciado pela história de Alexander Selkirk, um náufrago escocês que viveu durante quatro anos em uma ilha do Pacífico chamada \"Más a Tierra\" (renomeada em 1966 para Ilha Robinson Crusoe). Os aspectos da ilha onde Crusoe viveu provavelmente foram baseados na ilha caribenha de Tobago. É também provável que Defoe tenha sido influenciado pela tradução em latim ou inglês de O Filósofo Autodidata, de Ibn Tufail, romance do século XII na época recém-lançado pela primeira vez na Europa e que também gira em torno de um personagem isolado em uma ilha deserta.

					No final do século XIX, nenhum livro na história da literatura ocidental tinha mais reimpressões, spin-offs e traduções (até mesmo para idiomas como inuíte, copta e maltês) do que Robinson Crusoe, com quase 700 versões incluindo edições infantis sem texto, apenas com imagens.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00002L'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'DANIELdefoe'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>