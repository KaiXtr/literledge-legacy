<header class='upperbar'>
	<div class='upperbarcontent'>
		<button id='burgerbut'><img src='media/images/icons/burger-<?php echo $_COOKIE['theme']; ?>.png' /></button>
		<a href='index.php'> <img id='logo' src='media/images/icons/logo-<?php echo $_COOKIE['theme']; ?>.png' /> </a>
		<a id='title' href='index.php'> Literledge </a>
		<?php
			if ($_COOKIE['lang'] == 'pt') {$vl = 'Buscar';}
			if ($_COOKIE['lang'] == 'en') {$vl = 'Search';}
			if ($_COOKIE['lang'] == 'es') {$vl = 'Buscar';}
		?>
		<form class='searchbar' action='search.php' method='post'>
			<?php
				if ((isset($_GET['q']))&&($_GET['q'][0] != '$')) {$sch = "value='".$_GET['q']."'";} else {$sch = '';}
				echo "<input class='searchtext' type='text' name='search' ".$sch."onchange='search_suggest(this.value)' placeholder='".$vl."...' />
				<input class='submit' type='image' src='media/images/icons/search-".$_COOKIE['theme'].".png' alt='".strtolower($vl)."' />";
				if (isset($_GET['seasugg'])) {
					mainInfo($_GET['seasugg']);
				}
			?>
		</form>
		<?php
			require 'mysql_connect.php';
			if (isset($_SESSION['user'])) {
				$find = $conn->query("SELECT pt,auctor FROM users WHERE nick='".$_SESSION['user']."'");
				if ($find->num_rows > 0) {
					$i = $find->fetch_assoc();
					if ($i['auctor'] == '2') {echo "<a id='btreq' href='requests.php'> <img src='media/images/icons/requests-".$_COOKIE['theme'].".png' /> </a>";}
					if ($i['auctor'] != '-1') {echo "<a id='btup' href='upload.php'> <img src='media/images/icons/upload-".$_COOKIE['theme'].".png' /> </a>";}
					echo "<img id='openpro' class='profilepic' src='media/images/profilepics/" .$_SESSION["user"]. ".jpg' />
						<div id='profilemenu' style='visibility: hidden;'>
							<h1> " .$i['pt']. " </h1>
							<h2> @" .$_SESSION['user']. " </h2>
							<ul>
								<li> <a href='users/" .$_SESSION['user']. ".php'>";
										if ($_COOKIE['lang'] == 'pt') {echo "Perfil";}
										if ($_COOKIE['lang'] == 'en') {echo "Profile";}
										if ($_COOKIE['lang'] == 'es') {echo "Perfil";}
								echo "</a></li>
								<li> <a href='usersettings.php'>";
										if ($_COOKIE['lang'] == 'pt') {echo "Ajustes";}
										if ($_COOKIE['lang'] == 'en') {echo "Settings";}
										if ($_COOKIE['lang'] == 'es') {echo "Definiciones";}
								echo "</a> </li>
								<li> <a href='account/logout.php'>";
										if ($_COOKIE['lang'] == 'pt') {echo "Sair";}
										if ($_COOKIE['lang'] == 'en') {echo "Log out";}
										if ($_COOKIE['lang'] == 'es') {echo "Salir";}
								echo "</a> </li>
							</ul>
						</div>";
					}
				}
			else {
				echo "<a href='signin.php'> <button class='btpress'>";
							if ($_COOKIE['lang'] == 'pt') {echo "Cadastrar";}
							if ($_COOKIE['lang'] == 'en') {echo "Sign in";}
							if ($_COOKIE['lang'] == 'es') {echo "Registrarse";}
					echo "</button> </a>
					<a href='login.php'> <button class='btpress'>";
							if ($_COOKIE['lang'] == 'pt') {echo "Entrar";}
							if ($_COOKIE['lang'] == 'en') {echo "Log in";}
							if ($_COOKIE['lang'] == 'es') {echo "Iniciar Sesión";}
					echo "</button> </a>";
				}
		?>
	</div>
</header>

<?php
	if (!isset($_COOKIE['cookieagree'])) {
		echo "<div id='cookies'>";
		if ($_COOKIE['lang'] == 'pt') {
			echo "Este site utiliza cookies para proporcionar uma melhor experiência dentro do site. <br />
				<button class='btpress' onclick='window.location.href=".'"design/cookieset.php?c=true"'.";'> Entendi </button>";
			}
		if ($_COOKIE['lang'] == 'en') {
			echo "This site uses cookies to provide a better experience within the site. <br />
				<button class='btpress' onclick='window.location.href=".'"design/cookieset.php?c=true"'.";'> I got it </button>";
			}
		if ($_COOKIE['lang'] == 'es') {
			echo "Este sitio utiliza cookies para proporcionar una mejor experiencia dentro del sitio. <br />
				<button class='btpress' onclick='window.location.href=".'"design/cookieset.php?c=true"'.";'> Entendido </button>";
			}
		echo "</div>";
	}
?>

<div id='fadescreen'>
</div>