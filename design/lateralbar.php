<div id='lateralbar' style='visibility: hidden;'>
	<ul>
		<li> <h1>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Categoria";}
				if ($_COOKIE['lang'] == 'en') {echo "Categories";}
				if ($_COOKIE['lang'] == 'es') {echo "Categoría";}
			?>
		</h1> </li>
		<li> <a href='search.php?q=$books'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Tudo";}
				if ($_COOKIE['lang'] == 'en') {echo "All";}
				if ($_COOKIE['lang'] == 'es') {echo "Tudo";}
			?>
		</a> </li>
		<li> <a >
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Populares";}
				if ($_COOKIE['lang'] == 'en') {echo "Popular";}
				if ($_COOKIE['lang'] == 'es') {echo "Popular";}
			?>
		</a> </li>
		<li> <a >
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Novos";}
				if ($_COOKIE['lang'] == 'en') {echo "New";}
				if ($_COOKIE['lang'] == 'es') {echo "Nuevos";}
			?>
		</a> </li>
		<li> <a >
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Favoritos";}
				if ($_COOKIE['lang'] == 'en') {echo "Favorite";}
				if ($_COOKIE['lang'] == 'es') {echo "Favoritos";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$auctors'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Autores";}
				if ($_COOKIE['lang'] == 'en') {echo "Auctors";}
				if ($_COOKIE['lang'] == 'es') {echo "Autores";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$century'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Séculos";}
				if ($_COOKIE['lang'] == 'en') {echo "Centuries";}
				if ($_COOKIE['lang'] == 'es') {echo "Siglos";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$schools'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Escolas Literárias";}
				if ($_COOKIE['lang'] == 'en') {echo "Literary Schools";}
				if ($_COOKIE['lang'] == 'es') {echo "Escuelas Literarias";}
			?>
		</a> </li>
		<li> <hr> </li>

		<li> <h1>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Escolas Literárias";}
				if ($_COOKIE['lang'] == 'en') {echo "Literary Schools";}
				if ($_COOKIE['lang'] == 'es') {echo "Escuelas Literarias";}
			?>
		</h1> </li>
		<?php
			if ($_COOKIE['lang'] == 'pt') {
				$c = array('Arcadism'=>'Arcadismo','Baroque'=>'Barroco','Futurism'=>'Futurismo','Iluminism'=>'Iluminismo','Impressionism'=>'Impressionismo','Indianism'=>'Indianismo',
				'Mannerism'=>'Maneirismo','Modernism'=>'Modernismo','Naturalism'=>'Naturalismo','Parnassianism'=>'Parnasianismo','Pre-Modernism'=>'Pré-Modernismo',
				'Romanticism'=>'Romantismo','Realism'=>'Realismo','Symbolism'=>'Simbolismo','Troubadorism'=>'Trovadorismo');
				}
			else if ($_COOKIE['lang'] == 'en') {
				$c = array('Arcadism'=>'Arcadism','Baroque'=>'Baroque','Futurism'=>'Futurism','Iluminism'=>'Enlightment','Impressionism'=>'Impressionism','Indianism'=>'Indianism',
				'Mannerism'=>'Mannerism','Modernism'=>'Modernism','Naturalism'=>'Naturalism','Parnassianism'=>'Parnassianism','Pre-Modernism'=>'Pre-Modernism','Romanticism'=>'Romanticism',
				'Realism'=>'Realism','Symbolism'=>'Symbolism','Troubadorism'=>'Troubadorism');
				}
			else if ($_COOKIE['lang'] == 'es') {
				$c = array('Arcadism'=>'Arcadismo','Baroque'=>'Barroco','Futurism'=>'Futurismo','Iluminism'=>'Iluminismo','Impressionism'=>'Impresionismo','Indianism'=>'Indianismo',
				'Mannerism'=>'Manierismo','Modernism'=>'Modernismo','Naturalism'=>'Naturalismo','Parnassianism'=>'Parnasianismo','Pre-Modernism'=>'Pré-Modernismo',
				'Romanticism'=>'Romantismo','Realism'=>'Realismo','Symbolism'=>'Simbolismo','Troubadorism'=>'Trovadorismo');
				}
			foreach ($c as $x => $v) {
				echo "<li><a href='schools/".strtolower($x).".php'> ".$v." </li></a>";
			}
		?>
		<li> <hr> </li>

		<li> <h1>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Literatura";}
				if ($_COOKIE['lang'] == 'en') {echo "Literature";}
				if ($_COOKIE['lang'] == 'es') {echo "Literatura";}
			?>
		</h1> </li>
		<li> <a href='search.php?q=$books&g=adventure'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Aventura";}
				if ($_COOKIE['lang'] == 'en') {echo "Adventure";}
				if ($_COOKIE['lang'] == 'es') {echo "Aventura";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$books&g=romance'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Romance";}
				if ($_COOKIE['lang'] == 'en') {echo "Romance";}
				if ($_COOKIE['lang'] == 'es') {echo "Romance";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$books&g=mystery'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Mistério";}
				if ($_COOKIE['lang'] == 'en') {echo "Mystery";}
				if ($_COOKIE['lang'] == 'es') {echo "Misterio";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$books&g=everyday'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Cotidiano";}
				if ($_COOKIE['lang'] == 'en') {echo "Everyday";}
				if ($_COOKIE['lang'] == 'es') {echo "Día a dia";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$books&g=drama'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Drama";}
				if ($_COOKIE['lang'] == 'en') {echo "Drama";}
				if ($_COOKIE['lang'] == 'es') {echo "Drama";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$books&g=horror'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Terror";}
				if ($_COOKIE['lang'] == 'en') {echo "Horror";}
				if ($_COOKIE['lang'] == 'es') {echo "Horror";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$books&g=poetry'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Poesia";}
				if ($_COOKIE['lang'] == 'en') {echo "Poetry";}
				if ($_COOKIE['lang'] == 'es') {echo "Poesía";}
			?>
		</a> </li>
		<li> <hr> </li>

		<li> <h1>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Acadêmico";}
				if ($_COOKIE['lang'] == 'en') {echo "Academic";}
				if ($_COOKIE['lang'] == 'es') {echo "Académico";}
			?>
		</h1> </li>
		<li> <a href='search.php?q=$books&g=mathematics'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Matemática";}
				if ($_COOKIE['lang'] == 'en') {echo "Mathematics";}
				if ($_COOKIE['lang'] == 'es') {echo "Matemáticas";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$books&g=biology'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Biologia";}
				if ($_COOKIE['lang'] == 'en') {echo "Biology";}
				if ($_COOKIE['lang'] == 'es') {echo "Biología";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$books&g=chemistry'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Química";}
				if ($_COOKIE['lang'] == 'en') {echo "Chemistry";}
				if ($_COOKIE['lang'] == 'es') {echo "Química";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$books&g=physics'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Física";}
				if ($_COOKIE['lang'] == 'en') {echo "Physics";}
				if ($_COOKIE['lang'] == 'es') {echo "Física";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$books&g=computation'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Computação";}
				if ($_COOKIE['lang'] == 'en') {echo "Computacion";}
				if ($_COOKIE['lang'] == 'es') {echo "Computación";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$books&g=history'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "História";}
				if ($_COOKIE['lang'] == 'en') {echo "History";}
				if ($_COOKIE['lang'] == 'es') {echo "Historia";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$books&g=geography'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Geografia";}
				if ($_COOKIE['lang'] == 'en') {echo "Geography";}
				if ($_COOKIE['lang'] == 'es') {echo "Geografía";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$books&g=philosophy'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Filosofia";}
				if ($_COOKIE['lang'] == 'en') {echo "Philosophy";}
				if ($_COOKIE['lang'] == 'es') {echo "Filosofía";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$books&g=sociology'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Sociologia";}
				if ($_COOKIE['lang'] == 'en') {echo "Sociology";}
				if ($_COOKIE['lang'] == 'es') {echo "Sociología";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$books&g=arts'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Artes";}
				if ($_COOKIE['lang'] == 'en') {echo "Arts";}
				if ($_COOKIE['lang'] == 'es') {echo "Letras";}
			?>
		</a> </li>
	</ul>
</div>