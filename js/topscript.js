function openFrame(titel) {
    //show overlay
    $('#overlay').css('display','block');
    $('#menu').removeClass('open');
    $('#logo_animation').removeClass('open');
    $('.repeat').addClass('close');
    
    document.getElementById('exit').style.transform = "translate(" + initialScrollbarWidth + "px,0)"
    
    setTimeout(function(){
        $('#iframe_container').css('opacity','1');
        $('.burger').css('display','none');
        chooseRandomLogo();
    },350);
    setTimeout(function(){
        $('#iframe_menu').addClass('open');
        $('#logo_animation').addClass('open');
        $('#iframe_container').addClass('open');
    },700);
    setTimeout(function(){
        $('body').css('overflow-y','hidden');
        $('body').css('overflow-x','hidden');
        document.getElementById('exit').style.transform = "";
        
        $('#infinite').css('opacity','0');
        
        $("iframe").contents().find("body").mousemove(function(){
            if ( $(window).width() > 1030 ) {
                clearScreensaver();
            };
        });
    },1050);
    
    //change titel
    var titel;
    
    if (window.location.href.substring((window.location.href.length-6),(window.location.href.length)) == "?ln=es") {
        if (titel == "studio"){
            var es_titel = "estudio"
        } else if (titel == "contact"){
            var es_titel = "contacto"
        } else if (titel == "knock-knock"){
            var es_titel = "toc-toc"
        } else {
            var es_titel = titel;
        }
        $('#titel')[0].innerHTML = es_titel;
    } else {
        $('#titel')[0].innerHTML = titel;
    }
    

    //change source
    if (titel == 'knock-knock'){
        var source = "http://a.ipv4.pro:8080/";
    } else {
        if (window.location.href.substring((window.location.href.length-6),(window.location.href.length-2)) == "?ln=") {
            var source = titel + ".php?ln=" + window.location.href.substring((window.location.href.length-2),window.location.href.length);
        } else {
            var source = titel + ".php"
        }
    }
    
//    if (window.location.href.substring((window.location.href.length-6),(window.location.href.length-2)) == "?ln=") {
//        var source = titel + ".php?ln=" + window.location.href.substring((window.location.href.length-2),window.location.href.length);
//    } else {
//        var source = titel + ".php"
//    }
    
    console.log(source);
    $('#overlay').find('iframe')[0].src = source;

    //look if project or not
    $('#scroll_wrapper').removeClass();
    $('#scroll_wrapper').addClass(titel);
    if (titel.substring(0, 7) == "project") {
        $('#project_nav').css('display','block');
        $('#mobile_nav').css('opacity','1');
        setTimeout(function(){
            $('#mobile_nav').addClass('open');
        },700);
        $('#titel').css('opacity','0');
        $('#iframe_container').css('background-color','black');
    } else {
        $('#project_nav').css('display','none');
        $('#mobile_nav').css('opacity','0');
        $('#titel').css('opacity','1');
        $('#iframe_container').css('background-color','#eee');
    }    
};

function closeFrame() {
    $('#infinite').css('opacity','1');
    $('#iframe_container').removeClass('open');
    $('#iframe_menu').removeClass('open');
    $('#logo_animation').removeClass('open');
    $('#mobile_nav').removeClass('open');
    $('#iframe_container').css('opacity','0');
    $('body').css('overflow-y','auto');
    $('body').css('overflow-x','hidden');
    document.getElementById('exit').style.transform = "translate(" + initialScrollbarWidth + "px,0)"
    
    setTimeout(function(){
        $('.burger').css('display','block');
        chooseRandomLogo();
    },350);
    setTimeout(function(){
        $('#overlay').css('display','none');
        $('#overlay').find('iframe')[0].src = "";
        $('#menu').addClass('open');
        $('#logo_animation').addClass('open');
        $('.repeat').removeClass('close');
        $('#scroll_wrapper').removeClass();
        
        document.getElementById('exit').style.transform = "";
    },700);
}

