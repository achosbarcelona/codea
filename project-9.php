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

    <div id="content" class="praad">
        <iframe id="intro" src="https://player.vimeo.com/video/204163377?autoplay=0&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        
        <div id="play_button">
                <?php 
                        echo "<p><span class='hvr-wobble'>";
                        echo $general['play'];
                        echo "</span></p>";
                ?>
        </div>
        
        <div id="text">
            <div id="introduction">
                <?php 
                        echo "<span class='underline'>";
                        echo $praad['title'];
                        echo "&#46;&nbsp;";
                        echo $praad['subtitle'];
                        echo "</span>&nbsp;";
                        echo $praad['introduction'];
                        echo "<br><br>";
                ?>
            </div>
            <div id="credits" onclick="openCredits()" style="display:none">
                <?php 
                        echo "<span id='plusminus'>&#43;</span>&nbsp;";
                        echo $general['credits'];
                ?>
                
            </div>
            <div id="dropdown" class="closed" style="display:none">
                <?php 
                        echo "<br>";
                        echo $praad['credits'];
                ?>
            </div>
        </div>
            
        <div id="imagewrapper">
            <img src="img/projects/0_praad/1.jpg">
            <img src="img/projects/0_praad/2.jpg">
            <img src="img/projects/0_praad/3.jpg">
            <img src="img/projects/0_praad/4.jpg">
            <img src="img/projects/0_praad/5.jpg">
            <img src="img/projects/0_praad/6.jpg">
        </div>
    </div>

    <script src="js/froogaloop.js"></script>
    <script src="js/vimeo.js"></script>

</body>
</html>