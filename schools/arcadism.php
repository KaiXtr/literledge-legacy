<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Arcadism';
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
			O Arcadismo foi um movimento literário que surgiu na Europa no século XVIII, e por isso também é chamado de Setecentismo (escritores do século 18). O Arcadismo faz parte de um movimento artístico maior chamado Neoclassicismo, que também se manifestou na pintura, escutura & arquitetura. A Etimologia da palavra "arcadismo" deriva de um semideus da mitologia grega, Arcas, filho de Zeus & Calisto, que por sua vez, originou o nome Arcádia, uma região no sul da Grécia. Ele se manifestou em países como a França, Itália & Espanha, mas causou maior renovação em Portugal, pois durante este tempo a cidade de Lisboa estava sendo reformada por Marquês de Pombal, depois do grande terremoto de Lisboa de 1755, e no chamado Período Pombalino, foi fundada a Árcadia Lusitana, uma associação literária que visava resgatar os valores renascentistas para Portugal.<br />
			<br />
			Tanto o Neoclassicismo quanto sua manifestação literária, o Arcadismo, possuem muitas influências da cultura greco-romana, relembrando inclusive os ideais Renascentistas. Diversos gêneros literários da literatura clássica foram reinventados como o gênero Épico, Lírico e Satírico, que eram os gêneros propostos pelo filósofo <a href='users/ARISTOTLE.php'>Aristóteles</a>. A literatura arcadista é conhecida por fazer referência á mitologia grega e suas divindades, utilizando a estética pagã. <br />
			<br />
			Além disso, priorizaram a razão, a valorização á ciência e os ideais Iluministas vigentes em seu tempo. E por este motivo os escritores arcadistas se opõem ao <a href='schools/baroque.php'>Barroco</a>, um movimento literário baseado na religião, antíteses e paradoxos, contrastando com a simplicidade e a racionalidade do Arcadismo. Os apoiadores do Arcadismo defendiam que um poema deveria ser natural e simples como a natureza, removendo assim os detalhes considerados inúteis e as palavras complicadas.<br />
			É importante acrescentar que o que era considerado de difícil entendimento no século 17 é bem diferente do conceito aplicado aos dias de hoje, pois a língua é viva e está sempre em constante desenvolvimento.<br />
			<br />
			Porém, a característica principal do movimento Arcadista é buscar a beleza da vida na paz e o sentido da vida na <b>natureza</b>, buscando se afastar do estilo de vida urbano e do ambiente da cidade. Por esta razão os escritores arcadistas buscam sempre se aproximar de uma vida idealizada, baseada no estilo de vida bucólico, pastoral, do campo, diferentes da vida que levavam no ambiente urbano. Geralmente os escritores arcadistas usam pseudônimos para se passarem por um alter-ego, um personagem, um eu-lírico que vive em uma realidade diferente do autor. Vários termos em latim foram cunhados para representar estes ideais de escapismo, são eles:
			<br />
			<ul>
			<li><b>Fugere Urbem: </b>Fugir do urbano, para os arcadistas, a cidade não era o ambiente ideal para viver, portanto, a fuga da urbanidade era uma meta a ser alcançada.</li>
			<li><b>Locus Amoenus: </b>Lugar ameno, esse preceito afirma que o campo, o ambiente bucólico, é o ideal para o homem.</li>
			<li><b>Carpe Diem: </b>Aproveite o momento, segundo esse preceito, é necessário aproveitar o presente para contemplar a realidade, sem preocupar-se com o futuro.</li>
			<li><b>Aurea Mediocritas: </b>Segundo essa expressão, o homem mediano é aquele que alcança a felicidade, não se devendo, assim, procurar riquezas e posses em vida.</li>
			<li><b>Inutilia Truncat: </b>Cortar o inútil, entendendo-se esse inútil como o excesso de rebuscamento da literatura Barroca.</li>
			</ul>
			Durante o tempo em que o Arcadismo se popularizou na Europa, muitos acontecimentos influenciaram os rumos deste movimento literário, são estes grandes eventos como a Independência dos Estados Unidos, a Revolução Francesa e a Revolução Industrial. Este era o tempo em que a burguesia estava conquistando poder e influência mundial, em detrimento da Aristocracia e das monarquias, este tempo eram os últimos anos da Idade Moderna.<br />
			<br />
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1> Escritores Arcadistas </h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('BOCAGEbarbosa','ANTONIOgonzaga','BASILIOgama','STRITAdurao','MANUELcosta');
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
		<!--<div class='brow'>
			Referências Biliográficas
			<br />
			<i>• <a href='https://pt.wikipedia.org/wiki/Arcadismo'>Wikipedia</a> • <a href='https://www.infoescola.com/literatura/arcadismo/'>Infoescola</a> • <a href='http://www.soliteratura.com.br/arcadismo/'>Só Literatura</a></i>
		</div>-->
		<?php include '../design/footer.php' ?>
	</body>
</html>