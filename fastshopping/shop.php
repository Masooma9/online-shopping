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
            p img {
               
                width: 300px;
                float: left;
                clear: left;   
            }
            td{
                border-bottom: 1px dashed #999;
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
                            <li><a href="home.php" target="_self">Home</a> </li>
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

		<!--   main content   -->
		<div id="content">
                    <table style="float: left;">
                    
                         <?php
                            $query = "SELECT * FROM products WHERE id%2 !=0";
                            $exe_query = mysqli_query($conn, $query);

                            while ($product=mysqli_fetch_array($exe_query)){
                                $id = $product[0];
                                $God = $product[1];
                                $Good = ltrim($God, "./");
                                $Good_id = $product[2];
                                $price = $product[3];
                                $category= $product[4];
                                $date= $product[5];
                        
                            ?>
                        <tr>
                           
                            <td>
                                <article>
                                    <?php   
                                    echo $date;
                                    ?>
                                    <p>
                                        <image src="<?php echo $Good;?>" alt="Product">
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> 
                                            <input type="text" name="id" value="<?php echo $id;?>" hidden >
                                            <input type="text" name="Good" value="<?php echo $Good; ?>" hidden>
                                            <input type="text" name="Good_id" value="Product id: <?php echo $Good_id; ?>" readonly><br>
                                            <input type="text" name="price" value="Price: <?php echo $price; ?>" readonly><br>
                                            <input type="number" name="category" value="<?php echo $category; ?>" hidden><br>
                                            <input type="submit" value="buy">
                                        </form>

                                    </p>
                                    
                                 </article>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                    
                    
                    
                    <table style="float: right;">
                        
                        
                        <?php
                            $query = "SELECT * FROM products WHERE id%2 = 0";
                            $exe_query = mysqli_query($conn, $query);

                            while ($product=mysqli_fetch_array($exe_query)){
                                $id = $product[0];
                                $God = $product[1];
                                $Good = ltrim($God, "./");
                                $Good_id = $product[2];
                                $price = $product[3];
                                $category= $product[4];
                                $date= $product[5];
                        
                            ?>
                        <tr>
                            <td>
                                
                                <article>
                                    <?php
                                       
                                    echo $date;
                                    ?>
                                    <p>
                                        <image src="<?php echo $Good;?>" alt="Product" >
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> 
                                            <input type="text" name="id" value="<?php echo $id;?>" hidden >
                                            <input type="text" name="Good" value="<?php echo $Good; ?>" hidden>
                                            <input type="text" name="Good_id" value="Product id: <?php echo $Good_id; ?>" readonly><br>
                                            <input type="text" name="price" value="Price: <?php echo $price; ?>" readonly><br>
                                            <input type="number" name="category" value="<?php echo $category; ?>" hidden><br>
                                            <input type="submit" value="buy">
                                        </form>

                                    </p>
                                </article>
                                
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                    

		</div>
            <!--   nav bar   -->
		<aside id="left_column">
			<nav>
				<ul>
                                    <li><a href="shop.php" target="_self">Shop Box</a></li>
                                    <?php 
                                    $id = $Good = $Good_id = $price = NULL;
                                    $f_name=$_SESSION["firstName"];
                                    $l_name=$_SESSION["lastName"];
                                    $pass=$_SESSION["password"];
                                    $orderDate=$_SESSION["orderDate"];
                                    
                                    
                                    $query = "SELECT id FROM customer WHERE f_name='$f_name' AND l_name='$l_name' AND pass='$pass'";
                                    $exe_query = mysqli_query($conn, $query);
                                    $customer=  mysqli_fetch_array($exe_query);
                                    $custom_id = $customer[0];
                                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                                        $id= $_POST["id"];
                                        $image= $_POST["Good"];
                                        $price= $_POST["price"];
                                        
                                        
                                        
                                        $qu = "INSERT INTO orders(id, customer_id, order_date, status, comment, shipped_date, product_id) "
                                                . "VALUES ('NULL','$custom_id','$orderDate','1','NULL','NULL','$id')";
                                        $exe_qu = mysqli_query($conn, $qu);
                                        
                                   ?>
                                    <article>
                                        
                                        <p>
                                            <?php
                                            
                                            ?>
                                            <image src="<?php echo $image; ?>" style="width:100px; height: 110px;" ><br>
                                            <p>
                                               <?php
                                                echo $orderDate;
                                                ?>
                                                <br>
                                                <?php echo $price; 
                                                
                                    }
                                                ?>
                                            

                                            </p>
                                    </article>
                                    
				</ul>
			</nav>	
		</aside>
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


