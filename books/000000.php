<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000000'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']].' - ';
			}
			include '../design/metadata.php'; 
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '000000'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "<a name='goto1'></a>
						<h1> Resenha </h1>
						Memórias Póstumas de Brás Cubas foi o primeiro livro da obra realista de Machado de Assis, considerado por muitos o marco da
						literatura realista no Brasil. O Narrador é Brás Cubas, um cadáver que decide contar sua história de vida, e como o narrador está morto,
						longe do plano material, moralidade é a menor das preocupações dele. O narrador constantemente fala diretamente com o leitor, como
						numa conversa casual, mesmo de forma metalinguística, falando sobre seu próprio livro. <br />
						<br />
						O livro não possui uma ordem cronológica bem definida, rompendo assim com a linearidade da história, característica que marcou a literatura brasileira. 
						Muitas críticas e sátiras à elite brasileira são feitas, sendo ela representada majoritariamente nos personagens da obra e no próprio Brás Cubas,
						ironizando seus privilégios. <br />
						<br />
						A obra foge bastante dos padrões impostos na literatura, além de romper com a linearidade,
						essa obra não tem um final feliz.
						<hr>
						<a name='goto2'></a>
						<h1> Personagens </h1>
						<ul>
						<li><b>Brás Cubas: </b>protagonista da história e o narrador, considerado o defunto-autor.</li>
						<li><b>Virgília: </b>amante de Brás Cubas e mulher de Lobo Neves.</li>
						<li><b>Lobo Neves: </b>político e esposo de Virgília.</li>
						<li><b>Quincas Borba: </b>filósofo e amigo de infância de Brás Cubas.</li>
						<li><b>Marcela: </b>prostituta e paixão da juventude de Brás Cubas.</li>
						<li><b>Eugênia: </b>filha de Dona Eusébia.</li>
						<li><b>Nhá-Loló: </b>sobrinha de Cotrim e pretendente de Brás Cubas.</li>
						</ul>
						<hr>
						<a name='goto3'></a>
						<h1> Adaptações </h1>
						<a href='https://m.imdb.com/title/tt0166709/' target='_blank'> Memórias Póstumas (2001) - André Klotzel </a>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "<a name='goto1'></a>
						<h1> Review </h1>
						The Posthumous Memoirs of Brás Cubas was the first book of Machado de Assis's realistic work, considered by many to be the landmark of
						realistic literature in Brazil. The Narrator is Brás Cubas, a corpse who decides to tell his life story, and as the narrator is dead,
						far from the material plane, morality is the least of his concerns. The narrator constantly speaks directly to the reader, as
						in a casual conversation, even in a metalinguistic way, talking about his own book. <br />
						<br />
						The book does not have a well-defined chronological order, thus breaking with the linearity of history, a characteristic that marked Brazilian literature.
						Many criticisms and satires of the Brazilian elite are made, being represented mainly in the characters of the work and in Brás Cubas himself,
						ironing out their privileges. <br />
						<br />
						The work differs greatly from the standards imposed in the literature, in addition to breaking with linearity,
						this work does not have a happy ending.
						<hr>
						<a name='goto2'></a>
						<h1> Characters </h1>
						<ul>
						<li><b> Brás Cubas: </b>protagonist of the story and the narrator, considered the \"dead author\". </li>
						<li><b> Virgília: </b>lover of Brás Cubas and wife of Lobo Neves. </li>
						<li><b> Lobo Neves: </b>Virgília's politician and husband. </li>
						<li><b> Quincas Borba: </b>philosopher and childhood friend of Brás Cubas. </li>
						<li><b> Marcela: </b>prostitute and passion of the youth of Brás Cubas. </li>
						<li><b> Eugênia: </b>daughter of Dona Eusébia. </li>
						<li><b> Nhá-Loló: </b>niece of Cotrim and suitor of Brás Cubas. </li>
						</ul>
						<hr>
						<a name='goto3'></a>
						<h1> Adaptations </h1>
						<a href='https://m.imdb.com/title/tt0166709/' target='_blank'> Memórias Póstumas (2001) - André Klotzel </a>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "<a name='goto1'></a>
						<h1> Revisión </h1>
						Memorias Póstumas de Blas Cubas fue el primer libro de la obra realista de Machado de Assis, considerado por muchos como el hito de
						Literatura realista en Brasil. El narrador es Blas Cubas, un cadáver que decide contar la historia de su vida, y como el narrador está muerto,
						lejos del plano material, la moral es la menor de sus preocupaciones. El narrador constantemente habla directamente al lector, como
						en una conversación informal, incluso de una manera metalingüística, hablando de su propio libro. <br />
						<br />
						El libro no tiene un orden cronológico bien definido, rompiendo así con la linealidad de la historia, una característica que marcó la literatura brasileña.
						Se hacen muchas críticas y sátiras de la élite brasileña, representadas principalmente en los personajes de la obra y en el propio Blas Cubas,
						planchar sus privilegios. <br />
						<br />
						El trabajo difiere mucho de los estándares impuestos en la literatura, además de romper con la linealidad,
						Este trabajo no tiene un final feliz.
						<hr>
						<a name='goto2'> </a>
						<h1> Personajes </h1>
						<ul>
						<li> <b> Blas Cubas: </b> protagonista de la historia y el narrador, considerado el autor fallecido. </li>
						<li> <b> Virgília: </b> amante de Blas Cubas y esposa de Lobo Neves. </li>
						<li> <b> Lobo Neves: </b> el político y esposo de Virgília. </li>
						<li> <b> Quincas Borba: </b> filósofo y amigo de la infancia de Blas Cubas. </li>
						<li> <b> Marcela: </b> prostituta y pasión de la juventud de Blas Cubas. </li>
						<li> <b> Eugênia: </b> hija de doña Eusébia. </li>
						<li> <b> Nhá-Loló: </b> sobrina de Cotrim y pretendiente de Blas Cubas. </li>
						</ul>
						<hr>
						<a name='goto3'> </a>
						<h1> Adaptaciones </h1>
						<a href='https://m.imdb.com/title/tt0166709/' target='_blank'> Memórias Póstumas (2001) - André Klotzel </a>
						<hr>";
					}
				?>
			</div>
			<?php $book = '000000'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'MACHADOassis'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>