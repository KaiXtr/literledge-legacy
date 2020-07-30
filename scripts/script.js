var cursli = 0;
var imgx = 0;
var bkimgs = ['media/images/banners/111.jpg','media/images/banners/222.jpg','media/images/banners/333.jpg'];

function slide_show() {
	var xslide = document.getElementById('banner').style;
	var arrsli = [document.getElementById('sl1'),document.getElementById('sl2'),document.getElementById('sl3')];
	var xpos = 0;

	xslide['background-image'] = 'url(' + bkimgs[imgx] + ')';
	arrsli[cursli].style.display = 'none';
	arrsli[cursli].style['background-position'] = '0px 0px';
	cursli ++;
	if (cursli >= 3) {cursli = 0;}
	imgx ++;
	if (imgx >= bkimgs.length) {imgx = 0;}
	arrsli[cursli].style.display = 'block';
	setTimeout(slide_show, 5000);
	}

function set_display(target){
	var obj = document.getElementById(target);
	var fad = document.getElementById('fadescreen');
	var height = obj.clientHeight;
	var width = obj.clientWidth;
	if (target == 'lateralbar') {
		if (obj.style.visibility == 'hidden') {
			obj.style.visibility = 'visible';
			obj.style.width = '300px';
			obj.style['padding-left'] = '40px';
			obj.style.opacity = '100%';
			}
		else {
			obj.style.visibility = 'hidden';
			obj.style.width = '0px';
			obj.style['padding-left'] = '0px';
			obj.style.opacity = '0%';
			}
		}
	else if (target == 'profilemenu') {
		if (obj.style.visibility == 'hidden') {
			obj.style.visibility = 'visible';
			obj.style.height = '200px';
			obj.style.opacity = '100%';
			}
		else {
			obj.style.visibility = 'hidden';
			obj.style.height = '0px';
			obj.style.opacity = '0%';
			}
		}
	else if (target == 'filters') {
		if (obj.style.visibility == 'hidden') {
			obj.style.visibility = 'visible';
			obj.style.opacity = '100%';
			fad.style.visibility = 'visible';
			fad.style.opacity = '50%';
			}
		else {
			obj.style.visibility = 'hidden';
			obj.style.opacity = '0%';
			fad.style.visibility = 'hidden';
			fad.style.opacity = '0%';
			}
		}
	else if (target == 'reportab') {
		if (obj.style.visibility == 'hidden') {
			obj.style.visibility = 'visible';
			obj.style.opacity = '100%';
			fad.style.visibility = 'visible';
			fad.style.opacity = '50%';
			}
		else {
			obj.style.visibility = 'hidden';
			obj.style.opacity = '0%';
			fad.style.visibility = 'hidden';
			fad.style.opacity = '0%';
			}
		}
	else if (target == 'cridit') {
		if (obj.style.display == 'none') {
			document.getElementById('criopi').style.display = 'none';
			obj.style.display = 'block';
			}
		else {
			document.getElementById('criopi').style.display = 'block';
			obj.style.display = 'none';
			}
		}
	else if (target == 'cridel') {
		if (obj.style.visibility == 'hidden') {
			obj.style.visibility = 'visible';
			obj.style.opacity = '100%';
			fad.style.visibility = 'visible';
			fad.style.opacity = '50%';
			}
		else {
			obj.style.visibility = 'hidden';
			obj.style.opacity = '0%';
			fad.style.visibility = 'hidden';
			fad.style.opacity = '0%';
			}
		}
	else if (target == 'cookies') {
		if (obj.style.visibility == 'visible') {
			obj.style.visibility = 'hidden';
			obj.style.height = '0px';
			obj.style.opacity = '0%';
			fad.style.visibility = 'hidden';
			fad.style.opacity = '0%';
			}
		}
	else {
		if (obj.style.display == 'none') {
			obj.style.display = 'block';
			}
		else {
			obj.style.display = 'none';
			}
		}
	}

function show_image(src) {
	var dis = document.getElementById('displayimg');
	var fad = document.getElementById('fadescreen');
	var btn = document.getElementById('imageclose');
	if (src == null) {
		dis.style.visibility = 'hidden';
		dis.style.opacity = '0%';
		fad.style.visibility = 'hidden';
		fad.style.opacity = '0%';
		btn.style.visibility = 'hidden';
		btn.style.opacity = '0%';
	}
	else {
		dis.style.visibility = 'visible';
		dis.style['background-image'] = 'url('+src+')';
		dis.style.opacity = '100%';
		fad.style.visibility = 'visible';
		fad.style.opacity = '50%';
		btn.style.visibility = 'visible';
		btn.style.opacity = '100%';
	}
}

