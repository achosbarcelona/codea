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
    
	<title>Codea Estudio</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" href="css/infinite.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hover.css">
</head>

<body ng-app="app" ng-controller="MainController">

<!--
    <div id="menu" style="position:fixed">
        <p>
            <span>
                <a href="#">CODEA<img src="img/logo.png"></a>
            </span>
        </p>
    </div>
-->
    
    <div id="content">
        <div id="text">
            <div class="introduction twocollums fst">                
                <a class='hvr-underline underline' href="mailto:hello@codeastudio.com?subject=Hola!">hello@codeastudio.com</a><br>
                C/Zamora 45-47 1º 1ª<br>
                08005 Barcelona<br>
                <a href="tel:34-620-561-603">+34 620 561 603</a><br>
                <br>
                Alex Martí<br>
                <a class="hvr-underline underline" href="mailto:alex@codeastudio.com?subject=Hola Alex!">alex@codeastudio.com</a><br>
                <a href="tel:34-620-561-603">+34 620 561 603</a><br>
                <br>
                Jose Rosales<br>
                <a class="hvr-underline underline" href="mailto:Jose@codeastudio.com?subject=Hola Jose!">jose@codeastudio.com</a><br>
                <a href="tel:34-661-942-461">+34 661 942 461</a><br>
                <br>
                Ricard Sunyol<br>
                <a class="hvr-underline underline" href="mailto:ricard@codeastudio.com?subject=Hola Ricard!">ricard@codeastudio.com</a><br>
                <a href="tel:34-606-314-237">+34 606 314 237</a><br>
                <br>
                <a class="hvr-underline underline" href="https://www.facebook.com/codeastudio" target="_blank">Facebook, </a>
                <a class="hvr-underline underline" href="https://vimeo.com/codeastudio" target="_blank">Vimeo, </a><br>
                <a class="hvr-underline underline" href="https://www.instagram.com/codeastudio" target="_blank">Instagram.</a>
            </div>
        </div>
        
        <a href='mailto:hello@codeastudio.com?Subject=Hola!'>
            <div id="contact_hand">
                <img src="img/contact.gif">
                    
                <div id="hello"> 
                    <p class="small">
                        Hello!<br>
                        How are you?
                    </p>
                </div>
            </div>
        </a>
        
    </div>
    
    <script src="js/jquery.js"></script>
    
</body>
</html>