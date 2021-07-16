function openBar(){
	const barEl = $(".header--menu-mobile-link");
	if(barEl.length >= 1 && barEl){
		$(barEl).removeClass("header--menu-mobile-hide");
		$('html').css('overflow','hidden');
		$('.top').css('z-index','300');
	}
}

function closeBar(){
	const barEl = $(".header--menu-mobile-link");
	if(barEl.length >= 1 && barEl){
		$(barEl).addClass("header--menu-mobile-hide");
		$('html').removeAttr("style");
		$('.top').css('z-index','10');
	}
}