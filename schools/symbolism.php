<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Symbolism';
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
			O Simbolismo foi uma escola literária de origem Francesa que nasceu no final do século XIX. Teve grande influência principalmente para a poesia, mas também contribuiu para a prosa, por ser o último movimento literário criado antes do Modernismo, é considerado um movimento <b>pré-moderno.</b> O nome vem da principal premissa do simbolismo, que é resgatar a simbologia e a linguagem universal, através de palavras que mesmo fora de um contexto, todos possam entender. Os simbolistas estudam a natureza e decifram sua essência e seu comportamento além do material, se preocupando mais com o estado espiritual das coisas e se afastando tanto da objetividade do <a href='schools/realism.php'>Realismo</a> quanto as representações animalescas do <a href='schools/naturalism.php'>Naturalismo.</a> Também foi contra o rigor da métrica do <a href='schools/parnassianism.php'>Parnasianismo</a>, pois adotaram uma poesia menos rígida, com mais musicalidade e liberdade de escrita.<br />
			<br />
			Assim como vários movimentos literários de seu tempo, o Simbolismo também foi fortemente influenciado pela filosofia <b>Positivista</b> de Augusto Comte e pelas crescentes descobertas científicas de Charles Darwin, e viveu no contexto da Segunda Revolução Industrial e seus efeitos na sociedade. Assim como o Realismo e o Naturalismo, o Simbolismo também observa a realidade criada pela industrialização e pela urbanização e as injustiças sociais causadas pelos mesmos, uma realidade que contradiz a idéia de progresso das fábricas e avanços tecnológicos. Como os simbolistas tem um enfoque maior na esfera espiritual, eles buscam uma reconectividade entre o terreno e o celestial, o céu e a terra, o bem e o mal, buscando o resgate de uma humanidade deteriorada, por conta disto eram chamados de <i>decadentistas</i> e <i>malditos</i>. Os simbolistas criticaram os ideais racionalistas e cientificistas de seu tempo, pois em meio á tantos avanços tecnológicos e estudos científicos, algo estava faltando: os valores transcendentais e a existência individual, segundo eles. Por essa aproximação com algo fora da realidade, o Simbolismo tem certas características em comum com o <a href='schools/romanticism.php'>Romantismo</a>.<br />
			<br />
			Na poesia simbolista, a característica mais comum é a abordagem da <b>temática psicológica, espiritual e religiosa</b>, que envolve não só as religiões judaico-cristãs, mas também as tradições e crenças orientais. Através de descrições sombrias, antíteses e contradições, o jogo de palavras cria uma conexão entre o terreno e o celestial, algo já praticado no período do <a href='schools/baroque.php'>Barroco</a>. A idéia de <b>vazio e silêncio</b> é constantemente apresentada nos poemas simbolistas através de rupturas sintáticas, espaços vazios, reticências e pausas. Além disto, sinestesias são muito utilizadas, ou seja, descrições do empírico e das sensações dos 5 sentidos, que vão além de uma simples descrição de objetos materiais, mas dos símbolos da natureza. <br />
			<br />
			Na França, a figura principal foi <a href='users/BAUDELAIREcharles.php'>Charles Baudelaire</a>, o precursor do Simbolismo, apesar de ter sido grande influência no movimento, ele já não estava vivo quando o Simbolismo surgiu, por isso é considerado um pré-simbolista. Já no Brasil, o simbolismo não teve grande repercussão e não possui o mesmo caráter boêmio da cena francesa.
			<br />
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1> Escritores Simbolistas </h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('BAUDELAIREcharles','ANJOSaugusto','CRUZsousa','GILKAmachado','QUEIROZeca');
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