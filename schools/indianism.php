<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Indianism';
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
			O Indianismo foi uma vertente literária brasileira do período romantista. É caracterizada principalmente pela valorização do indígena na literatura, algo proveniente da figura do <b>"bom selvagem"</b>, ou seja, um ser humano puro e inocente, afastado do ambiente urbano e vivendo em conexão com a natureza, ideal este criado pelo iluminista <a href='users/ROUSSEAUjeanjacques.php'>Jean-Jacques Rousseau</a>. Este é um estilo de vida romantizado desde o Brasil colonial, tanto pelo <a href='schools/romanticism.php'>Romantismo</a>, quanto pelo <a href='schools/arcadism.php'>Arcadismo</a>. O indígena também serve como uma troca da figura do cavaleiro na literatura romântica, um personagem que representa o bom herói, corajoso e honesto.<br />
			<br />
			O Indianismo também tratará do <b>nacionalismo brasileiro</b> colocando o indígena como o herói da nação e o verdadeiro brasileiro, ajudando na criação de uma identidade nacional no Brasil imperial, distante dos valores lusitanos dos antigos colonizadores portugueses. Além do indígena, o vocabulário indígena, principalmente dos idiomas tupi-guarani, são amplamente utilizados na literatura indianista, além da retratação do estilo de vida dos indígenas. No geral, o Indianismo também traz várias características do romantismo, como as influências das histórias medievais e o retorno ao passado histórico. Como o Brasil não possuía um passado de cavaleiros e heróis, os personagens que restaram foram os indígenas. <br />
			<br />
			A influência do indianismo pode ser vista no <a href='schools/modernism.php'>Modernismo Brasileiro</a>, onde a cultura indígena é novamente retratada como a raíz do povo brasileiro e da identidade nacional, principalmente na obra <a href='books/00000H.php'>Macunaíma</a>, de <a href='users/ANDRADEmario.php'>Mário de Andrade</a>.
			<br />
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1> Escritores Indianistas </h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('ALENCARjose','DIASgoncalves');
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