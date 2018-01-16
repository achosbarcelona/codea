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
            <?php 
            echo "<div class='introduction big'>";
            echo $studio['big'];
            echo "</div><div class='introduction small'> ";

            echo "<span class='underline'>";
            echo $studio['awards_titel'];
            echo "</span>";
            echo $studio['awards'];
            echo "<br><br>";
            
            echo "<span class='underline'>";
            echo $studio['talks_titel'];
            echo "</span>";
            echo $studio['talks'];
            echo "<br><br>";
            
            echo "<span class='underline'>";
            echo $studio['clients_titel'];
            echo "</span>";
            echo $studio['clients'];
            echo "<br><br>";
            
            echo "<span class='underline'>";
            echo $studio['featured_titel'];
            echo "</span>";
            echo $studio['featured'];
            echo "<br><br></div>";
            
            echo "<img src='img/studio/codea.jpg'>";
                
            ?>
            
        </div>
    </div>
    
    <script src="js/jquery.js"></script>
    
</body>
</html>