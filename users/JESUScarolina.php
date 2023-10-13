<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='JESUScarolina'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['pt'];}
				else {$v = $i[$_COOKIE['lang']];}
			}
			require '../design/metadata.php';
		?>
	</head>
	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>
		<?php $user = 'JESUScarolina'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Carolina Maria de Jesus (Sacramento, 14 de março de 1914 — São Paulo, 13 de fevereiro de 1977) foi uma escritora brasileira, conhecida por seu livro \"Quarto de Despejo: Diário de uma Favelada\" publicado em 1960.[1]

Carolina de Jesus foi uma das primeiras escritoras negras do Brasil e é considerada uma das mais importantes escritoras do país.[2] A autora viveu boa parte de sua vida na favela do Canindé, na zona norte de São Paulo, sustentando a si mesma e seus três filhos como catadora de papéis. Em 1958, tem seu diário publicado sob o nome Quarto de Despejo, com auxílio do jornalista Audálio Dantas. O livro fez um enorme sucesso e chegou a ser traduzido para catorze línguas.[3]

Carolina de Jesus era também compositora e poetisa. Sua obra permanece objeto de diversos estudos, tanto no Brasil quanto no exterior.";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Carolina Maria de Jesus (14 March 1914[1] – 13 February 1977)[2] was a Brazilian writer who lived most of her life in a favela (slums) of São Paulo, Brazil. She is best known for her diary, which was first published as Quarto de Despejo (Dumping Room, published in English as Child of the Dark) in August 1960, after coming to the attention of a Brazilian journalist, and became a bestseller. This work remains the only document published in English by a Brazilian slum-dweller from that period. The author lived a good part of her life in the Canindé favela, in the north of São Paulo, supporting herself and her three children as a paper collector.[3]";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Carolina Maria de Jesus (Sacramento, estado de Minas Gerais, 1914 - São Paulo, estado de São Paulo 1977), fue una campesina, poeta y cronista brasileña.

Carolina Maria de Jesús nació en Minas Gerais, en una comunidad rural donde sus padres eran pequeños agricultores. Hija ilegítima de un hombre casado, fue tratada como una paria durante toda su infancia, y su personalidad agresiva empeoró los momentos difíciles por los que pasó. A los siete años, la madre de Carolina la obligó a ir a la escuela cuando un rico hacendado decidió pagarles los estudios a ella y otros niños pobres del barrio. Carolina dejó de asistir a la escuela en el segundo año, pero aprendió a leer y escribir. La madre de Carolina tenía dos hijos ilegítimos, lo que causó su expulsión de la Iglesia Católica cuando era joven. Sin embargo, fue una católica devota durante toda su vida aunque nunca fue aceptada de nuevo en esa comunidad. En su diario, Carolina hace muchas veces referencias a la religión.

La tirada inicial de diez mil ejemplares se agotó en una semana (según la Wikipedia en inglés, fueron treinta mil copias vendidas en los primeros tres días). Aunque escrito con el lenguaje simple y poco elegante de una persona sin muchos estudios, su diario se tradujo a trece idiomas y se convirtió en superventas en Estados Unidos y en Europa. Pero no fueron solamente fama y publicidad lo que Carolina consiguió con la publicación de sus diarios: también el desprecio y la hostilidad de sus vecinos. “Escribiste cosas malas de mí, lo tuyo es peor que lo mío”, gritó un vecino borracho. Decían que era una prostituta negra que se había hecho rica escribiendo sobre la favela y que se negaba a compartir el dinero. La rabia de los vecinos se vería motivada también por el cambio de domicilio de Carolina a una casa de ladrillo en el extrarradio. Esto fue posible gracias a las ganancias iniciales de la publicación de su diario. Los vecinos la rodearon y no la dejaban marchar. La hija de Carolina, Vera, contó en una entrevista que su madre aspiraba a convertirse en cantante y actriz. Pobre y olvidada, Carolina María de Jesús murió en 1977, de insuficiencia respiratoria, a los 62 años.";
				}
			?>
		</div>
		<?php $auctor='JESUScarolina'; include '../design/poemfind.php'; ?>
		<?php $user = 'JESUScarolina'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>