function passbar(){
	var obj = document.getElementById('passbar');
	var lin = obj.getContext("2d");
	var txt = document.getElementById('pass').value;
	lin.beginPath();
	lin.fillStyle = 'white';
	lin.rect(0,0,96,10);
	lin.fill();
	lin.beginPath();
	var chk = 0;
	if (/[a-z]/.test(txt)) {chk++;}
	if (/[A-Z]/.test(txt)) {chk++;}
	if (/[0-9]/.test(txt)) {chk++;}
	if (chk == 1) {lin.fillStyle = 'red';}
	if (chk == 2) {lin.fillStyle = 'orange';}
	if (chk == 3) {lin.fillStyle = 'green';}
	lin.rect(0,0,txt.length*12,10);
	lin.fill();
}

function showhide(target,btn){
	var obj = document.getElementById(target);
	var but = document.getElementById(btn);
	if (obj.type == 'password') {obj.type = 'text';but.style='background-image: url(media/images/icons/passhide.png);'}
	else {obj.type = 'password';but.style='background-image: url(media/images/icons/passee.png);'}
};

function char_count(target,char){
	var tex = document.getElementById('texcom');
	var cou = document.getElementById('coucom');
	var sub = document.getElementById('subcom');
	if (tex.value.length > 200) {sub.disabled = false; cou.style='color: green;'}
	else {sub.disabled = true; cou.style='color: red;'}
	cou.textContent = tex.value.length + '/200';
};

function top_scroll(target){
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
};

function download_file(url,name) {
	var link = document.createElement('a');
	if (typeof link.download === 'string') {
		link.href = url;
		link.download = name
		document.body.appendChild(link);
		link.click();
		document.body.removeChild(link);
	} else {
		window.open(url);
	}
}

function filter_search(search,ofsa=null,ofsb=null,ofsp=null){
	var olet = document.getElementById('flet');
	var ocou = document.getElementById('fcou');
	var oyer = document.getElementById('fyer');
	var ogen = document.getElementById('fgen');
	var olsc = document.getElementById('flsc');
	var selected0 = olet.options[olet.selectedIndex].value;
	var selected1 = ocou.options[ocou.selectedIndex].value;
	var selected2 = oyer.options[oyer.selectedIndex].value;
	if (ogen != null) {var selected3 = ogen.options[ogen.selectedIndex].value;}
	else {var selected3 = 'none';}
	if (olsc != null) {var selected4 = olsc.options[olsc.selectedIndex].value;}
	else {var selected4 = 'none';}
	var redirl = 'http://localhost/literledge/search.php?q=' + search;
	if (selected0 != 'none') {redirl = redirl + '&l=' + selected0;}
	if (selected1 != 'none') {redirl = redirl + '&c=' + selected1;}
	if (selected2 != 'none') {redirl = redirl + '&y=' + selected2;}
	if (selected3 != 'none') {redirl = redirl + '&g=' + selected3;}
	if (selected4 != 'none') {redirl = redirl + '&s=' + selected4;}
	if (ofsa != null) {redirl = redirl + '&oa=' + ofsa;}
	if (ofsb != null) {redirl = redirl + '&ob=' + ofsb;}
	if (ofsp != null) {redirl = redirl + '&op=' + ofsp;}
	window.location.href = redirl;
}

function set_tab(){
	document.getElementById(arguments[0]).style.display = 'block';
	for (var x=1;x < arguments.length;x++)
		{document.getElementById(arguments[x]).style.display = 'none';}
};

function lang_set() {
	var obj = document.getElementById('langbox');
	var selected = obj.options[obj.selectedIndex].value;
	var langs = ['pt','en','es','fr','it'];
	document.styleSheets[0].addRule('.manlan:lang('+selected+')','display: block;');
	for (var x=0;x < langs.length;x++) {
		if (langs[x] != selected) {
			document.styleSheets[0].addRule('.manlan:lang('+langs[x]+')','display: none;');
		}
	}
}

function namescroll(rpf,rpt) {
	document.styleSheets[0].addRule('@keyframes username','from {opacity: 0%; right: '+rpf+'px;} to {opacity: 100%; right: '+rpt+'px;}');
}

