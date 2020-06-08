<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000I'");
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
			<?php $book = '00000I'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					A Ilíada (em grego antigo: Ἰλιάς, IPA: [iːliás]) é um dos dois principais poemas épicos da Grécia Antiga, de autoria atribuída ao poeta Homero, que narra os acontecimentos decorridos no período de 51 dias durante o décimo e último ano da Guerra de Troia, conflito empreendido para a conquista de Ílio ou Troia, cuja gênese radica na ira (μῆνις, mênis) da Aquiles.[1][2]

					A Ilíada é atribuída a Homero, que se julga ter vivido por volta do século VIII a.C.,[2] na Jônia (atualmente região da Turquia), e constitui o mais antigo e extenso documento literário grego (e ocidental) existente. Ainda hoje, contudo, se discute a verdadeira autoria e a existência real de Homero (nascido ou em Quios, Grécia ou em Esmirna, Turquia).[3]

					A Ilíada é constituída por 15 693 versos em hexâmetro datílico, a forma tradicional da poesia épica grega. Foi composta por uma mistura de dialetos, resultando numa língua literária artificial, nunca de fato falada na Grécia.

					Com origem na tradição oral da época micênica ou seja, teria sido cantada pelos aedos (artistas que cantavam epopeias), e só muito mais tarde os versos foram compilados numa versão escrita,no século VI a.C. em Atenas. O poema foi então posteriormente dividido em 24 cantos, divisão que persiste até hoje. Onde cada canto corresponde a uma letra do alfabeto grego - divisão atribuída aos estudiosos da biblioteca de Alexandria.

					Considerada como a "obra fundadora" da literatura ocidental e uma das mais importantes da literatura mundial. Tornou-se, juntamente com a Odisseia (atribuída ao mesmo autor), modelo da poesia épica, seguido pelos autores clássicos, como Virgílio, no poema Eneida, dentre outros. Também influenciou fortemente a cultura clássica de maneira geral, abrangendo campos não só da literatura, como a poesia lírica e a tragédia (na linguagem e temas), mas também a historiografia (na temática bélica e estrutura das narrativas historiográficas), a filosofia, etc., sendo amplamente estudada na Grécia Antiga (como parte da educação básica) e, posteriormente, no Império Romano.

					A Ilíada passa-se durante o décimo ano da guerra de Troia e trata da ira de Aquiles. A ira é causada por uma disputa entre Aquiles e Agamemnon, comandante dos exércitos gregos em Troia, e consumada com a morte do herói troiano Heitor (ou Héctor), terminando com seu funeral.

					Embora Homero se refira a vários mitos e acontecimentos prévios, fortemente presentes na cultura grega, a história da guerra de Troia não é contada na íntegra. Dessa forma, o conhecimento prévio da mitologia grega acerca da guerra é relevante para a compreensão da obra.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					Aquiles: príncipe de Ftia, líder dos mirmidões (mirmídones), herói e melhor de todos os guerreiros, filho da deusa marinha Tétis e do mortal rei Peleu. Sua ira é o tema central da Ilíada. Vinga a morte de Pátroclo matando Heitor em um duelo um a um.
					Agamemnon: Rei de Micenas e comandante supremo dos aqueus, sua atitude de tomar a escrava Briseis de Aquiles é o estopim do desentendimento entre eles.
					Pátroclo: Amigo de Aquiles. Alguns argumentam que há envolvimento íntimo entre Aquiles e Pátroclo, o que foi, no entanto, refutado por Sócrates, no diálogo Fedro, citando passagens da Ilíada que dizem que Aquiles e Pátroclo dormiam em leitos separados, cada um com sua respectiva concubina. Foi morto por Heitor enquanto fingia ser Aquiles.
					Odisseu (Ulisses): Rei de Ítaca, considerado “astuto”, ou “ardiloso”. Frequentemente faz o papel de embaixador entre Aquiles e Agamemnon. Foi ele que teve a ideia de fazer uma armadilha aos troianos. É o personagem principal de Odisseia, também atribuído a Homero em que é narrada a volta de Odisseu a Ítaca.
					Calcas Testorídes: Poderoso vidente que guia os aqueus. Foi ele que predisse que a guerra duraria dez anos, que era preciso devolver Briseis (Briseida) ao pai e muitas outras coisas.
					Ájax: É o mais forte e habilidoso dos guerreiros gregos depois de Aquiles, era praticamente imbatível e graças a ele os gregos conseguiram muitas vitórias sobre os troianos.
					Ájax (filho de Ileu): Liderou um destacamento de lócridas durante a guerra na qual desempenhou um papel importante e foi um dos guerreiros que estava dentro do cavalo de madeira.
					Nestor: Um dos dos guerreiros da Grécia, embora Nestor fosse velho era famoso pela sua coragem.
					Idomeneu: rei de Creta e neto de Minos e é um dos guerreiros gregos.
					Diomedes: Príncipe de Argos, comandava a frota de navios de seu reino. Herói valente que participou ativamente do cerco, da pilhagem e do saque de Troia.
					Menelau: Rei de Esparta, marido de Helena e irmão mais novo de Agamemnon.
					Protesilau: Fez uma profecia que o primeiro que pisasse em solo troiano também seria o primeiro a morrer, e acabou sendo ele mesmo.

					Heitor, ou Héctor: Príncipe de Troia, filho de Príamo e irmão de Páris. É o melhor guerreiro troiano, herói valoroso que combate para defender sua cidade e sua família. Líder dos exércitos troianos. Mata Pátroclo em uma batalha achando que ele era Aquiles porque usava sua armadura, escudo e espada sem mencionar a semelhança física entre os dois. Morto por Aquiles em um duelo.
					Príamo: rei de Troia, já é idoso, portanto quem comanda de fato a luta é seu filho, Heitor.
					Páris: Príncipe de Troia, sua fuga com Helena é a causa da guerra. É sua a flecha que finalmente mata Aquiles, acertando-o no calcanhar.
					Eneias: Primo de Heitor e seu principal tenente. É o personagem principal da Eneida, obra máxima do poeta latino Virgílio.
					Helena: Esposa de Páris, antes casada com Menelau, e pivô da guerra. Com a queda de Troia volta para Esparta e para Menelau.
					Andrómaca: Esposa de Heitor, de quem tinha um filho bebê, Astíanax.
					Briseis (Briseida): Prima de Heitor e Páris, capturada pelos aqueus, se torna escrava de Aquiles e acaba se apaixonando por ele e vice-versa.
					Sarpedão (Ilíada): Rei da Lícia que matou o grego Tlepólemo.

					Ficaram do lado dos gregos (aqueus):

					Hera
					Atena
					Posidão
					Hefesto
					Tétis (mãe de Aquiles)
					Ficaram do lado dos troianos:

					Apolo
					Afrodite
					Ares
					Ártemis
					Leto
					Zeus e Hades mantiveram-se neutros. Outras divindades menores, como Péon, Íris e Éris, também se envolveram nos eventos.
					</ul>
					<hr>
					</div>
			</div>
			<?php $book = '00000I'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'HOMERUS'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>