function changeProj(direction) {
    var direction;
    var currentTitel = $('#scroll_wrapper')[0].className;
    var currentSrc = currentTitel.substring(8, currentTitel.length);
    //see how many projects there are (minus footer projects cause they are the same then header)
    var projects = $('figure').length - $('footer').find('figure').length;

    //look for the dirrection
    if (direction === 'prev') {
        //make loop
        if (currentSrc == 1) {
            var newNmbr = projects;
        } else {
            var newNmbr = 1*currentSrc - 1;
        }
        //place new source and name iframe correctly
        var newTitel = "project-" + newNmbr;
        
        if (window.location.href.substring((window.location.href.length-6),(window.location.href.length-2)) == "?ln=") {
            var newSrc = newTitel + ".php?ln=" + window.location.href.substring((window.location.href.length-2),window.location.href.length);
        } else {
            var newSrc = newTitel + ".php";
        }
        
        $('#scroll_wrapper').removeClass();
        $('#scroll_wrapper').addClass(newTitel);
        $('#overlay').find('iframe')[0].src = newSrc;

    } else if (direction === 'next') {
        //make loop
        if (currentSrc == projects) {
            var newNmbr = 1;
        } else {
            var newNmbr = 1*currentSrc + 1;
        }
        //place new source and name iframe correctly
        var newTitel = "project-" + newNmbr;
        
        if (window.location.href.substring((window.location.href.length-6),(window.location.href.length-2)) == "?ln=") {
            var newSrc = newTitel + ".php?ln=" + window.location.href.substring((window.location.href.length-2),window.location.href.length);
        } else {
            var newSrc = newTitel + ".php";
        }

        $('#scroll_wrapper').removeClass();
        $('#scroll_wrapper').addClass(newTitel);
        $('#overlay').find('iframe')[0].src = newSrc;
    }
    console.log(newTitel);
    
    setTimeout(function(){
        $("iframe").contents().find("body").mousemove(function(){
            clearScreensaver();
        });
    },350);
}

var randomNmbr = 1;
var waitInterval;

function chooseRandomLogo() {
    randomNmbr = Math.floor(Math.random() * 4) + 1;
    $('#menu p span:first-child img')[0].src = "img/logo" + randomNmbr + ".png";
    $('#logo_animation img').attr("src", "img/logo_animado_" + randomNmbr + ".gif");
    $('#menu p span:first-child img')[0].style = "";
    $('#iframe_menu .logo img')[0].src = "img/logo" + randomNmbr + ".png";
    console.log("logo number:" + randomNmbr);
}

var initialScrollbarWidth;

//choose logo on load
$(document).ready(function(){
    chooseRandomLogo();
    
    initialScrollbarWidth = getScrollbarWidth();
    
    $('#exit')
    .mouseover(function(){
        $(this).addClass('hover');
    })
    .mouseout(function(){
        $(this).removeClass('hover');
    })
    .click(function(){
        $(this).removeClass('hover');
    });
    
//    window.location.hash = '#inner_grid';
});

//body fade-in onload
window.onload = function(){
    
    setTimeout(function(){
        
        if ( $(window).width() > 1030 && !(navigator.userAgent.toLowerCase().indexOf('firefox') > -1)) {
            var startPosition = $(document).height() - $(window).height() - $('#menu')[0].offsetHeight;
            window.scrollTo(0,startPosition);
        } else {
            window.scrollTo(0,0);
        };
        
        document.body.style.opacity = "1"; 
    }, 100);

    
    if ( $(window).width() > 1030 ) {
        $('.logo_img')
        .mouseenter(function(){
            logoAnimation(randomNmbr);
            waitInterval = setInterval(function(){
                logoAnimation(randomNmbr);
            },2000);
        })
        .mouseleave(function(){
            clearInterval(waitInterval);
        });
    } 
    
//    else {
//        $('.logo_img')
//        .click(function(){
//            logoAnimation(randomNmbr);
//        })
//    }
    
}

$(document).keydown(function(e) {
    if (e.which == 13) {
        chooseRandomLogo();
    }
});





// screensaver

if ( $(window).width() > 1030 ) {
    var initialWaitTime = 10000;
    var screenSaverInterval;
    var timeout;

    var screenSaver = function(){
        logoAnimation(randomNmbr);
        screenSaverInterval = setInterval(function(){
            logoAnimation(randomNmbr);
        },2500);
    };

    document.onmousemove = function(){
        clearScreensaver();
    }

    function clearScreensaver() {
        clearInterval(screenSaverInterval);
        clearTimeout(timeout);
        timeout = setTimeout(screenSaver, initialWaitTime);
    };

    timeout = setTimeout(screenSaver, initialWaitTime);
};




//var aE = document.querySelectorAll('a:not(.notThis)');
//
//[].forEach.call(aE, function (aElement) {
//    'use strict';
//    aElement.onclick = function(e) {
//        e.preventDefault();
//    };
//});




function getScrollbarWidth() {
    var outer = document.createElement("div");
    outer.style.visibility = "hidden";
    outer.style.width = "100px";
    outer.style.msOverflowStyle = "scrollbar"; // needed for WinJS apps

    document.body.appendChild(outer);

    var widthNoScroll = outer.offsetWidth;
    // force scrollbars
    outer.style.overflow = "scroll";

    // add innerdiv
    var inner = document.createElement("div");
    inner.style.width = "100%";
    outer.appendChild(inner);        

    var widthWithScroll = inner.offsetWidth;

    // remove divs
    outer.parentNode.removeChild(outer);

    return widthNoScroll - widthWithScroll;
}