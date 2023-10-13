<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Baroque';
			$v = $ltslst[$lts];
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='banner' style='background-image: url("media/images/banners/<?php echo strtolower($lts); ?>.jpg")'></div>
		<?php echo "<div id='profile'> <h1 id='litername'> ".$ltslst[$lts]." </h1> </div>"; ?>
		<div id='bio'>
		<?php
			if ($_COOKIE['lang'] == 'pt') {
				echo 'O Barroco surgiu na Itália do século XVII, durante o fim do Renascimento, e engloba as artes da pintura, escultura, literatura, música & arquitetura. Também pode ser chamado de Seiscentecismo, por ser um movimento do século 17. "Barroco" é uma palavra que significa "exagero" ou "absurdo", e era um termo que originalmente era utilizada pelos críticos do Barroco para inferiorizar o movimento artístico. Para muitos o Barroco se trata da fase final do Renascimento, outros o consideram como um movimento a parte. <br />
				<br />
				O Barroco se originou no contexto da Reforma Protestante, graças ás influências humanistas e dos ideais iluministas, que estavam entrando em popularidade, a igreja católica foi duramente criticada por vários setores da sociedade, tanto por intelectuais e burgueses quanto pelos próprios religiosos. Em resposta, a igreja católica criou a Contrarreforma, onde dentro das várias mudanças, promoveu um forte crescimento da propaganda católica dentro da sociedade, através das artes modernas de seu tempo. Foi durante o Barroco que diversos artistas Renascentistas usaram sua arte para promover a religião. <br />
				<br />
				Na área da literatura, o Barroco é dividido entre dois tipos de pensamento: o <b>Cultismo</b> e o <b>Conceptismo</b>. <br />
				O Cultismo ou Gongorismo surgiu por influência do poeta espanhol Luís de Góngora, e sua principal característica é o uso frequente da linguagem culta e de termos rebuscados e ornamentais.<br />
				Já o Gongorismo, também chamado de Quevedismo, foi inspirado pelo poeta Francisco de Quevedo, também espanhol, e se caracteriza por uma linguagem mais coloquial, didática e pedagógica, com o intuito de ensinar o leitor sobre a fé católica e convencendo-o com argumentos racionais. O Conceptismo faz uso do Silogismo e do Sofismo.
				<ul>
				<li>Sofismo é gerar uma proposição lógica a partir de duas premissas.</li>
				<li>Silogismo significa criar uma inverdade baseada em argumentos lógicos e omissão de informações.</li>
				</ul>
				<br />
				Apesar da contribuição da igreja católica no Barroco, os ideais humanistas e antropocêntricos exerceram forte influência sobre o movimento, criando assim uma contradição entre os artistas e apoiadores do Barroco. Uma caracterísitca muito recorrente é o comportamento do homem do Barroco, que manifesta atrevés do dualismo e das antíteses o bem e o mal, o puro e o pecaminoso, o sensual e o espiritual. Ao mesmo tempo que é um homem religioso, também é um homem mundano entregue ás tentações. Por isso o Barroco pode ser entendido como o reflexo do ser humano em dúvida sobre as questões religiosas, vivendo ao mesmo tempo numa sociedade dominada pela igreja católica e pelos pensamentos humanistas. <br />
				<br />
				Além disso, há uma supervalorização da juventude, pois no entendimento do Barroco, a vida passa rápido e a felicidade verdadeira só pode ser encontrada na vida após a morte, e por isso deve se aproveitar o melhor que o plano terreno pode oferecer.
				<br />
				Dentre a principais características do Barroco se destacam:
				<ul>
				<li>O Exagero e o rebuscamento</li>
				<li>O uso de antíteses e dualismos</li>
				<li>Complexidade na composição das obras</li>
				<li>Sensualismo e Erotismo</li>
				<li>Arte detalhista e com muitos elementos no mesmo espaço</li>
				<li>Retratação da morte, do castigo e do arrependimento</li>
				<li>Pessimismo, encontro da verdadeira felicidade apenas após a morte</li>
				<li>Apelo ao mistiscismo e á religião</li>
				<li>Fusão do pensamento renascentista e medieval</li>
				<li>Carpe Diem, aproveitar o momento, uma frase também recorrente no <a href='."'schools/arcadism.php'>Arcadismo.</a></li>
				</ul>
				No Brasil, o Barroco veio graças aos jesuítas e a missão evangelista na colônia, e representou a primeira manifestação de arte no Brasil. Pelo fato de ser uma colônia, o Brasil não foi um ambiente propício para a expansão da arte e da literatura, por isso os autores do Barroco no Brasil se espelharam mais nos artistas da Europa. Apesar de surgir na Bahia, o Barroco ganhou mais destaque apenas no século XVIII, em Minas Gerais, onde Aleijadinho iria criar suas mais importantes obras artísticas.
				<br />";
			}
			if ($_COOKIE['lang'] == 'en') {
				echo 'Baroque emerged in 17th century Italy, during the late Renaissance, and encompasses the arts of painting, sculpture, literature, music & architecture. It can also be called Seiscentecismo, for being a movement of the 17th century. "Baroque" is a word that means "exaggeration" or "absurd", and was a term that was originally used by critics of the Baroque to downplay the artistic movement. For many, the Baroque is the final phase of the Renaissance, others consider it as a separate movement. <br />
				<br />
				The Baroque originated in the context of the Protestant Reformation, thanks to the humanist influences and the Enlightenment ideals, which were gaining popularity, the Catholic Church was severely criticized by various sectors of society, both by intellectuals and bourgeois as well as by the religious themselves. In response, the Catholic Church created Contrarreforma, where within the various changes, it promoted a strong growth of Catholic propaganda within society, through the modern arts of its time. It was during the Baroque period that several Renaissance artists used their art to promote religion. <br />
				<br />
				In the area of ​​literature, the Baroque is divided between two types of thought: <b> Cultism </b> and <b> Conceptism </b>. <br />
				Cultism or Gongorism arose under the influence of the Spanish poet Luís de Góngora, and its main characteristic is the frequent use of cultured language and elaborate and ornamental terms. <br />
				Gongorism, also called Quevedismo, was inspired by the poet Francisco de Quevedo, also Spanish, and is characterized by a more colloquial, didactic and pedagogical language, in order to teach the reader about the Catholic faith and convince him with arguments rational. Conceptism makes use of syllogism and sophism.
				<ul>
				<li> Sophism is to generate a logical proposition from two premises. </li>
				<li> Syllogism means creating untruth based on logical arguments and omission of information. </li>
				</ul>
				<br />
				Despite the contribution of the Catholic Church in the Baroque, humanist and anthropocentric ideals had a strong influence on the movement, thus creating a contradiction between artists and supporters of the Baroque. A very recurring characteristic is the behavior of the Baroque man, who manifests through goodness and evil, pure and sinful, sensual and spiritual through dualism and antithesis. At the same time that he is a religious man, he is also a worldly man given to temptations. For this reason, the Baroque can be understood as the reflection of the human being in doubt about religious issues, living at the same time in a society dominated by the Catholic Church and humanist thoughts. <br />
				<br />
				In addition, there is an overvaluation of youth, as in the understanding of the Baroque, life passes quickly and true happiness can only be found in life after death, and for this reason you should take advantage of the best that the earthly plan can offer.
				<br />
				Among the main characteristics of the Baroque stand out:
				<ul>
				<li> Exaggeration and refusal </li>
				<li> The use of antitheses and dualisms </li>
				<li> Complexity in the composition of the works </li>
				<li> Sensualism and Eroticism </li>
				<li> Detailed art with many elements in the same space </li>
				<li> Portraying death, punishment and repentance </li>
				<li> Pessimism, finding true happiness only after death </li>
				<li> Appeal to mystique and religion </li>
				<li> Fusion of Renaissance and Medieval thought </li>
				<li> Carpe Diem, seize the moment, a phrase also recurring in <a href='."'schools/arcadism.php'> Arcadismo. </a> </li>
				</ul>
				In Brazil, the Baroque came thanks to the Jesuits and the evangelist mission in the colony, and represented the first manifestation of art in Brazil. Because it was a colony, Brazil was not a conducive environment for the expansion of art and literature, which is why the authors of Baroque in Brazil were more closely mirrored by European artists. Despite appearing in Bahia, the Baroque gained more prominence only in the 18th century, in Minas Gerais, where Aleijadinho would create his most important artistic works.
				<br />";
			}
			if ($_COOKIE['lang'] == 'es') {
				echo 'El barroco surgió en la Italia del siglo XVII, durante el Renacimiento tardío, y abarca las artes de la pintura, la escultura, la literatura, la música y la arquitectura. También puede llamarse Seiscentecismo, por ser un movimiento del siglo 17. "Barroco" es una palabra que significa "exageración" o "absurdo", y fue un término que originalmente fue utilizado por los críticos del Barroco para minimizar el movimiento artístico. Para muchos, el barroco es la fase final del Renacimiento, otros lo consideran como un movimiento separado. <br />
				<br />
				El barroco se originó en el contexto de la Reforma Protestante, gracias a las influencias humanistas y los ideales de la Ilustración, que estaban ganando popularidad, la Iglesia Católica fue severamente criticada por varios sectores de la sociedad, tanto por intelectuales y burgueses como por los propios religiosos. En respuesta, la Iglesia Católica creó Contrarreforma, donde dentro de los diversos cambios, promovió un fuerte crecimiento de la propaganda católica dentro de la sociedad, a través de las artes modernas de su tiempo. Fue durante el período barroco que varios artistas del Renacimiento usaron su arte para promover la religión. <br />
				<br />
				En el área de la literatura, el barroco se divide entre dos tipos de pensamiento: <b> Cultismo </b> y <b> Conceptismo </b>. <br />
				El cultismo o gongorismo surgió bajo la influencia del poeta español Luís de Góngora, y su característica principal es el uso frecuente de lenguaje culto y términos elaborados y ornamentales. <br />
				El gongorismo, también llamado quevedismo, se inspiró en el poeta Francisco de Quevedo, también español, y se caracteriza por un lenguaje más coloquial, didáctico y pedagógico, para enseñar al lector sobre la fe católica y convencerlo con argumentos. racional. El conceptismo hace uso del silogismo y el sofismo.
				<ul>
				<li> El sofismo es generar una proposición lógica a partir de dos premisas. </li>
				<li> Silogismo significa crear falsedad basada en argumentos lógicos y omisión de información. </li>
				</ul>
				<br />
				A pesar de la contribución de la Iglesia católica en el barroco, los ideales humanistas y antropocéntricos tuvieron una fuerte influencia en el movimiento, creando así una contradicción entre los artistas y los partidarios del barroco. Una característica muy recurrente es el comportamiento del hombre barroco, que se manifiesta a través de la bondad y el mal, puro y pecaminoso, sensual y espiritual a través del dualismo y la antítesis. Al mismo tiempo que es un hombre religioso, también es un hombre mundano dado a las tentaciones. Por esta razón, el Barroco puede entenderse como el reflejo del ser humano en duda sobre cuestiones religiosas, viviendo al mismo tiempo en una sociedad dominada por la Iglesia Católica y los pensamientos humanistas. <br />
				<br />
				Además, existe una sobrevaloración de la juventud, ya que, en la comprensión del Barroco, la vida pasa rápidamente y la verdadera felicidad solo se puede encontrar en la vida después de la muerte, y por esta razón debe aprovechar lo mejor que puede ofrecer el plan terrenal.
				<br />
				Entre las principales características del barroco destacan:
				<ul>
				<li> Exageración y rechazo </li>
				<li> El uso de antítesis y dualismos </li>
				<li> Complejidad en la composición de las obras </li>
				<li> Sensualismo y erotismo </li>
				<li> Arte detallado con muchos elementos en el mismo espacio </li>
				<li> Representando la muerte, el castigo y el arrepentimiento </li>
				<li> Pesimismo, encontrar la verdadera felicidad solo después de la muerte </li>
				<li> Apelar a la mística y la religión </li>
				<li> Fusión de pensamiento renacentista y medieval </li>
				<li> Carpe Diem, aprovecha el momento, una frase que también se repite en <a href='."'schools/arcadism.php'> Arcadismo. </a> </li>
				</ul>
				En Brasil, el barroco llegó gracias a los jesuitas y la misión evangelista en la colonia, y representó la primera manifestación de arte en Brasil. Debido a que era una colonia, Brasil no era un entorno propicio para la expansión del arte y la literatura, razón por la cual los autores del Barroco en Brasil fueron reflejados más de cerca por los artistas europeos. A pesar de aparecer en Bahía, Barroco ganó más protagonismo solo en el siglo XVIII, en Minas Gerais, donde Aleijadinho crearía sus obras artísticas más importantes.
				<br />";
			}
		?>
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "Escritores do Barroco";}
						if ($_COOKIE['lang'] == 'en') {echo "Baroque Writers";}
						if ($_COOKIE['lang'] == 'es') {echo "Escritores del Barroco";}
					?>
					</h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('MATOSgregorio','TEIXEIRAbento','BOTELHOoliveira','SALVADORfrei','ITAPARICAfrei');
							for ($x=0;$x<sizeof($a);$x++) {
								$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$a[$x]."'");
								$n = $find->fetch_assoc();
								if ($n[$_COOKIE['lang']] == null) {$nm = $n['pt'];}
								else {$nm = $n[$_COOKIE['lang']];}

								echo "<a href='users/".$a[$x].".php'>
										<button class='portraits'>
											<img class='profilepic' src='media/images/profilepics/".$a[$x].".jpg' />
											<h2> ".$nm." </h2>
										</button>
									</a>";
								}
							$conn->close();
							}
					?>
				</div>
			</div>
			<?php $schl = $lts; include '../design/auctorbooks.php'; ?>
		</div>
		<?php include '../design/footer.php' ?>
	</body>
</html>