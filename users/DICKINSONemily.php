<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='DICKINSONemily'");
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

		<?php $user = 'DICKINSONemily'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Emily Elizabeth Dickinson (December 10, 1830 – May 15, 1886) was an American poet.

			Dickinson was born in Amherst, Massachusetts, into a prominent family with strong ties to its community. After studying at the Amherst Academy for seven years in her youth, she briefly attended the Mount Holyoke Female Seminary before returning to her family's house in Amherst.

			Evidence suggests that Dickinson lived much of her life in isolation. Considered an eccentric by locals, she developed a penchant for white clothing and was known for her reluctance to greet guests or, later in life, to even leave her bedroom. Dickinson never married, and most friendships between her and others depended entirely upon correspondence.

			While Dickinson was a prolific poet, only 10 of her nearly 1,800 poems were published during her lifetime. The poems published then were usually edited significantly to fit conventional poetic rules. Her poems were unique to her era. They contain short lines, typically lack titles, and often use slant rhyme as well as unconventional capitalization and punctuation. Many of her poems deal with themes of death and immortality, two recurring topics in letters to her friends.

			Although Dickinson's acquaintances were likely aware of her writing, it was not until after her death in 1886—when Lavinia, Dickinson's younger sister, discovered her cache of poems—that the breadth of her work became public. Her first collection of poetry was published in 1890 by personal acquaintances Thomas Wentworth Higginson and Mabel Loomis Todd, though both heavily edited the content. A 1998 New York Times article revealed that of the many edits made to Dickinson's work, the name \"Susan\" was often deliberately removed. At least eleven of Dickinson's poems were dedicated to sister-in-law Susan Huntington Gilbert Dickinson, though all the dedications were obliterated, presumably by Todd. A complete, and mostly unaltered, collection of her poetry became available for the first time when scholar Thomas H. Johnson published The Poems of Emily Dickinson in 1955.
			<br />
			Fonte: <a href='https://en.wikipedia.org/wiki/Emily_Dickinson' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Emily Elizabeth Dickinson (December 10, 1830 – May 15, 1886) was an American poet.

			Dickinson was born in Amherst, Massachusetts, into a prominent family with strong ties to its community. After studying at the Amherst Academy for seven years in her youth, she briefly attended the Mount Holyoke Female Seminary before returning to her family's house in Amherst.

			Evidence suggests that Dickinson lived much of her life in isolation. Considered an eccentric by locals, she developed a penchant for white clothing and was known for her reluctance to greet guests or, later in life, to even leave her bedroom. Dickinson never married, and most friendships between her and others depended entirely upon correspondence.

			While Dickinson was a prolific poet, only 10 of her nearly 1,800 poems were published during her lifetime. The poems published then were usually edited significantly to fit conventional poetic rules. Her poems were unique to her era. They contain short lines, typically lack titles, and often use slant rhyme as well as unconventional capitalization and punctuation. Many of her poems deal with themes of death and immortality, two recurring topics in letters to her friends.

			Although Dickinson's acquaintances were likely aware of her writing, it was not until after her death in 1886—when Lavinia, Dickinson's younger sister, discovered her cache of poems—that the breadth of her work became public. Her first collection of poetry was published in 1890 by personal acquaintances Thomas Wentworth Higginson and Mabel Loomis Todd, though both heavily edited the content. A 1998 New York Times article revealed that of the many edits made to Dickinson's work, the name \"Susan\" was often deliberately removed. At least eleven of Dickinson's poems were dedicated to sister-in-law Susan Huntington Gilbert Dickinson, though all the dedications were obliterated, presumably by Todd. A complete, and mostly unaltered, collection of her poetry became available for the first time when scholar Thomas H. Johnson published The Poems of Emily Dickinson in 1955.
			<br />
			Fonte: <a href='https://en.wikipedia.org/wiki/Emily_Dickinson' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Emily Elizabeth Dickinson (December 10, 1830 – May 15, 1886) was an American poet.

			Dickinson was born in Amherst, Massachusetts, into a prominent family with strong ties to its community. After studying at the Amherst Academy for seven years in her youth, she briefly attended the Mount Holyoke Female Seminary before returning to her family's house in Amherst.

			Evidence suggests that Dickinson lived much of her life in isolation. Considered an eccentric by locals, she developed a penchant for white clothing and was known for her reluctance to greet guests or, later in life, to even leave her bedroom. Dickinson never married, and most friendships between her and others depended entirely upon correspondence.

			While Dickinson was a prolific poet, only 10 of her nearly 1,800 poems were published during her lifetime. The poems published then were usually edited significantly to fit conventional poetic rules. Her poems were unique to her era. They contain short lines, typically lack titles, and often use slant rhyme as well as unconventional capitalization and punctuation. Many of her poems deal with themes of death and immortality, two recurring topics in letters to her friends.

			Although Dickinson's acquaintances were likely aware of her writing, it was not until after her death in 1886—when Lavinia, Dickinson's younger sister, discovered her cache of poems—that the breadth of her work became public. Her first collection of poetry was published in 1890 by personal acquaintances Thomas Wentworth Higginson and Mabel Loomis Todd, though both heavily edited the content. A 1998 New York Times article revealed that of the many edits made to Dickinson's work, the name \"Susan\" was often deliberately removed. At least eleven of Dickinson's poems were dedicated to sister-in-law Susan Huntington Gilbert Dickinson, though all the dedications were obliterated, presumably by Todd. A complete, and mostly unaltered, collection of her poetry became available for the first time when scholar Thomas H. Johnson published The Poems of Emily Dickinson in 1955.
			<br />
			Fonte: <a href='https://en.wikipedia.org/wiki/Emily_Dickinson' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='DICKINSONemily'; include '../design/poemfind.php'; ?>
		<?php $user = 'DICKINSONemily'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>