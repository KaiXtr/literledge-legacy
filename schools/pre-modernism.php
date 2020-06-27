<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Pre-Modernism';
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
			<b>NOTA: Apesar do Pré-Modernismo NÃO SER UMA ESCOLA LITERÁRIA, O Literledge o categoriza como uma para uma melhor experiência dentro do site.</b><br />
			<br />
			O Pré-Modernismo começou no Brasil no início do século XIX e precede o <a href='schools/modernism.php'>Modernismo</a> que surgiu após a Semana de Arte Moderna de 1922. É um período de transição entre o <a href='schools/symbolism.php'>Simbolismo</a> e o Modernismo. <br />
			<br />
			No contexto do Pré-Modernismo, o Brasil deixava de ser uma monarquia e se torna uma república após um golpe militar, foi um tempo de intensas transformações no país, a escravidão é abolida, o sudeste se torna mais industrializado, vários imigrantes chegam ao Brasil, o café se torna a principal riqueza e vigora a política do café com leite. Também foi um tempo de muitos conflitos: o surgimento do cangaço, a revolta da chibata, a revola da vacina e a revolta de canudos. Durante esse período, correntes literárias como o <a href='schools/realism.php'>Realismo</a> e o <a href='schools/realism.php'>Naturalismo</a> já predominavam na literatura brasileira, e na Europa, as vanguardas européias ganhavam cada vez mais notoriedade, como o <a href='schools/futurism.php'>Futurismo</a> e o <a href='schools/impressionism.php'>Impressionismo.</a><br />
			<br />
			Por esses motivos, várias das características do Pré-Modernismo refletem a situação do Brasil naquele tempo, os escritores Pré-Modernistas buscavam criticar a realidade do país, retratar personagens marginalizados pela sociedade e abordar fatos reais, históricos e cotidianos. Além disso, uma característica essencial do Pré-Modernismo é a ruptura com o <b>Academicismo</b> e a tradição, os escritores Pré-Modernistas buscam uma linguagem mais coloquial e de melhor entendimento e também buscam fugir das regras e padrões impostas sobre como deve ser a maneira correta de se fazer literatura, por isso o <a href='schools/parnassianism.php'>Parnasianismo</a> é visto com maus olhos, pois é uma escola literária que abraça as regras e a linguagem culta impostas pela academia.<br />
			<br />
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1> Escritores Pré-Modernistas </h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('BARRETOlima','GRACAaranha','ANJOSaugusto','CUNHAeuclides','LOBATOmonteiro');
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