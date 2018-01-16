<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Article">
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
	<title><?php echo $general['codea']; ?></title>
    
    <meta itemprop="name" content="Codea Studio">
    <meta name="twitter:title" content="Codea Studio">
    <meta property="og:title" content="Codea Studio" />
    <meta property="og:site_name" content="Codea Studio" />
    <meta name="twitter:card" content="codea_studio">
    
    <meta property="og:type" content="website" />
    
<!--
    <meta name="description" content="Page description. No longer than 155 characters." />
    <meta itemprop="description" content="This is the page description">
    <meta name="twitter:description" content="Page description less than 200 characters">
    <meta property="og:description" content="Description Here" />
-->
    
    <meta property="og:url" content="http://codeastudio.com/" />
    
    <!-- summary card with large image must be at least 280x150px -->
    <meta itemprop="image" content="http://codeastudio.com/share.jpg">
    <meta property="og:image" content="http://codeastudio.com/share.jpg" />
    <meta name="twitter:image:src" content="http://codeastudio.com/share.jpg">
    
    <!-- accounts -->
<!--
    <meta name="twitter:site" content="@publisher_handle">    
    <meta name="twitter:creator" content="@author_handle">
    <meta property="fb:admins" content="Facebook numberic ID" />
-->

	<link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/infinite.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/hover.css">
    
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon.ico//apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon.ico//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon.ico//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon.ico//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon.ico//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon.ico//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon.ico//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon.ico//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon.ico//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon.ico//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.ico//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.ico//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico//favicon-16x16.png">
    <link rel="manifest" href="img/favicon.ico//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon.ico//ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <script src="js/jquery.js"></script>
    <script src="js/topscript.js"></script>
    
</head>


<body ng-app="app" ng-controller="MainController" style="opacity:0">

    <div id="logo_animation" class="open" style="display:none; z-index:10000; pointer-events:none"><img src=""></div>

    <div id="menu" class="open" style="position:fixed">
        
        <div id="menu_content_container">
            
            <div class="test">
                <p>
                    <span><img class="logo_img" src="img/logo1.png"></span>
                    <span onclick="openFrame('studio')" class="nomobile hvr-wobble"><?php echo $menu['studio']['name']; ?></span>
                    <span onclick="openFrame('contact')" class="nomobile hvr-tada"><?php echo $menu['contact']['name']; ?></span>
                    <span onclick="openFrame('knock-knock')" class="nomobile hvr-knock"><?php echo $menu['knock']['name']; ?></span>
                    <span class="nomobile hvr-rotate"><a href="?ln=<?php echo $menu['idioma'][abc]['name']; ?>"><?php echo $menu['idioma'][0]['name']; ?></a></span>
                </p>
            </div>

            <div class="hamburger">
                <!--
                <div class="burger">
                    <div class="burger__patty"></div>
                    <div class="burger__patty"></div>
                    <div class="burger__patty"></div>
                </div>
                -->
                <div class="burger">
                    <p><?php echo $general['menu']; ?></p>
                    <p>X</p>
                </div>


                <nav class="menu">
                    <ul class="menu__list">      
                        <li class="menu__item">
                            <a onclick="openFrame('studio')"><?php echo $menu['studio']['name']; ?></a>
                        </li>
                        <li class="menu__item">
                            <a onclick="openFrame('contact')"><?php echo $menu['contact']['name']; ?></a>
                        </li>
                        <!-- <li class="menu__item">
                            <a onclick="openFrame('knock-knock')"><?php echo $menu['knock']['short']; ?></a>
                        </li> -->
                        <li class="menu__item">
                            <a href="?ln=<?php echo $menu['idioma'][abc]['name']; ?>"><?php echo $menu['idioma'][0]['name']; ?></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        
