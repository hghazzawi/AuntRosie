<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
include_once("constants.php"); include_once ("db.php"); ?>
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
	  <link rel="stylesheet" href="css/product-grid.css">
      <link rel="stylesheet" href="css/responsee.css">
	  <link rel="stylesheet" href="css/ingredients.css">
	  <link rel="stylesheet" href="css/nutrition.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
	  
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	  
	  
  
    <script>
	   $(function() {
		$( "#tabs" ).tabs();
	   });
	  
		$(document).ready(function () {
             $(".numberinput").forceNumeric();
         });


         // forceNumeric() plug-in implementation
         jQuery.fn.forceNumeric = function () {

             return this.each(function () {
                 $(this).keydown(function (e) {
                     var key = e.which || e.keyCode;

                     if (!e.shiftKey && !e.altKey && !e.ctrlKey &&
                     // numbers   
                         key >= 48 && key <= 57 ||
                     // Numeric keypad
                         key >= 96 && key <= 105 ||
                     // comma, period and minus, . on keypad
                        key == 190 || key == 188 || key == 109 || key == 110 ||
                     // Backspace and Tab and Enter
                        key == 8 || key == 9 || key == 13 ||
                     // Home and End
                        key == 35 || key == 36 ||
                     // left and right arrows
                        key == 37 || key == 39 ||
                     // Del and Ins
                        key == 46 || key == 45)
                         return true;

                     return false;
                 });
             });
         }
  
  
		function printContent(el){
			var restorepage = document.body.innerHTML;
			var printcontent = document.getElementById(el).innerHTML;
			document.body.innerHTML = printcontent;
			window.print();
			document.body.innerHTML = restorepage;
		}
		
		
		function displayConfirmation(){
			document.getElementById('confirmationMessage').innerHTML="Thank you for subscribing";
			
		}
		
		function isInt(value) {
            var x;
            return isNaN(value) ? !1 : (x = parseFloat(value), (0 | x) === x);
        }
		
		function addQuantity(){
		  window.location.assign('addQuantity.php');
		}
		
  </script>
		  
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
                     <a href="index.php"><img  src="img/logo4.png"/></a>
                  </div>
                  <div style="font-weight:bold;font-size:12pt;padding-top: 20px;" class="top-nav s-12 l-10 right">
                     <p class="nav-text"></p>
                     <ul class="right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="employee-login.php">Login</a></li>
                        <li><a href="about.php">About</a></li>
						 <li><a href="products.php">Products</a></li>
                        <li><a href="news.php">Newsletter</a></li>
                        <li><a href="events.php">Upcoming Events</a></li>
                        <li><a>Cart</a></li>
                     </ul>
                  </div>
               </div>
            </nav>
         </header>
         <section>
