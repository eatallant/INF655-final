/*
* ANIMATIONS
*/

var animateHTML = function(queryClass, addClass) {
	var elems;
	var windowHeight;
	function init() {
		elems = document.getElementsByClassName(queryClass);
		windowHeight = window.innerHeight;
		addEventHandlers();
		checkPosition();
	}
	function addEventHandlers() {
		window.addEventListener('scroll', checkPosition);
		window.addEventListener('resize', init);
	}
	function checkPosition() {
		for (var i = 0; i < elems.length; i++) {
			var positionFromTop = elems[i].getBoundingClientRect().top;
			if (positionFromTop - windowHeight <= 0) {
				elems[i].className = elems[i].className.replace(
					queryClass,
					addClass
				);
			}
		}
	}
	return {
		init: init
	};
};
animateHTML('query--fade-in','fade-in').init();
animateHTML('query--fade-in-out','fade-in-out').init();
animateHTML('query--fade-in-out-hold','fade-in-out-hold').init();


/*
 * Cookie getter and setter functions
 */
function setCookie(name,value,days) {
	var expires = "";
	if (days) {
		var date = new Date();
		date.setTime(date.getTime() + (days*24*60*60*1000));
		expires = "; expires=" + date.toUTCString();
	}
	document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}   

function getCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}


/*
 * if first page visit, set bannerSeen cookie
 * if not first page visit, add 'hidden' class to home-banner-promo
 */
(function() {
	if(getCookie('bannerSeen') == null) {
		setCookie('bannerSeen','page visited:yes',1000);
		
	} else {
		document.getElementById('home-banner-promo').classList.add("hidden");
		
	}
})();
console.log(getCookie('bannerSeen'));
