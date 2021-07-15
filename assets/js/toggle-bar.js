function openBar(){
	const barEl = $(".header--menu-mobile-link");
	if(barEl.length >= 1 && barEl){
		$(barEl).removeClass("header--menu-mobile-hide");
		$('html').css('overflow','hidden');
	}
}

function closeBar(){
	const barEl = $(".header--menu-mobile-link");
	if(barEl.length >= 1 && barEl){
		$(barEl).addClass("header--menu-mobile-hide");
		$('html').removeAttr("style")
	}
}