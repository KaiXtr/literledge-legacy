<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='HEGELfriedrich'");
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

		<?php $user = 'HEGELfriedrich'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Georg Wilhelm Friedrich Hegel (Estugarda, 27 de agosto de 1770 – Berlim, 14 de novembro de 1831) foi um filósofo germânico. Sua obra Fenomenologia do Espírito é tida como um marco na filosofia mundial e na filosofia alemã. Hegel pode ser incluído naquilo que se chamou de Idealismo Alemão, uma espécie de movimento filosófico marcado por intensas discussões filosóficas entre pensadores de cultura alemã (Prússia) do final do século XVIII e início do XIX. Essas discussões tiveram por base a publicação da Crítica da Razão Pura de Immanuel Kant. Hegel, ainda no seminário de Tübingen, escreveu, juntamente com dois renomados colegas, os filósofos Friedrich Schelling e Friedrich Hölderlin, o que chamaram de \"O Mais Antigo Programa de Sistema do Idealismo Alemão\". Posteriormente desenvolveu um sistema filosófico que denominou \"Idealismo Absoluto\", uma filosofia capaz de compreender discursivamente o absoluto (de atingir um saber do absoluto, saber cuja possibilidade fora, de modo geral, negada pela crítica de Kant à metafísica). Apesar de ser notavelmente crítica em relação ao Iluminismo, a filosofia hegeliana é tida por muitos como, para usar a expressão de Habermas, a \"filosofia da modernidade por excelência\".

			Hegel influenciou um grande número de autores (Strauss, Bauer, Feuerbach, Stirner, Marx, Dilthey, Bradley, Dewey, Kojève, Hyppolite, Hans Küng, Fukuyama, Žižek). Era fascinado pelas obras de Spinoza, Kant e Rousseau, assim como pela Revolução Francesa. Muitos consideram que Hegel representa o ápice do Idealismo Alemão.

			Hegel descreve sua concepção filosófica, no prefácio a uma de suas mais célebres obras, a Fenomenologia do Espírito, da seguinte forma: \"Segundo minha concepção – que só deve ser justificada pela apresentação do próprio sistema –, tudo decorre de entender e exprimir o verdadeiro não como substância, mas também, precisamente, como sujeito. Ao mesmo tempo, deve-se observar que a substancialidade inclui em si não só o universal ou a imediatez do saber mesmo, mas também aquela imediatez que é o ser, ou a imediatez para o saber. [...] A substância viva é o ser, que na verdade é sujeito, ou – o que significa o mesmo – que é na verdade efetivo, mas só na medida em que é o movimento do pôr-se-a-si-mesmo, ou a mediação consigo mesmo do tornar-se outro. Como sujeito, é a negatividade pura e simples, e justamente por isso é o fracionamento do simples ou a duplicação oponente, que é de novo a negação dessa diversidade indiferente e de seu oposto. Só essa igualdade reinstaurando-se, ou só a reflexão em si mesmo no seu ser-Outro, é que são o verdadeiro; e não uma unidade originária enquanto tal, ou uma unidade imediata enquanto tal. O verdadeiro é o vir-a-ser de si mesmo, o círculo que pressupõe seu fim como sua meta, que o tem como princípio, e que só é efetivo mediante sua atualização e seu fim.\".
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Georg_Wilhelm_Friedrich_Hegel' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Georg Wilhelm Friedrich Hegel (Estugarda, 27 de agosto de 1770 – Berlim, 14 de novembro de 1831) foi um filósofo germânico. Sua obra Fenomenologia do Espírito é tida como um marco na filosofia mundial e na filosofia alemã. Hegel pode ser incluído naquilo que se chamou de Idealismo Alemão, uma espécie de movimento filosófico marcado por intensas discussões filosóficas entre pensadores de cultura alemã (Prússia) do final do século XVIII e início do XIX. Essas discussões tiveram por base a publicação da Crítica da Razão Pura de Immanuel Kant. Hegel, ainda no seminário de Tübingen, escreveu, juntamente com dois renomados colegas, os filósofos Friedrich Schelling e Friedrich Hölderlin, o que chamaram de \"O Mais Antigo Programa de Sistema do Idealismo Alemão\". Posteriormente desenvolveu um sistema filosófico que denominou \"Idealismo Absoluto\", uma filosofia capaz de compreender discursivamente o absoluto (de atingir um saber do absoluto, saber cuja possibilidade fora, de modo geral, negada pela crítica de Kant à metafísica). Apesar de ser notavelmente crítica em relação ao Iluminismo, a filosofia hegeliana é tida por muitos como, para usar a expressão de Habermas, a \"filosofia da modernidade por excelência\".

			Hegel influenciou um grande número de autores (Strauss, Bauer, Feuerbach, Stirner, Marx, Dilthey, Bradley, Dewey, Kojève, Hyppolite, Hans Küng, Fukuyama, Žižek). Era fascinado pelas obras de Spinoza, Kant e Rousseau, assim como pela Revolução Francesa. Muitos consideram que Hegel representa o ápice do Idealismo Alemão.

			Hegel descreve sua concepção filosófica, no prefácio a uma de suas mais célebres obras, a Fenomenologia do Espírito, da seguinte forma: \"Segundo minha concepção – que só deve ser justificada pela apresentação do próprio sistema –, tudo decorre de entender e exprimir o verdadeiro não como substância, mas também, precisamente, como sujeito. Ao mesmo tempo, deve-se observar que a substancialidade inclui em si não só o universal ou a imediatez do saber mesmo, mas também aquela imediatez que é o ser, ou a imediatez para o saber. [...] A substância viva é o ser, que na verdade é sujeito, ou – o que significa o mesmo – que é na verdade efetivo, mas só na medida em que é o movimento do pôr-se-a-si-mesmo, ou a mediação consigo mesmo do tornar-se outro. Como sujeito, é a negatividade pura e simples, e justamente por isso é o fracionamento do simples ou a duplicação oponente, que é de novo a negação dessa diversidade indiferente e de seu oposto. Só essa igualdade reinstaurando-se, ou só a reflexão em si mesmo no seu ser-Outro, é que são o verdadeiro; e não uma unidade originária enquanto tal, ou uma unidade imediata enquanto tal. O verdadeiro é o vir-a-ser de si mesmo, o círculo que pressupõe seu fim como sua meta, que o tem como princípio, e que só é efetivo mediante sua atualização e seu fim.\".
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Georg_Wilhelm_Friedrich_Hegel' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Georg Wilhelm Friedrich Hegel (Estugarda, 27 de agosto de 1770 – Berlim, 14 de novembro de 1831) foi um filósofo germânico. Sua obra Fenomenologia do Espírito é tida como um marco na filosofia mundial e na filosofia alemã. Hegel pode ser incluído naquilo que se chamou de Idealismo Alemão, uma espécie de movimento filosófico marcado por intensas discussões filosóficas entre pensadores de cultura alemã (Prússia) do final do século XVIII e início do XIX. Essas discussões tiveram por base a publicação da Crítica da Razão Pura de Immanuel Kant. Hegel, ainda no seminário de Tübingen, escreveu, juntamente com dois renomados colegas, os filósofos Friedrich Schelling e Friedrich Hölderlin, o que chamaram de \"O Mais Antigo Programa de Sistema do Idealismo Alemão\". Posteriormente desenvolveu um sistema filosófico que denominou \"Idealismo Absoluto\", uma filosofia capaz de compreender discursivamente o absoluto (de atingir um saber do absoluto, saber cuja possibilidade fora, de modo geral, negada pela crítica de Kant à metafísica). Apesar de ser notavelmente crítica em relação ao Iluminismo, a filosofia hegeliana é tida por muitos como, para usar a expressão de Habermas, a \"filosofia da modernidade por excelência\".

			Hegel influenciou um grande número de autores (Strauss, Bauer, Feuerbach, Stirner, Marx, Dilthey, Bradley, Dewey, Kojève, Hyppolite, Hans Küng, Fukuyama, Žižek). Era fascinado pelas obras de Spinoza, Kant e Rousseau, assim como pela Revolução Francesa. Muitos consideram que Hegel representa o ápice do Idealismo Alemão.

			Hegel descreve sua concepção filosófica, no prefácio a uma de suas mais célebres obras, a Fenomenologia do Espírito, da seguinte forma: \"Segundo minha concepção – que só deve ser justificada pela apresentação do próprio sistema –, tudo decorre de entender e exprimir o verdadeiro não como substância, mas também, precisamente, como sujeito. Ao mesmo tempo, deve-se observar que a substancialidade inclui em si não só o universal ou a imediatez do saber mesmo, mas também aquela imediatez que é o ser, ou a imediatez para o saber. [...] A substância viva é o ser, que na verdade é sujeito, ou – o que significa o mesmo – que é na verdade efetivo, mas só na medida em que é o movimento do pôr-se-a-si-mesmo, ou a mediação consigo mesmo do tornar-se outro. Como sujeito, é a negatividade pura e simples, e justamente por isso é o fracionamento do simples ou a duplicação oponente, que é de novo a negação dessa diversidade indiferente e de seu oposto. Só essa igualdade reinstaurando-se, ou só a reflexão em si mesmo no seu ser-Outro, é que são o verdadeiro; e não uma unidade originária enquanto tal, ou uma unidade imediata enquanto tal. O verdadeiro é o vir-a-ser de si mesmo, o círculo que pressupõe seu fim como sua meta, que o tem como princípio, e que só é efetivo mediante sua atualização e seu fim.\".
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Georg_Wilhelm_Friedrich_Hegel' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='HEGELfriedrich'; include '../design/poemfind.php'; ?>
		<?php $user = 'HEGELfriedrich'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>