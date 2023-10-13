<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Pre-Modernism';
			$v = $ltslst[$lts];
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='banner' style='background-image: url("media/images/banners/<?php echo strtolower($lts); ?>.jpg")'></div>
		<?php echo "<div id='profile'> <h1 id='litername'> ".$ltslst[$lts]." </h1> </div>"; ?>
		<div id='bio'>
		<?php
			if ($_COOKIE['lang'] == 'pt') {
				echo "<b>NOTA: Apesar do Pré-Modernismo NÃO SER UMA ESCOLA LITERÁRIA, O Literledge o categoriza como uma para uma melhor experiência dentro do site.</b><br />
				<br />
				O Pré-Modernismo começou no Brasil no início do século XIX e precede o <a href='schools/modernism.php'>Modernismo</a> que surgiu após a Semana de Arte Moderna de 1922. É um período de transição entre o <a href='schools/symbolism.php'>Simbolismo</a> e o Modernismo. <br />
				<br />
				No contexto do Pré-Modernismo, o Brasil deixava de ser uma monarquia e se torna uma república após um golpe militar, foi um tempo de intensas transformações no país, a escravidão é abolida, o sudeste se torna mais industrializado, vários imigrantes chegam ao Brasil, o café se torna a principal riqueza e vigora a política do café com leite. Também foi um tempo de muitos conflitos: o surgimento do cangaço, a revolta da chibata, a revola da vacina e a revolta de canudos. Durante esse período, correntes literárias como o <a href='schools/realism.php'>Realismo</a> e o <a href='schools/realism.php'>Naturalismo</a> já predominavam na literatura brasileira, e na Europa, as vanguardas européias ganhavam cada vez mais notoriedade, como o <a href='schools/futurism.php'>Futurismo</a> e o <a href='schools/impressionism.php'>Impressionismo.</a><br />
				<br />
				Por esses motivos, várias das características do Pré-Modernismo refletem a situação do Brasil naquele tempo, os escritores Pré-Modernistas buscavam criticar a realidade do país, retratar personagens marginalizados pela sociedade e abordar fatos reais, históricos e cotidianos. Além disso, uma característica essencial do Pré-Modernismo é a ruptura com o <b>Academicismo</b> e a tradição, os escritores Pré-Modernistas buscam uma linguagem mais coloquial e de melhor entendimento e também buscam fugir das regras e padrões impostas sobre como deve ser a maneira correta de se fazer literatura, por isso o <a href='schools/parnassianism.php'>Parnasianismo</a> é visto com maus olhos, pois é uma escola literária que abraça as regras e a linguagem culta impostas pela academia.<br />
				<br />";
			}
			if ($_COOKIE['lang'] == 'en') {
				echo "<b> NOTE: Although Pre-Modernism IS NOT A LITERARY SCHOOL, Literledge categorizes it as one for a better experience on the site. </b> <br />
				<br />
				Pre-Modernism began in Brazil at the beginning of the 19th century and precedes <a href='schools/modernism.php'> Modernismo </a> that emerged after the 1922 Week of Modern Art. It is a period of transition between the <a href='schools/symbolism.php'> Symbolism </a> and Modernism. <br />
				<br />
				In the context of Pre-Modernism, Brazil ceased to be a monarchy and became a republic after a military coup, it was a time of intense transformations in the country, slavery was abolished, the southeast became more industrialized, several immigrants arrived in Brazil , coffee becomes the main wealth and the coffee with milk policy is in force. It was also a time of many conflicts: the emergence of the cangaço, the whip revolt, the vaccine revolt and the straw revolt. During this period, literary currents like <a href='schools/realism.php'> Realismo </a> and <a href='schools/realism.php'> Naturalismo </a> already predominated in Brazilian literature, and in Europe, European vanguards were gaining more and more notoriety, such as <a href='schools/futurism.php'> Futurism </a> and <a href='schools/impressionism.php'> Impressionism. </ a> <br />
				<br />
				For these reasons, several of the characteristics of Pre-Modernism reflect the situation in Brazil at that time, Pre-Modernist writers sought to criticize the reality of the country, portray characters marginalized by society and address real, historical and daily facts. In addition, an essential feature of Pre-Modernism is the break with <b> Academicism </b> and tradition, Pre-Modernist writers seek a more colloquial and better understood language and also seek to escape the imposed rules and standards about what the correct way of doing literature should be, that's why <a href='schools/parnassianism.php'> Parnasianism </a> is viewed with a bad eye, as it is a literary school that embraces rules and language culture imposed by the academy. <br />
				<br />";
			}
			if ($_COOKIE['lang'] == 'es') {
				echo "<b> NOTA: Aunque el premodernismo NO ES UNA ESCUELA LITERARIA, Literledge lo clasifica como uno para una mejor experiencia en el sitio. </b> <br />
				<br />
				El premodernismo comenzó en Brasil a principios del siglo XIX y precede a <a href='schools/modernism.php'> Modernismo </a> que surgió después de la Semana de Arte Moderno de 1922. Es un período de transición entre el <a href='schools/symbolism.php'> Simbolismo </a> y Modernismo. <br />
				<br />
				En el contexto del premodernismo, Brasil dejó de ser una monarquía y se convirtió en una república después de un golpe militar, fue un momento de intensas transformaciones en el país, se abolió la esclavitud, el sureste se volvió más industrializado, varios inmigrantes llegaron a Brasil , el café se convierte en la principal riqueza y la política de café con leche está en vigor. También fue una época de muchos conflictos: la aparición del cangaço, la revuelta del látigo, la revuelta de las vacunas y la revuelta de la paja. Durante este período, las corrientes literarias como <a href='schools/realism.php'> Realismo </a> y <a href='schools/realism.php'> Naturalismo </a> ya predominaban en la literatura brasileña, y en Europa, las vanguardias europeas estaban ganando cada vez más notoriedad, como <a href='schools/futurism.php'> Futurismo </a> y <a href='schools/impressionism.php'> Impresionismo. </ a> <br />
				<br />
				Por estas razones, varias de las características del premodernismo reflejan la situación en Brasil en ese momento, los escritores premodernistas intentaron criticar la realidad del país, retratar personajes marginados por la sociedad y abordar hechos reales, históricos y cotidianos. Además, una característica esencial del premodernismo es la ruptura con el <b> Academicismo </b> y la tradición, los escritores premodernistas buscan un lenguaje más coloquial y mejor entendido y también buscan escapar de las reglas y estándares impuestos acerca de cuál debería ser la forma correcta de hacer literatura, es por eso que <a href='schools/parnassianism.php'> Parnasianism </a> se ve con mal ojo, ya que es una escuela literaria que abarca reglas y lenguaje cultura impuesta por la academia. <br />
				<br />";
			}
		?>
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "Escritores Pré-Modernismo";}
						if ($_COOKIE['lang'] == 'en') {echo "Pre-Modernism Writers";}
						if ($_COOKIE['lang'] == 'es') {echo "Escritores del Pré-Modernismo";}
					?>
					</h1>
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