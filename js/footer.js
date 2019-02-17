var elements = document.getElementsByTagName('footer');
if (typeof elements != "undefined" && elements.length > 0) {
	var footer = elements[0];

	var first = footer.firstChild; //childNodes[0];

	var lang = document.location.href;
	lang = lang.substring(lang.lastIndexOf('/') + 1, lang.length);

	var stAbout = 'About';
	var stContact = 'Contact';
	var stDocumentation = 'Documentation';
	var stHome = 'Main';
	var stDonationsForDevelopment = 'Donations for development Libre.Life project';

	if (lang == 'ru') {
		stAbout = 'Про Libre';
		stContact = 'Контакты';
		stDocumentation = 'Документация';
		stHome = 'Главная';
		stDonationsForDevelopment = 'Пожертвования на разработку проекта Libre.Life';
	}


	// ---- nav ----

	var nav = document.createElement('nav');
	footer.insertBefore(nav, first);

	// -- 1 --

	var div = document.createElement('div');
	div.className = 'footer-box';
	div.id = 'footer-box-1';
	div.innerHTML = '<a href="/'+lang+'">'+stHome+'</a>'+
		'<br/><a href="/contact/'+lang+'">'+stContact+'</a>';
	nav.appendChild(div);

	// -- 2 --

	var div = document.createElement('div');
	div.className = 'footer-box';
	div.id = 'footer-box-2';
	div.innerHTML = '<a href="/doc/'+lang+'">'+stDocumentation+'</a>'+
		'<br/><a href="/doc/about/'+lang+'">'+stAbout+'</a>';
	nav.appendChild(div);

	// -- disclaimer --

	var div = document.createElement('div');
	div.className = 'footer-disclaimer';
	div.id = 'footer-disclaimer';
	var st = '';
	if (lang == 'ru') {
		st = st+'<p class="h"><a href="/donate/ru" style="text-decoration: underline">'+stDonationsForDevelopment+'</a></p>';
		st = st+'<p class="h">По всем вопросам обращайтесь:'+
			' <a href="/people/1/ru">Ярослав Логинов</a>';
	} else {
		st = st+'<p class="h"><a href="/donate/en" style="text-decoration: underline">'+stDonationsForDevelopment+'</a></p>';
		st = st+'<p class="h">For all inquiries please contact:'+
			' <a href="/people/1/en">Yaroslav Loginov</a>';
	}
	div.innerHTML = st+' &lt;prof1983@yandex.ru&gt;'+
		' <a href="http://vk.com/prof1983"><img src="/img/sn/vk.png" class="sm"></a>'+
		' <a href="http://fb.com/prof1983"><img src="/img/sn/fb.png" class="sm"></a>'+
		' <a href="http://lnkd.in/fsTFb9"><img src="/img/sn/in.png" class="sm"></a>'+
		' <a href="https://twitter.com/prof1983"><img src="/img/sn/tw.png" class="sm"></a>'+
		' <a href="https://plus.google.com/104932809573151422561"><img src="/img/sn/gp.png" class="sm"></a>'+
		' <a href="http://prof1983.moikrug.ru/"><img src="/img/sn/mk.png" class="sm"></a>';
		'</p>';

	footer.insertBefore(div, first);

	// -- copyright --

	var div = document.createElement('div');
	div.className = 'footer-copyright';
	div.id = 'footer-copyright';
	div.innerHTML = '<a href="/doc/license/'+lang+'">&copy;</a>'+
		' <a href="http://libre.life">Libre.Life</a>'+
		' <a href="/doc/ideo/history">7522-7526</a>';
	footer.insertBefore(div, first);
}