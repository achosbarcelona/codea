<!DOCTYPE html>
<html>
<?php
  $ln = "en";
    isset($_GET['ln']) ? $ln = $_GET['ln'] : $ln = "en";

    switch($ln) {
        case 'es':
            include 'idiomas/es.php';
            break;

        case 'en':
            include 'idiomas/en.php';
            break;
    }
?>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Codea Studio</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" href="css/infinite.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hover.css">

    <script src="js/jquery.js"></script>
    <script src="js/projects.js"></script>
</head>

<body id="frame_body">

    <div id="content" class="ayuntament">
        <!--
        <iframe id="intro1" src="https://player.vimeo.com/video/250305064?autoplay=0&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        <iframe id="intro2" src="https://player.vimeo.com/video/250304791?autoplay=0&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
        <div class="videoswrap">
            <div class="videowrap">
                <video src="img/projects/14_ayuntament/gat_HD.mp4" class="video" nocontrols></video>
                <button class="video-button play-button">
                    <span class='hvr-wobble'>play</span>
                </button>
                <button class="video-button pause-button hidden">
                    <span class='hvr-wobble'>pause</span>
                </button>
            </div>
            <div class="videowrap">
                <video src="img/projects/14_ayuntament/ovella_HD.mp4" class="video" nocontrols></video>
                <button class="video-button play-button">
                    <span class='hvr-wobble'>play</span>
                </button>
                <button class="video-button pause-button hidden">
                    <span class='hvr-wobble'>pause</span>
                </button>
            </div>
        </div>

        <div id="text">
            <div id="introduction">
                <?php
                        echo "<span class='underline'>";
                        echo $ayuntament['title'];
                        echo "&#46;&nbsp;";
                        echo $ayuntament['subtitle'];
                        echo "</span>&nbsp;";
                        echo $ayuntament['introduction'];
                        echo "<br><br>";
                ?>
            </div>
            <div id="credits" onclick="openCredits()">
                <?php
                        echo "<span id='plusminus'>&#43;</span>&nbsp;";
                        echo $general['credits'];
                ?>

            </div>
            <div id="dropdown" class="closed">
                <?php
                        echo "<br>";
                        echo $ayuntament['credits'];
                ?>
            </div>
        </div>

        <!--
        <div id="imagewrapper">
            <img src="img/projects/13_ayuntament/1.jpg">
            <img src="img/projects/13_ayuntament/2.jpg">
            <img src="img/projects/13_ayuntament/3.jpg">
            <img src="img/projects/13_ayuntament/4.jpg">
            <img src="img/projects/13_ayuntament/5.jpg">
            <img src="img/projects/13_ayuntament/6.jpg">
        </div>
        -->
    </div>
    <script>
        var playButtons = document.querySelectorAll('.play-button');
        var pauseButtons = document.querySelectorAll('.pause-button');

        for(var i = 0; i < playButtons.length; i++){
            playButtons[i].addEventListener('click', function(e){
                toggleButtons('pause', e);
                e.target.parentNode.querySelector('.video').play();
            });
        }
        for(var i = 0; i < pauseButtons.length; i++){
            pauseButtons[i].addEventListener('click', function(e){
                toggleButtons('play', e);
                e.target.parentNode.querySelector('.video').pause();
            });
        }

        function toggleButtons(type, ev){
            ev.target.classList.add('hidden');
            ev.target.parentNode.querySelector('.' + type + '-button').classList.remove('hidden');
        }
    </script>
    <script src="js/froogaloop.js"></script>
    <script src="js/vimeo.js"></script>

</body>
</html>
