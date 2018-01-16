if ( $(window).width() > 1030 ) {
    //fix description at bottom
    document.addEventListener("scroll", fixDescription);
    document.addEventListener("mousemove", fixDescription);

    function fixDescription() {
        if ($('figure:hover').length > 0) {
            var elementHeight = $('figure:hover')[0].offsetHeight;
            var elementPosition = $('figure:hover').offset().top - $(window).scrollTop();
            var windowHeight = window.innerHeight;

            if ((elementPosition + elementHeight) > windowHeight && !((elementPosition + $('figcaption')[0].offsetHeight) > windowHeight)) {
                var figLeft = $('figure:hover').offset().left;
                var figWidth = $('figure:hover')[0].offsetWidth;
                $('figure:hover').find('figcaption')[0].style.position = 'fixed';
                $('figure:hover').find('figcaption')[0].style.left = figLeft + 'px';
                $('figure:hover').find('figcaption')[0].style.width = figWidth + 'px';
            } else {
                $('figure').each(function(){
                    $(this).find('figcaption')[0].style = '';
                });
            }
        }
    };
};





var hoverable = true;
function logoAnimation(randomNmbr) {
    
    if (hoverable) {
//        $('#preload img').attr("src", "");
        
        document.getElementById('logo_animation').style.display = "block";
        
        $('#logo_animation img').attr("src", "");
        $('#logo_animation img').attr("src", "img/logo_animado_" + randomNmbr + ".gif");
        
        $('.logo_img').each(function(){
            $(this)[0].style.opacity = "0";
        });

        hoverable = false;
        
        setTimeout (function(){
            document.getElementById('logo_animation').style.display = "none";
            $('.logo_img').each(function(){
                $(this)[0].style.opacity = "1";
            });
            hoverable = true;
        },1200);
    }
}



setInterval(function(){
    changeTitle();
}, 350);

function changeTitle() {
    var current = document.title;
    var partA = current.substr(0,(current.length - 1));
    var partB = current.substr((current.length - 1),current.length);
    var newTitle = partB + partA;
    document.title = newTitle;
}



