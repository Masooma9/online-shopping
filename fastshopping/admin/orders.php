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
                            <th>Customer id</th>
                            <th>Customer Name</th>
                            <th>Order Date</th>
                            <th>Status</th>
                            <th>Shipped Date</th>
                            <th>Product id</th>
                            <th>Product Price</th>
                        </tr>
                        
                        <?php
                        $q="SELECT orders.id, orders.customer_id, customer.f_name, customer.l_name, orders.order_date, orders.status, "
                                . "orders.shipped_date, orders.product_id, products.price FROM orders JOIN customer "
                                . "ON orders.customer_id=customer.id JOIN products ON orders.product_id=products.id"
                                . " ORDER BY orders.id";
                        
                        $exe_query = mysqli_query($conn, $q);
                        $i = 0;
                        ?>
                        
                    
                        <?php
                        while ($order=mysqli_fetch_array($exe_query)){
                            $i++;
                        ?>
                        <tr>
                            <td><?php echo $order[0]; ?></td>
                            <td><?php echo $order[1]; ?></td>
                            <td><?php echo $order[2]." ".$order[3]; ?></td>
                            <td><?php echo $order[4]; ?></td>
                            <td><?php echo $order[5]; ?></td>
                            <td><?php echo $order[6]; ?></td>
                            <td><?php echo $order[7]; ?></td>
                            <td><?php echo $order[8]; ?></td>
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
                                    <li><a href = "orderManage.php">Manage order</a></li>
				</ul>
			</nav>	
		</aside>

	</div>
</div>
		
</body>

</html>

