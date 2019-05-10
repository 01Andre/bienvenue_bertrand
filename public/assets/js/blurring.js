$(document).ready(function () {

    //when button is clicked we call blurElement function
    setTimeout(function(){blurElement("#stalker1", 0);}, 1000);
    setTimeout(function(){blurElement("#stalker2", 0);}, 3000);
    setTimeout(function(){blurElement("#stalker3", 0);}, 6000);
    setTimeout(function(){blurElement("#stalker4", 0);}, 9000);
/*    blurElement("#stalker3", 0);
    setTimeout(myFunction, 3000);
    blurElement("#stalker4", 0);*/


});

//set the css3 blur to an element
function blurElement(element, size) {
    var filterVal = 'blur(' + size + 'px)';
    $(element).css({
        'filter': filterVal,
        'webkitFilter': filterVal,
        'mozFilter': filterVal,
        'oFilter': filterVal,
        'msFilter': filterVal,
        'transition': 'all 50s ease-out',
        '-webkit-transition': 'all 5s ease-out',
        '-moz-transition': 'all 5s ease-out',
        '-o-transition': 'all 5s ease-out'
    });

}