function previmg(event,target,c=0) {
	if (c == 0) {var obj = document.getElementById(target);}
	if (c == 1) {var obj = document.getElementById('bprev'+target);}
	if (c == 2) {var obj = document.getElementById('apprev'+target);}
	if (c == 3) {var obj = document.getElementById('abprev'+target);}
	obj.src = URL.createObjectURL(event.target.files[0]);
}

function valueChange(value) {
	this.remainingText = 1000 - value;
}

function cut_sinopsis() {
	var txt = document.getElementsByClassName('thbsin');
	for (var x=0;x<txt.length;x++) {
		if (txt[x].clientHeight >= 40) {txt[x].textContent = txt[x].textContent.substr(0,80)+'...';}
	}
}

$(document).ready(function() {
	$("#burgerbut").on('click', function () {set_display('lateralbar')});
	$("#openpro").on('click', function () {set_display('profilemenu')});
	$("#filtbut").on('click', function () {set_display('filters')});
	$("#btcridit").on('click', function () {set_display('cridit')});
	$("#btcridel").on('click', function () {set_display('cridel')});
	$("#btcriditexit").on('click', function () {set_display('cridit')});
	$("#btcridelexit").on('click', function () {set_display('cridel')});
	$("#editreview").on('click', function () {edit_page(event,'review')});
	$("#editbio").on('click', function () {edit_page(event,'bio')});
});

/*
$(window).scroll(function(e) {
	var scroller_anchor = $("#filanch").offset().top;
	var filter_bar = $(".filters").position().top + $(".filters").height();
		 
	if (filter_bar >= scroller_anchor && $('.filters').css('position') != 'fixed') { 
		$('.filters').css('position','fixed');
		} 
	else if (filter_bar > scroller_anchor && $('.filters').css('position') != 'relative') {
		$('.filters').css('position','relative');
		}
})*/

/*
function search_suggest() {
	var search = document.getElementById('srcbar').value;
	var list = document.getElementById('srclst');
	list.innerHTML = "<option>yes</option>";
};*/

function datalist_value(n,c) {
	if (c == 0) {
		var input = document.getElementById('srcbar');
		var hidden = document.getElementById('srcbar-hidden');
	}
	if (c == 1) {
		var input = document.getElementById('auct'+n);
		var hidden = document.getElementById('auct'+n+'-hidden');
	}
	if (c == 2) {
		var input = document.getElementById('bauct'+n);
		var hidden = document.getElementById('bauct'+n+'-hidden');
	}
	var options = document.querySelectorAll('#' + input.getAttribute('list') + ' option');
	var chk = false;
	for (var i = 0; i < options.length; i++) {
		var option = options[i];
		if (option.innerHTML == input.value) {
			hidden.value = option.getAttribute('data-value');
			chk = true;
			break;
		}
	}
	if (chk == false) {hidden.value = input.value;}
}

function add_rowpom(txt) {
	var titles = [];
	var nicks = [];
	var names = [];
	var contents = [];
	var countries = [];
	var genres = [];
	var litschools = [];
	var prid = [];
	var pblsh = [];

	if (rowpomcount > 0) {
		for (var x=0;x<rowpomcount;x++) {
			titles.push(document.getElementById('ptitl'+x).value);
			nicks.push(document.getElementById('auct'+x).value);
			names.push(document.getElementById('auct'+x+'-hidden').value);
			contents.push(document.getElementById('pcont'+x).value);
			countries.push(document.getElementById('pcountry'+x).value);
			genres.push(document.getElementById('pgenre'+x).value);
			litschools.push(document.getElementById('plitschool'+x).value);
			prid.push(document.getElementById('prid'+x).value);
			pblsh.push(document.getElementById('pblsh1'+x).checked);
		}
	}

	var text = txt;
	text = text.split('%lid%').join(rowpomcount);
	document.getElementById('wrpm').innerHTML += text;
	
	if (rowpomcount > 0) {
		for (var x=0;x<titles.length;x++) {
			document.getElementById('ptitl'+x).value = titles[x];
			document.getElementById('auct'+x).value = nicks[x];
			document.getElementById('auct'+x+'-hidden').value = names[x];
			document.getElementById('pcont'+x).value = contents[x];
			document.getElementById('pcountry'+x).value = countries[x];
			document.getElementById('pgenre'+x).value = genres[x];
			document.getElementById('plitschool'+x).value = litschools[x];
			document.getElementById('prid'+x).value = prid[x];
			document.getElementById('pblsh1'+x).checked = pblsh[x];
		}
	}
	rowpomcount++;
};

