<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
		require 'design/mysql_connect.php';
		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
			{$v = 'Pedidos - ';}
		else if ($_COOKIE['lang'] == 'en')
			{$v = 'Requests - ';}
		else if ($_COOKIE['lang'] == 'es')
			{$v = 'Pedidos - ';}
		include 'design/metadata.php';
		if (isset($_GET['error'])) {$error = $_GET['error'];} else {$error = '';}
		if (!isset($_SESSION['user']))
			{header('location: '.$_SERVER["HTTP_REFERER"]);}
		else {
			$find = $conn->query("SELECT auctor FROM users WHERE nick='".$_SESSION['user']."'");
			if ($find->num_rows == 0)
				{header('location: '.$_SERVER["HTTP_REFERER"]);}
			else {
				$i = $find->fetch_assoc();
				if ($i['auctor'] != '2') {
					header('location: '.$_SERVER["HTTP_REFERER"]);
				}
			}
		}
		?>
	</head>
	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div class='login proedit long'>
			<script type='text/javascript'>
				var rowpomcount = 0;
				var rowbokcount = 0;
				var rowusecount = 0;
			</script>
			<form action='account/post_request.php' method='post' enctype='multipart/form-data'>
				<?php
					require 'account/mysql_connect.php';
					if ($notcon == null) {
						$find = $conn->query("SELECT * FROM users WHERE nick='" .$_SESSION['user']. "'");
						if ($find->num_rows > 0) {$i = $find->fetch_assoc();}
					}
				?>
				<div id='optlst'>
					<ul>
						<?php
							$chk1 = "checked='true'";
							if (@$_GET['t']) {
								if ($_GET['t'] != '1') {$chk1 = "";}
							}
							echo "<li> <a onclick='set_tab(\"tab1\",\"tab2\",\"tab3\")'> <input id='op1' type='radio' name='request' value='poem' ".$chk1." />
							<label for='op1'>";
								if ($_COOKIE['lang'] == 'pt') {echo "Poemas";}
								if ($_COOKIE['lang'] == 'en') {echo "Poems";}
								if ($_COOKIE['lang'] == 'es') {echo "Poémas";}
							$chk2 = "";
							if (@$_GET['t']) {
								if ($_GET['t'] == '2') {$chk2 = "checked='true'";}
							}
							echo "</label>
							</a> </li>
							<li> <a onclick='set_tab(\"tab2\",\"tab1\",\"tab3\")'> <input id='op2' type='radio' name='request' value='book' ".$chk2." />
							<label for='op2'>";
								if ($_COOKIE['lang'] == 'pt') {echo "Livros";}
								if ($_COOKIE['lang'] == 'en') {echo "Books";}
								if ($_COOKIE['lang'] == 'es') {echo "Libros";}
							$chk3 = "";
							if (@$_GET['t']) {
								if ($_GET['t'] == '3') {$chk3 = "checked='true'";}
							}
							echo "</label>
							</a> </li>
							<li> <a onclick='set_tab(\"tab3\",\"tab1\",\"tab2\")'> <input id='op3' type='radio' name='request' value='auctor' ".$chk3." />
							<label for='op3'>";
								if ($_COOKIE['lang'] == 'pt') {echo "Autores";}
								if ($_COOKIE['lang'] == 'en') {echo "Auctores";}
								if ($_COOKIE['lang'] == 'es') {echo "Autores";}
							echo "</label>
							</a> </li>
							<li>";
								if ($_COOKIE['lang'] == 'pt') {$lbl = "Publicar";}
								if ($_COOKIE['lang'] == 'en') {$lbl = "Publish";}
								if ($_COOKIE['lang'] == 'es') {$lbl = "Publíca";}
								echo "<input type='submit' class='btpress' value='".$lbl."' />";
							echo "</li>";
						?>
					</ul>
				</div>
				<?php
					require 'account/mysql_connect.php';
					require 'design/array_lists.php';
					if ($notcon == null) {
						$find = $conn->query("SELECT * FROM requests");
						$tb1 = "<div id='tab1' class='optabs' style='display: block;'><table id='wrpm' class='requestable'><tr><span class='error'>";
						if (strpos($error, '1')) {
							if ($_COOKIE['lang'] == 'pt') {$tb1 .= "O autor deste poema não está registrado no site.";}
							if ($_COOKIE['lang'] == 'en') {$tb1 .= "The author of this poem is not registered on the site.";}
							if ($_COOKIE['lang'] == 'es') {$tb1 .= "El autor de este poema no está registrado en el sitio.";}
						}
						if (strpos($error, '2')) {
							if ($_COOKIE['lang'] == 'pt') {$tb1 .= "Preencha os campos vazios.";}
							if ($_COOKIE['lang'] == 'en') {$tb1 .= "Fill in the empty fields.";}
							if ($_COOKIE['lang'] == 'es') {$tb1 .= "Rellene los campos vacíos.";}
						}
						if (strpos($error, '3')) {
							if ($_COOKIE['lang'] == 'pt') {$tb1 .= "Este poema já está registrado.";}
							if ($_COOKIE['lang'] == 'en') {$tb1 .= "This poem is already registered.";}
							if ($_COOKIE['lang'] == 'es') {$tb1 .= "Este poema ya está registrado.";}
						}
						$tb1 .= "</span></tr>";

						$tb2 = "<div id='tab2' class='optabs' style='display: none;'><table id='wrbk' class='requestable'><tr><span class='error'>";
						if (strpos($error, '4')) {
							if ($_COOKIE['lang'] == 'pt') {$tb2 .= "O autor deste livro não está registrado no site.";}
							if ($_COOKIE['lang'] == 'en') {$tb2 .= "The author of this book is not registered on the site.";}
							if ($_COOKIE['lang'] == 'es') {$tb2 .= "El autor de este libro no está registrado en el sitio.";}
						}
						if (strpos($error, '5')) {
							if ($_COOKIE['lang'] == 'pt') {$tb2 .= "Preencha os campos vazios.";}
							if ($_COOKIE['lang'] == 'en') {$tb2 .= "Fill in the empty fields.";}
							if ($_COOKIE['lang'] == 'es') {$tb2 .= "Rellene los campos vacíos.";}
						}
						$tb2 .= "</span></tr>";

						$tb3 = "<div id='tab3' class='optabs' style='display: none;'><table id='wrat' class='requestable'><tr><span class='error'>";
						if (strpos($error, '6')) {
							if ($_COOKIE['lang'] == 'pt') {$tb3 .= "Preencha os campos vazios.";}
							if ($_COOKIE['lang'] == 'en') {$tb3 .= "Fill in the empty fields.";}
							if ($_COOKIE['lang'] == 'es') {$tb3 .= "Rellene los campos vacíos.";}
						}
						$tb3 .= "</span></tr>";

						$lind = $conn->query("SELECT pt,nick FROM users");
						$optlst = '';
						if ($lind->num_rows > 0) {
							while ($dl = $lind->fetch_assoc()) {
									$optlst .= "<option data-value='".$dl['nick']."'>".$dl['pt']."</option>";
								}
							}

						$optcou = '';
						foreach ($coulst as $x => $v) {
							{$optcou .= "<option value=".$x.">" .$coulst[$x]. "</option>";}
						}

						$optgnr = '';
						$optgnr .= "<optgroup label='".$gnrlst['N']."'>";
						foreach ($gnrlst as $x => $v) {
							if (($x[0] == 'N')&&($x != 'N')) {$optgnr .= "<option value='".$x."'>".$gnrlst[$x]."</option>";}
						}
						$optgnr .= "</optgroup><optgroup label='".$gnrlst['L']."'>";
						foreach ($gnrlst as $x => $v) {
							if (($x[0] == 'L')&&($x != 'L')) {$optgnr .= "<option value='".$x."'>".$gnrlst[$x]."</option>";}
						}
						$optgnr .= "</optgroup><optgroup label='".$gnrlst['D']."'>";
						foreach ($gnrlst as $x => $v) {
							if (($x[0] == 'D')&&($x != 'D')) {$optgnr .= "<option value='".$x."'>".$gnrlst[$x]."</option>";}
						}
						$optgnr .= "</optgroup>";

						$optlts = "<option value='null' selected>null</option>";
						foreach ($ltslst as $x => $v) {
							{$optlts .= "<option value=".$x.">" .$ltslst[$x]. "</option>";}
						}
						$optlic = '';
						foreach ($liclst as $x => $v) {
							{$optlic .= "<option value=".$x.">" .$liclst[$x]. "</option>";}
						}
						$optgnd = '';
						foreach ($gndlst as $x => $v) {
							{$optgnd .= "<option value=".$x.">" .$gndlst[$x]. "</option>";}
						}
						$rowpom = "<tr>
								<th style='width: 100px;'><input id='pblsh1%lid%' type='checkbox' name='pblsh1[]' /></th>
								<th style='width: 100px;'>
									<input id='ptitl%lid%' type='text' class='textbox' name='pname[]' value='%ptitl%' placeholder='name*' /><br />
									<input id='auct%lid%' type='text' class='textbox' value='%pname%' list='dtlst%lid%' maxLength='30' placeholder='auctor*'
									 oninput='datalist_value(%lid%,1)' />
									<datalist id='dtlst%lid%'>
										".$optlst."
									</datalist>
									<input id='auct%lid%-hidden' type='hidden' name='pauctor[]' value='%pnick%' />
									<select class='selectbox' id='pcountry%lid%' name='pcountry[]'>
										".$optcou."
									</select>
									<select class='selectbox' id='pgenre%lid%' name='pgenre[]'>
										".$optgnr."
									</select>
									<select class='selectbox' id='plitschool%lid%' name='plitschool[]'>
										".$optlts."
									</select>
									<input id='prid%lid%' type='hidden' name='prid[]' value='%prid%' />
								</th>
								<th><textarea id='pcont%lid%' class='textbox long' name='pcontent[]' style='width: 800px;'
								placeholder='content(plain text)*'>%pcont%</textarea></th>
								<th><a href='account/delete_request.php?d=%prid%'><input type='button' class='btpress'
									style='background-image: url(media/images/icons/cridel-".$_COOKIE['theme'].".png);
									background-repeat: no-repeat; background-position: center;' /></a></th>
								</tr>";
						$rowbok = "<tr>
								<th style='width: 100px;'><input id='pblsh2%lid%' type='checkbox' name='pblsh2[]' /></th>
								<th><div id='bimgdrg%lid%' class='filprev' style='width: 333px; height: 500px;' onclick='drag_image(event,%lid%)'>
								<img id='bprev%lid%' style='width: 333px; height: 500px; top: 0px; left: 0px;position: relative;clip: rect(0px,0px,10px,40px)' draggable='false' />
								</div>
								<input id='bcover%lid%' accept='image/jpeg' name='bcover[]' type='file' onchange='previmg(event,%lid%,1)' /></th>
								<th>
									<input id='bnamept%lid%' type='text' class='textbox' name='bnamept[]' value='%bname%' placeholder='PT name*'/>
									<input id='bnameen%lid%' type='text' class='textbox' name='bnameen[]' value='%bname%' placeholder='EN name*'/>
									<input id='bnamees%lid%' type='text' class='textbox' name='bnamees[]' value='%bname%' placeholder='ES name*'/>
									<input id='bauct%lid%' type='text' class='textbox' value='%bauctor%' list='dtlst%lid%' maxLength='30' placeholder='auctor*'
									oninput='datalist_value(%lid%,2)' style='width: 230px;margin-right: 0px' />
									<datalist id='dtlst%lid%'>
										".$optlst."
									</datalist>
									<input id='bauct%lid%-hidden' type='hidden' name='bauctor[]' value='%bnick%' />
									<input id='byear%lid%' type='text' class='textbox' name='byear[]' value='%byear%' placeholder='year*' style='width: 35px' /><br />
									<select class='selectbox' id='bcountry%lid%' name='bcountry[]' style='width: 100px;margin-top: 5px'>
										".$optcou."
									</select>
									<select class='selectbox' id='bgenre%lid%' name='bgenre[]' style='width: 100px;margin-top: 5px'>
										".$optgnr."
									</select>
									<select class='selectbox' id='blitschool%lid%' name='blitschool[]' style='width: 100px;margin-top: 5px'>
										".$optlts."
									</select>
									<input id='bseries%lid%' type='text' class='textbox' name='bseries[]' style='width: 210px;margin-right: 0px' placeholder='series' />
									<input id='bvolume%lid%' type='text' class='textbox' name='bvolume[]' style='width: 50px' value='0' placeholder='volume*' /><br />
									<select class='selectbox' id='blicense%lid%' name='blicense[]'>
										".$optlic."
									</select>
									<input id='bcdd%lid%' type='text' class='textbox' name='bcdd[]' style='width: 80px;margin: 0px;' placeholder='cdd*' />
									<input id='btags%lid%' type='text' class='textbox' name='btags[]' placeholder='tags*' /> <br />
									<input id='brid%lid%' type='hidden' name='brid[]' value='%brid%' />
								</th>
								<th>
								<textarea id='bsinopsispt%lid%' class='textbox long' name='bsinopsispt[]' style='width: 400px;height: 100px;margin-bottom: 10px'
								placeholder='sinopsis PT(plain text)*' spellcheck='false' maxLength='200'></textarea><br />
								<textarea id='bsinopsisen%lid%' class='textbox long' name='bsinopsisen[]' style='width: 400px;;height: 100px;margin-bottom: 10px'
								placeholder='sinopsis EN(plain text)*' spellcheck='false' maxLength='200'></textarea><br />
								<textarea id='bsinopsises%lid%' class='textbox long' name='bsinopsises[]' style='width: 400px;;height: 100px;margin-bottom: 10px'
								placeholder='sinopsis ES(plain text)*' spellcheck='false' maxLength='200'></textarea>
								</th>
								<th><a href='account/delete_request.php?d=%brid%'><input type='button' class='btpress'
									style='width: 40px;background-image: url(media/images/icons/cridel-".$_COOKIE['theme'].".png);
									background-repeat: no-repeat; background-position: center;' /></a></th>
								</tr>
								<tr>
								<th colspan='2'><textarea id='binfopt%lid%' class='textbox long' name='binfopt[]' style='width: 500px;' placeholder='book info PT(html)*' spellcheck='false'><a name='goto1'></a> <h1> Resenha </h1> <hr> <a name='goto2'></a> <h1> Personagens </h1> <ul> <li><b>name: </b>info.</li> </ul> <hr> <a name='goto3'></a> <h1> Adaptações </h1> <a href='link' target='_blank'> filme </a> <hr></textarea>
								</th>
								<th><textarea id='binfoen%lid%' class='textbox long' name='binfoen[]' style='width: 500px;' placeholder='book info EN(html)*' spellcheck='false'><a name='goto1'></a> <h1> Resenha </h1> <hr> <a name='goto2'></a> <h1> Personagens </h1> <ul> <li><b>name: </b>info.</li> </ul> <hr> <a name='goto3'></a> <h1> Adaptações </h1> <a href='link' target='_blank'> filme </a> <hr></textarea>
								</th>
								<th colspan='2'><textarea id='binfoes%lid%' class='textbox long' name='binfoes[]' style='width: 500px;' placeholder='book info ES(html)*' spellcheck='false'><a name='goto1'></a> <h1> Resenha </h1> <hr> <a name='goto2'></a> <h1> Personagens </h1> <ul> <li><b>name: </b>info.</li> </ul> <hr> <a name='goto3'></a> <h1> Adaptações </h1> <a href='link' target='_blank'> filme </a> <hr></textarea>
								</th>
								</tr>";
						$rowuse = "<tr>
								<th style='width: 100px;'><input id='pblsh3%lid%' type='checkbox' name='pblsh3[]' /></th>
								<th><div id='aprodrg%lid%' class='filprev' style='width: 250px; height: 333px;' onclick='drag_image(event,%lid%)'>
								<img id='apprev%lid%' style='width: 250px; height: 333px; top: 0px; left: 0px;position: relative;clip: rect(0px,0px,10px,40px)' draggable='false' />
								<input id='apropic%lid%' accept='image/jpeg' name='apropic[]' type='file' onchange='previmg(event,%lid%,2)' /></div><br />
								<div id='abandrg%lid%' class='filprev' style='width: 192px; height: 50px;' onclick='drag_image(event,%lid%)'>
								<img id='abprev%lid%' style='width: 192px; height: 50px; top: 0px; left: 0px;position: relative;clip: rect(0px,0px,10px,40px)' draggable='false' />
								</div>
								<input id='abanner%lid%' accept='image/jpeg' name='abanner[]' type='file' onchange='previmg(event,%lid%,3)' /></th>
								<th style='width: 100px;'>
									<input id='anamept%lid%' type='text' class='textbox' name='anamept[]' value='%aname%' placeholder='PT name*' /><br />
									<input id='anameen%lid%' type='text' class='textbox' name='anameen[]' placeholder='EN name (only if differ from PT name)' /><br />
									<input id='anamees%lid%' type='text' class='textbox' name='anamees[]' placeholder='ES name (only if differ from PT name)' /><br />
									<input id='anick%lid%' type='text' class='textbox' name='anick[]' placeholder='nick*' onchange='email_autofill(%lid%)' style='width: 200px' />
									<select class='selectbox' id='agender%lid%' name='agender[]'>
										".$optgnd."
									</select><br />
									<input id='abirth%lid%' type='text' class='textbox' name='abirth[]' placeholder='birth (XXXX-XX-XX)*' style='width: 130px' />
									<input id='adeath%lid%' type='text' class='textbox' name='adeath[]' placeholder='death (XXXX-XX-XX)' style='width: 130px' /><br />
									<select class='selectbox' id='acountry%lid%' name='acountry[]'>
										".$optcou."
									</select>
									<input id='ahometown%lid%' type='text' class='textbox' name='ahometown[]' placeholder='hometown*' style='width: 160px' autocomplete='off' /><br />
									<input id='aacademy%lid%' type='text' class='textbox' name='aacademy[]' placeholder='academy (ACC-XX-XX)' /><br />
									<input id='aemail%lid%' type='text' class='textbox' name='aemail[]' placeholder='email*' value='@literledge.com' /><br />
									<input id='abonds%lid%' type='text' class='textbox' name='abonds[]' placeholder='bonds (nick[X];)' /><br />
									<input id='arid%lid%' type='hidden' name='arid[]' value='%arid%' />
								</th>
								<th>
								<textarea id='abiopt%lid%' class='textbox long' name='abiopt[]' style='width: 800px;height: 150px;margin-bottom: 10px' placeholder='bio PT(html)*'></textarea>
								<textarea id='abioen%lid%' class='textbox long' name='abioen[]' style='width: 800px;height: 150px;margin-bottom: 10px' placeholder='bio EN(html)*'></textarea>
								<textarea id='abioes%lid%' class='textbox long' name='abioes[]' style='width: 800px;height: 150px;margin-bottom: 10px' placeholder='bio ES(html)*'></textarea>
								</th>
								<th><a href='account/delete_request.php?d=%arid%'><input type='button' class='btpress'
									style='width: 40px;background-image: url(media/images/icons/cridel-".$_COOKIE['theme'].".png);
									background-repeat: no-repeat; background-position: center;' /></a></th>
								</tr>";
						$rowpomcount = 0;
						$rowbokcount = 0;
						$rowusecount = 0;
						if ($find->num_rows > 0) {
							while ($i = $find->fetch_assoc()) {
								#POEMS
								preg_match('/pauctor/i',$i['req'],$re);
								if (sizeof($re) > 0) {
									$pname = substr($i['req'], strpos($i['req'], 'pname=')+6);
									$pname = substr($pname, 0, strpos($pname, ';'));
									$pcontent = substr($i['req'], strpos($i['req'], 'pcontent=')+9);
									$pcontent = substr($pcontent, 0, strpos($pcontent, ';'));
									$pauctor = substr($i['req'], strpos($i['req'], 'pauctor=')+8);
									$pauctor = substr($pauctor, 0, strpos($pauctor, ';'));
									$prid = $i['rid'];

									$fnms = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$pauctor."'");
									$rn = $fnms->fetch_assoc();
									if ($rn[$_COOKIE['lang']] == null) {$nm = $rn['pt'];}
									else {$nm = $rn[$_COOKIE['lang']];}

									$prw = str_replace('%ptitl%', $pname, $rowpom);
									$prw = str_replace('%pnick%', $pauctor, $prw);
									$prw = str_replace('%pname%', $nm, $prw);
									$prw = str_replace('%pcont%', $pcontent, $prw);
									$prw = str_replace('%prid%', $prid, $prw);
									$prw = str_replace('%lid%', $rowpomcount, $prw);
									$tb1 .= $prw;
									$rowpomcount++;
									}
								#BOOKS
								preg_match('/bname/i',$i['req'],$re);
								if (sizeof($re) > 0) {
									$bname = substr($i['req'], strpos($i['req'], 'bname=')+6);
									$bname = substr($bname, 0, strpos($bname, ';'));
									$byear = substr($i['req'], strpos($i['req'], 'byear=')+6);
									$byear = substr($byear, 0, strpos($byear, ';'));
									$bcountry = substr($i['req'], strpos($i['req'], 'bcountry=')+9);
									$bcountry = substr($bcountry, 0, strpos($bcountry, ';'));
									$bauctor = substr($i['req'], strpos($i['req'], 'bauctor=')+8);
									$bauctor = substr($bauctor, 0, strpos($bauctor, ';'));
									$prid = $i['rid'];

									$fnms = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$bauctor."'");
									$rn = $fnms->fetch_assoc();
									if ($rn[$_COOKIE['lang']] == null) {$nm = $rn['pt'];}
									else {$nm = $rn[$_COOKIE['lang']];}

									$brw = str_replace('%bname%', $bname, $rowbok);
									$brw = str_replace('%bnick%', $bauctor, $brw);
									$brw = str_replace('%bauctor%', $nm, $brw);
									$brw = str_replace('%byear%', $byear, $brw);
									$brw = str_replace('%bcountry%', $bcountry, $brw);
									$brw = str_replace('%brid%', $brid, $brw);
									$brw = str_replace('%lid%', $rowbokcount, $brw);
									$tb2 .= $brw;
									$rowbokcount++;
									}
								#USERS
								preg_match('/aname/i',$i['req'],$re);
								if (sizeof($re) > 0) {
									$aname = substr($i['req'], strpos($i['req'], 'aname=')+6);
									$aname = substr($aname, 0, strpos($aname, ';'));
									$acountry = substr($i['req'], strpos($i['req'], 'acountry=')+6);
									$acountry = substr($acountry, 0, strpos($acountry, ';'));
									$arid = $i['rid'];

									$urw = str_replace('%aname%', $aname, $rowuse);
									$urw = str_replace('%acountry%', $acountry, $urw);
									$urw = str_replace('%arid%', $arid, $urw);
									$urw = str_replace('%lid%', $rowusecount, $urw);
									$tb3 .= $urw;
									$rowusecount++;
									}
								}
							}
						$prw = str_replace('%ptitl%', '', $rowpom);
						$prw = str_replace('%pnick%', '', $prw);
						$prw = str_replace('%pname%', '', $prw);
						$prw = str_replace('%pcont%', '', $prw);
						$prw = str_replace('%prid%', '', $prw);
						$prw = str_replace('
							', '"+
							"', $prw);
						echo $tb1."</table>
						<input id='btaddpom' type='button' class='btpress' value='+' />
						<script type='text/javascript'>
							rowpomcount = ".$rowpomcount.";
							add_rowpom(".'"'.$prw.'"'.");
							var doClick = (event) => add_rowpom(".'"'.$prw.'"'.");
							document.getElementById('btaddpom').addEventListener('click',doClick);
						</script>
						</div>";

						$brw = str_replace('%bname%', '', $rowbok);
						$brw = str_replace('%bnick%', '', $brw);
						$brw = str_replace('%bauctor%', '', $brw);
						$brw = str_replace('%byear%', '', $brw);
						$brw = str_replace('%bcountry%', '', $brw);
						$brw = str_replace('%brid%', '', $brw);
						$brw = str_replace('
							', '"+
							"', $brw);
						echo $tb2."</table>
						<input id='btaddbok' type='button' class='btpress' value='+' />
						<script type='text/javascript'>
							rowbokcount = ".$rowbokcount.";
							add_rowbok(".'"'.$brw.'"'.");
							var doClick = (event) => add_rowbok(".'"'.$brw.'"'.");
							document.getElementById('btaddbok').addEventListener('click',doClick);
						</script>
						</div>";

						$urw = str_replace('%aname%', '', $rowuse);
						$urw = str_replace('%acountry%', '', $urw);
						$urw = str_replace('%arid%', '', $urw);
						$urw = str_replace('
							', '"+
							"', $urw);
						echo $tb3."</table>
						<input id='btadduse' type='button' class='btpress' value='+' />
						<script type='text/javascript'>
							rowusecount = ".$rowusecount.";
							add_rowuse(".'"'.$urw.'"'.");
							var doClick = (event) => add_rowuse(".'"'.$urw.'"'.");
							document.getElementById('btadduse').addEventListener('click',doClick);
						</script>
						</div>";
						$conn->close();
						}
				?>
			</form>
			<?php
				if (@$_GET['t']) {
					if ($_GET['t'] == '1') {echo "<script type='text/javascript'> set_tab('tab1','tab2','tab3'); </script>";}
					if ($_GET['t'] == '2') {echo "<script type='text/javascript'> set_tab('tab2','tab1','tab3'); </script>";}
					if ($_GET['t'] == '3') {echo "<script type='text/javascript'> set_tab('tab3','tab1','tab2'); </script>";}
				}
			?>
		</div>
		<?php include 'design/footer.php' ?>
	</body>
</html>