<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='DIDEROTdenis'");
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
		<?php $user = 'DIDEROTdenis'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Denis Diderot (francês: [dəni didʁo]) (Langres, 5 de outubro[1] de 1713 — Paris, 31 de julho de 1784) foi um filósofo e escritor francês. Notável durante o iluminismo, é conhecido por ter sido o cofundador, editor chefe e contribuidor da Encyclopédie, junto com Jean le Rond d'Alembert.";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Denis Diderot (French: [dəni did(ə)ʁo]; 5 October 1713 – 31 July 1784) was a French philosopher, art critic, and writer, best known for serving as co-founder, chief editor, and contributor to the Encyclopédie along with Jean le Rond d'Alembert. He was a prominent figure during the Age of Enlightenment.

Diderot initially studied philosophy at a Jesuit college, then considered working in the church clergy before briefly studying law. When he decided to become a writer in 1734, his father disowned him. He lived a bohemian existence for the next decade. In the 1740s he wrote many of his best-known works in both fiction and non-fiction, including the 1748 novel The Indiscreet Jewels.

In 1751, Diderot co-created the Encyclopédie with Jean le Rond d'Alembert. It was the first encyclopedia to include contributions from many named contributors and the first to describe the mechanical arts. Its secular tone, which included articles skeptical about Biblical miracles, angered both religious and government authorities; in 1758 it was banned by the Catholic Church and in 1759 the French government banned it as well, although this ban was not strictly enforced. Many of the initial contributors to the Encyclopédie left the project as a result of its controversies and some were even jailed. d'Alembert left in 1759, making Diderot the sole editor. Diderot also became the main contributor, writing around 7,000 articles. He continued working on the project until 1765. He was increasingly despondent about the Encyclopédie by the end of his involvement in it and felt that the entire project may have been a waste. Nevertheless, the Encyclopédie is considered one of the forerunners of the French Revolution.

Diderot struggled financially throughout most of his career and received very little official recognition of his merit, including being passed over for membership in the Académie française. His fortunes improved significantly in 1766, when Empress Catherine the Great, who heard of his financial troubles, paid him 50,000 francs to serve as her librarian.[3] He remained in this position for the rest of his life, and stayed a few months at her court in Saint Petersburg in 1773 and 1774.[4][5]

Diderot's literary reputation during his life rested primarily on his plays and his contributions to the Encyclopédie; many of his most important works, including Jacques the Fatalist, Rameau's Nephew, Paradox of the Actor, and D'Alembert's Dream, were published only after his death.[6][7][8]";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Denis Diderot /dəni didʁo/ (Langres, 5 de octubre de 1713-París, 31 de julio de 1784) fue una figura decisiva de la Ilustración como escritor, filósofo y enciclopedista francés.

Reconocido por su empuje intelectual y su erudición, por su espíritu crítico así como su excepcional genio, marcó hitos en la historia de cada uno de los campos en los que participó: sentó las bases del drama burgués en teatro, revolucionó la novela con Jacques le fataliste o La religiosa y el diálogo con La paradoja del comediante, y, por otra parte, creó la crítica a través de sus salones. En conjunto con Jean-Baptiste le Rond d’Alembert alentó, supervisó la redacción, editó y compiló una de las obras culturales más importantes de la centuria: la Encyclopédie ou Dictionnaire raisonné des sciences, des arts et des métiers, obra magna compuesta por 72 000 artículos, de los cuales unos 6000 fueron aportados por el propio Diderot.

En filosofía, su obra solo en apariencia sería lateral, pues fue citado muy a menudo por Ernst Cassirer en un texto clave, La filosofía de la Ilustración, por su innovación en muchos campos; así sucede en la nueva ciencia de la vida que él presagia desde la mitad de su existencia. De hecho anuncia en su Pensées sur l'interprétation de la nature (1753), libro que se abre con esta ironía:

Joven toma y lee. Si puedes llegar hasta el final de esta obra, no te costará comprender otra mejor. Como me he propuesto no tanto instruirte como ejercitarte, poco me importa que admitas mis ideas o que las rechaces, con tal de que ocupen toda tu atención. Alguien más capacitado te enseñará a conocer las fuerzas de la naturaleza; me bastará con haber puesto las tuyas a prueba. Adiós.
En el centro del pensamiento de Diderot estaba el conflicto —y esto puede ser válido también para otros pensadores del siglo XVIII— entre la razón y la sensibilidad: sens et sensibilité. Para Diderot, la razón se caracterizaba por la búsqueda de conocimientos con fundamento científico y por la verificabilidad de los hechos observados empíricamente, pero sin quedarse estancados en la evaluación meramente cuantitativa de la realidad a través de enunciados matemáticos. Entre los años 1754 y 1765 desarrolló su «teoría de la sensibilidad universal» (sensibilité universelle).

Para Denis Diderot, las ciencias naturales no se distinguirían por buscar un porqué, sino por encontrar soluciones a través de responder al cómo.

En el transcurso de su vida como intelectual, Diderot se dedicó a los más distintos ámbitos de la ciencia; sus intereses abarcaron áreas de la química, de la física, de las matemáticas, así como también, y sobre todo, de la historia natural, la anatomía y la medicina. Por todo ello, Diderot formó parte del espíritu intelectual del siglo XVIII, manteniéndose al tanto y participando activamente de las principales discusiones y formación de teorías en su época.

En cuanto a su posición filosófica, mantuvo una postura materialista no dogmática, actitud especialmente evidente en sus obras posteriores. Aunque Denis Diderot no era un filósofo dedicado a los problemas teóricos fundamentales1​ ni a las reflexiones analíticas sistematizadoras, se le cuenta, sin embargo, entre los autores filosóficos más polifacéticos e innovadores del siglo XVIII.

Debido a sus ideas y publicaciones ilustradas frente al ideario colectivo del Antiguo Régimen, Denis Diderot y sus compañeros de ruta se vieron con frecuencia expuestos a una actitud represiva de parte del poder público. Su experiencia a raíz de su detención en 1749 le llevó a estar vigilante frente a nuevas represiones por parte de las diversas agencias de la censura, aunque algunas personas pertenecientes a los círculos influyentes y dominantes, como p. ej. Mme de Pompadour, la querida de Luis XV, así como también algunos ministros, pero ante todo el jefe de la censura, Censure royale Guillaume-Chrétien de Lamoignon de Malesherbes, clandestinamente le apoyaban a él y a los enciclopedistas.

Por lo anterior, los círculos interesados de su época, que le conocieron exclusivamente por sus publicaciones, solo tuvieron acceso a una reducida selección de sus ensayos, novelas, obras de teatro y principalmente artículos escritos para la Encyclopédie.";
				}
			?>
		</div>
		<?php $auctor='DIDEROTdenis'; include '../design/poemfind.php'; ?>
		<?php $user = 'DIDEROTdenis'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>