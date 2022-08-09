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
                                        
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="POST">
                                    <label>id:</label><br>
                                    <input type="number" style="width: 170px;" name="id" min="1" max="50"><br>
                                    <input type="submit" value="Delete"> 
                                </form>

                                <?php
                                $id='';
                                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                                $id = $_POST['id'];
                                }

                                $del_qu="DELETE FROM products WHERE id = $id";
                                $exe_qu= mysqli_query($conn, $del_qu);

                                ?>
                                <li><a href = "productUpdate.php">Update Product</a></li>
			</nav>	
		</aside>
	</div>
</div>
<div class="clear"></div> 

</div>
		
</body>

</html>

