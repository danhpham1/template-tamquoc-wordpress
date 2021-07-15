document.addEventListener("scroll",function(){
	if(document.documentElement.scrollTop >= 1500){
		document.querySelector('#top-button').classList.add("top-btn-active");
	}else{
		document.querySelector('#top-button').classList.remove("top-btn-active");
	}
})

const btn = document.getElementById('top-button');

btn.addEventListener('click', () => window.scrollTo({
  top: 400,
  behavior: 'smooth',
}));