<header class='upperbar'>
	<div class='upperbarcontent'>
		<button id='burgerbut'> ☰ </button>
		<a href='index.php'> <img id='logo' src='media/images/icons/logo.png' /> </a>
		<a id='title' href='index.php'> Literledge </a>
		<?php
			if ($_COOKIE['lang'] == 'pt') {$vl = 'Buscar';}
			if ($_COOKIE['lang'] == 'en') {$vl = 'Search';}
			if ($_COOKIE['lang'] == 'es') {$vl = 'Buscar';}
		?>
		<form class='searchbar' action='search.php' method='post'>
			<?php
				if (isset($_GET['q'])) {$sch = "value='".$_GET['q']."'";} else {$sch = '';}
				echo "<input class='searchtext' type='text' name='search' ".$sch."onchange='search_suggest(this.value)' placeholder='".$vl."...' />
				<input class='submit' type='image' src='media/images/icons/search.png' alt='".strtolower($vl)."' />";
				if (isset($_GET['seasugg'])) {
					mainInfo($_GET['seasugg']);
				}
			?>
		</form>
		<?php
			if (session_status() == PHP_SESSION_NONE) {session_start();}
			if (isset($_SESSION['user'])) {
				$conn = new mysqli('localhost', 'root', 'Gu@n@b@r@', 'literledge');
				$find = $conn->query("SELECT pt FROM users WHERE nick='" .$_SESSION['user']. "';");
				if ($find->num_rows > 0) {
					$i = $find->fetch_assoc();
					echo "<a id='btup' href='upload.php'> <img src='media/images/icons/upload.png' /> </a>
						<img id='openpro' class='profilepic' src='media/images/profilepics/" .$_SESSION["user"]. ".jpg' />
						<div id='profilemenu' style='visibility: hidden;'>
								<h1> " .$i['pt']. " </h1>
								<h2> " .$_SESSION['user']. " </h2>
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
			echo "Este site utiliza cookies para proporcionar uma melhor experiência dentro do site. <br />
				<button class='btpress' onclick='window.location.href=".'"design/cookieset.php?c=true"'.";'> I got it </button>";
			}
		if ($_COOKIE['lang'] == 'es') {
			echo "Este site utiliza cookies para proporcionar uma melhor experiência dentro do site. <br />
				<button class='btpress' onclick='window.location.href=".'"design/cookieset.php?c=true"'.";'> Entendido </button>";
			}
		echo "</div>";
	}
?>

<div id='fadescreen'>
</div>