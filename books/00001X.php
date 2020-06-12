<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001X'");
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
			<?php $book = '00001X'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Harry Potter and the Chamber of Secrets (Brasil: Harry Potter e a Câmara Secreta /Portugal: Harry Potter e a Câmara dos Segredos) é um romance de fantasia escrito pela britânica J. K. Rowling. É o segundo livro da série Harry Potter. O livro se envolve em torno da lenda de uma câmara secreta localizada na Escola de Magia e Bruxaria de Hogwarts, na qual abriga um monstro que matará a todos os bruxos que não provém de famílias mágicas. Diversos alunos aparecem petrificados e Harry Potter, além de ser apontado como o maior suspeito, tenta desvendar e resolver o mistério junto de seus melhores amigos, Rony Weasley e Hermione Granger.

					Após o grande sucesso do primeiro livro da série, a escritora aponta que apresentou grandes dificuldades em desenvolver Câmara Secreta por medo de desapontar o público, entretanto, também o considera como um de seus preferidos. Metade do livro já havia sido escrita quando o livro antecessor fora publicado. Rowling afirma que a trama da obra é mais direta em comparação à Harry Potter e a Pedra Filosofal. O livro passou por diversas mudanças e revisões até chegar no resultado final.

					Assim como seu predecessor, Harry Potter e a Câmara Secreta foi aclamado por críticos literários e escritores, com elogios direcionados a trama, personagens e clímax da história, embora alguns comentários digam que o livro conta com uma trama igual a de Pedra Filosofal e que a escritora utilizou deus ex machina. O romance desencadeou alguns debates religiosos: autoridades condenaram o uso de temas mágicos, enquanto outros elogiaram sua ênfase em auto sacrifício e na maneira que o caráter de uma pessoa resulta em suas escolhas. Rowling foi comparada ao autor Stephen King. Vários comentaristas notaram que a identidade pessoal é um tema forte no livro, e que este aborda questões de racismo através do tratamento com trouxas (não-bruxos). A obra foi incluída em algumas listas reunindo os melhores de 1998, como a lista de melhores livros infantis e melhores pra jovens adultos da American Library Association.

					A adaptação cinematográfica do livro foi lançada em 2002 e dirigida por Chris Columbus. O longa arrecadou pouco mais de 879 milhões de dólares, assegurando sua entrada na lista de filmes de maior bilheteria, embora seja um dos que menos arrecadou de toda a saga. Jogos eletrônicos baseados em Harry Potter e a Câmara Secreta também foram lançados para diversas plataformas, os quais obtiveram avaliações relativamente altas. Stephen Fry e Jim Dale narraram as versões de audiolivro britânica e americana, respectivamente.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>: </b></li>
					</ul>
					<hr>
				</div>
			</div>
			<?php $book = '00001X'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'JKROWLING'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>