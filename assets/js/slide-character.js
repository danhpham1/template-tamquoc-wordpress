var slideIndex = 1;
showDivs(slideIndex,'nguy');

function plusDivs(n,keyword) {
  showDivs(slideIndex += n,keyword);
}

function showDivs(n,keywords) {
  var i;
  var x = document.querySelectorAll(`#${keywords} .character-system-slide`);
  if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      x[slideIndex-1].style.display = "block";  
    }


    function onClickSelectCharacterInfo(keyword){
      if(keyword){
        var elArr = document.getElementsByClassName('character-system--bottom');
        for(i = 0; i < elArr.length; i++){
          elArr[i].setAttribute("style","display:none");
        }
        var el = document.querySelector(`#${keyword}`);
        if(el){
          el.setAttribute("style","display:block");
          resetDivs(keyword);
        }
      }
    }

    function resetDivs(keyword){
      var x = document.querySelectorAll(`#${keyword} .character-system-slide`);
      if(x){
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        slideIndex = 1;
        x[0].style.display = "block"
      }
    }

    onClickSelectCharacterInfo('nguy');