$(document).ready(function()
{
    function activeTabs(obj){
        if(obj){
            var id = $(obj).find('a').attr('href');
            $('#tabs li').removeClass('tabs-active');
            $(obj).addClass('tabs-active');
            $('.main--news-content').hide();
            $(id).show();
        }
    }

    $('#tabs li').click(function(){
        activeTabs(this);
        return false;
    })

    activeTabs($('#tabs li:first-child'));
});

var slideIndex = 1;
showDivsImage(slideIndex);

function plusDivs(n) {
  showDivsImage(slideIndex += n);
}

function currentDiv(n) {
  showDivsImage(slideIndex = n);
}

function showDivsImage(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}