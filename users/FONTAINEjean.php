<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='FONTAINEjean'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['pt'];}
				else {$v = $i[$_COOKIE['lang']];}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'FONTAINEjean'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Era filho de um inspetor de águas e florestas, e nasceu na pequena localidade de Château-Thierry. Estudou teologia e direito em Paris, mas seu maior interesse sempre foi a literatura. Por desejo do pai, casou em 1647 com Marie Héricart. Embora o casamento nunca tenha sido feliz, o casal teve um filho, Charles. Em 1652, La Fontaine assumiu o cargo de seu pai, mas alguns anos depois colocou-se a serviço do ministro das finanças Nicolas Fouquet, mecenas de vários artistas, a quem dedicou uma coletânea de poemas. Escreveu o romance \"Os Amores de Psique e Cupido\" e tornou-se próximo dos escritores Molière e Racine. Com a queda do ministro Fouquet, La Fontaine tornou-se protegido da Duquesa de Bouillon e da Duquesa d'Orleans.

			Em 1668 foram publicadas as primeiras fábulas, num volume intitulado \"Fábulas Escolhidas\". O livro era uma coletânea de 124 fábulas, dividida em seis partes. La Fontaine dedicou este livro ao filho do rei Luís XIV. As fábulas continham histórias de animais, magistralmente contadas, contendo um fundo moral. Escritas em linguagem simples e atraente, as fábulas de La Fontaine conquistaram imediatamente seus leitores. Em 1683 La Fontaine tornou-se membro da Academia Francesa, a cujas sessões passou a comparecer com assiduidade. Na famosa \"Querela dos antigos e dos modernos\", tomou partido dos poetas antigos. Várias novas edições das \"Fábulas\" foram publicadas em vida do autor. A cada nova edição, novas narrativas foram acrescentadas. Em 1692, La Fontaine, já doente, converteu-se ao catolicismo. A última edição de suas fábulas foi publicada em 1693. Antes de vir a ser fabulista, foi poeta, tentou ser teólogo. Além disso, também entrou para um seminário, mas aí perdeu o interesse. 

			Está sepultado no cemitério Père-Lachaise, em Paris, ao lado do dramaturgo Molière.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Jean_de_La_Fontaine' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Era filho de um inspetor de águas e florestas, e nasceu na pequena localidade de Château-Thierry. Estudou teologia e direito em Paris, mas seu maior interesse sempre foi a literatura. Por desejo do pai, casou em 1647 com Marie Héricart. Embora o casamento nunca tenha sido feliz, o casal teve um filho, Charles. Em 1652, La Fontaine assumiu o cargo de seu pai, mas alguns anos depois colocou-se a serviço do ministro das finanças Nicolas Fouquet, mecenas de vários artistas, a quem dedicou uma coletânea de poemas. Escreveu o romance \"Os Amores de Psique e Cupido\" e tornou-se próximo dos escritores Molière e Racine. Com a queda do ministro Fouquet, La Fontaine tornou-se protegido da Duquesa de Bouillon e da Duquesa d'Orleans.

			Em 1668 foram publicadas as primeiras fábulas, num volume intitulado \"Fábulas Escolhidas\". O livro era uma coletânea de 124 fábulas, dividida em seis partes. La Fontaine dedicou este livro ao filho do rei Luís XIV. As fábulas continham histórias de animais, magistralmente contadas, contendo um fundo moral. Escritas em linguagem simples e atraente, as fábulas de La Fontaine conquistaram imediatamente seus leitores. Em 1683 La Fontaine tornou-se membro da Academia Francesa, a cujas sessões passou a comparecer com assiduidade. Na famosa \"Querela dos antigos e dos modernos\", tomou partido dos poetas antigos. Várias novas edições das \"Fábulas\" foram publicadas em vida do autor. A cada nova edição, novas narrativas foram acrescentadas. Em 1692, La Fontaine, já doente, converteu-se ao catolicismo. A última edição de suas fábulas foi publicada em 1693. Antes de vir a ser fabulista, foi poeta, tentou ser teólogo. Além disso, também entrou para um seminário, mas aí perdeu o interesse. 

			Está sepultado no cemitério Père-Lachaise, em Paris, ao lado do dramaturgo Molière.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Jean_de_La_Fontaine' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Era filho de um inspetor de águas e florestas, e nasceu na pequena localidade de Château-Thierry. Estudou teologia e direito em Paris, mas seu maior interesse sempre foi a literatura. Por desejo do pai, casou em 1647 com Marie Héricart. Embora o casamento nunca tenha sido feliz, o casal teve um filho, Charles. Em 1652, La Fontaine assumiu o cargo de seu pai, mas alguns anos depois colocou-se a serviço do ministro das finanças Nicolas Fouquet, mecenas de vários artistas, a quem dedicou uma coletânea de poemas. Escreveu o romance \"Os Amores de Psique e Cupido\" e tornou-se próximo dos escritores Molière e Racine. Com a queda do ministro Fouquet, La Fontaine tornou-se protegido da Duquesa de Bouillon e da Duquesa d'Orleans.

			Em 1668 foram publicadas as primeiras fábulas, num volume intitulado \"Fábulas Escolhidas\". O livro era uma coletânea de 124 fábulas, dividida em seis partes. La Fontaine dedicou este livro ao filho do rei Luís XIV. As fábulas continham histórias de animais, magistralmente contadas, contendo um fundo moral. Escritas em linguagem simples e atraente, as fábulas de La Fontaine conquistaram imediatamente seus leitores. Em 1683 La Fontaine tornou-se membro da Academia Francesa, a cujas sessões passou a comparecer com assiduidade. Na famosa \"Querela dos antigos e dos modernos\", tomou partido dos poetas antigos. Várias novas edições das \"Fábulas\" foram publicadas em vida do autor. A cada nova edição, novas narrativas foram acrescentadas. Em 1692, La Fontaine, já doente, converteu-se ao catolicismo. A última edição de suas fábulas foi publicada em 1693. Antes de vir a ser fabulista, foi poeta, tentou ser teólogo. Além disso, também entrou para um seminário, mas aí perdeu o interesse. 

			Está sepultado no cemitério Père-Lachaise, em Paris, ao lado do dramaturgo Molière.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Jean_de_La_Fontaine' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='FONTAINEjean'; include '../design/poemfind.php'; ?>
		<?php $user = 'FONTAINEjean'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>