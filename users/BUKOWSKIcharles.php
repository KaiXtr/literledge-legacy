<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='BUKOWSKIcharles'");
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
		<?php $user = 'BUKOWSKIcharles'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Henry Charles Bukowski Jr (nascido Heinrich Karl Bukowski; Andernach, 16 de agosto de 1920 — Los Angeles, 9 de março de 1994) foi um poeta, contista e romancista estadunidense nascido na Alemanha.[1] Sua obra, de caráter inicialmente obsceno e estilo totalmente coloquial, com descrições de trabalhos braçais, porres e relacionamentos baratos, fascinou gerações que buscavam uma obra com a qual pudessem se identificar.";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Henry Charles Bukowski (born Heinrich Karl Bukowski; August 16, 1920 – March 9, 1994) was a German-American poet, novelist, and short story writer.

His writing was influenced by the social, cultural, and economic ambiance of his home city of Los Angeles.[4] His work addresses the ordinary lives of poor Americans, the act of writing, alcohol, relationships with women, and the drudgery of work. Bukowski wrote thousands of poems, hundreds of short stories and six novels, eventually publishing over 60 books. The FBI kept a file on him as a result of his column Notes of a Dirty Old Man in the LA underground newspaper Open City.[5][6]

Bukowski published extensively in small literary magazines and with small presses beginning in the early 1940s and continuing on through the early 1990s. As noted by one reviewer, \"Bukowski continued to be, thanks to his antics and deliberate clownish performances, the king of the underground and the epitome of the littles in the ensuing decades, stressing his loyalty to those small press editors who had first championed his work and consolidating his presence in new ventures such as the New York Quarterly, Chiron Review, or Slipstream.\"[7] Some of these works include his Poems Written Before Jumping Out of an 8 Story Window, published by his friend and fellow poet Charles Potts, and better known works such as Burning in Water, Drowning in Flame. These poems and stories were later republished by John Martin's Black Sparrow Press (now HarperCollins/Ecco Press) as collected volumes of his work.

In 1986 Time called Bukowski a \"laureate of American lowlife\".[8] Regarding Bukowski's enduring popular appeal, Adam Kirsch of The New Yorker wrote, \"the secret of Bukowski's appeal ... [is that] he combines the confessional poet's promise of intimacy with the larger-than-life aplomb of a pulp-fiction hero.\"[9]

Since his death in 1994, Bukowski has been the subject of a number of critical articles and books about both his life and writings, despite his work having received relatively little attention from academic critics in the United States during his lifetime. In contrast, Bukowski enjoyed extraordinary fame in Europe, especially in Germany, the place of his birth.";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Henry Charles Bukowski, nacido como Heinrich Karl Bukowski (Andernach, Alemania 16 de agosto de 1920-San Pedro, Los Ángeles, 9 de marzo de 1994), fue un escritor y poeta alemán, nacionalizado estadounidense.

La obra literaria de Bukowski está fuertemente influida por la atmósfera de la ciudad de Los Ángeles, donde pasó la mayor parte de su vida. Hoy en día, es considerado uno de los escritores más influyentes y símbolo del «realismo sucio»1​2​ y la literatura independiente.

La obra de Charles Bukowski recibió tantas críticas negativas como positivas. Se le acusó de practicar un estilo soez como mero exhibicionismo literario y de reiterar sus obsesiones de modo efectista. Otros críticos, en cambio, realzaron su autenticidad y su condición de escritor maldito.";
				}
			?>
		</div>
		<?php $auctor='BUKOWSKIcharles'; include '../design/poemfind.php'; ?>
		<?php $user = 'BUKOWSKIcharles'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>