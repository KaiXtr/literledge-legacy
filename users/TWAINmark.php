<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='TWAINmark'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['pt'].' - ';}
				else {$v = $i[$_COOKIE['lang']].' - ';}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'TWAINmark'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Samuel Langhorne Clemens (Florida, Missouri, 30 de novembro de 1835 — Redding, Connecticut, 21 de abril de 1910), mais conhecido pelo pseudônimo Mark Twain, foi um escritor e humorista norte-americano crítico do racismo.[1] É mais conhecido pelos romances The Adventures of Tom Sawyer (As aventuras de Tom Sawyer,1876) e sua sequência Adventures of Huckleberry Finn (1885), este último frequentemente chamado de \"O Maior Romance Americano\".

			Twain cresceu em Hannibal, Missouri, que mais tarde serviria de inspiração e cenário para inglês sankanka, Huckleberry Finn e Tom Sawyer. Após trabalhar como tipógrafo em diversas cidades, ajudou Orion, seu irmão mais velho, na administração de um jornal. Na ocasião, exerceu diferentes funções, como impressor, tipógrafo e colunista. Tornou-se em seguida piloto de barcos a vela no Rio Mississippi, antes de se dirigir ao oeste para juntar-se a Orion em diligências a serviço do governo. A jornada com o irmão terminou quando Twain decidiu trabalhar como mineiro na extração de prata. Frustrado em mais esse intento, experimentou posteriormente carreira no jornalismo. Enquanto repórter, escreveu o conto humorístico The Celebrated Jumping Frog of Calaveras County, que alcançou imensa popularidade e atraiu para seu autor atenção nacional. Seus diários de viagem, lançados depois, também foram um sucesso. Twain encontrara sua aptidão.

			Ele obteve grande êxito como escritor e palestrante. Seu raciocínio perspicaz e suas sátiras incisivas renderam-lhe a admiração de seus pares e o enaltecimento dos críticos, e Twain manteve boas relações com presidentes, artistas, industriais e a realeza europeia. Ele foi laureado como o \"maior humorista americano de sua época\", sendo definido por William Faulkner como o \"pai da literatura americana\".

			Apesar disso, faltava-lhe perspicácia financeira. As somas consideráveis que amealhou com seus escritos e palestras foram desperdiçadas em diversos empreendimentos, em particular o Paige Compositor, o que acabou por forçá-lo a declarar falência. Com a ajuda de Henry Huttleston Rogers, no entanto, Twain superou seus problemas financeiros. Ele trabalhou arduamente para certificar-se de que todos os seus credores fossem pagos, mesmo que a condição de falido o isentasse da responsabilidade legal.

			Nascido durante uma das passagens do Cometa Halley, Twain morreu 74 anos depois, pouco depois do astro voltar a se aproximar da Terra. \"Será a maior decepção da minha vida se eu não for embora com o cometa\", escrevera ele em 1909. \"O Todo-Poderoso disse, indubitavelmente: 'cá estão esses dois inexplicáveis fenômenos; eles chegaram juntos, e devem partir juntos'\".
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Mark_Twain' > Wikipedia </a>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Samuel Langhorne Clemens (Florida, Missouri, 30 de novembro de 1835 — Redding, Connecticut, 21 de abril de 1910), mais conhecido pelo pseudônimo Mark Twain, foi um escritor e humorista norte-americano crítico do racismo.[1] É mais conhecido pelos romances The Adventures of Tom Sawyer (As aventuras de Tom Sawyer,1876) e sua sequência Adventures of Huckleberry Finn (1885), este último frequentemente chamado de \"O Maior Romance Americano\".

			Twain cresceu em Hannibal, Missouri, que mais tarde serviria de inspiração e cenário para inglês sankanka, Huckleberry Finn e Tom Sawyer. Após trabalhar como tipógrafo em diversas cidades, ajudou Orion, seu irmão mais velho, na administração de um jornal. Na ocasião, exerceu diferentes funções, como impressor, tipógrafo e colunista. Tornou-se em seguida piloto de barcos a vela no Rio Mississippi, antes de se dirigir ao oeste para juntar-se a Orion em diligências a serviço do governo. A jornada com o irmão terminou quando Twain decidiu trabalhar como mineiro na extração de prata. Frustrado em mais esse intento, experimentou posteriormente carreira no jornalismo. Enquanto repórter, escreveu o conto humorístico The Celebrated Jumping Frog of Calaveras County, que alcançou imensa popularidade e atraiu para seu autor atenção nacional. Seus diários de viagem, lançados depois, também foram um sucesso. Twain encontrara sua aptidão.

			Ele obteve grande êxito como escritor e palestrante. Seu raciocínio perspicaz e suas sátiras incisivas renderam-lhe a admiração de seus pares e o enaltecimento dos críticos, e Twain manteve boas relações com presidentes, artistas, industriais e a realeza europeia. Ele foi laureado como o \"maior humorista americano de sua época\", sendo definido por William Faulkner como o \"pai da literatura americana\".

			Apesar disso, faltava-lhe perspicácia financeira. As somas consideráveis que amealhou com seus escritos e palestras foram desperdiçadas em diversos empreendimentos, em particular o Paige Compositor, o que acabou por forçá-lo a declarar falência. Com a ajuda de Henry Huttleston Rogers, no entanto, Twain superou seus problemas financeiros. Ele trabalhou arduamente para certificar-se de que todos os seus credores fossem pagos, mesmo que a condição de falido o isentasse da responsabilidade legal.

			Nascido durante uma das passagens do Cometa Halley, Twain morreu 74 anos depois, pouco depois do astro voltar a se aproximar da Terra. \"Será a maior decepção da minha vida se eu não for embora com o cometa\", escrevera ele em 1909. \"O Todo-Poderoso disse, indubitavelmente: 'cá estão esses dois inexplicáveis fenômenos; eles chegaram juntos, e devem partir juntos'\".
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Mark_Twain' > Wikipedia </a>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Samuel Langhorne Clemens (Florida, Missouri, 30 de novembro de 1835 — Redding, Connecticut, 21 de abril de 1910), mais conhecido pelo pseudônimo Mark Twain, foi um escritor e humorista norte-americano crítico do racismo.[1] É mais conhecido pelos romances The Adventures of Tom Sawyer (As aventuras de Tom Sawyer,1876) e sua sequência Adventures of Huckleberry Finn (1885), este último frequentemente chamado de \"O Maior Romance Americano\".

			Twain cresceu em Hannibal, Missouri, que mais tarde serviria de inspiração e cenário para inglês sankanka, Huckleberry Finn e Tom Sawyer. Após trabalhar como tipógrafo em diversas cidades, ajudou Orion, seu irmão mais velho, na administração de um jornal. Na ocasião, exerceu diferentes funções, como impressor, tipógrafo e colunista. Tornou-se em seguida piloto de barcos a vela no Rio Mississippi, antes de se dirigir ao oeste para juntar-se a Orion em diligências a serviço do governo. A jornada com o irmão terminou quando Twain decidiu trabalhar como mineiro na extração de prata. Frustrado em mais esse intento, experimentou posteriormente carreira no jornalismo. Enquanto repórter, escreveu o conto humorístico The Celebrated Jumping Frog of Calaveras County, que alcançou imensa popularidade e atraiu para seu autor atenção nacional. Seus diários de viagem, lançados depois, também foram um sucesso. Twain encontrara sua aptidão.

			Ele obteve grande êxito como escritor e palestrante. Seu raciocínio perspicaz e suas sátiras incisivas renderam-lhe a admiração de seus pares e o enaltecimento dos críticos, e Twain manteve boas relações com presidentes, artistas, industriais e a realeza europeia. Ele foi laureado como o \"maior humorista americano de sua época\", sendo definido por William Faulkner como o \"pai da literatura americana\".

			Apesar disso, faltava-lhe perspicácia financeira. As somas consideráveis que amealhou com seus escritos e palestras foram desperdiçadas em diversos empreendimentos, em particular o Paige Compositor, o que acabou por forçá-lo a declarar falência. Com a ajuda de Henry Huttleston Rogers, no entanto, Twain superou seus problemas financeiros. Ele trabalhou arduamente para certificar-se de que todos os seus credores fossem pagos, mesmo que a condição de falido o isentasse da responsabilidade legal.

			Nascido durante uma das passagens do Cometa Halley, Twain morreu 74 anos depois, pouco depois do astro voltar a se aproximar da Terra. \"Será a maior decepção da minha vida se eu não for embora com o cometa\", escrevera ele em 1909. \"O Todo-Poderoso disse, indubitavelmente: 'cá estão esses dois inexplicáveis fenômenos; eles chegaram juntos, e devem partir juntos'\".
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Mark_Twain' > Wikipedia </a>
			<br />
					";
				}
			?>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/mqaSOw1WhjI?start=141" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<?php $auctor='TWAINmark'; include '../design/poemfind.php'; ?>
		<?php $user = 'TWAINmark'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>