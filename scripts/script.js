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
			obj.style.height = '250px';
			obj.style.opacity = '100%';
			fad.style.visibility = 'visible';
			fad.style.opacity = '50%';
			}
		else {
			obj.style.visibility = 'hidden';
			obj.style.height = '0px';
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
	var selected3 = ogen.options[ogen.selectedIndex].value;
	var selected4 = olsc.options[olsc.selectedIndex].value;
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

function previmg(event,target) {
	var obj = document.getElementById(target);
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

function search_suggest(text) {
	$.ajax({
		type: "GET",
		url: "upload.php",
		data: "seasugg=" + text,
		success: function(result) {
			$("#somewhere").html(result);
		}
	});
};