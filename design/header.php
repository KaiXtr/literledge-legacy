<header class='upperbar'>
	<div class='upperbarcontent'>
		<button id='burgerbut'><img src='media/images/icons/burger-<?php echo $_COOKIE['theme']; ?>.png' /></button>
		<a href='index.php'> <img id='logo' src='media/images/icons/logo-<?php echo $_COOKIE['theme']; ?>.png' /> </a>
		<a id='title' href='index.php'> Literledge </a>
		<?php
			if ($_COOKIE['lang'] == 'pt') {$vl = 'Buscar';}
			if ($_COOKIE['lang'] == 'en') {$vl = 'Search';}
			if ($_COOKIE['lang'] == 'es') {$vl = 'Buscar';}
			require 'mysql_connect.php';
		?>
		<form class='searchbar' action='search.php' method='post'>
			<?php
				$srcsgs = '';
				function stripacc($s) {
					$nw = str_replace('Á','a', $s);
					$nw = str_replace('Â','a', $nw);
					$nw = str_replace('Ã','a', $nw);
					$nw = str_replace('á','a', $nw);
					$nw = str_replace('â','a', $nw);
					$nw = str_replace('ã','a', $nw);
					$nw = str_replace('ç','c', $nw);
					$nw = str_replace('É','e', $nw);
					$nw = str_replace('Ê','e', $nw);
					$nw = str_replace('é','e', $nw);
					$nw = str_replace('ê','e', $nw);
					$nw = str_replace('ë','e', $nw);
					$nw = str_replace('Í','i', $nw);
					$nw = str_replace('Î','i', $nw);
					$nw = str_replace('í','i', $nw);
					$nw = str_replace('î','i', $nw);
					$nw = str_replace('Ó','o', $nw);
					$nw = str_replace('Ô','o', $nw);
					$nw = str_replace('Õ','o', $nw);
					$nw = str_replace('Ö','o', $nw);
					$nw = str_replace('ó','o', $nw);
					$nw = str_replace('ô','o', $nw);
					$nw = str_replace('õ','o', $nw);
					$nw = str_replace('ö','o', $nw);
					$nw = str_replace('Ú','u', $nw);
					$nw = str_replace('Û','u', $nw);
					$nw = str_replace('ú','u', $nw);
					$nw = str_replace('û','u', $nw);
					$nw = strtolower($nw);
					return $nw;
				}
				$find = $conn->query("SELECT pt FROM users");
				while ($i = $find->fetch_assoc()) {$srcsgs .= '<option data-value="'.$i['pt'].'">'.stripacc($i['pt']).'</option>';}
				$find = $conn->query("SELECT pt FROM translations");
				while ($i = $find->fetch_assoc()) {$srcsgs .= '<option data-value="'.$i['pt'].'">'.stripacc($i['pt']).'</option>';}
				if ((isset($_GET['q']))&&($_GET['q'][0] != '$')) {$sch = "value='".$_GET['q']."'";} else {$sch = '';}
				echo "<input id='srcbar' class='searchtext' type='text' list='srclst' ".$sch." placeholder='".$vl."...' autocomplete='off'
					onchange='datalist_value(null,0)' />
				<template id='sgslst'>
					".$srcsgs."
				</template>
				<datalist id='srclst'></datalist>
				<input id='srcbar-hidden' type='hidden' name='search' ".$sch." />
				<input class='submit' type='image' src='media/images/icons/search-".$_COOKIE['theme'].".png' alt='".strtolower($vl)."' />";
			?>
		</form>
		<script type='text/javascript'>
			var search = document.querySelector('#srcbar');
			var results = document.querySelector('#srclst');
			var template = document.querySelector('#sgslst').content;
			search.addEventListener('keyup', function handler(event) {
				while (results.children.length) results.removeChild(results.firstChild);
				var inputVal = new RegExp(search.value.trim(), 'i');
				var clonedOptions = template.cloneNode(true);
				var set = Array.prototype.reduce.call(clonedOptions.children, function (frag, el) {
					if (inputVal.test(el.textContent) && frag.children.length < 10) frag.appendChild(el);
					return frag;
				}, document.createDocumentFragment());
				results.appendChild(set);
			});
		</script>
		<?php
			if (isset($_SESSION['user'])) {
				$find = $conn->query("SELECT pt,auctor FROM users WHERE nick='".$_SESSION['user']."'");
				if ($find->num_rows > 0) {
					$i = $find->fetch_assoc();
					echo "<a id='linkpro' href='users/" .$_SESSION['user']. ".php'><img class='profilepic' src='media/images/profilepics/" .$_SESSION["user"]. ".jpg' /></a>
					<img id='openpro' class='profilepic' src='media/images/profilepics/" .$_SESSION["user"]. ".jpg' /><div id='accountbuts'>";
					if ($i['auctor'] == '2') {echo "<a id='btreq' href='requests.php'><img src='media/images/icons/requests-".$_COOKIE['theme'].".png' /> </a>";}
					if ($i['auctor'] != '-1') {echo "<a id='btup' href='upload.php'><img src='media/images/icons/upload-".$_COOKIE['theme'].".png' /> </a>";}
					echo "<a id='btuset' href='usersettings.php'><img src='media/images/icons/settings-".$_COOKIE['theme'].".png' /></a>
					<a id='btlogoff' href='account/logout.php'><img src='media/images/icons/logout-".$_COOKIE['theme'].".png' /></a>
					</div>
						<div id='profilemenu' style='visibility: hidden;'>
							<a href='users/" .$_SESSION['user']. ".php'><h1> " .$i['pt']. " </h1>
							<h2> @" .$_SESSION['user']. " </h2></a>
							<ul>
								<li><img src='media/images/icons/upload-".$_COOKIE['theme'].".png' /><a href='upload.php'>";
										if ($_COOKIE['lang'] == 'pt') {echo "Contribuir";}
										if ($_COOKIE['lang'] == 'en') {echo "Contribute";}
										if ($_COOKIE['lang'] == 'es') {echo "Contribuir";}
								echo "</a></li>
								<li><img src='media/images/icons/settings-".$_COOKIE['theme'].".png' /><a href='usersettings.php'>";
										if ($_COOKIE['lang'] == 'pt') {echo "Ajustes";}
										if ($_COOKIE['lang'] == 'en') {echo "Settings";}
										if ($_COOKIE['lang'] == 'es') {echo "Definiciones";}
								echo "</a></li>
								<li><img src='media/images/icons/logout-".$_COOKIE['theme'].".png' /><a href='account/logout.php'>";
										if ($_COOKIE['lang'] == 'pt') {echo "Sair";}
										if ($_COOKIE['lang'] == 'en') {echo "Log out";}
										if ($_COOKIE['lang'] == 'es') {echo "Salir";}
								echo "</a></li>
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