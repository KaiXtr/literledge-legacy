<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Parnassianism';
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
			O Parnasianismo surgiu no século XIX após a publicação do <b>Parnasse Contemporain</b>, uma coleção de poemas em três volumes que reuniu poetas e escritores dos mais diversos estilos. A origem do nome vem do <b>Monte Parnaso</b>, na grécia, que nos tempos antigos foi um local de adoração ao deus Apolo (deus grego da música) e ás musas da poesia, por isso o Parnasiansimo tem grande afeição á mitologia grega. Foi um movimento literário contemporâneo ao <a href='schools/realism.php'>Realismo</a> e o <a href='schools/naturalism.php'>Naturalismo</a>, pois também faz parte do <b>Ciclo Antirromântico</b> e é contra a visão fantasiosa da realidade retratada pelo <a href='schools/romanticism.php'>Romantismo</a>, além de valorizar a ciência e apresentar apoio aos ideais <b>Positivistas.</b> <br />
			<br />
			Os escritores parnasianistas são objetivos nos temas em que tratam, sem muita subjetividade, e deixem de lado sua visão sobre os fatos, tornando a poesia <b>Impessoal</b>. Além disso, o Parnasianismo tem como principais características a <b>metalinguagem</b> e a importância dada ás palavras, pois ao contrário da maioria dos poemas de seu tempo, onde o tema principal das poesias eram sentimentos e situações cotidianas, aqui as palavras por si só são o objeto central da poesia. Os Parnasianos seguem regras estritas á respeito da norma culta da língua e da métrica, preferindo os Sonetos e os versos alexandrinos, e vão além, experimentando o uso de <b>rimas raras e incomuns</b>. Uma bela frase utilizada para resumir a estética Parnasiana é <b>A Arte pela arte.</b><br />
			<br />
			O Parnasianismo predominou principalmente na França e no Brasil, já em Portugal o movimento não ganhou muito destaque. No Brasil, <a href='users/BILAColavo.php'>Olavo Bilac</a>, <a href='users/OLIVEIRAalberto.php'>Alberto de Oliveira</a> e <a href='users/CORREIAraimundo.php'>Raimundo Correia</a> foram os maiores representantes do Parnasianismo, sendo reconhecidos como a <b>Tríade Parnasiana</b>. Outros escritores também flertaram com o Parnasianismo, como por exemplo <a href='users/MACHADOassis.php'>Machado de Assis</a>, onde grande parte de sua obra é Realista.<br />
			<br />
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1> Escritores Parnasianistas </h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('BILAColavo','CORREIAraimundo','OLIVEIRAalberto','DRUMMONDandrade');
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