<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='SMITHadam'");
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
		<?php $user = 'SMITHadam'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Adam Smith (Kirkcaldy, 5 de junho de 1723 — Edimburgo, 17 de julho de 1790) foi um filósofo e economista britânico nascido na Escócia. Teve como cenário para a sua vida o atribulado Século das Luzes,[3] o século XVIII.[4]

É o pai da economia moderna, e é considerado o mais importante teórico do liberalismo econômico. Autor de Uma investigação sobre a natureza e a causa da riqueza das nações, a sua obra mais conhecida, e que continua sendo usada como referência para gerações de economistas, na qual procurou demonstrar que a riqueza das nações resultava da atuação de indivíduos que, movidos inclusive (e não apenas exclusivamente)[5] pelo seu próprio interesse (self-interest), promoviam o crescimento econômico e a inovação tecnológica.

Adam Smith ilustrou bem seu pensamento ao afirmar \"não é da benevolência do padeiro, do açougueiro ou do cervejeiro que eu espero que saia o meu jantar, mas sim do empenho deles em promover seu auto-interesse\". Assim acreditava que a iniciativa privada deveria agir livremente, com pouca ou nenhuma intervenção governamental, sendo defensor do free banking (sistema bancário livre).[6] A competição livre entre os diversos fornecedores levaria não só à queda do preço das mercadorias, mas também a constantes inovações tecnológicas, no afã de baratear o custo de produção e vencer os competidores.

Ele analisou a divisão do trabalho como um fator evolucionário poderoso a propulsionar a economia. Uma frase de Adam Smith se tornou famosa: \"Assim, o mercador ou comerciante, movido apenas pelo seu próprio interesse (self-interest), é levado por uma \"mão invisível\" a promover algo que nunca fez parte do interesse dele: o bem-estar da sociedade.\" Como resultado da atuação dessa \"mão invisível\", o preço das mercadorias deveria descer e os salários deveriam subir.";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Adam Smith FRSA (c. 16 June [O.S. c. 5 June] 1723[1] – 17 July 1790) was a Scottish[a] economist, philosopher, and author as well as a moral philosopher, a pioneer of political economy, and a key figure during the Scottish Enlightenment,[6] also known as ''The Father of Economics''[7] or ''The Father of Capitalism''.[8] Smith wrote two classic works, The Theory of Moral Sentiments (1759) and An Inquiry into the Nature and Causes of the Wealth of Nations (1776). The latter, often abbreviated as The Wealth of Nations, is considered his magnum opus and the first modern work of economics. In his work, Adam Smith introduced his theory of absolute advantage.[9]

Smith studied social philosophy at the University of Glasgow and at Balliol College, Oxford, where he was one of the first students to benefit from scholarships set up by fellow Scot John Snell. After graduating, he delivered a successful series of public lectures at the University of Edinburgh,[10] leading him to collaborate with David Hume during the Scottish Enlightenment. Smith obtained a professorship at Glasgow, teaching moral philosophy and during this time, wrote and published The Theory of Moral Sentiments. In his later life, he took a tutoring position that allowed him to travel throughout Europe, where he met other intellectual leaders of his day.

Smith laid the foundations of classical free market economic theory. The Wealth of Nations was a precursor to the modern academic discipline of economics. In this and other works, he developed the concept of division of labour and expounded upon how rational self-interest and competition can lead to economic prosperity. Smith was controversial in his own day and his general approach and writing style were often satirised by writers such as Horace Walpole.[11]";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Adam Smith (Kirkcaldy, 5 de junio de 1723 – Edimburgo, 17 de julio de 1790) fue un economista y filósofo escocés, considerado uno de los mayores exponentes de la economía clásica y de la filosofía de la economía.

Es conocido principalmente por su obra La riqueza de las naciones (1776), que es un estudio acerca del proceso de creación y acumulación de la riqueza, temas ya abordados por los mercantilistas y fisiócratas, pero sin el carácter científico de la obra de Smith. Debido a dicho trabajo, que fue el primer estudio completo y sistemático sobre el tema, a Smith se le conoce como el padre de la economía moderna. Fue Rector Honorífico de la Universidad de Glasgow.";
				}
			?>
		</div>
		<?php $auctor='SMITHadam'; include '../design/poemfind.php'; ?>
		<?php $user = 'SMITHadam'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>