<?php 
session_start();
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
            #content{
                margin: 0 30% ;
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
    
    
    <h2>
        Log in:
    </h2><br>
    <form action="<?Php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label>First Name:</label><br>
        <input type="text" name="f_name"><br>
        <label>Last Name:</label><br>
        <input type="text" name="l_name"><br>
        <label>Password:</label><br>
        <input type="text" name="pass"><br>
        <input type="submit"><br>
    
    </form>
    <?php
    $f_name = $l_name = $pass =NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $f_name = $_POST["f_name"];
        $l_name = $_POST["l_name"];
        $pass = $_POST["pass"];
    }
    if ($f_name!=NULL && $l_name!=NULL && $pass!=NULL){
        $qu = "SELECT f_name, l_name, pass FROM customer";
        $exe_qu = mysqli_query($conn, $qu);
        while ($customer = mysqli_fetch_array($exe_qu)){
            if ($f_name==$customer[0] && $l_name==$customer[1] && $pass==$customer[2]){
                $_SESSION["firstName"]=$f_name;
                $_SESSION["lastName"]=$l_name;
                $_SESSION["password"]=$pass;
                $_SESSION["orderDate"]= date("y/m/d");
                echo "<ul><li style='width:4%;'><a href='home.php'>Go</a></li></ul>";
                break;
            }
        }
    }
    ?>
    
</div>
    <ul>
        <li><a href="registration.php" target="_self">Registration</a> </li>
    </ul>
    
    <br>
    <br>
    
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

