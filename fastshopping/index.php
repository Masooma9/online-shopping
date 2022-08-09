<?php 
 include('dbconnection.php');
?>

<!DOCTYPE html>

<html>

<head>
 	<title>Online Shopping</title>
	<meta charset="UTF-8">
	<meta name="Author" content="Masooma Rezaie & Hania Hakimi">
	<meta name="description" content="online shopping.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="style.css" rel="stylesheet" type="text/css">
        <style>
        ul{
            margin:0;
            padding:0;
        }

        ul li{
            border: 2px solid #ef6700;
            padding: 2px 15px;
            text-align: center;
            border-radius:4px;
            background-color:#ef6700;
            width: 30%;
            margin: 0.5% 30%;
            list-style-type: none;
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

	</header>
</div>
<div class="clear"></div>
<!--   content   -->
<div>
	<div id="container" class="clear">
	<!--   slider   -->
		<section id="slider">
                    <img src="image/banner_img4.gif" alt="ONLINE SHOPPING..." style="width:100%; height:500px;">
		</section>
        </div>
</div>
<div id="content">
    <ul>
        <li><a href="registration.php" target="_self">Registration</a> </li><br>
        <li><a href="login.php" target="_self">Log in</a> </li>
    </ul>
    <div class="clear"></div> 
</div>

<!--   footer   -->
<div class="row3">
	<footer id="footer" class="clear">
		<p>Copyright &copy; All Rights Reserved -  <a href="fastshopping2022@gmail.com">Fast Shopping Group</a></p>
		<a href="#top"><img class="goUp" src="up.png"></a>
	</footer>
</div>
                            

    
</body>

</html>
