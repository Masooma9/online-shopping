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

	<!--   nav bar   -->
		<aside id="left_column">
			<h2>ACTIONS:</h2>	
		</aside>

		<!--   main content   -->
		<div id="content">
                    <table style="width:100%">
                        <tr>
                            <th>id</th>
                            <th>Status</th>
                        </tr>
                        
                        <?php
                        $q = "SELECT * FROM status";
                        $exe_query = mysqli_query($conn, $q);
                        $i=0;
                        ?>
                        
                    
                        <?php
                        while ($state=mysqli_fetch_array($exe_query)){
                            $i++
                        ?>
                        <tr>
                            <td><?php echo $state[0]; ?></td>
                            <td><?php echo $state[1]; ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
		</div>
	</div>
</div>
<div class="clear"></div> 

</div>
		
</body>

</html>

