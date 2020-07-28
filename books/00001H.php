<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001H'");
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
			<?php $book = '00001H'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					The Wonderful Wizard of Oz (em português europeu: O Maravilhoso Feiticeiro de Oz; em português brasileiro: O Maravilhoso Mágico de Oz) é um romance infantil, de alta fantasia, escrito por L. Frank Baum e ilustrado por W. W. Denslow, originalmente publicado pela George M. Hill Company em Chicago em 17 de maio de 1900. É o primeiro de uma série de catorze livros que relata as aventuras na fantástica Terra de Oz. O primeiro livro segue Dorothy Ventania (Dorothy Gale, no original), do Kansas, que é levada por um tornado ao país das fadas. É considerado o primeiro contos de fadas genuinamente americano.

					Desde o final do século XIX, na Europa, alguns dos autores infantis vinham questionando o teor das histórias infantis: pregavam que deveriam ser menos violentas e apresentar personagens mais criativos - já que as velhas figuras dos contos de fadas tinham se tornado desinteressantes. Defendiam, ainda, que a função dessa literatura era divertir e entreter - não moralizar; esse papel cabia à família e à escola. A esta corrente adere o americano L. Frank Baum. Em maio de 1900 lança O Mágico de Oz, que logo se transforma um grande sucesso. Sua obra marcou de tal forma que o autor viu-se obrigado a produzir sucessivas continuações, dando início a uma série que, continuada por outros autores, está longe de encontrar um desfecho.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					The Wonderful Wizard of Oz (em português europeu: O Maravilhoso Feiticeiro de Oz; em português brasileiro: O Maravilhoso Mágico de Oz) é um romance infantil, de alta fantasia, escrito por L. Frank Baum e ilustrado por W. W. Denslow, originalmente publicado pela George M. Hill Company em Chicago em 17 de maio de 1900. É o primeiro de uma série de catorze livros que relata as aventuras na fantástica Terra de Oz. O primeiro livro segue Dorothy Ventania (Dorothy Gale, no original), do Kansas, que é levada por um tornado ao país das fadas. É considerado o primeiro contos de fadas genuinamente americano.

					Desde o final do século XIX, na Europa, alguns dos autores infantis vinham questionando o teor das histórias infantis: pregavam que deveriam ser menos violentas e apresentar personagens mais criativos - já que as velhas figuras dos contos de fadas tinham se tornado desinteressantes. Defendiam, ainda, que a função dessa literatura era divertir e entreter - não moralizar; esse papel cabia à família e à escola. A esta corrente adere o americano L. Frank Baum. Em maio de 1900 lança O Mágico de Oz, que logo se transforma um grande sucesso. Sua obra marcou de tal forma que o autor viu-se obrigado a produzir sucessivas continuações, dando início a uma série que, continuada por outros autores, está longe de encontrar um desfecho.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					The Wonderful Wizard of Oz (em português europeu: O Maravilhoso Feiticeiro de Oz; em português brasileiro: O Maravilhoso Mágico de Oz) é um romance infantil, de alta fantasia, escrito por L. Frank Baum e ilustrado por W. W. Denslow, originalmente publicado pela George M. Hill Company em Chicago em 17 de maio de 1900. É o primeiro de uma série de catorze livros que relata as aventuras na fantástica Terra de Oz. O primeiro livro segue Dorothy Ventania (Dorothy Gale, no original), do Kansas, que é levada por um tornado ao país das fadas. É considerado o primeiro contos de fadas genuinamente americano.

					Desde o final do século XIX, na Europa, alguns dos autores infantis vinham questionando o teor das histórias infantis: pregavam que deveriam ser menos violentas e apresentar personagens mais criativos - já que as velhas figuras dos contos de fadas tinham se tornado desinteressantes. Defendiam, ainda, que a função dessa literatura era divertir e entreter - não moralizar; esse papel cabia à família e à escola. A esta corrente adere o americano L. Frank Baum. Em maio de 1900 lança O Mágico de Oz, que logo se transforma um grande sucesso. Sua obra marcou de tal forma que o autor viu-se obrigado a produzir sucessivas continuações, dando início a uma série que, continuada por outros autores, está longe de encontrar um desfecho.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00001H'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'FRANKbaum'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>