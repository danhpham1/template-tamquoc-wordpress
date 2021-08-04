$(document).ready(function(){
	$("#search-submit-btn").click(function(e){
		e.preventDefault();
		if($("#search-form label .search-field").val() == ''){
			$("#search-form label input").toggleClass('search-input-active');
			$("#search-submit-btn").toggleClass('search-submit-active');
		}else{
			$("#search-form").submit();
		}
	})

	$("#search-mobile-submit-btn").click(function(e){
		e.preventDefault();
		if($("#search-mobile-form label .search-field").val() == ''){
			$("#search-mobile-form label input").toggleClass('search-input-active');
			$("#search-mobile-submit-btn").toggleClass('search-submit-active');
		}else{
			$("#search-mobile-form").submit();
		}
	})
})