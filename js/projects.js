function openCredits() {
    var dropdownHeight = $('#dropdown')[0].offsetHeight + 3;
    if ($('#dropdown')[0].className == 'closed') {
        $('#dropdown').removeClass('closed');
        $('#dropdown').css('margin-top','0');
        console.log('open');
        
        $('#plusminus').text(function(i, oldText) {
            return oldText ? '–' : oldText;
        });
        
        if ( $(window).width() > 500 ) {
            $('#plusminus').css('margin-left','2px');
            $('#plusminus').css('margin-right','2px');
        } else {
            $('#plusminus').css('margin-left','1px');
            $('#plusminus').css('margin-right','1px');
        };
        
        
        
        
    } else {
        $('#dropdown').addClass('closed');
        $('#dropdown').css('margin-top','-' + dropdownHeight + 'px');
        console.log('close');
        
        $('#plusminus').text(function(i, oldText) {
            return oldText ? '+' : oldText;
        });
        
        $('#plusminus').css('margin-left','0px');
        $('#plusminus').css('margin-right','0px');
        
    }
}
$(document).ready(function(){
    setTimeout(function(){
        $('#dropdown').css('display','block');
        var dropdownHeight = $('#dropdown')[0].offsetHeight + 3;
        $('#dropdown').css('margin-top','-' + dropdownHeight + 'px');

        setTimeout(function(){
            $('#dropdown').css('-webkit-transition','0.35s');
            $('#dropdown').css('transition','0.35s'); 
        },350);
    },1000); 
});

//        var resizeTimer;
//        $(window).on('resize', function(e) {
//            clearTimeout(resizeTimer);
//            resizeTimer = setTimeout(function() {
//                var dropdownHeight = $('#dropdown')[0].offsetHeight;
//                $('#dropdown').css('margin-top','-' + dropdownHeight + 'px');
//            }, 100);
//        });


