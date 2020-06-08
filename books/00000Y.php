<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000Y'");
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
			<?php $book = '00000Y'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Memórias de um Sargento de Milícias é um romance de Manuel Antônio de Almeida. Foi publicado originalmente em folhetins no Correio Mercantil do Rio de Janeiro, entre 1852 e 1853, anonimamente. O livro foi publicado em 1854, no lugar do autor constava "um brasileiro".

					A narrativa de Memórias de um sargento de milícias, de estilo jornalístico e direto, incorpora a linguagem das ruas, classes média e baixa, fugindo aos padrões românticos da época, quando os romances retratavam os ambientes aristocráticos. A experiência de ter tido uma infância pobre contribuiu para que Manuel Antônio de Almeida desenvolvesse a sua obra.

					Destaca-se, ao lado de O filho do pescador de Antônio Gonçalves Teixeira e Sousa e A moreninha, de Joaquim Manuel de Macedo, entre as primeiras produções românticas da literatura brasileira.

					Manuel Antônio de Almeida utiliza uma linguagem que se aproxima da jornalística, o que torna claros e objetivos os seus textos. Outro aspecto é a utilização de personagens comuns na época, como o barbeiro, a parteira, o major, tornando, assim, a história mais próxima do leitor.

					Memórias de um sargento de milícias foi escrito em forma de folhetim (os capítulos eram publicados em seqüência nos jornais da época, o que prendia o leitor, pois deixava um suspense em relação ao capítulo posterior). Essa característica é utilizada atualmente em novelas, como um resquício do folhetim, com a finalidade de colocar o telespectador em suspense.

					Essa forma de provocar o suspense no leitor pode ser observada neste trecho, que é o final de um capítulo:

					Em alguns trechos, o narrador é onisciente, ou seja, ele sabe todos os pensamentos dos personagens. Exemplo são as passagens em que o narrador "entra" no pensamento do personagem:

					A obra é muito importante por ser de transição do Romantismo para o Realismo e por ser uma crônica de costumes.

					Além disso, é usada metalinguagem (explicar sobre o próprio processo narrativo), técnica do leitor incluso (conversa com o leitor) e digressão (interromper a narrativa para que o narrador faça um comentário sobre assunto paralelo com o diagrama).

					Em Memórias de um sargento de milícias, as personagens são planas, ou seja, elas não mudam seu comportamento no desenrolar da história. Por exemplo a personagem principal, o memorando: Leonardinho, desde criança era travesso. Planejava vinganças, criava situações constrangedoras para quem ele não gostava, mas era amado por poucos como o seu padrinho e a comadre. Isso caracteriza o tipo pícaro, ou malandro nos termos cariocas. E até o final do livro Leonardinho não muda esse jeito pícaro de viver.

					As personagens se destacam por traços gerais e comuns ao grupo que pertencem.Muitas personagens não têm nome pois são alegorias(representações simbólicas) do tipo de gente da época e da classe sócio econômica a que pertencem. Neste trecho o narrador descreve a Comadre, e em nenhum momento do livro ele cita o seu nome:
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					</ul>
					<hr>
				</div>
			</div>
			<?php $book = '00000Y'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'ANTONIOalmeida'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>