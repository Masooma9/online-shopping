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
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Salary</th>
                        </tr>
                        
                        <?php
                        $q = "SELECT * FROM shippers";
                        $exe_query = mysqli_query($conn, $q);
                        $i=0;
                        ?>
                        
                    
                        <?php
                        while ($shipper=mysqli_fetch_array($exe_query)){
                            $i++;
                        ?>
                        <tr>
                            <td><?php echo $shipper[0]; ?></td>
                            <td><?php echo $shipper[1]; ?></td>
                            <td><?php echo $shipper[2]; ?></td>
                            <td><?php echo $shipper[3]; ?></td>
                            <td><?php echo $shipper[4]; ?></td>
                            <td><?php echo $shipper[5]; ?></td>
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
                                    <li><a href = "shipperAdd.php">Add Shipper</a></li>
                                    <li><a href = "shipperDelete.php">Delete Shipper</a></li>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                                        <label>id:</label><br>
                                        <input type="number" name="id" style="width: 170px;" min="0" max="<?php echo $i;?>">
                                        <br>
                                        <input type="submit" value="Delete">
                                    </form>
                                    <?php
                                    $id=0;
                                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                                        $id= $_POST["id"];
                                        
                                    }
                                    
                                    $del_qu="DELETE FROM shippers WHERE id = $id";
                                    $exe_qu= mysqli_query($conn, $del_qu);
                                    ?>
                                    <li><a href = "shipperUpdate.php">Update Shipper</a></li>
				</ul>
			</nav>	
		</aside>
	</div>
</div>
<div class="clear"></div> 

</div>
		
</body>

</html>


