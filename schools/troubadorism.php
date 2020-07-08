<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Troubadorism';
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
			O Trovadorismo foi o primeiro movimento artístico a surgir na poesia europeia e vigorou durante os séculos da baixa idade média, principalmente nos séculos XI e XII. Nessa época muitas nações ainda estavam se formando, e vários idiomas românicos começavam a surgiram a partir do latim. O nome vem dos chamados Trovadores, que eram os poetas e músicos que se apresentavam nos feudos. A poesia característica do Trovadorismo é um híbrido de poesia e música, isso se deve principalmente pelo acesso restrito á educação da maior parte da população, como muitos eram analfabetos, incluindo muitos dos próprios trovadores, a única maneira de se passar a poesia era por método oral com a ajuda da música, eram as chamadas <b>Cantigas Trovadorescas</b>, geralmente acompanhadas de intrumentos musicais como a lira, a flauta e o bandolim. Graças é estruturação musical das cantigas, cheias de repetições e paralelismos, a memorização das mesmas foi facilitada.<br />
			<br />
			Apesar de ter nascido na classe camponesa, logo a poesia Trovadoresca se popularizou entre os feudos, e os nobres também passaram a consumir esse tipo de arte, assim os trovadores se dividiram entre o trovador <b>segrel</b> ou profissional, o cavaleiro que cantava suas cantigas para a corte por dinheiro, e o trovador <b>jogral</b> ou popular, que canta para os camponeses e trabalhadores. Eram chamados de menestrel os músicos trovadores e de baladeiras e soldadeiras as dançarinas que acompanhavam as cantigas. O Trovadorismo se espalhou pela Europa pois os Trovadores viajavam pelo continente espalhando sua arte e propagando o amor do cavaleiro apaixonado. <br />
			<br />
			O amor é um tema essencial para as cantigas trovadorescas, em especial a dor do amor, essas são as <b>cantigas líricas</b>, divididas entre cantigas de amor e cantigas de amigo. As cantigas de amor são cantadas pelo homem apaixonado, enquanto as cantigas de amor são atuações de mulheres falando aos seus maridos. Além do amor, a sátira e o humor também são temas recorrentes no Trovadorismo, são as <b>cantigas satíricas</b>, divididas em cantigas de escárnio e maldizer, feitas especialmente para ridicularizar. Enquanto o alvo das cantigas de escárnio são referencidos indiretamente, sem a menção de nomes, nas cantigas de maldizer, nomes são mencionados e o alvo da cantiga é ridicularizado diretamente. Como muitos dos trovadores não sabiam ler nem escrever, grande parte dos poemas trovadores que conhecemos não foram escritos por seus autores, mas foram registrados nos chamados <b>Cancioneiros</b>, manuscritos que compilam cantigas trovadorescas e ás vezes podem ser acompanhados com ilustrações e notações musicais.
			<br />
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1> Escritores Trovadores </h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('CAMOESluis');
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