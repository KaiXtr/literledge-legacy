<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$aca = 'AFR';
			$v = $acalst[$aca];
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='banner' style='background-image: url("media/images/banners/<?php echo $aca; ?>.jpg")'></div>
		<?php echo "<div id='profile'><a href='http://academie-francaise.fr/' target='_blank'>
			<h1 id='litername'> ".$acalst[$aca]." </h1>
			<h2 id='nickname'>academie-francaise.fr</h2></a></div>"; ?>
		<div id='bio'>
		<?php
			if ($_COOKIE['lang'] == 'pt') {
			echo "A Académie française foi fundada por Richelieu em 1635, sob o reinado de Luís XIII de França. É uma das mais antigas instituições francesas. É composta por quarenta membros, os «Quarenta», os «Imortais». A Academia Brasileira de Letras foi baseada nela.<br />
						No sistema educacional francês, a Academia é uma unidade administrativa.<br />
			A Academia Francesa (Académie française) é uma associação composta pelas mais proeminentes pessoas instruídas nos assuntos relativos ao idioma francês. Foi criada em 1635 por Richelieu, o principal ministro e o homem-forte do reinado de Luís XIII. Fechada em 1793, durante a Revolução Francesa, foi novamente instituída por Napoleão Bonaparte, em 1803. É a mais antiga das 5 academias que compõem o Instituto da França.<br />
			<br />
			Foi instaurada invocando-se o \"sítio de Akademus\" - local da Grécia Antiga onde teria sido os jardins do herói Akademus e escolhido por Platão para ministrar suas palestras aos discípulos - recebendo aquele lugar o nome de \"Akademia\".<br />
			<br />
			A Académie compõe-se de quarenta membros conhecidos por Immortels (\"Imortais\"), sendo que os novos membros são eleitos pelos mais antigos. Uma vez ingressado em seus quadros, ali permanece por toda a vida, podendo, entretanto, ser removido por conduta inapropriada.<br />
			Em suas origens, a Académie era composta por um grupo informal que se reunia para debates literários entre as décadas de 1620 e 1630 em Paris (um, dentre muitos dos grupos que então se formaram). O cardeal Richelieu, na prática o governante da França na época, adotou este grupo como seu protegido. Como preparação para a sua constituição oficial, foram convidados vários associados no ano de 1634. A 22 de fevereiro do ano seguinte, com a intercessão e apressamento de Richelieu, a Carta Real foi concedida por Luís XIII de França e a organização tornou-se formalmente legítima. A Carta, entretanto, somente foi registrada no parlamento de Paris a 10 de julho de 1637. A Académie Française passou, formalmente, a ser a responsável pela regulamentação da gramática, ortografia e literatura francesas.<br />
			<br />
			Durante a Revolução Francesa, a Convenção Nacional suprimiu todas as academias reais, inclusive a \"Académie Française\". Em 1792, foi proibida a eleição de novos sócios para substituir os que morreram, e no ano seguinte foram completamente abolidas. As academias foram reunidas numa única entidade, em 1795, chamado de \"Institut de France\". Napoleão Bonaparte, quando Primeiro Cônsul, decidiu restabelecer as antigas academias, mas como \"classes\" ou divisões do Instituto. A segunda classe do Instituto equivalia à antiga \"Académie\". Quando assumiu o trono Luís XVIII de França, em 1816, cada classe recuperou o título de \"Académie\" - e aquela segunda classe voltou a apropriadamente intitular-se \"Academia\". Desde este ano, portanto, a \"Académie Française\" funciona ininterruptamente.<br />
			<br />
			O presidente francês é o protetor ou patrono da Académie - um papel que coubera precipuamente a Richelieu. Com a sua morte, em 1642, Pierre Séguier, chanceler de França, o sucedeu. Quando este, a seu turno, faleceu em 1672, Luís XIV de França assumiu esta função. Desde então, o chefe de estado sempre foi o patrono da Académie. De 1672 a 1805, a reuniões oficiais do silogeu deram-se no Louvre e, a partir desse ano, ocorrem no Collège des Quatre Nations (hoje conhecido como Palais de l'Institut). As demais academias do Instituto também ali têm sua sede.<br />
			<br />
			A 14 de novembro de 2019, foi agraciada com o grau de Membro-Honorário da Ordem Militar de Sant'Iago da Espada, de Portugal.<br />
			<br />
			São quarenta \"cadeiras\", numeradas de um a quarenta, em sequência e sem grau diferenciador entre elas. Foram chamados de \"imortais\" por conta da inscrição \"À l'immortalité\" (\"para a imortalidade\"), que se encontra no selo oficial da corporação e que foi ofertado por Richelieu. Cada imortal é escolhido por seus pares para ser o \"secretário permanente\" da Académie - cargo que ocupa por toda a vida, ou até que haja a resignação. Além disso, a Académie pode indicar um \"secretário permanente honorário\". O sócio mais velho, por data de ingresso, é o \"decano da academia\".<br />
			<br />
			Novos membros são eleitos pelos próprios acadêmicos (os sócios originais foram designados). Quando uma cadeira fica vaga, o candidato informa ao secretário que deseja tornar-se um candidato. Também os acadêmicos podem indicar candidatos - e estes somente serão considerados eleitos se obtiverem a maioria dos votos, num quórum mínimo de vinte membros. Se nenhum dos candidatos obtiver a maioria absoluta, outra eleição deverá ser marcada para uma data posterior. A votação, entretanto, somente será validada se o protetor (o presidente do país) der sua aprovação - que é, entretanto, uma mera formalidade. Então, finalmente, o novo imortal está apto a ocupar uma das cadeiras da Academia. Terá de entregar seu discurso, no qual consuetudinariamente tece elogios ao seu predecessor. Oito dias após o novo membro é empossado, numa solenidade pública, onde faz seu pronunciamento agradecendo aos pares por sua eleição.<br />
			<br />
			Uma vez eleito, o membro é um acadêmico por toda a vida. Mas o sodalício pode expulsar um membro por séria impropriedade de conduta. A primeira expulsão deu-se em 1638, quando Auger de Moléon de Granier foi afastado por roubo. As expulsões mais recentes ocorreram ao fim da II Guerra Mundial: Abel Bonnard, Abel Hermant, Philippe Pétain, e Charles Maurras foram todos excluídos por haverem se associado ao regime de Vichy. Ao todo, foram vinte expulsões da Academia.";
			}

			if ($_COOKIE['lang'] == 'en') {
			echo "The Académie française was founded by Richelieu in 1635, under Louis XIII of France. It is one of the oldest French institutions. It is composed of forty members, the «Forty», the «Immortals». The Brazilian Academy of Letters was based on it. <br />
			In the French educational system, the Academy is an administrative unit.<br />
			The French Academy (Académie française) is an association made up of the most prominent people educated in matters relating to the French language. It was created in 1635 by Richelieu, the prime minister and strongman of Louis XIII's reign. Closed in 1793, during the French Revolution, it was again instituted by Napoleon Bonaparte, in 1803. It is the oldest of the 5 academies that make up the Institute of France.<br />
			<br />
			It was established by invoking the \"site of Akademus\" - site of Ancient Greece where the gardens of the hero Akademus would have been and chosen by Plato to give his lectures to the disciples - receiving that place the name of \"Akademia \".<br />
			<br />
			The Académie is made up of forty members known as Immortels (\"Immortals\"), with new members being elected by the oldest. Once he joins his staff, he remains there for a lifetime, but can, however, be removed for inappropriate conduct.<br />
			In its origins, the Académie was composed of an informal group that met for literary debates between the decades of 1620 and 1630 in Paris (one, among many of the groups that then formed). Cardinal Richelieu, in practice the ruler of France at the time, adopted this group as his protégé. In preparation for its official constitution, several associates were invited in the year 1634. On February 22 of the following year, with Richelieu's intercession and haste, the Royal Charter was granted by Louis XIII of France and the organization became formally legitimate. The Charter, however, was only registered with the Paris parliament on 10 July 1637. The Académie Française formally became responsible for the regulation of French grammar, spelling and literature.<br />
			<br />
			During the French Revolution, the National Convention suppressed all royal academies, including the \"Académie Française\". In 1792, the election of new members to replace those who died was prohibited, and the following year they were completely abolished. The academies were brought together into a single entity, in 1795, called the \"Institut de France\". Napoleon Bonaparte, when First Consul, decided to reestablish the old academies, but as \"classes\" or divisions of the Institute. The Institute's second class was equivalent to the old \"Académie\". When Louis XVIII of France took the throne in 1816, each class regained the title of \"Académie\" - and that second class appropriately called itself \"Academy\". Since this year, therefore, the \"Académie Française\" has been running around the clock.<br />
			<br />
			The French president is the protector or patron of the Académie - a role that Richelieu had in the first place. With his death in 1642, Pierre Séguier, Chancellor of France, succeeded him. When he, in turn, died in 1672, Louis XIV of France assumed this function. Since then, the head of state has always been the patron of the Académie. From 1672 to 1805, official meetings of the syllogus took place at the Louvre and, from that year, they take place at the Collège des Quatre Nations (today known as Palais de l'Institut). The other academies of the Institute also have their headquarters there.<br />
			<br />
			On November 14, 2019, she was awarded the degree of Honorary Member of the Military Order of Sant'Iago da Espada, from Portugal.<br />
			<br />
			There are forty \"chairs \", numbered from one to forty, in sequence and without differentiating degree between them. They were called \"immortals\" due to the inscription \"À l'immortalité \" (\"for immortality\"), which is on the official seal of the corporation and which was offered by Richelieu. Each immortal is chosen by his peers to be the \"permanent secretary\" of the Académie - a position he holds for his entire life, or until there is resignation. In addition, the Académie may appoint an \"honorary permanent secretary\". The oldest member, by admission date, is the \"dean of the academy\".<br />
			<br />
			New members are elected by the academics themselves (the original members have been appointed). When a seat becomes vacant, the candidate informs the secretary that he wishes to become a candidate. Academics can also nominate candidates - and they will only be considered elected if they obtain a majority of the votes, within a minimum quorum of twenty members. If none of the candidates obtains an absolute majority, another election must be scheduled for a later date. The vote, however, will only be validated if the protector (the president of the country) gives his approval - which is, however, a mere formality. Then, finally, the new immortal is able to occupy one of the Academy's chairs. He will have to deliver his speech, in which he customarily praises his predecessor. Eight days after the new member is installed, in a public ceremony, where he makes his speech thanking the peers for his election.<br />
			<br />
			Once elected, the member is a lifelong academic. But sodalice can expel a member for serious impropriety of conduct. The first expulsion took place in 1638, when Auger de Moléon de Granier was removed for theft. The most recent expulsions took place at the end of World War II: Abel Bonnard, Abel Hermant, Philippe Pétain, and Charles Maurras were all excluded for having joined the Vichy regime. In all, there were twenty expulsions from the Academy.";
			}

			if ($_COOKIE['lang'] == 'es') {
			echo "La Academia Francesa fue fundada por Richelieu en 1635, bajo Luis XIII de Francia. Es una de las instituciones francesas más antiguas. Se compone de cuarenta miembros, los «cuarenta», los «inmortales». La Academia Brasileña de Letras se basó en ella. <br />
			En el sistema educativo francés, la Academia es una unidad administrativa.<br />
			La Academia Francesa (Académie française) es una asociación compuesta por las personas más prominentes educadas en asuntos relacionados con el idioma francés. Fue creado en 1635 por Richelieu, el primer ministro y hombre fuerte del reinado de Luis XIII. Cerrado en 1793, durante la Revolución Francesa, fue instituido nuevamente por Napoleón Bonaparte, en 1803. Es la más antigua de las 5 academias que componen el Instituto de Francia.<br />
			<br />
			Se estableció invocando el \"sitio de Akademus\" - un lugar en la antigua Grecia donde los jardines del héroe Akademus habrían sido elegidos por Platón para dar sus conferencias a los discípulos - recibiendo ese lugar el nombre \"Akademia\".<br />
			<br />
			La Academia está compuesta por cuarenta miembros conocidos como Inmortales (\"Inmortales\"), con nuevos miembros elegidos por los más antiguos. Una vez que se une a su personal, permanece allí durante toda la vida, pero puede, sin embargo, ser removido por conducta inapropiada.<br />
			En sus orígenes, la Academia estaba compuesta por un grupo informal que se reunió para debates literarios entre las décadas de 1620 y 1630 en París (uno, entre muchos de los grupos que luego se formaron). El cardenal Richelieu, en la práctica el gobernante de Francia en ese momento, adoptó a este grupo como su protegido. En preparación para su constitución oficial, varios asociados fueron invitados en el año 1634. El 22 de febrero del año siguiente, con la intercesión y la prisa de Richelieu, la Carta Real fue otorgada por Luis XIII de Francia y la organización se convirtió formalmente legítimo. La Carta, sin embargo, no se registró en el Parlamento de París hasta el 10 de julio de 1637. La Academia Francesa se convirtió formalmente en responsable de la regulación de la gramática, la ortografía y la literatura francesa.<br />
			<br />
			Durante la Revolución Francesa, la Convención Nacional suprimió todas las academias reales, incluida la \"Académie Française\". En 1792, se prohibió la elección de nuevos miembros para reemplazar a los que murieron, y al año siguiente se abolieron por completo. Las academias se unieron en una sola entidad, en 1795, llamada el \"Institut de France\". Napoleón Bonaparte, cuando primer cónsul, decidió restablecer las antiguas academias, pero como \"clases\" o divisiones del Instituto. La segunda clase del Instituto era equivalente a la antigua \"Academia\". Cuando Luis XVIII tomó el trono de Francia en 1816, cada clase recuperó el título de \"Academia\", y esa segunda clase se llamó apropiadamente \"Academia\" nuevamente. Desde este año, por lo tanto, la \"Academia Francesa\" ha estado funcionando todo el día.<br />
			<br />
			El presidente francés es el protector o mecenas de la Academia, un papel que Richelieu tuvo en primer lugar. Con su muerte en 1642, Pierre Séguier, canciller de Francia, lo sucedió. Cuando él, a su vez, murió en 1672, Luis XIV de Francia asumió esta función. Desde entonces, el jefe de estado siempre ha sido el patrón de la Academia. De 1672 a 1805, las reuniones oficiales del silogus tuvieron lugar en el Louvre y, a partir de ese año, tuvieron lugar en el Collège des Quatre Nations (hoy conocido como Palais de l'Institut). Las otras academias del Instituto también tienen su sede allí.<br />
			<br />
			El 14 de noviembre de 2019, recibió el título de Miembro Honorario de la Orden Militar de Sant'Iago da Espada, de Portugal.<br />
			<br />
			Hay cuarenta \"sillas \", numeradas del uno al cuarenta, en secuencia y sin grado de diferenciación entre ellas. Fueron llamados \"inmortales\" debido a la inscripción \"À l'immortalité\" (\"for inmortality\"), que está en el sello oficial de la corporación y fue ofrecida por Richelieu. Cada inmortal es elegido por sus compañeros para ser el \"secretario permanente\" de la Academia, un puesto que ocupa de por vida, o hasta que haya renuncia. Además, la Academia puede nombrar un \"secretario permanente honorario\". El miembro más viejo, por fecha de admisión, es el \"decano de la academia\".<br />
			Los nuevos miembros son elegidos por los propios académicos (los miembros originales han sido nombrados). Cuando un puesto queda vacante, el candidato informa a la secretaria que desea convertirse en candidato. Los académicos también pueden nominar candidatos, y solo se los considerará elegidos si obtienen la mayoría de los votos, dentro de un quórum mínimo de veinte miembros. Si ninguno de los candidatos obtiene una mayoría absoluta, se debe programar otra elección para una fecha posterior. Sin embargo, la votación solo se validará si el protector (el presidente del país) da su aprobación, lo cual es, sin embargo, una mera formalidad. Entonces, finalmente, el nuevo inmortal puede ocupar una de las sillas de la Academia. Tendrá que pronunciar su discurso, en el que habitualmente alaba a su predecesor. Ocho días después de la instalación del nuevo miembro, en una ceremonia pública, donde hace su discurso agradeciendo a los compañeros por su elección.<br />
			<br />
			Una vez elegido, el miembro es un académico de por vida. Pero la sodalice puede expulsar a un miembro por conducta inapropiada grave. La primera expulsión tuvo lugar en 1638, cuando Auger de Moléon de Granier fue retirado por robo. Las expulsiones más recientes tuvieron lugar al final de la Segunda Guerra Mundial: Abel Bonnard, Abel Hermant, Philippe Pétain y Charles Maurras fueron excluidos por haberse unido al régimen de Vichy. En total, hubo veinte expulsiones de la Academia.";
			}
		?>
		</div>
		<div class='content'>
			<?php
				require '../account/mysql_connect.php';
				if ($notcon == null) {
					$find = $conn->query("SELECT nick,academy FROM users WHERE academy REGEXP '^".$aca."' ORDER BY academy");
					if ($find->num_rows > 0) {
						$ac = array();
						while ($i = $find->fetch_assoc()) {
							if (!array_key_exists(substr($i['academy'], 4,2), $ac)) {
								$ac[substr($i['academy'], 4,2)] = array();
							}
							$ac[substr($i['academy'], 4,2)][substr($i['academy'], 7,2)] = $i['nick'];
						}
						foreach ($ac as $chr => $ind) {
							echo "<div class='brow'><div class='blabel'><h1>";
							if ($_COOKIE['lang'] == 'pt') {echo "Posição ".$chr;}
							if ($_COOKIE['lang'] == 'en') {echo "Position ".$chr;}
							if ($_COOKIE['lang'] == 'es') {echo "Posición ".$chr;}
							echo "</h1></div><div class='displaybooks'>";
							foreach ($ind as $pos => $val) {
								$name = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$val."'");
								$n = $name->fetch_assoc();
								if ($n[$_COOKIE['lang']] == null) {$nm = $n['pt'];}
								else {$nm = $n[$_COOKIE['lang']];}
								if (array_key_exists($chr, $acalst)) {$acachr = $acalst[$chr];}
								else {$acachr = $chr;}
								if (array_key_exists($pos, $acalst)) {$acapos = $acalst[$pos];}
								else {$acapos = "Posição ".$pos;}
								echo "<a href='users/".$val.".php'>
										<button class='portraits'>
											<img class='profilepic' src='media/images/profilepics/".$val.".jpg' />
											<h2> ".$nm." </h2>
											<span class='acainfo'>Cadeira ".$acachr." | ".$acapos."</span>
										</button>
									</a>";
							}
							echo "</div></div>";
						}
					}
				$conn->close();
				}
			?>
		</div>
		<script type='text/javascript'>
			if ($(window).width() < 720) {
				if ($('#litername').height() >= '120') {document.getElementById('litername').style.top = '80px';}
				else if ($('#litername').height() >= '80') {document.getElementById('litername').style.top = '120px';}
			}
			else if ($(window).width() < 2500) {
				if ($('#litername').height() >= '345') {document.getElementById('litername').style.top = '120px';}
				else if ($('#litername').height() >= '230') {document.getElementById('litername').style.top = '220px';}
			}
		</script>
		<?php include '../design/footer.php' ?>
	</body>
</html>