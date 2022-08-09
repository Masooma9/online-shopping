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
                            <th>Category id</th>
                            <th>Post Date</th>
                        </tr>
                        
                        <?php
                        $q = "SELECT * FROM products";
                        $exe_query = mysqli_query($conn, $q);
                        $i=0;
                        ?>
                        
                    
                        <?php
                        while ($product=mysqli_fetch_array($exe_query)){
                            $i++;
                        ?>
                        <tr>
                            <td><?php echo $product[0]; ?></td>
                            <td><image src="<?php echo $product[1]; ?>" alt="<?php echo $product[1]; ?>"></td>
                            <td><?php echo $product[2]; ?></td>
                            <td><?php echo $product[3]; ?></td>
                            <td><?php echo $product[4]; ?></td>
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
                                <li><a href = "productDelete.php">Delete Product</a></li>
                                <li><a href = "productUpdate.php">Update Product</a></li>
                                 
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="POST">
                                    <label>id:</label><br>
                                    <input type="number" name="id" style="width: 170px;" min="0" max="<?php echo $i;?>"> <br>
                                    <label>Good URL:</label><br>
                                    <input type="text" name="Good"><br>
                                    <label>Good id:</label><br>
                                    <input type="text" name="Good_id" ><br>
                                    <label>price:</label><br>
                                    <input type="number" name="price"><br>
                                    <label>Category_id:</label><br>
                                    <input type="number" name="category" style="width: 170px;" min="1" max="2"><br>
                                    <input type="submit" value="Update"><br>
                                </form>
                                <?php
                                $id = $image = $Good_id = $price = $category = NULL;
                                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                                $id = $_POST['id'];
                                $image = $_POST['Good'];
                                $Good_id= $_POST['Good_id'];
                                $price = $_POST['price'];
                                $category = $_POST['category'];
                                
                                }
                                if ($id!=NULL && $image!=NULL && $Good_id!=NULL && $price!=NULL && $category!=NULL){

                                    $up_qu=" UPDATE products SET image ='$image', Good_id = '$Good_id', price = '$price', category_id = '$category' WHERE id = '$id'";

                                    $exe_qu= mysqli_query($conn, $up_qu);
                                }
                                ?>
                                
                            </ul>
			</nav>	
		</aside>
	</div>
</div>


</div>
		
</body>

</html>