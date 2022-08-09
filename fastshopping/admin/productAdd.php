<?php 
 session_start();
 include('../dbconnection.php');
?>

<!DOCTYPE html>

<html>

<head>
 	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="Author" content="Masooma Rezaie & Hania Hakimi">
	<meta name="description" content="Fast shopping.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../style.css" rel="stylesheet" type="text/css">
        <link href="admin_style.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="main">
<!--   header   -->
<div class="row1">
	<header id="head" class="clear">
		<hgroup>
			<h1>ADMIN</h1>
		</hgroup>

	<!--   navigation bar   -->
		<nav>
                    <ul>
                        <li><a href="product.php">Products</a></li>
                        <li><a href="orders.php">Orders</a></li>
                        <li><a href="customers.php">Customers</a></li>
                        <li><a href="shippers.php">Shippers</a></li>
                        <li><a href="status.php">Status</a></li>
                    </ul>
		</nav>
	</header>
</div>
<div class="clear"></div><ul>
            
<!--   content   -->
<div class="row2">
	<div id="container" class="clear">

		<!--   main content   -->
		<div id="content">
                    <table style="width:100%">
                        <tr>
                            <th>id</th>
                            <th>Good</th>
                            <th>Good id</th>
                            <th>Price</th>
                            <th>Post Date</th>
                        </tr>
                        
                        <?php
                        $q = "SELECT * FROM products";
                        $exe_query = mysqli_query($conn, $q);
                        ?>
                        
                    
                        <?php
                        while ($product=mysqli_fetch_array($exe_query)){
                        ?>
                        <tr>
                            <td><?php echo $product[0]; ?></td>
                            <td><image src="<?php echo $product[1]; ?>" alt="<?php echo $product[1]; ?>"></td>
                            <td><?php echo $product[2]; ?></td>
                            <td><?php echo $product[3]; ?></td>
                            <td><?php echo $product[5]; ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
		</div>
                        <!--   nav bar   -->
		<aside id="left_column">
			<h2>ACTIONS:</h2>
			<nav>
				<ul>
                                    <li><a href="productAdd.php">Add Product</a></li>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
                                        <label>Good image:</label><br>
                                        <input type="text" name="image" required><br>
                                        <label>Good_id:</label><br>
                                        <input type="text" name="Good_id" required><br>
                                        <label>Price:</label><br>
                                        <input type="text" name="price" required><br>
                                        <label>Category id:</label><br>
                                        <input type="number" name="category" style="width: 170px;" min="1" max="2" required><br>
                                        <input type="submit" value="Add"><br>
                                    </form>
                                    
                                    <?php
                                    $image = $Good_id = $price = $category = NULL;
                                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                                    $image = $_POST["image"];
                                    $Good_id = $_POST["Good_id"];
                                    $price = $_POST["price"];
                                    $category= $_POST["category"];
                                    $date= date("y/m/d   h:i:sa");
                                    }
                                    
                                    if ($image!=NULL && $Good_id!=NULL && $price!=NULL && $category!=NULL){                          
                                        $query = "INSERT INTO products(id, image, Good_id, price, category_id, post-date) values(null, '$image', '$Good_id', '$price','$category', '$date')";

                                        $run_query = mysqli_query($conn, $query);
                                       
                                    }
                                                                        ?>
                                    <li><a href = "productDelete.php">Delete Product</a></li>
                                    <li><a href = "productUpdate.php">Update Product</a></li>
				</ul>
			</nav>	
		</aside>
	</div>
</div>
<div class="clear"></div> 

</div>
		
</body>
</html>