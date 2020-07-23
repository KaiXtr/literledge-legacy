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
						<li> <a onclick='set_tab("tab1","tab2","tab3")'> <input id='op1' type='radio' name='request' value='poem' checked='true' />
						<label for='op1'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "Poemas";}
							if ($_COOKIE['lang'] == 'en') {echo "Poems";}
							if ($_COOKIE['lang'] == 'es') {echo "Poémas";}
						?>
						</label>
						</a> </li>
						<li> <a onclick='set_tab("tab2","tab1","tab3")'> <input id='op2' type='radio' name='request' value='book' />
						<label for='op2'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "Livros";}
							if ($_COOKIE['lang'] == 'en') {echo "Books";}
							if ($_COOKIE['lang'] == 'es') {echo "Libros";}
						?>
						</label>
						</a> </li>
						<li> <a onclick='set_tab("tab3","tab1","tab2")'> <input id='op3' type='radio' name='request' value='auctor' />
						<label for='op3'>
						<?php
							if ($_COOKIE['lang'] == 'pt') {echo "Autores";}
							if ($_COOKIE['lang'] == 'en') {echo "Auctores";}
							if ($_COOKIE['lang'] == 'es') {echo "Autores";}
						?>
						</label>
						</a> </li>
						<li>
						<?php
							if ($_COOKIE['lang'] == 'pt') {$lbl = "Publicar";}
							if ($_COOKIE['lang'] == 'en') {$lbl = "Publish";}
							if ($_COOKIE['lang'] == 'es') {$lbl = "Publíca";}
							echo "<input type='submit' class='btpress' value='".$lbl."' />";
						?>
						</li>
					</ul>
				</div>
				<?php
					require 'account/mysql_connect.php';
					require 'design/array_lists.php';
					if ($notcon == null) {
						$find = $conn->query("SELECT * FROM requests");
						$tb1 = "<div id='tab1' class='optabs' style='display: block;'><table id='wrpm' class='requestable'>";
						$tb2 = "<div id='tab2' class='optabs' style='display: none;'><table id='wrbk' class='requestable'>";
						$tb3 = "<div id='tab3' class='optabs' style='display: none;'><table id='wrat' class='requestable'>";

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
							if (($x[0] == 'N')&&($x != 'N')) {$optgnr .= "<option value='".$x."''>".$gnrlst[$x]."</option>";}
						}
						$optgnr .= "</optgroup><optgroup label='".$gnrlst['L']."'>";
						foreach ($gnrlst as $x => $v) {
							if (($x[0] == 'L')&&($x != 'L')) {$optgnr .= "<option value='".$x."''>".$gnrlst[$x]."</option>";}
						}
						$optgnr .= "</optgroup><optgroup label='".$gnrlst['D']."'>";
						foreach ($gnrlst as $x => $v) {
							if (($x[0] == 'D')&&($x != 'D')) {$optgnr .= "<option value='".$x."''>".$gnrlst[$x]."</option>";}
						}
						$optgnr .= "</optgroup>";

						$optlts = "<option value='null' selected>null</option>";
						foreach ($ltslst as $x => $v) {
							{$optlts .= "<option value=".$x.">" .$ltslst[$x]. "</option>";}
						}
						$rowpom = "<tr>
								<th style='width: 100px;'><input id='pblsh%lid%' type='checkbox' name='pblsh[]' /></th>
								<th style='width: 100px;'>
									<input id='ptitl%lid%' type='text' class='textbox' name='pname[]' value='%ptitl%' placeholder='name' /><br />
									<input id='auct%lid%' type='text' class='textbox' value='%pname%' list='dtlst%lid%' maxLength='30' placeholder='auctor'
									 oninput='datalist_value(%lid%)' />
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
									<input id='rid%lid%' type='hidden' name='rid[]' value='%rid%' />
								</th>
								<th><textarea id='pcont%lid%' class='textbox long' name='pcontent[]' style='width: 800px;'
								placeholder='content(plain text)'>%pcont%</textarea></th>
								<th><a href='account/delete_request.php?d=%rid%'><input type='button' class='btpress'
									style='background-image: url(media/images/icons/cridel-".$_COOKIE['theme'].".png);
									background-repeat: no-repeat; background-position: center;' /></a></th>
								</tr>";
						$rowbok = "<tr>
								<th style='width: 100px;'><input id='pblsh%lid%' type='checkbox' name='pblsh[]' /></th>
								<th> <img id='bprev%lid%' class='filprev' style='width: 333px; height: 500px;' />
								<input id='bcover%lid%' accept='image/jpeg' name='bcover' type='file' onchange='previmg(event,\"bprev%lid%\");' /></th>
								<th style='width: 100px;'>
									<input id='bname%lid%' type='text' class='textbox' name='bname[]' value='%bname%' placeholder='name'/>
									<input id='bauct%lid%' type='text' class='textbox' value='%bauctor%' list='dtlst%lid%' maxLength='30' placeholder='auctor'
									oninput='datalist_value(%lid%)' />
									<datalist id='dtlst%lid%'>
										".$optlst."
									</datalist>
									<input id='bauct%lid%-hidden' type='hidden' name='bauctor[]' value='%bnick%' />
									<input id='byear%lid%' type='text' class='textbox' name='byear[]' value='%byear%' placeholder='year' />
									<select class='selectbox' id='bcountry%lid%' name='bcountry[]'>
										".$optcou."
									</select>
									<select class='selectbox' id='bgenre%lid%' name='bgenre[]'>
										".$optgnr."
									</select>
									<select class='selectbox' id='blitschool%lid%' name='blitschool[]'>
										".$optlts."
									</select>
									<input id='bseries%lid%' type='text' class='textbox' name='bseries[]' style='width: 200px' placeholder='series' />
									<input id='bvolume%lid%' type='text' class='textbox' name='bvolume[]' style='width: 50px' placeholder='volume' />
									<input id='blicense%lid%' type='text' class='textbox' name='blicense[]' style='width: 200px' placeholder='license' />
									<input id='bcdd%lid%' type='text' class='textbox' name='bcdd[]' style='width: 200px' placeholder='cdd' />
									<input id='btags%lid%' type='text' class='textbox' name='btags[]' placeholder='tags' />
									<input id='rid%lid%' type='hidden' name='rid[]' value='%rid%' />
								</th>
								<th><textarea id='bsinopsis%lid%' class='textbox long' name='bsinopsis[]' style='width: 200px;'
								placeholder='sinopsis(plain text)'></textarea></th>
								<th><textarea id='binfo%lid%' class='textbox long' name='binfo[]' style='width: 400px;' placeholder='book info(html)'></textarea></th>
								<th><a href='account/delete_request.php?d=%rid%'><input type='button' class='btpress'
									style='background-image: url(media/images/icons/cridel-".$_COOKIE['theme'].".png);
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
									$rid = $i['rid'];

									$fnms = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$pauctor."'");
									$rn = $fnms->fetch_assoc();
									if ($rn[$_COOKIE['lang']] == null) {$nm = $rn['pt'];}
									else {$nm = $rn[$_COOKIE['lang']];}

									$prw = str_replace('%ptitl%', $pname, $rowpom);
									$prw = str_replace('%pnick%', $pauctor, $prw);
									$prw = str_replace('%pname%', $nm, $prw);
									$prw = str_replace('%pcont%', $pcontent, $prw);
									$prw = str_replace('%rid%', $rid, $prw);
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
									$rid = $i['rid'];

									$fnms = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$bauctor."'");
									$rn = $fnms->fetch_assoc();
									if ($rn[$_COOKIE['lang']] == null) {$nm = $rn['pt'];}
									else {$nm = $rn[$_COOKIE['lang']];}

									$brw = str_replace('%bname%', $bname, $rowbok);
									$brw = str_replace('%bnick%', $bauctor, $brw);
									$brw = str_replace('%bauctor%', $nm, $brw);
									$brw = str_replace('%byear%', $byear, $brw);
									$brw = str_replace('%bcountry%', $bcountry, $brw);
									$brw = str_replace('%rid%', $rid, $brw);
									$brw = str_replace('%lid%', $rowbokcount, $brw);
									$tb2 .= $brw;
									$rowbokcount++;
									}
								#USERS
								preg_match('/aname/i',$i['req'],$re);
								if (sizeof($re) > 0) {
									$tb3 = $tb3."<tr><th>".$re."</th></tr>";
									}
								}
							}
						$prw = str_replace('%ptitl%', '', $rowpom);
						$prw = str_replace('%pnick%', '', $prw);
						$prw = str_replace('%pname%', '', $prw);
						$prw = str_replace('%pcont%', '', $prw);
						$prw = str_replace('%rid%', '', $prw);
						$prw = str_replace('
							', '"+
							"', $prw);
						echo $tb1."</table>
						<input id='btaddpom' type='button' class='btpress' value='+' />
						<script type='text/javascript'>
							add_rowpom(".'"'.$prw.'"'.",'".$rowpomcount."');
							var doClick = (event) => add_rowpom(e,".'"'.$prw.'"'.",'".$rowpomcount."');
							document.getElementById('btaddpom').addEventListener('click',doClick);
						</script>
						</div>";

						$brw = str_replace('%bname%', '', $rowbok);
						$brw = str_replace('%bnick%', '', $brw);
						$brw = str_replace('%bauctor%', '', $brw);
						$brw = str_replace('%byear%', '', $brw);
						$brw = str_replace('%bcountry%', '', $brw);
						$brw = str_replace('%rid%', '', $brw);
						$brw = str_replace('
							', '"+
							"', $brw);
						echo $tb2."</table>
						<input id='btaddbok' type='button' class='btpress' value='+' />
						<script type='text/javascript'>
							add_rowbok(".'"'.$brw.'"'.",'".$rowbokcount."');
							var doClick = (event) => add_rowbok(".'"'.$brw.'"'.",'".$rowbokcount."');
							document.getElementById('btaddbok').addEventListener('click',doClick);
						</script>
						</div>";
						echo $tb3;
						$conn->close();
						}
				?>
			</form>
			<?php
				if (@$_GET['t']) {
					if ($_GET['t'] == '1') {echo "<script type='text/javascript'> set_tab('tab1','tab2','tab3'); </script>";}
					if ($_GET['t'] == '2') {echo "<script type='text/javascript'> set_tab('tab2','tab1','tab3'); </script>";}
					if ($_GET['t'] == '3') {echo "<script type='text/javascript'> set_tab('tab3','tab1','tab3'); </script>";}
				}
			?>
		</div>
		<?php include 'design/footer.php' ?>
	</body>
</html>