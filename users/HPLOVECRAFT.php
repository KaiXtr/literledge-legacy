<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='HPLOVECRAFT'");
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

		<?php $user = 'HPLOVECRAFT'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Howard Phillips Lovecraft (Providence, Rhode Island, 20 de agosto de 1890 — Providence, Rhode Island, 15 de março de 1937), mais conhecido por H. P. Lovecraft, <br />
			foi um escritor estadunidense que revolucionou o gênero de terror, atribuindo-lhe elementos fantásticos típicos dos gêneros de fantasia e ficção científica. <br />
			<br />
			Lovecraft originou o ciclo de histórias que, posteriormente, foram agrupadas no Cthulhu Mythos e o grimório fictício conhecido como Necronomicon — supostamente <br />
			vinculado a John Dee, astrônomo e ocultista britânico do século XVI — através do qual os seres humanos em suas histórias se comunicam com o panteão de entidades criadas <br />
			pelo autor. Lovecraft era assumidamente conservador e anglófilo, o que pode ser observado em seu poema An American To Mother England, publicado em janeiro de 1916. <br />
			Seu estilo literário emprega arcaísmos, vocabulário e ortografia marcadamente britânicos, fato que contribui para aumentar a atmosfera de suas histórias, como no <br />
			conto O Caso de Charles Dexter Ward, que contêm referências a personagens que viveram antes da independência das Treze Colónias, bem como a estabelecimentos <br />
			comerciais existentes entre os séculos XVII e XVIII. <br />
			<br />
			Lovecraft chamava seu princípio literário de \"Cosmicismo\" ou \"Horror Cósmico\", pelo qual a vida é incompreensível ao ser humano e o universo é infinitamente hostil <br />
			aos seus interesses. Suas obras expressam uma profunda indiferença às crenças e atividades humanas, assim como uma atitude profundamente pessimista e cínica, <br />
			muitas vezes desafiando os valores do Iluminismo, do Romantismo, do Cristianismo e do Humanismo. Os protagonistas de Lovecraft eram o oposto dos <br />
			tradicionais por momentaneamente anteverem o horror da última realidade e do abismo. <br />
			<br />
			Durante sua vida, Lovecraft teve um número relativamente pequeno de leitores. No entanto, postumamente, com o passar das décadas, sua reputação foi se elevando e, <br />
			agora, é considerado um dos escritores de terror mais influentes do século XX. Joyce Carol Oates disse que Lovecraft, assim como Edgar Allan Poe no século XIX, <br />
			tem exercido \"uma influência incalculável sobre sucessivas gerações de escritores de ficção de horror\" e Stephen King classificou o escritor como <br />
			\"o maior praticante do século XX do conto de horror clássico\".[nota 1] <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/H._P._Lovecraft' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Howard Phillips Lovecraft (Providence, Rhode Island, 20 de agosto de 1890 — Providence, Rhode Island, 15 de março de 1937), mais conhecido por H. P. Lovecraft, <br />
			foi um escritor estadunidense que revolucionou o gênero de terror, atribuindo-lhe elementos fantásticos típicos dos gêneros de fantasia e ficção científica. <br />
			<br />
			Lovecraft originou o ciclo de histórias que, posteriormente, foram agrupadas no Cthulhu Mythos e o grimório fictício conhecido como Necronomicon — supostamente <br />
			vinculado a John Dee, astrônomo e ocultista britânico do século XVI — através do qual os seres humanos em suas histórias se comunicam com o panteão de entidades criadas <br />
			pelo autor. Lovecraft era assumidamente conservador e anglófilo, o que pode ser observado em seu poema An American To Mother England, publicado em janeiro de 1916. <br />
			Seu estilo literário emprega arcaísmos, vocabulário e ortografia marcadamente britânicos, fato que contribui para aumentar a atmosfera de suas histórias, como no <br />
			conto O Caso de Charles Dexter Ward, que contêm referências a personagens que viveram antes da independência das Treze Colónias, bem como a estabelecimentos <br />
			comerciais existentes entre os séculos XVII e XVIII. <br />
			<br />
			Lovecraft chamava seu princípio literário de \"Cosmicismo\" ou \"Horror Cósmico\", pelo qual a vida é incompreensível ao ser humano e o universo é infinitamente hostil <br />
			aos seus interesses. Suas obras expressam uma profunda indiferença às crenças e atividades humanas, assim como uma atitude profundamente pessimista e cínica, <br />
			muitas vezes desafiando os valores do Iluminismo, do Romantismo, do Cristianismo e do Humanismo. Os protagonistas de Lovecraft eram o oposto dos <br />
			tradicionais por momentaneamente anteverem o horror da última realidade e do abismo. <br />
			<br />
			Durante sua vida, Lovecraft teve um número relativamente pequeno de leitores. No entanto, postumamente, com o passar das décadas, sua reputação foi se elevando e, <br />
			agora, é considerado um dos escritores de terror mais influentes do século XX. Joyce Carol Oates disse que Lovecraft, assim como Edgar Allan Poe no século XIX, <br />
			tem exercido \"uma influência incalculável sobre sucessivas gerações de escritores de ficção de horror\" e Stephen King classificou o escritor como <br />
			\"o maior praticante do século XX do conto de horror clássico\".[nota 1] <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/H._P._Lovecraft' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Howard Phillips Lovecraft (Providence, Rhode Island, 20 de agosto de 1890 — Providence, Rhode Island, 15 de março de 1937), mais conhecido por H. P. Lovecraft, <br />
			foi um escritor estadunidense que revolucionou o gênero de terror, atribuindo-lhe elementos fantásticos típicos dos gêneros de fantasia e ficção científica. <br />
			<br />
			Lovecraft originou o ciclo de histórias que, posteriormente, foram agrupadas no Cthulhu Mythos e o grimório fictício conhecido como Necronomicon — supostamente <br />
			vinculado a John Dee, astrônomo e ocultista britânico do século XVI — através do qual os seres humanos em suas histórias se comunicam com o panteão de entidades criadas <br />
			pelo autor. Lovecraft era assumidamente conservador e anglófilo, o que pode ser observado em seu poema An American To Mother England, publicado em janeiro de 1916. <br />
			Seu estilo literário emprega arcaísmos, vocabulário e ortografia marcadamente britânicos, fato que contribui para aumentar a atmosfera de suas histórias, como no <br />
			conto O Caso de Charles Dexter Ward, que contêm referências a personagens que viveram antes da independência das Treze Colónias, bem como a estabelecimentos <br />
			comerciais existentes entre os séculos XVII e XVIII. <br />
			<br />
			Lovecraft chamava seu princípio literário de \"Cosmicismo\" ou \"Horror Cósmico\", pelo qual a vida é incompreensível ao ser humano e o universo é infinitamente hostil <br />
			aos seus interesses. Suas obras expressam uma profunda indiferença às crenças e atividades humanas, assim como uma atitude profundamente pessimista e cínica, <br />
			muitas vezes desafiando os valores do Iluminismo, do Romantismo, do Cristianismo e do Humanismo. Os protagonistas de Lovecraft eram o oposto dos <br />
			tradicionais por momentaneamente anteverem o horror da última realidade e do abismo. <br />
			<br />
			Durante sua vida, Lovecraft teve um número relativamente pequeno de leitores. No entanto, postumamente, com o passar das décadas, sua reputação foi se elevando e, <br />
			agora, é considerado um dos escritores de terror mais influentes do século XX. Joyce Carol Oates disse que Lovecraft, assim como Edgar Allan Poe no século XIX, <br />
			tem exercido \"uma influência incalculável sobre sucessivas gerações de escritores de ficção de horror\" e Stephen King classificou o escritor como <br />
			\"o maior praticante do século XX do conto de horror clássico\".[nota 1] <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/H._P._Lovecraft' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='HPLOVECRAFT'; include '../design/poemfind.php'; ?>
		<?php $user = 'HPLOVECRAFT'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>