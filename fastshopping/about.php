<?php 
 session_start();
 include('dbconnection.php');
?>

﻿<!DOCTYPE html>

<html>

<head>
 	<title>Online Shopping</title>
	<meta charset="UTF-8">
	<meta name="Author" content="Masooma Rezaie & Hania Hakimi">
	<meta name="description" content="Fast shopping.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="style.css" rel="stylesheet" type="text/css">
        
	<style>
	.row2 #content article{
		font-size: 20px;
		border: 1px solid #D3D3D3;
		margin:10%;
		padding:2%;
		}
	</style>
</head>

<body>

<div id="main">
<!--   header   -->
<div class="row1">
	<header id="head" class="clear">
		<hgroup>
			<h1>FAST SHOPPING</h1>
			<h2>Bag and Scarf vendition.</h2>
		</hgroup>

	<!--   navigation bar   -->
		<nav>
			<ul>
                            <li><a href="index.php" target="_self">Home</a> </li>
                            <li><a href="bag.php" target="_self">Bag</a> </li>
                            <li><a href="scarf.php" target="_self">Scarf</a> </li>
                            <li><a href="about.php" target="_self">About</a> </li>
                            <li><a href="contact.php" target="_self">Contact</a> </li>
			</ul>
		</nav>
	</header>
</div>
<div class="clear"></div>
<!--   content   -->
<div class="row2">
	<div id="container" class="clear">
	<!--   slider   -->
		<section id="slider">
			<img src="image/banner_img4.gif" alt="ONLINE SHOPPING..." style="width:100%; height:500px;">
		</section>
        <!--   nav bar   -->
		<aside id="left_column">
			<nav>
				<ul>
                                    <li><a href="shopeBox.php" target="_self">Shope Box</a></li>
				</ul>
			</nav>	
		</aside>

		<!--   main content   -->
		<div id="content">
			<article>
				<p>Nawadays we are looker on humen improvements in many feilds such as tecnology, archetecture
				and ... <br>Although they have made humen life easy but also they have terrible efficts on nature
				and on its weight.<br> If this satuation go on we will looker on disappear of nature.<br>
				So this is our responsibility to take care about nature satuation.<br>This page will publish 
				news about nature and shows ways to protact nature.</p>
			</article>
		</div>
	</div>
</div>
<div class="clear"></div> 

<!--   footer   -->
<div class="row3">
	<footer id="footer" class="clear">
            <p>Copyright &copy; All Rights Reserved -  <a href="fastshopping2022@gmail.com">Fast Shopping Group</a></p>
		<a href="#top"><img class="goUp" src="up.png"></a>
	</footer>
</div>

</div>
		
</body>

</html>