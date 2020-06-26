<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Baroque';
			$v = $ltslst[$lts].' - ';
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='banner' style='background-image: url("media/images/banners/<?php echo strtolower($lts); ?>.jpg")'></div>
		<?php echo "<div id='profile'> <h1 id='litername'> ".$ltslst[$lts]." </h1> </div>"; ?>
		<div id='bio'>
			O Barroco surgiu na Itália do século XVII, durante o fim do Renascimento, e engloba as artes da pintura, escultura, literatura, música & arquitetura. Também pode ser chamado de Seiscentecismo, por ser um movimento do século 17. "Barroco" é uma palavra que significa "exagero" ou "absurdo", e era um termo que originalmente era utilizada pelos críticos do Barroco para inferiorizar o movimento artístico. Para muitos o Barroco se trata da fase final do Renascimento, outros o consideram como um movimento a parte. <br />
			<br />
			O Barroco se originou no contexto da Reforma Protestante, graças ás influências humanistas e dos ideais iluministas, que estavam entrando em popularidade, a igreja católica foi duramente criticada por vários setores da sociedade, tanto por intelectuais e burgueses quanto pelos próprios religiosos. Em resposta, a igreja católica criou a Contrarreforma, onde dentro das várias mudanças, promoveu um forte crescimento da propaganda católica dentro da sociedade, através das artes modernas de seu tempo. Foi durante o Barroco que diversos artistas Renascentistas usaram sua arte para promover a religião. <br />
			<br />
			Na área da literatura, o Barroco é dividido entre dois tipos de pensamento: o <b>Cultismo</b> e o <b>Conceptismo</b>. <br />
			O Cultismo ou Gongorismo surgiu por influência do poeta espanhol Luís de Góngora, e sua principal característica é o uso frequente da linguagem culta e de termos rebuscados e ornamentais.<br />
			Já o Gongorismo, também chamado de Quevedismo, foi inspirado pelo poeta Francisco de Quevedo, também espanhol, e se caracteriza por uma linguagem mais coloquial, didática e pedagógica, com o intuito de ensinar o leitor sobre a fé católica e convencendo-o com argumentos racionais. O Conceptismo faz uso do Silogismo e do Sofismo.
			<ul>
			<li>Sofismo é gerar uma proposição lógica a partir de duas premissas.</li>
			<li>Silogismo significa criar uma inverdade baseada em argumentos lógicos e omissão de informações.</li>
			</ul>
			<br />
			Apesar da contribuição da igreja católica no Barroco, os ideais humanistas e antropocêntricos exerceram forte influência sobre o movimento, criando assim uma contradição entre os artistas e apoiadores do Barroco. Uma caracterísitca muito recorrente é o comportamento do homem do Barroco, que manifesta atrevés do dualismo e das antíteses o bem e o mal, o puro e o pecaminoso, o sensual e o espiritual. Ao mesmo tempo que é um homem religioso, também é um homem mundano entregue ás tentações. Por isso o Barroco pode ser entendido como o reflexo do ser humano em dúvida sobre as questões religiosas, vivendo ao mesmo tempo numa sociedade dominada pela igreja católica e pelos pensamentos humanistas. <br />
			<br />
			Além disso, há uma supervalorização da juventude, pois no entendimento do Barroco, a vida passa rápido e a felicidade verdadeira só pode ser encontrada na vida após a morte, e por isso deve se aproveitar o melhor que o plano terreno pode oferecer.
			<br />
			Dentre a principais características do Barroco se destacam:
			<ul>
			<li>O Exagero e o rebuscamento</li>
			<li>O uso de antíteses e dualismos</li>
			<li>Complexidade na composição das obras</li>
			<li>Sensualismo e Erotismo</li>
			<li>Arte detalhista e com muitos elementos no mesmo espaço</li>
			<li>Retratação da morte, do castigo e do arrependimento</li>
			<li>Pessimismo, encontro da verdadeira felicidade apenas após a morte</li>
			<li>Apelo ao mistiscismo e á religião</li>
			<li>Fusão do pensamento renascentista e medieval</li>
			<li>Carpe Diem, aproveitar o momento, uma frase também recorrente no <a href='schools/arcadism.php'>Arcadismo.</a></li>
			</ul>
			No Brasil, o Barroco veio graças aos jesuítas e a missão evangelista na colônia, e representou a primeira manifestação de arte no Brasil. Pelo fato de ser uma colônia, o Brasil não foi um ambiente propício para a expansão da arte e da literatura, por isso os autores do Barroco no Brasil se espelharam mais nos artistas da Europa. Apesar de surgir na Bahia, o Barroco ganhou mais destaque apenas no século XVIII, em Minas Gerais, onde Aleijadinho iria criar suas mais importantes obras artísticas.
			<br />
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1> Escritores do Barroco </h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('MATOSgregorio','TEIXEIRAbento','BOTELHOoliveira','SALVADORfrei','ITAPARICAfrei');
							for ($x=0;$x<sizeof($a);$x++) {
								$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$a[$x]."'");
								$n = $find->fetch_assoc();
								if ($n[$_COOKIE['lang']] == null) {$nm = $n['pt'];}
								else {$nm = $n[$_COOKIE['lang']];}

								echo "<a href='users/".$a[$x].".php'>
										<button class='portraits'>
											<img class='profilepic' src='media/images/profilepics/".$a[$x].".jpg' />
											<h2> ".$nm." </h2>
										</button>
									</a>";
								}
							$conn->close();
							}
					?>
				</div>
			</div>
			<?php $schl = $lts; include '../design/auctorbooks.php'; ?>
		</div>
		<?php include '../design/footer.php' ?>
	</body>
</html>