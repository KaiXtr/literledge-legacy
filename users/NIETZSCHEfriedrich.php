<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='NIETZSCHEfriedrich'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['name'].' - ';}
				else {$v = $i[$_COOKIE['lang']].' - ';}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'NIETZSCHEfriedrich'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Friedrich Wilhelm Nietzsche (Röcken, Reino da Prússia, 15 de outubro de 1844 — Weimar, Império Alemão, 25 de agosto de 1900) foi um filósofo, filólogo, <br />
			crítico cultural, poeta e compositor prussiano do século XIX, nascido na atual Alemanha.[1] Escreveu vários textos criticando a religião, a moral, <br />
			a cultura contemporânea, filosofia e ciência, exibindo uma predileção por metáfora, ironia e aforismo. <br />
			<br />
			Suas ideias-chave incluíam a crítica à dicotomia apolíneo/dionisíaca, o perspectivismo, a vontade de poder, a morte de Deus, o Übermensch e eterno retorno. <br />
			Sua filosofia central é a ideia de "afirmação da vida", que envolve questionamento de qualquer doutrina que drene uma expansiva de energias, não importando o <br />
			quão socialmente predominantes essas ideias poderiam ser.[2] Seu questionamento radical do valor e da objetividade da verdade tem sido o foco de extenso comentário <br />
			e sua influência continua a ser substancial, especialmente na tradição filosófica continental compreendendo existencialismo, pós-modernismo e pós-estruturalismo. <br />
			Suas ideias de superação individual e transcendência além da estrutura e contexto tiveram um impacto profundo sobre pensadores do final do século XIX e <br />
			início do século XX, que usaram estes conceitos como pontos de partida para o desenvolvimento de suas filosofias.[3][4] Mais recentemente, as reflexões de Nietzsche <br />
			foram recebidas em várias abordagens filosóficas que se movem além do humanismo, por exemplo, o transumanismo. <br />
			<br />
			Nietzsche começou sua carreira como filólogo clássico—um estudioso da crítica textual grega e romana—antes de se voltar para a filosofia. Em 1869, aos vinte e <br />
			quatro anos, foi nomeado para a cadeira de Filologia Clássica na Universidade de Basileia, a pessoa mais jovem a ter alcançado esta posição.[5] <br />
			Em 1889, com quarenta e quatro anos de idade, sofreu um colapso e uma perda completa de suas faculdades mentais. A composição foi posteriormente atribuída a <br />
			paresia geral atípica devido a sífilis terciária, mas este diagnóstico vem entrado em questão.[6] Nietzsche viveu seus últimos anos sob os cuidados de sua <br />
			mãe até a morte dela em 1897, depois caiu sob os cuidados de sua irmã, Elisabeth Förster-Nietzsche, até morrer em 1900. <br />
			<br />
			Como sua cuidadora, sua irmã assumiu o papel de curadora e editora de seus manuscritos. Förster-Nietzsche era casada com um proeminente nacionalista e antissemita <br />
			alemão, Bernhard Förster, e retrabalhou escritos inéditos de Nietzsche para se adequar a ideologia de seu marido, muitas vezes de maneiras contrárias às suas opiniões <br />
			expressas, que estavam fortemente e explicitamente opostas ao antissemitismo e nacionalismo. Através de edições de Förster-Nietzsche, o nome de Friedrich tornou-se <br />
			associado com o militarismo alemão e o nazismo, mas estudiosos posteriores do século XX vêm tentando neutralizar esse equívoco de suas ideias.[7] <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Friedrich_Nietzsche' > Wikipedia </a>
			<br />
			<iframe width="560" height="315" src="https://www.youtube.com/embed/Fzp7iCaWNvE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<?php $auctor='NIETZSCHEfriedrich'; include '../design/poemfind.php'; ?>
		<?php $user = 'NIETZSCHEfriedrich'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>