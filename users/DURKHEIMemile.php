<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='DURKHEIMemile'");
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

		<?php $user = 'DURKHEIMemile'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			David Émile Durkheim (Épinal, 15 de abril de 1858 — Paris, 15 de novembro de 1917) foi um sociólogo, antropólogo, cientista político, psicólogo social e filósofo francês. <br />
			Formalmente, tornou a sociologia uma ciência e, com Karl Marx e Max Weber, é comumente citado como o principal arquiteto da ciência social moderna e pai da sociologia.[1][2] <br />
			<br />
			Muito de seu trabalho estava preocupado com a forma como as sociedades poderiam manter sua integridade e coerência na modernidade, uma era em que tradicionais <br />
			laços sociais e religiosos não são mais assumidos e em que novas instituições sociais têm surgido. Seu primeiro trabalho sociológico importante foi <br />
			Da Divisão do Trabalho Social (1893). Em 1895, publicou As Regras do Método Sociológico e criou o primeiro departamento europeu de sociologia, <br />
			tornando-se o primeiro professor de sociologia da França.[3] Em 1898, fundou a revista L'Année Sociologique. Sua monografia seminal, O Suicídio (1897), <br />
			um estudo das taxas de suicídio em populações católicas e protestantes, foi uma investigação social moderna pioneira e serviu para distinguir a <br />
			ciência social em relação à psicologia e à filosofia política. As Formas Elementares da Vida Religiosa (1912) apresentou uma teoria da religião, <br />
			comparando a vida social e cultural das sociedades primitivas e a das sociedades modernas. <br />
			<br />
			Durkheim também estava profundamente preocupado com a aceitação da sociologia como ciência legítima. Aperfeiçoou o positivismo originalmente estabelecido por <br />
			Auguste Comte, promovendo o que poderia ser considerado como uma forma de realismo epistemológico, assim como a utilização do método hipotético-dedutivo na ciência social. <br />
			Para ele, a sociologia era a ciência das instituições, caso no qual este termo é entendido em seu sentido mais amplo como as "crenças e modos de <br />
			comportamento instituídos pela coletividade"[4] e que tem, como objetivo, descobrir fatos sociais estruturais. Foi um grande defensor do funcionalismo estrutural, <br />
			uma perspectiva fundamental tanto em sociologia e antropologia. Em sua opinião, a ciência social deve ser puramente holística,[5] ou sejaː a sociologia deve <br />
			estudar os fenômenos atribuídos à sociedade em geral, em vez de se limitar às ações específicas dos indivíduos. <br />
			<br />
			Permaneceu como uma força dominante na vida intelectual francesa até a sua morte em 1917, apresentando inúmeras palestras e trabalhos publicados em uma <br />
			variedade de tópicos, incluindo a sociologia do conhecimento, a moralidade, a estratificação social, religião, direito, educação, e desvio. <br />
			Termos durkheimianos como "consciência coletiva", desde então, entraram no léxico popular.[6] <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Émile_Durkheim' > Wikipedia </a>
		</div>
		<?php $auctor='DURKHEIMemile'; include '../design/poemfind.php'; ?>
		<?php $user = 'DURKHEIMemile'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>