<!--
        <div id="menu_bar_container">
            <div id="overflow_container">
                <svg viewBox="0 0 1080 73">
                    <g>
                        <path id="staight" fill="#eee" d="M1080,75.6c0,0-254.059-0.6-295.89-0.6c-25.177,0-120.255,0-204.187,0
                        c-74.834,0-115.539,0-136.317,0c-40.807,0-179.811,0-276.735,0c-33.46,0-63.322,0-82.263,0C50.097,75,23.284,75.629,0,75V0h1080
                        V75.6z"/>
                        <path id="broke" style="visibility:hidden" d="M1080,73.492c0,0-243.766,2.6-295.89,0.972c-25.165-0.786-120.261-0.334-204.187-1.274
                        c-62.822-0.704-115.556-2.139-136.317-2.974c-39.179-1.575-162.116,4.629-256.234,1.307c-27.855-0.983-83.474,4.162-93.011,3.4
                        C59.96,72.175,26.982,68.304,0,71.351V0h1080V73.492z"/>
                    </g>
                </svg> 
                <div id="css_border"></div>
            </div>
        </div>
-->
    </div>
    
        
    
    <div id="center_bar"></div>

    <div id="overlay" style="display:none">
        
        <div id="iframe_menu">
            <div class="logo">
                <a onclick="closeFrame()"><img class="logo_img" src="img/logo1.png"></a>
            </div>
            
            <ul id="project_nav">
                <li><a onclick="changeProj('prev')" id="prev" class="hvr-wobble"><?php echo $general['prev']; ?></a></li>
                <li><a>&nbsp;/&nbsp;</a></li>
                <li><a onclick="changeProj('next')" id="next" class="hvr-wobble"><?php echo $general['next']; ?></a></li>
            </ul>
            <p>
                <span id="titel">none</span>
                <span onclick="closeFrame()" id="exit" class="hvr-wobble-vertical"><?php echo $general['exit']; ?></span>
            </p>
        </div>
        <div id="mobile_nav">
            <ul>
                <li><a onclick="changeProj('prev')" class="hvr-wobble"><?php echo $general['prev']; ?></a></li>
                <li><a onclick="changeProj('next')" class="hvr-wobble"><?php echo $general['next']; ?></a></li>
            </ul>
        </div>
        <div id="iframe_container" style="opacity:0">
            <div id="scroll_wrapper">
                <iframe src="" frameborder="0">
                    <p>Your browser does not support iframes.</p>
                </iframe>
            </div>
        </div>
        
    </div>
    
      
	<div id="infinite" infinite-scroll>
		<div id="wrapper">
			<main id="main">
				<header>
				    <div class="grid repeat">
                        
                        <figure onclick="openFrame('project-12')" class="effect">
                            <img src="img/home/12_almarge.gif" alt="img25"/>
                            <div class="bar"></div>
                            <figcaption>
                                <h2 class="small"><?php echo $almarge['title']; ?></h2>
                                <p class="small"><?php echo $almarge['subtitle']; ?></p>
                            </figcaption>			
                        </figure>

                        <figure onclick="openFrame('project-14')" class="effect right">
                            <img src="img/home/ayuntament.jpg" alt="img25"/>
                            <div class="bar"></div>
                            <figcaption>
                                <h2 class="small"><?php echo $ayuntament['title']; ?></h2>
                                <p class="small"><?php echo $ayuntament['subtitle']; ?></p>
                            </figcaption>           
                        </figure>
                        
                        <figure onclick="openFrame('project-13')" class="effect">
                            <img src="img/home/13_typeform.jpg" alt="img25"/>
                            <div class="bar"></div>
                            <figcaption>
                                <h2 class="small"><?php echo $typeform['title']; ?></h2>
                                <p class="small"><?php echo $typeform['subtitle']; ?></p>
                            </figcaption>           
                        </figure>

                        <figure onclick="openFrame('project-11')" class="effect">
                            <img src="img/home/11_beefeater.jpg" alt="img25"/>
                            <div class="bar"></div>
                            <figcaption>
                                <h2 class="small"><?php echo $beefeater['title']; ?></h2>
                                <p class="small"><?php echo $beefeater['subtitle']; ?></p>
                            </figcaption>
                        </figure>
  
                    </div>
				</header>
    
                <div class="grid">
                    
                    <figure onclick="openFrame('project-10')" class="effect">
                        <img src="img/home/1_lateral.jpg" alt="img25"/>
                        <div class="bar"></div>
                        <figcaption>
                            <h2 class="small"><?php echo $lateral['title']; ?></h2>
                            <p class="small"><?php echo $lateral['subtitle']; ?></p>
                        </figcaption>
                    </figure>
                    
                    <figure onclick="openFrame('project-9')" class="effect">
                        <img src="img/home/2_praad.jpg" alt="img25"/>
                        <div class="bar"></div>
                        <figcaption>
                            <h2 class="small"><?php echo $praad['title']; ?></h2>
                            <p class="small"><?php echo $praad['subtitle']; ?></p>
                        </figcaption>           
                    </figure>
                    
                    <figure onclick="openFrame('project-7')" class="effect right">
                        <img src="img/home/4_bet4.jpg" alt="img25"/>
                        <div class="bar"></div>
                        <figcaption>
                            <h2 class="small"><?php echo $bet4['title']; ?></h2>
                            <p class="small"><?php echo $bet4['subtitle']; ?></p>
                        </figcaption>           
                    </figure>
                    
                    <figure onclick="openFrame('project-4')" class="effect">
                        <img src="img/home/3_fetti.jpg" alt="img25"/>
                        <div class="bar"></div>
                        <figcaption>
                            <h2 class="small"><?php echo $fetti['title']; ?></h2>
                            <p class="small"><?php echo $fetti['subtitle']; ?></p>
                        </figcaption>           
                    </figure>

                    

                    <figure onclick="openFrame('project-8')" class="effect right">
                        <img src="img/home/7_playground.jpg" alt="img25"/>
                        <div class="bar"></div>
                        <figcaption>
                            <h2 class="small"><?php echo $playground['title']; ?></h2>
                            <p class="small"><?php echo $playground['subtitle']; ?></p>
                        </figcaption>           
                    </figure>

                    <figure onclick="openFrame('project-6')" class="effect right">
                        <img src="img/home/6_toda.jpg" alt="img25"/>
                        <div class="bar"></div>
                        <figcaption>
                            <h2 class="small"><?php echo $toda['title-short']; ?></h2>
                            <p class="small"><?php echo $toda['subtitle']; ?></p>
                        </figcaption>           
                    </figure>

                    
                    
                    <figure onclick="openFrame('project-1')" class="effect">
                        <img src="img/home/5_tedx.jpg" alt="img25"/>
                        <div class="bar"></div>
                        <figcaption>
                            <h2 class="small"><?php echo $ted['title']; ?></h2>
                            <p class="small"><?php echo $ted['subtitle']; ?></p>
                        </figcaption>           
                    </figure>
                    
                    <figure onclick="openFrame('project-2')" class="effect">
                        <img src="img/home/8_f135.jpg" alt="img25"/>
                        <div class="bar"></div>
                        <figcaption>
                            <h2 class="small"><?php echo $f135['title']; ?></h2>
                            <p class="small"><?php echo $f135['subtitle']; ?></p>
                        </figcaption>			
                    </figure>

                    <figure onclick="openFrame('project-3')" class="effect">
                        <img src="img/home/9_p3982.jpg" alt="img25"/>
                        <div class="bar"></div>
                        <figcaption>
                            <h2 class="small"><?php echo $p3982['title']; ?></h2>
                            <p class="small"><?php echo $p3982['subtitle']; ?></p>
                        </figcaption>           
                    </figure>

                    <figure onclick="openFrame('project-5')" class="effect">
                        <img src="img/home/10_us.jpg" alt="img25"/>
                        <div class="bar"></div>
                        <figcaption>
                            <h2 class="small"><?php echo $us['title']; ?></h2>
                            <p class="small"><?php echo $us['subtitle']; ?></p>
                        </figcaption>           
                    </figure>
                                        
                </div>
                
                
				<footer>
				</footer>
			</main>
		</div>
	</div>

<!--
    <div id="preload" style="display:none">
        <img src="img/logo_animado_1.gif">
        <img src="img/logo_animado_2.gif">
        <img src="img/logo_animado_3.gif">
        <img src="img/logo_animado_4.gif">
    </div>
-->
    
    <script src='js/cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>
    <script src='js/cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular-animate.min.js'></script>
    
    <script src="js/infinite.js"></script>
    <script src="js/bottomscript.js"></script>
    <script src="js/menu.js"></script>
    
</body>
</html>