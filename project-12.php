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

    <div id="content" class="almarge">
        <img class="full" src="img/projects/12_almarge/1.gif">

        <div id="text">
            <div id="introduction">
                <?php
                        echo "<span class='underline'>";
                        echo $almarge['title'];
                        echo "&#46;&nbsp;";
                        echo $almarge['subtitle'];
                        echo "</span>&nbsp;";
                        echo $almarge['introduction'];
                        echo "<br><br>";
                ?>
            </div>

            <!--
            <div id="credits" onclick="openCredits()">
                <?php
                        echo "<span id='plusminus'>&#43;</span>&nbsp;";
                        echo $general['credits'];
                ?>

            </div>
            <div id="dropdown" class="closed">
                <?php
                        echo "<br>";
                        echo $almarge['credits'];
                ?>
            </div>
            -->
        </div>

        <div id="imagewrapper">
            <img class="forty" src="img/projects/12_almarge/2.png">
            <img class="sixty" src="img/projects/12_almarge/3.png">
            <!-- <iframe class="sixty" src="https://player.vimeo.com/video/242774786?autoplay=0&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            <iframe class="forty" src="https://player.vimeo.com/video/248116209?autoplay=0&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
            <video class="sixty" src="img/projects/12_almarge/4.mp4" autoplay loop nocontrols></video>
            <video class="forty" src="img/projects/12_almarge/5.mp4" autoplay loop nocontrols></video>

            <img class="half" src="img/projects/12_almarge/6.png">
            <video class="videohalf" src="img/projects/12_almarge/7.mp4" autoplay loop nocontrols></video>
            <!-- <iframe class="videohalf" src="https://player.vimeo.com/video/248116745?autoplay=0&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
        </div>

        </br></br>

        <div id="text">
            <div id="introduction">
                <?php
                        echo "<span class='underline'>";
                        echo $almarge['title'];
                        echo "&#46;&nbsp;";
                        echo $almarge['subtitle'];
                        echo "</span>&nbsp;";
                        echo $almarge['introduction'];
                        echo "<br><br>";
                ?>
            </div>
        </div>

        <div id="">
            <img class="full" src="img/projects/12_almarge/8.png">

            <img class="full" src="img/projects/12_almarge/9e.gif">
            <div class="forty">
                <img src="img/projects/12_almarge/10e.gif">
            </div>
            <div class="sixty">
                <img src="img/projects/12_almarge/11e.gif">
            </div>

            <img class="full" src="img/projects/12_almarge/12e.gif">
        </div>

        <div id="text">
            <div id="credits" onclick="openCredits()">
                <?php
                        echo "<span id='plusminus'>&#43;</span>&nbsp;";
                        echo $general['credits'];
                ?>

            </div>
            <div id="dropdown" class="closed">
                <?php
                        echo "<br>";
                        echo $almarge['credits'];
                ?>
            </div>
        </div>

    </div>

    <script src="js/froogaloop.js"></script>
    <script src="js/vimeo.js"></script>

</body>
</html>
