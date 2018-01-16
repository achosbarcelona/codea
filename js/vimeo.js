// Video Controll

var iframe = document.getElementById('intro');
if (iframe != null) {
    var player = $f(iframe);
}
 // $f == Froogaloop

var playButton = document.getElementById("play_button");
playButton.addEventListener("click", function() {
    player.api("play");
    document.getElementById("play_button").style.opacity = "0";
    setTimeout(function(){
        document.getElementById("play_button").style.display = "none";
    }, 400);
});

//$(document).ready(function(){
//    $("#play_button")
//    .mouseover(function(){
//        $('#play_button p')[0].style.opacity = "1";
//    })
//    .mouseout(function(){
//        $('#play_button p')[0].style.opacity = "0";
//    });
//});