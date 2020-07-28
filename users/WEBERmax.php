<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='WEBERmax'");
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

		<?php $user = 'WEBERmax'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Maximilian Karl Emil Weber (pronúncia em alemão: ˈmaks ˈveːbɐ; Erfurt, 21 de abril de 1864 — Munique, 14 de junho de 1920) foi um intelectual, jurista e economista <br />
			alemão considerado um dos fundadores da Sociologia. Seu irmão foi o também famoso sociólogo e economista Alfred Weber. A esposa de Max Weber, Marianne Weber, <br />
			biógrafa do marido, foi uma das alunas pioneiras na universidade alemã e integrava grupos feministas de seu tempo. <br />
			<br />
			É considerado um dos fundadores do estudo moderno da sociologia, mas sua influência também pode ser sentida na economia, na filosofia, no direito, na ciência política <br />
			e na administração. Começou sua carreira académica na Universidade Humboldt de Berlim e, posteriormente, trabalhou na Universidade de Freiburg, na <br />
			Universidade de Heidelberg, na Universidade de Viena e na Universidade de Munique. Personagem influente na política alemã da época, foi consultor dos negociadores <br />
			alemães no Tratado de Versalhes (1919) e da comissão encarregada de redigir a Constituição de Weimar. <br />
			<br />
			Grande parte de seu trabalho como pensador e estudioso foi reservado para o estudo do capitalismo e do chamado processo de racionalização e desencantamento do mundo. <br />
			Mas seus estudos também deram contribuição importante para a economia. <br />
			<br />
			Sua obra mais famosa são os dois artigos que compõem A ética protestante e o espírito do capitalismo, com o qual começou suas reflexões sobre a <br />
			sociologia da religião. Weber argumentou que a religião era uma das razões não-exclusivas do porquê as culturas do Ocidente e do Oriente se desenvolveram de <br />
			formas diversas, e salientou a importância de algumas características específicas do protestantismo ascético, que levou ao nascimento do capitalismo, da burocracia e <br />
			do estado racional e legal nos países ocidentais. Em outro trabalho importante, A política como vocação, Weber definiu o Estado como \"uma entidade que reivindica o <br />
			monopólio do uso legítimo da força física\", uma definição que se tornou central no estudo da moderna ciência política no Ocidente. Em suas contribuições <br />
			mais conhecidas são muitas vezes referidas como a \"Tese de Weber\". <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Max_Weber' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Maximilian Karl Emil Weber (pronúncia em alemão: ˈmaks ˈveːbɐ; Erfurt, 21 de abril de 1864 — Munique, 14 de junho de 1920) foi um intelectual, jurista e economista <br />
			alemão considerado um dos fundadores da Sociologia. Seu irmão foi o também famoso sociólogo e economista Alfred Weber. A esposa de Max Weber, Marianne Weber, <br />
			biógrafa do marido, foi uma das alunas pioneiras na universidade alemã e integrava grupos feministas de seu tempo. <br />
			<br />
			É considerado um dos fundadores do estudo moderno da sociologia, mas sua influência também pode ser sentida na economia, na filosofia, no direito, na ciência política <br />
			e na administração. Começou sua carreira académica na Universidade Humboldt de Berlim e, posteriormente, trabalhou na Universidade de Freiburg, na <br />
			Universidade de Heidelberg, na Universidade de Viena e na Universidade de Munique. Personagem influente na política alemã da época, foi consultor dos negociadores <br />
			alemães no Tratado de Versalhes (1919) e da comissão encarregada de redigir a Constituição de Weimar. <br />
			<br />
			Grande parte de seu trabalho como pensador e estudioso foi reservado para o estudo do capitalismo e do chamado processo de racionalização e desencantamento do mundo. <br />
			Mas seus estudos também deram contribuição importante para a economia. <br />
			<br />
			Sua obra mais famosa são os dois artigos que compõem A ética protestante e o espírito do capitalismo, com o qual começou suas reflexões sobre a <br />
			sociologia da religião. Weber argumentou que a religião era uma das razões não-exclusivas do porquê as culturas do Ocidente e do Oriente se desenvolveram de <br />
			formas diversas, e salientou a importância de algumas características específicas do protestantismo ascético, que levou ao nascimento do capitalismo, da burocracia e <br />
			do estado racional e legal nos países ocidentais. Em outro trabalho importante, A política como vocação, Weber definiu o Estado como \"uma entidade que reivindica o <br />
			monopólio do uso legítimo da força física\", uma definição que se tornou central no estudo da moderna ciência política no Ocidente. Em suas contribuições <br />
			mais conhecidas são muitas vezes referidas como a \"Tese de Weber\". <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Max_Weber' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Maximilian Karl Emil Weber (pronúncia em alemão: ˈmaks ˈveːbɐ; Erfurt, 21 de abril de 1864 — Munique, 14 de junho de 1920) foi um intelectual, jurista e economista <br />
			alemão considerado um dos fundadores da Sociologia. Seu irmão foi o também famoso sociólogo e economista Alfred Weber. A esposa de Max Weber, Marianne Weber, <br />
			biógrafa do marido, foi uma das alunas pioneiras na universidade alemã e integrava grupos feministas de seu tempo. <br />
			<br />
			É considerado um dos fundadores do estudo moderno da sociologia, mas sua influência também pode ser sentida na economia, na filosofia, no direito, na ciência política <br />
			e na administração. Começou sua carreira académica na Universidade Humboldt de Berlim e, posteriormente, trabalhou na Universidade de Freiburg, na <br />
			Universidade de Heidelberg, na Universidade de Viena e na Universidade de Munique. Personagem influente na política alemã da época, foi consultor dos negociadores <br />
			alemães no Tratado de Versalhes (1919) e da comissão encarregada de redigir a Constituição de Weimar. <br />
			<br />
			Grande parte de seu trabalho como pensador e estudioso foi reservado para o estudo do capitalismo e do chamado processo de racionalização e desencantamento do mundo. <br />
			Mas seus estudos também deram contribuição importante para a economia. <br />
			<br />
			Sua obra mais famosa são os dois artigos que compõem A ética protestante e o espírito do capitalismo, com o qual começou suas reflexões sobre a <br />
			sociologia da religião. Weber argumentou que a religião era uma das razões não-exclusivas do porquê as culturas do Ocidente e do Oriente se desenvolveram de <br />
			formas diversas, e salientou a importância de algumas características específicas do protestantismo ascético, que levou ao nascimento do capitalismo, da burocracia e <br />
			do estado racional e legal nos países ocidentais. Em outro trabalho importante, A política como vocação, Weber definiu o Estado como \"uma entidade que reivindica o <br />
			monopólio do uso legítimo da força física\", uma definição que se tornou central no estudo da moderna ciência política no Ocidente. Em suas contribuições <br />
			mais conhecidas são muitas vezes referidas como a \"Tese de Weber\". <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Max_Weber' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='WEBERmax'; include '../design/poemfind.php'; ?>
		<?php $user = 'WEBERmax'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>