function add_rowbok(txt) {
	var titlespt = [];
	var titlesen = [];
	var titleses = [];
	var nicks = [];
	var names = [];
	var years = [];
	var countries = [];
	var genres = [];
	var litschools = [];
	var series = [];
	var volumes = [];
	var licenses = [];
	var cdds = [];
	var tags = [];
	var sinopsispt = [];
	var sinopsisen = [];
	var sinopsises = [];
	var binfopt = [];
	var binfoen = [];
	var binfoes = [];
	var brid = [];
	var pblsh = [];

	if (rowbokcount > 0) {
		for (var x=0;x<rowbokcount;x++) {
			titlespt.push(document.getElementById('bnamept'+x).value);
			titlesen.push(document.getElementById('bnameen'+x).value);
			titleses.push(document.getElementById('bnamees'+x).value);
			nicks.push(document.getElementById('bauct'+x).value);
			names.push(document.getElementById('bauct'+x+'-hidden').value);
			years.push(document.getElementById('byear'+x).value);
			countries.push(document.getElementById('bcountry'+x).value);
			genres.push(document.getElementById('bgenre'+x).value);
			litschools.push(document.getElementById('blitschool'+x).value);
			series.push(document.getElementById('bseries'+x).value);
			volumes.push(document.getElementById('bvolume'+x).value);
			licenses.push(document.getElementById('blicense'+x).value);
			cdds.push(document.getElementById('bcdd'+x).value);
			tags.push(document.getElementById('btags'+x).value);
			sinopsispt.push(document.getElementById('bsinopsispt'+x).value);
			sinopsisen.push(document.getElementById('bsinopsisen'+x).value);
			sinopsises.push(document.getElementById('bsinopsises'+x).value);
			binfopt.push(document.getElementById('binfopt'+x).value);
			binfoen.push(document.getElementById('binfoen'+x).value);
			binfoes.push(document.getElementById('binfoes'+x).value);
			brid.push(document.getElementById('brid'+x).value);
			pblsh.push(document.getElementById('pblsh2'+x).checked);
		}
	}

	var text = txt;
	text = text.split('%lid%').join(rowbokcount);
	document.getElementById('wrbk').innerHTML += text;
	
	if (rowbokcount > 0) {
		for (var x=0;x<titlespt.length;x++) {
			document.getElementById('bnamept'+x).value = titlespt[x];
			document.getElementById('bnameen'+x).value = titlesen[x];
			document.getElementById('bnamees'+x).value = titleses[x];
			document.getElementById('bauct'+x).value = nicks[x];
			document.getElementById('bauct'+x+'-hidden').value = names[x];
			document.getElementById('byear'+x).value = years[x];
			document.getElementById('bcountry'+x).value = countries[x];
			document.getElementById('bgenre'+x).value = genres[x];
			document.getElementById('blitschool'+x).value = litschools[x];
			document.getElementById('bseries'+x).value = series[x];
			document.getElementById('bvolume'+x).value = volumes[x];
			document.getElementById('blicense'+x).value = licenses[x];
			document.getElementById('bcdd'+x).value = cdds[x];
			document.getElementById('btags'+x).value = tags[x];
			document.getElementById('bsinopsispt'+x).value = sinopsispt[x];
			document.getElementById('bsinopsisen'+x).value = sinopsisen[x];
			document.getElementById('bsinopsises'+x).value = sinopsises[x];
			document.getElementById('binfopt'+x).value = binfopt[x];
			document.getElementById('binfoen'+x).value = binfoen[x];
			document.getElementById('binfoes'+x).value = binfoes[x];
			document.getElementById('brid'+x).value = brid[x];
			document.getElementById('pblsh2'+x).checked = pblsh[x];
		}
	}
	rowbokcount++;
};

