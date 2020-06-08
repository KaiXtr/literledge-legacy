<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000003'");
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
			<?php $book = '000003'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Dom Casmurro é a última obra da triologia realista de Machado de Assis, e considerado a obra-prima do autor. A obra é narrada em primeira pessoa e é 
					contada pelo ponto de vista do protagonista, Bento Santiago, que narra sua juventude e sua vida. Machado de Assis explora de maneira crítica e brilhante 
					temas como a inveja, o ciúme e a traição, ele a descreve como um tema envolto de mistérios e incertezas, bem como ocorre na realidade. Pelo fato do livro 
					ter influências da visão do protagonista, o leitor não sabe se deve se colocar numa posição concordando ou discordando de Bentinho, acreditar no personagem 
					ou pensar que não se passam de paranóias da cabeça dele, deixando livre para o leitor interpretar as suspeitas de Bento. Por isso este livro emplacou uma 
					das frases mais populares da literatura brasileira: "Capitu traiu Bentinho?".
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>Bento Santiago: </b>também chamado de Bentinho, o narrador-personagem que conta suas memórias, membro da elite carioca.</li>
					<li><b>Capitu: </b>grande amor de Bentinho, de família pobre, mas tem muita atitude.</li>
					<li><b>Escobar: </b>o melhor amigo de Bentinho, que o conheceu no seminário.</li>
					<li><b>Dona Sancha: </b>mulher de Escobar, ex-colega de colégio de Capitu.</li>
					<li><b>Dona Glória: </b>mãe de Bentinho, protetora e muito religiosa.</li>
					<li><b>José Dias: </b>agregado que vive de favores na casa de dona Glória.</li>
					<li><b>Tio Cosme: </b>irmão de dona Glória, viúvo e advogado.</li>
					<li><b>Prima Justina: </b>prima de dona Glória.</li>
					<li><b>Pedro de Albuquerque Santiago: </b>pai de Bentinho, faleceu quando o filho ainda era muito pequeno.</li>
					<li><b>Senhor Pádua e Dona Fortunata: </b>os pais de Capitu.</li>
					<li><b>Ezequiel: </b>filho de Capitu, filho este em que Bentinho irá suscitar suas dúvidas.</li>
					</ul>
					<hr>
				</div>
				<div class='manlan' lang='es'>
					<a name='goto1'></a>
					<h1> Review </h1>
					Dom Casmurro is the last work of Machado de Assis' realistic triology, and considered the masterpiece of the author. The work is narrated in first person 
					and is told from the point of view of the protagonist, Bento Santiago, who narrates his youth and his life. Machado de Assis explores in a critical and 
					brilliant way themes like envy, jealousy and betrayal, he describes it as a theme surrounded by mysteries and uncertainties, as well as in reality. Because 
					the book has influences of the protagonist's vision, the reader does not know whether to put himself in a position agreeing or disagreeing with Bentinho, 
					believe in the character or to think that they are nothing more than paranoias in his head, leaving the reader free to interpret Bento's suspicions. That 
					is why this book scored one of the most popular phrases in Brazilian literature: "Capitu betrayed Bentinho?".
					<hr>
					<a name='goto2'> </a>
					<h1> Characters </h1>
					<ul>
					<li><b> Bento Santiago: </b>also called Bentinho, the narrator-character who recounts his memories, a member of the Rio elite. </li>
					<li><b> Capitu: </b>great love for Bentinho, from a poor family, but with a lot of attitude. </li>
					<li><b> Escobar: </b>Bentinho's best friend, who met him at the seminar. </li>
					<li><b> Dona Sancha: </b>Escobar's wife, a former schoolmate from Capitu. </li>
					<li><b> Dona Glória: </b>Bentinho's mother, protective and very religious. </li>
					<li><b> José Dias: </b>household that lives in favor at Dona Glória's house. </li>
					<li><b> Uncle Cosme: </b>Dona Glória's brother, widower and lawyer. </li>
					<li><b> Prima Justina: </b> ona Glória's cousin. </li>
					<li><b> Pedro de Albuquerque Santiago: </b>Bentinho's father, died when his son was still very small. </li>
					<li><b> Senhor Pádua and Dona Fortunata: </b>Capitu's parents. </li>
					<li><b> Ezequiel: </b>son of Capitu, son in which Bentinho will raise his doubts. </li>
					</ul>
					<hr>
				</div>
				<div class='manlan' lang='en'>
					<a name='goto1'></a>
					<h1> Revisión </h1>
					Dom Casmurro es el último trabajo de la triología realista de Machado de Assis, y se considera la obra maestra del autor. El trabajo se narra en primera 
					persona y se cuenta desde el punto de vista del protagonista, Bento Santiago, quien narra su juventud y su vida. Machado de Assis explora de manera crítica 
					y brillante temas como envidia, celos y traición, lo describe como un tema rodeado de misterios e incertidumbres, así como en la realidad. Porque el libro 
					tiene Influencias de la visión del protagonista, el lector no sabe si ponerse en una posición de acuerdo o en desacuerdo con Bentinho, creer en el 
					personaje o pensar que no son más que paranoias en su cabeza, dejando al lector libre para interpretar las sospechas de Bento. Es por eso que este libro 
					obtuvo una de las frases más populares en la literatura brasileña: "Capitu traicionado Bentinho?".
					<hr>
					<a name='goto2'> </a>
					<h1> Personajes </h1>
					<ul>
					<li><b> Bento Santiago: </b>también llamado Bentinho, el personaje narrador que relata sus recuerdos, un miembro de la élite de Río. </li>
					<li><b> Capitu: </b>gran amor por Bentinho, de una familia pobre, pero con mucha actitud. </li>
					<li><b> Escobar: </b>el mejor amigo de Bentinho, que lo conoció en el seminario. </li>
					<li><b> Dona Sancha: </b>la esposa de Escobar, un ex compañero de escuela de Capitu. </li>
					<li><b> Doña Glória: </b>la madre de Bentinho, protectora y muy religiosa. </li>
					<li><b> José Dias: </b>hogar que vive a favor en la casa de doña Glória. </li>
					<li><b> Tío Cosme: </b>hermano, viudo y abogado de doña Glória. </li>
					<li><b> Prima Justina: </b>prima de doña Glória. </li>
					<li><b> Pedro de Albuquerque Santiago: </b>el padre de Bentinho, murió cuando su hijo todavía era muy pequeño. </li>
					<li><b> Senhor Pádua y Dona Fortunata: </b>los padres de Capitu. </li>
					<li><b> Ezequiel: </b>hijo de Capitu, hijo en el que Bentinho levantará sus dudas. </li>
					</ul>
					<hr>
				</div>
			</div>
			<?php $book = '000003'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'MACHADOassis'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>