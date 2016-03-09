<?php include_once "constants.php"; include_once "db.php"; ?>
<!DOCTYPE html>
<!--
	Author : Hasan Ghazzawi, Justin Estaris , Alex Plant , Rob Budd ,Timothy Perry )
	Date   : <?php echo date("m/d/y");  ?>
	File Name : <?php echo basename($_SERVER['PHP_SELF']); ?>
-->
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title><?php echo $title ?></title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   <body class="size-1140">
      <div id="all-content" class="with-sticky-footer">
         <!-- TOP NAV WITH LOGO -->
         <header>
            <nav>
               <div class="line">
                  <div class="s-12 l-2">
                     <img class="s-5 l-12 center"src="img/logo.png">
                  </div>
                  <div class="top-nav s-12 l-10 right">
                     <p class="nav-text">Custom menu text</p>
                     <ul class="right">
                        <li><a>Home</a></li>
                        <li><a>Login</a></li>
                        <li><a>About</a></li>
						 <li><a>Products</a></li>
                        <li><a>Newsletter</a></li>
                        <li><a>Upcoming events</a></li>
                        <li><a>Cart</a></li>
                     </ul>
                  </div>
               </div>
            </nav>
         </header>
         <section>
