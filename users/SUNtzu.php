<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='SUNtzu'");
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

		<?php $user = 'SUNtzu'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div class='manlan' lang='pt'>
				Sun Tzu (chinês simplificado: 孙武; chinês tradicional: 孫武; pinyin: Sūn Wǔ) (544 a.C. - 496 a.C.) foi um general, estrategista e filósofo chinês e principal nome relacionado a escola militar de filosofia chinesa[1]. Ele é mais conhecido por seu tratado militar, A Arte da Guerra, composto por 13 capítulos de estratégias militares.

				Sun Tzu, também grafado como Sunzi, foi uma figura histórica cuja existência é questionada por vários historiadores. Seu nome de nascimento era Sun Wu, sendo Sun o seu sobrenome e Tzu um título que significa "Mestre". Tradicionalmente, Sun Tzu vivera no Período das Primaveras e Outonos da China (722 a.C. – 481 a.C.) como general do Rei Hu Lu. Historiadores mais recentes, que admitem a sua existência, datam o seu trabalho, A Arte da Guerra, do Período dos Reinos Combatentes (476 a.C. – 221 a.C.), baseado nas descrições da guerra desse livro, e pela semelhança da forma de redação do texto com outros trabalhos feitos no início do período dos Reinos Combatentes.[2]

				Os historiadores mais tradicionais acreditam que o seu descendente, Sun Pin, também escreveu um tratado sobre táticas militares, intitulado A Arte da Guerra de Sun Pin. Ambos são mencionados como Sun Tzu nos textos tradicionais chineses, e alguns historiadores acreditavam que Sun Wu era de fato Sun Pin até a descoberta de seus trabalhos em 1972. Durante os séculos XIX e XX, A Arte da Guerra, de Sun Tzu, ganhou grande popularidade, sendo adaptado na prática pelo mundo Ocidental, continuando os seus trabalhos a influenciar as culturas e políticas tanto do mundo Asiático como do Ocidental.
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Sun_Tzu' > Wikipedia </a>
			</div>
		</div>
		<?php $auctor='SUNtzu'; include '../design/poemfind.php'; ?>
		<?php $user = 'SUNtzu'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>