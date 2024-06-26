<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='BYSSHEshelley'");
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

		<?php $user = 'BYSSHEshelley'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Percy Bysshe Shelley (Field Place, Horsham, 4 de agosto de 1792 — Mar Lígure, Golfo de Spezia, 8 de julho de 1822) foi um dos mais importantes poetas românticos ingleses.

			Shelley é famoso por obras tais como Ozymandias, Ode to the West Wind, To a Skylark, e The Masque of Anarchy, que estão entre os poemas ingleses mais populares e aclamados pela crítica. Seu maior trabalho, no entanto, foram os longos poemas, entre eles Prometheus Unbound, Alastor, or The Spirit of Solitude, Adonaïs, The Revolt of Islam, e o inacabado The Triumph of Life. The Cenci (1819) e Prometheus Unbound (1820) são peças dramáticas em 5 e 4 atos respectivamente. Ele também escreveu os romances góticos Zastrozzi (1810) e St. Irvyne (1811) e os contos The Assassins (1814) e The Coliseum (1817).

			Shelley foi famoso por sua associação com John Keats e Lord Byron. A romancista Mary Shelley foi sua segunda esposa. Um dos mais significativos poetas românticos da Inglaterra.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Percy_Bysshe_Shelley' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Percy Bysshe Shelley (Field Place, Horsham, 4 de agosto de 1792 — Mar Lígure, Golfo de Spezia, 8 de julho de 1822) foi um dos mais importantes poetas românticos ingleses.

			Shelley é famoso por obras tais como Ozymandias, Ode to the West Wind, To a Skylark, e The Masque of Anarchy, que estão entre os poemas ingleses mais populares e aclamados pela crítica. Seu maior trabalho, no entanto, foram os longos poemas, entre eles Prometheus Unbound, Alastor, or The Spirit of Solitude, Adonaïs, The Revolt of Islam, e o inacabado The Triumph of Life. The Cenci (1819) e Prometheus Unbound (1820) são peças dramáticas em 5 e 4 atos respectivamente. Ele também escreveu os romances góticos Zastrozzi (1810) e St. Irvyne (1811) e os contos The Assassins (1814) e The Coliseum (1817).

			Shelley foi famoso por sua associação com John Keats e Lord Byron. A romancista Mary Shelley foi sua segunda esposa. Um dos mais significativos poetas românticos da Inglaterra.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Percy_Bysshe_Shelley' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Percy Bysshe Shelley (Field Place, Horsham, 4 de agosto de 1792 — Mar Lígure, Golfo de Spezia, 8 de julho de 1822) foi um dos mais importantes poetas românticos ingleses.

			Shelley é famoso por obras tais como Ozymandias, Ode to the West Wind, To a Skylark, e The Masque of Anarchy, que estão entre os poemas ingleses mais populares e aclamados pela crítica. Seu maior trabalho, no entanto, foram os longos poemas, entre eles Prometheus Unbound, Alastor, or The Spirit of Solitude, Adonaïs, The Revolt of Islam, e o inacabado The Triumph of Life. The Cenci (1819) e Prometheus Unbound (1820) são peças dramáticas em 5 e 4 atos respectivamente. Ele também escreveu os romances góticos Zastrozzi (1810) e St. Irvyne (1811) e os contos The Assassins (1814) e The Coliseum (1817).

			Shelley foi famoso por sua associação com John Keats e Lord Byron. A romancista Mary Shelley foi sua segunda esposa. Um dos mais significativos poetas românticos da Inglaterra.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Percy_Bysshe_Shelley' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='BYSSHEshelley'; include '../design/poemfind.php'; ?>
		<?php $user = 'BYSSHEshelley'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>