function add_rowuse(txt) {
	var namespt = [];
	var namesen = [];
	var nameses = [];
	var nicks = [];
	var births = [];
	var deaths = [];
	var country = [];
	var hometown = [];
	var gender = [];
	var emails = [];
	var academies = [];
	var bonds = [];
	var biopt = [];
	var bioen = [];
	var bioes = [];
	var arid = [];
	var pblsh = [];

	if (rowusecount > 0) {
		for (var x=0;x<rowusecount;x++) {
			namespt.push(document.getElementById('anamept'+x).value);
			namesen.push(document.getElementById('anameen'+x).value);
			nameses.push(document.getElementById('anamees'+x).value);
			nicks.push(document.getElementById('anick'+x).value);
			births.push(document.getElementById('abirth'+x).value);
			deaths.push(document.getElementById('adeath'+x).value);
			country.push(document.getElementById('acountry'+x).value);
			hometown.push(document.getElementById('ahometown'+x).value);
			gender.push(document.getElementById('agender'+x).value);
			emails.push(document.getElementById('aemail'+x).value);
			academies.push(document.getElementById('aacademy'+x).value);
			bonds.push(document.getElementById('abonds'+x).value);
			biopt.push(document.getElementById('abiopt'+x).value);
			bioen.push(document.getElementById('abioen'+x).value);
			bioes.push(document.getElementById('abioes'+x).value);
			arid.push(document.getElementById('arid'+x).value);
			pblsh.push(document.getElementById('pblsh3'+x).checked);
		}
	}

	var text = txt;
	text = text.split('%lid%').join(rowusecount);
	document.getElementById('wrat').innerHTML += text;
	
	if (rowusecount > 0) {
		for (var x=0;x<namespt.length;x++) {
			document.getElementById('anamept'+x).value = namespt[x];
			document.getElementById('anameen'+x).value = namesen[x];
			document.getElementById('anamees'+x).value = nameses[x];
			document.getElementById('anick'+x).value = nicks[x];
			document.getElementById('abirth'+x).value = births[x];
			document.getElementById('adeath'+x).value = deaths[x];
			document.getElementById('acountry'+x).value = country[x];
			document.getElementById('ahometown'+x).value = hometown[x];
			document.getElementById('agender'+x).value = gender[x];
			document.getElementById('aemail'+x).value = emails[x];
			document.getElementById('aacademy'+x).value = academies[x];
			document.getElementById('abonds'+x).value = bonds[x];
			document.getElementById('abiopt'+x).value = biopt[x];
			document.getElementById('abioen'+x).value = bioen[x];
			document.getElementById('abioes'+x).value = bioes[x];
			document.getElementById('arid'+x).value = arid[x];
			document.getElementById('pblsh3'+x).checked = pblsh[x];
		}
	}
	rowusecount++;
};

function drag_image(event, tid) {
	var dot, eventDoc, doc, body, pageX, pageY;

	event = event || window.event;
	if (event.pageX == null && event.clientX != null) {
		eventDoc = (event.target && event.target.ownerDocument) || document;
		doc = eventDoc.documentElement;
		body = eventDoc.body;

		event.pageX = event.clientX +
			(doc && doc.scrollLeft || body && body.scrollLeft || 0) -
			(doc && doc.clientLeft || body && body.clientLeft || 0);
		event.pageY = event.clientY +
			(doc && doc.scrollTop  || body && body.scrollTop  || 0) -
			(doc && doc.clientTop  || body && body.clientTop  || 0 );
	}

	mousePos = {
		x: event.pageX,
		y: event.pageY
	};

	var oldx = document.getElementById('bprev'+tid).style.left;
	var oldy = document.getElementById('bprev'+tid).style.top;
	document.getElementById('bprev'+tid).style.left = event.pageX+'px';
	document.getElementById('bprev'+tid).style.top = event.pageY+'px';
}

function email_autofill(lid) {
	var nick = document.getElementById('anick'+lid);
	var autofill = '';
	if (nick.value.match(/([A-Z]['A-Z]+|\b[A-Z]\b)/g) != null) {
		autofill += nick.value.match(/([A-Z]['A-Z]+|\b[A-Z]\b)/g)[0].toLowerCase();
	}
	autofill += '.';
	if (nick.value.match(/([a-z]['a-z]+|\b[a-z]\b)/g) != null) {
		autofill += nick.value.match(/([a-z]['a-z]+|\b[a-z]\b)/g)[0];
	}
	document.getElementById('aemail'+lid).value = autofill+'@literledge.com';
}

function edit_page(event, id) {
	var obj = document.getElementById(id);
	obj.innerHTML = "<form action='account/edit_page.php' method='post'> \
	<textarea id='revedit' class='textbox long' name='pagechanges'>" + obj.innerHTML + "</textarea> \
	<input type='submit' id='editreview' class='btpress' /> \
	<input type='hidden' name='webpage' value='" + window.location.href +"' /> \
	</form>";
	event.target.style = 'display: none';
}