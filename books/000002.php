<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000002'");
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
			<?php $book = '000002'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "<a name='goto1'></a>
						<h1> Resenha </h1>
						Escrito por Machado de Assis, o livro faz parte da obra realista do autor, Quincas Borba apareçe no livro
						Memórias Póstumas de Brás Cubas, por isso é considerado uma sequência. Aqui o filósofo morre e herda sua fortuna á Rubião,
						que também cuida do cachorro de seu mestre, também chamado de Quincas Borba. O livro trabalha a filosofia do Humanitismo criada
						por Quincas e já citada no livro anterior, segundo ela os fortes sempre se aproveitam dos mais fracos. O narrador onisciente
						faz constantes quebras de quarta parede conversando com o leitor e falando sobre o livro e a obra anterior.
						<hr>
						<a name='goto2'></a>
						<h1> Personagens </h1>
						<ul>
						<li><b>Rubião: </b>professor, enfermeiro e protagonista da história. Ele é o herdeiro do filósofo Quincas Borba.</li>
						<li><b>Cristiano Palha: </b>esposo de Sofia e suposto amigo de Rubião, mas que afinal está somente interessado em sua fortuna.</li>
						<li><b>Sofia Palha: </b>esposa de Cristiano e que por fim, fica interessada em Carlos Maria. Ela apoia o marido em suas ações.</li>
						<li><b>Carlos Maria: </b>homem que desperta o interesse de Sofia e que por fim, casa-se com sua prima.</li>
						<li><b>Maria Benedita: </b>prima de Sofia e esposa de Carlos Maria.</li>
						<li><b>Camacho: </b>advogado, político e falso jornalista que também se aproveita da fortuna de Rubião.</li>
						</ul>
						<hr>
						<a name='goto3'></a>
						<h1> Adaptações </h1>
						<a href='https://m.imdb.com/title/tt0093813/'> Quincas Borba (1987) - Roberto Santos </a>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "<a name='goto1'></a>
						<h1> Review </h1>
						Written by Machado de Assis, the book is part of the author's realistic work, Quincas Borba appears in the book
						Posthumous Memories of Brás Cubas, so it is considered a sequence. Here the philosopher dies and inherits his fortune from Rubião,
						who also takes care of his master's dog, also called Quincas Borba. The book works on the philosophy of Humanitism created
						by Quincas and already mentioned in the previous book, according to her the strong always take advantage of the weak. The omniscient narrator
						makes constant fourth wall breaks talking to the reader and talking about the book and the previous work.
						<hr>
						<a name='goto2'> </a>
						<h1> Characters </h1>
						<ul>
						<li><b> Rubião: </b>professor, nurse and protagonist of history. He is the heir of the philosopher Quincas Borba. </li>
						<li><b> Cristiano Palha: </b>Sofia's husband and supposed friend of Rubião, but who is after all only interested in his fortune. </li>
						<li><b> Sofia Palha: </b>Cristiano's wife and who is finally interested in Carlos Maria. She supports her husband in his actions. </li>
						<li><b> Carlos Maria: </b>a man who arouses Sofia's interest and finally marries his cousin. </li>
						<li><b> Maria Benedita: </b>Sofia's cousin and Carlos Maria's wife. </li>
						<li><b> Camacho: </b>lawyer, politician and fake journalist who also takes advantage of Rubião's fortune. </li>
						</ul>
						<hr>
						<a name='goto3'> </a>
						<h1> Adaptations </h1>
						<a href='https://m.imdb.com/title/tt0093813/'> Quincas Borba (1987) - Roberto Santos </a>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "<a name='goto1'></a>
						<h1> Revisión </h1>
						Escrito por Machado de Assis, el libro es parte del trabajo realista del autor, Quincas Borba aparece en el libro.
						Memorias póstumas de Brás Cubas, por lo que se considera una secuencia. Aquí el filósofo muere y hereda su fortuna de Rubião,
						quien también cuida al perro de su amo, también llamado Quincas Borba. El libro trabaja sobre la filosofía del humanismo creado
						por Quincas y ya mencionado en el libro anterior, según ella los fuertes siempre se aprovechan de los débiles. El narrador omnisciente
						hace saltos constantes en la cuarta pared hablando con el lector y hablando sobre el libro y el trabajo anterior.
						<hr>
						<a name='goto2'> </a>
						<h1> Personajes </h1>
						<ul>
						<li><b> Rubião: </b>profesor, enfermero y protagonista de la historia. Es el heredero del filósofo Quincas Borba. </li>
						<li><b> Cristiano Palha: </b>el esposo de Sofía y supuesto amigo de Rubião, pero que, después de todo, solo está interesado en su fortuna. </li>
						<li><b> Sofia Palha: </b>la esposa de Cristiano y quien finalmente está interesada en Carlos María. Ella apoya a su esposo en sus acciones. </li>
						<li><b> Carlos Maria: </b>un hombre que despierta el interés de Sofía y finalmente se casa con su primo. </li>
						<li><b> Maria Benedita: </b>prima de Sofía y esposa de Carlos Maria. </li>
						<li><b> Camacho: </b>abogado, político y periodista falso que también aprovecha la fortuna de Rubião. </li>
						</ul>
						<hr>
						<a name='goto3'> </a>
						<h1> Adaptaciones </h1>
						<a href='https://m.imdb.com/title/tt0093813/'> Quincas Borba (1987) - Roberto Santos </a>
						<hr>";
					}
				?>
			</div>
			<?php $book = '000002'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'MACHADOassis'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>