$(document).ready(function () {
    const sticky = $("#sticky-button");
    if(sticky && sticky.length){
        $(sticky).click(function(){
            handleSticky(sticky);
        })
        if ($(window).width() < 1024){
            const sticky = $("#sticky-button");
            $(sticky).addClass('sticky-right-close-hide');
            $(sticky).parent().parent().addClass('sticky-righ-hide');
        }else{
            const sticky = $("#sticky-button");
            $(sticky).removeClass('sticky-right-close-hide');
            $(sticky).parent().parent().removeClass('sticky-righ-hide');
        }
    }
});

function handleSticky(sticky){
    $(sticky).toggleClass('sticky-right-close-hide');
    $(sticky).parent().parent().toggleClass('sticky-righ-hide');
}