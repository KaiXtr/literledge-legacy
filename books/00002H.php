<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00002H'");
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
			<?php $book = '00002H'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Por Quem os Sinos Dobram (em inglês: For Whom the Bell Tolls) é um romance de 1940 do escritor norte-americano Ernest Hemingway, considerado pela crítica uma das suas melhores obras.[1]

					O livro narra a história de Robert Jordan, um jovem norte-americano das Brigadas Internacionais. Professor de espanhol que se tornou conhecedor do uso de explosivos, Jordan recebe a missão de explodir uma ponte por ocasião de um ataque simultâneo à cidade de Segóvia.

					Hemingway usa como referência sua experiência pessoal como participante voluntário da Guerra Civil Espanhola[2] ao lado dos republicanos e faz uma análise ácida, com críticas à atuação extremamente violenta das tropas de ambos os lados: os Nacionalistas, auxiliados pelo governo italiano e nazista alemão e os Republicanos pelas brigadas internacionais e União Soviética. Critica também a burocratização e o panorama de privilégios rapidamente instaurado no lado da República.

					Acima de tudo o livro trata, no entanto, da condição humana. O título é referência a um poema do pastor e escritor inglês John Donne que se encontra na obra "Poems on Several Occasions" que em português chama-se "Meditações", e invoca o absurdo da guerra, mormente a guerra civil, travada entre irmãos. "Quando morre um homem, morremos todos, pois somos parte da humanidade".Em várias passagens do texto os personagens estranham e se estranham desempenhando os papéis bizarros que se viram forçados a assumir durante a guerra, e fraquejam ao ver nos inimigos seres humanos que poderiam estar de qualquer um dos lados da guerra. [3]

					Em 1943 um filme homônimo foi feito, tendo nos papéis principais os astros da época, Gary Cooper e Ingrid Bergman, com uma cena famosa na qual o casal usa um mesmo saco de dormir.

					A banda californiana de heavy metal Metallica tem uma canção em seu segundo álbum de estúdio, Ride the Lightning chamada "For Whom The Bell Tolls". A música foi inspirada nesta obra.

					O nono álbum do cantor e compositor brasileiro Raul Seixas, Por Quem os Sinos Dobram teve o título inspirado no filme homônimo baseado em livro de Ernest Hemingway e traz alguns clássicos da obra de Raul Seixas, como "O Segredo do Universo", "Ide a Mim Dadá" e "Por Quem Os Sinos Dobram".
					<hr>
				</div>
			</div>
			<?php $book = '00002H'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'HEMINGWAYernest'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>