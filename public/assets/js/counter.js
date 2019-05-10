$('.counter-count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 50000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

var i = 0;
function makeProgress(){
    if(i < 100){
        i = i + 1;
        $(".progress-bar").css("width", i + "%").text(i + " PR acceptés par Sylvain");
    }
    // Wait for sometime before running this script again
    setTimeout("makeProgress()", 3000);
}
makeProgress();
