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
				echo "<input class='searchtext' type='text' name='search' onchange='search_suggest(this.value)' placeholder='".$vl."...' />
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
				$find = $conn->query("SELECT name FROM users WHERE nick='" .$_SESSION['user']. "';");
				if ($find->num_rows > 0) {
					$i = $find->fetch_assoc();
					echo "<a id='btup' href='upload.php'> <img src='media/images/icons/upload.png' /> </a>
						<img id='openpro' class='profilepic' src='media/images/profilepics/" .$_SESSION["user"]. ".jpg' />
						<div id='profilemenu' style='visibility: hidden;'>
								<h1> " .$i['name']. " </h1>
								<h2> " .$_SESSION['user']. " </h2>
								<ul>
									<li> <a href='users/" .$_SESSION['user']. ".php'>
										<div class='manlan' lang='pt'> Perfil </div>
										<div class='manlan' lang='en'> Profile </div>
										<div class='manlan' lang='es'> Perfil </div>
									</a></li>
									<li> <a href='usersettings.php'>
										<div class='manlan' lang='pt'> Ajustes </div>
										<div class='manlan' lang='en'> Settings </div>
										<div class='manlan' lang='es'> Definiciones </div>
									</a> </li>
									<li> <a href='account/logout.php'>
										<div class='manlan' lang='pt'> Sair </div>
										<div class='manlan' lang='en'> Log out </div>
										<div class='manlan' lang='es'> Salir </div>
									</a> </li>
								</ul>
							</div>";
					}
				}
			else {
				echo "<a href='signin.php'> <button class='btpress'>
						<div class='manlan' lang='pt'> Cadastrar </div>
						<div class='manlan' lang='en'> Sign in </div>
						<div class='manlan' lang='es'> Registrarse </div>
					</button> </a>
					<a href='login.php'> <button class='btpress'>
						<div class='manlan' lang='pt'> Entrar </div>
						<div class='manlan' lang='en'> Log in </div>
						<div class='manlan' lang='es'> Iniciar Sesión </div>
					</button> </a>";
				}
		?>
	</div>
</header>

<?php
	if (!isset($_COOKIE['cookieagree'])) {
		echo "<div id='cookies' style='visibility: hidden;'>
				Este site utiliza cookies para proporcionar uma melhor experiência dentro do site. <br />
				<button class='btpress' onclick='window.location.href=".'"design/cookieagree.php"'.";'> Entendi </button>
			</div>";
	}
?>

<div id='fadescreen'>
</div>