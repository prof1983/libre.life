window.isRetina = (window.devicePixelRatio > 1.5);
if (isRetina) {
	document.getElementsByTagName('html')[0].classList.add('2x');
}

var elements = document.getElementsByTagName('header');
if (typeof elements != "undefined" && elements.length > 0) {
	var header = elements[0];

	// ---- nav ----

	var nav = document.createElement('nav');
	header.appendChild(nav);

	// -- main menu --

	var mm = document.createElement('div');
	mm.id = 'mm';
	nav.appendChild(mm);

	// -- lang --

	var lang = document.createElement('div');
	lang.id = 'lang';
	var st = document.location.href;
	st = st.substring(st.lastIndexOf('/') + 1, st.length);
	if (st == 'en') {
		lang.innerHTML = '<b>en</b><a href="ru">ru</a>';
	} else if (st == 'ru') {
		lang.innerHTML = '<a href="en">en</a><b>ru</b>';
	} else {
		lang.innerHTML = '<a href="en">en</a><a href="ru">ru</a>';
	}
	nav.appendChild(lang);
}