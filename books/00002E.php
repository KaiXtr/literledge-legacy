<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00002E'");
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
			<?php $book = '00002E'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					A Arte da Guerra (chinês: 孫子兵法; pinyin: sūn zĭ bīng fǎ, literalmente \"Estratégia Militar de Sun Tzu\"), é um tratado militar escrito durante o século IV a.C. pelo estrategista conhecido como Sun Tzu. O tratado é composto por treze capítulos, cada qual abordando um aspecto da estratégia de guerra, de modo a compor um panorama de todos os eventos e estratégias que devem ser abordados em um combate racional. Acredita-se que o livro tenha sido usado por diversos estrategistas militares através da história como Napoleão, Zhuge Liang, Cao Cao, Takeda Shingen, Vo Nguyen Giap e Mao Tse Tung.

					O livro foi traduzido para o francês pelo padre jesuíta Joseph-Marie Amiot, que vivia na China, e publicado em 1772 com o título de Les Treize Articles (Os Treze Artigos). Em 1782 foi republicado na França. Foi um sucesso, naquela época, mas caiu no esquecimento. Em 1905, foi feita uma tradução parcial para o inglês pelo oficial britânico Everard Ferguson Calthrop, com o título de The Book of War (O Livro da Guerra). Em 1910 saiu a primeira edição comentada para o inglês, por Lionel Giles.

					Há quatro traduções russas, uma alemã e cinco em inglês, consideradas pouco satisfatórias.

					Em 1963, Samuel B. Griffith publicou uma edição comentada, em inglês. Mas o livro popularizou-se realmente em 1981, quando James Clavell, romancista conhecido por best-sellers passados no oriente (como Shogun, por exemplo), traduziu a obra de forma a que os preceitos de Sun Tzu possam ser aplicados no ambiente empresarial.

					Em português, foi publicado pela editora Record em 1983, traduzido por José Sanz a partir da versão de Clavell, com inúmeras reedições subsequentes. Devido ao sucesso dessa obra na década de 1980, sucederam-se diversas publicações de novas traduções no Brasil, como a de Caio Fernando Abreu e Miriam Paglia em 1995.

					Com seu caráter sentencioso, Sun Tzu forja a figura de um general cujas qualidades são o segredo, a dissimulação e a surpresa.


					Edição de bolso americana de A Arte da Guerra.
					Hoje, A Arte da Guerra parece destinado a secundar outra guerra: a das empresas no mundo dos negócios. Assim, o livro migrou das estantes dos estrategistas para as do economista e do administrador

					Embora as táticas bélicas tenham mudado desde a época de Sun Tzu, esse tratado teria influenciado, segundo a Enciclopédia Britânica, certos estrategistas modernos como Mao Tsé-Tung, em sua luta contra os japoneses e os chineses nacionalistas.

					Inclusive encontra-se nos escritos militares de Mao-Tse-Tung citações do livro A Arte da Guerra de Sun Tzu.

					O general brasileiro Alberto Mendes Cardoso chamou o livro do Sun Tzu de clássico militar.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					A Arte da Guerra (chinês: 孫子兵法; pinyin: sūn zĭ bīng fǎ, literalmente \"Estratégia Militar de Sun Tzu\"), é um tratado militar escrito durante o século IV a.C. pelo estrategista conhecido como Sun Tzu. O tratado é composto por treze capítulos, cada qual abordando um aspecto da estratégia de guerra, de modo a compor um panorama de todos os eventos e estratégias que devem ser abordados em um combate racional. Acredita-se que o livro tenha sido usado por diversos estrategistas militares através da história como Napoleão, Zhuge Liang, Cao Cao, Takeda Shingen, Vo Nguyen Giap e Mao Tse Tung.

					O livro foi traduzido para o francês pelo padre jesuíta Joseph-Marie Amiot, que vivia na China, e publicado em 1772 com o título de Les Treize Articles (Os Treze Artigos). Em 1782 foi republicado na França. Foi um sucesso, naquela época, mas caiu no esquecimento. Em 1905, foi feita uma tradução parcial para o inglês pelo oficial britânico Everard Ferguson Calthrop, com o título de The Book of War (O Livro da Guerra). Em 1910 saiu a primeira edição comentada para o inglês, por Lionel Giles.

					Há quatro traduções russas, uma alemã e cinco em inglês, consideradas pouco satisfatórias.

					Em 1963, Samuel B. Griffith publicou uma edição comentada, em inglês. Mas o livro popularizou-se realmente em 1981, quando James Clavell, romancista conhecido por best-sellers passados no oriente (como Shogun, por exemplo), traduziu a obra de forma a que os preceitos de Sun Tzu possam ser aplicados no ambiente empresarial.

					Em português, foi publicado pela editora Record em 1983, traduzido por José Sanz a partir da versão de Clavell, com inúmeras reedições subsequentes. Devido ao sucesso dessa obra na década de 1980, sucederam-se diversas publicações de novas traduções no Brasil, como a de Caio Fernando Abreu e Miriam Paglia em 1995.

					Com seu caráter sentencioso, Sun Tzu forja a figura de um general cujas qualidades são o segredo, a dissimulação e a surpresa.


					Edição de bolso americana de A Arte da Guerra.
					Hoje, A Arte da Guerra parece destinado a secundar outra guerra: a das empresas no mundo dos negócios. Assim, o livro migrou das estantes dos estrategistas para as do economista e do administrador

					Embora as táticas bélicas tenham mudado desde a época de Sun Tzu, esse tratado teria influenciado, segundo a Enciclopédia Britânica, certos estrategistas modernos como Mao Tsé-Tung, em sua luta contra os japoneses e os chineses nacionalistas.

					Inclusive encontra-se nos escritos militares de Mao-Tse-Tung citações do livro A Arte da Guerra de Sun Tzu.

					O general brasileiro Alberto Mendes Cardoso chamou o livro do Sun Tzu de clássico militar.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					A Arte da Guerra (chinês: 孫子兵法; pinyin: sūn zĭ bīng fǎ, literalmente \"Estratégia Militar de Sun Tzu\"), é um tratado militar escrito durante o século IV a.C. pelo estrategista conhecido como Sun Tzu. O tratado é composto por treze capítulos, cada qual abordando um aspecto da estratégia de guerra, de modo a compor um panorama de todos os eventos e estratégias que devem ser abordados em um combate racional. Acredita-se que o livro tenha sido usado por diversos estrategistas militares através da história como Napoleão, Zhuge Liang, Cao Cao, Takeda Shingen, Vo Nguyen Giap e Mao Tse Tung.

					O livro foi traduzido para o francês pelo padre jesuíta Joseph-Marie Amiot, que vivia na China, e publicado em 1772 com o título de Les Treize Articles (Os Treze Artigos). Em 1782 foi republicado na França. Foi um sucesso, naquela época, mas caiu no esquecimento. Em 1905, foi feita uma tradução parcial para o inglês pelo oficial britânico Everard Ferguson Calthrop, com o título de The Book of War (O Livro da Guerra). Em 1910 saiu a primeira edição comentada para o inglês, por Lionel Giles.

					Há quatro traduções russas, uma alemã e cinco em inglês, consideradas pouco satisfatórias.

					Em 1963, Samuel B. Griffith publicou uma edição comentada, em inglês. Mas o livro popularizou-se realmente em 1981, quando James Clavell, romancista conhecido por best-sellers passados no oriente (como Shogun, por exemplo), traduziu a obra de forma a que os preceitos de Sun Tzu possam ser aplicados no ambiente empresarial.

					Em português, foi publicado pela editora Record em 1983, traduzido por José Sanz a partir da versão de Clavell, com inúmeras reedições subsequentes. Devido ao sucesso dessa obra na década de 1980, sucederam-se diversas publicações de novas traduções no Brasil, como a de Caio Fernando Abreu e Miriam Paglia em 1995.

					Com seu caráter sentencioso, Sun Tzu forja a figura de um general cujas qualidades são o segredo, a dissimulação e a surpresa.


					Edição de bolso americana de A Arte da Guerra.
					Hoje, A Arte da Guerra parece destinado a secundar outra guerra: a das empresas no mundo dos negócios. Assim, o livro migrou das estantes dos estrategistas para as do economista e do administrador

					Embora as táticas bélicas tenham mudado desde a época de Sun Tzu, esse tratado teria influenciado, segundo a Enciclopédia Britânica, certos estrategistas modernos como Mao Tsé-Tung, em sua luta contra os japoneses e os chineses nacionalistas.

					Inclusive encontra-se nos escritos militares de Mao-Tse-Tung citações do livro A Arte da Guerra de Sun Tzu.

					O general brasileiro Alberto Mendes Cardoso chamou o livro do Sun Tzu de clássico militar.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00002E'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'SUNtzu'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>