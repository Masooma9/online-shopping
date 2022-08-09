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
            #content{
                margin: 0 30%;
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
        Registration:
    </h2><br>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="POST" id="reg">
        <label>First Name: </label><br>
        <input type="text" name="first_name" required><br>

        <label>Last Name: </label><br>
        <input type="text" name="last_name" required><br>

        <label id="pass">Password:</label><br>
        <input type="text" name="password" required><br>

        <label id="conf">Confirm Password:</label><br>
        <input type="text" name="con_password" required><br>
        <script>
        var pass=document.getElementById("pass").value;
        var conf=document.getElementById("conf").value;

        if (pass !== conf){
            window.alert("passwords not match!");
        }
        </script>

        <label>Address: </label><br>
        <input type="text" name="address" required><br>

        <label id="phone">Phone Number:</label><br>
        <input type="text" name="phone" required><br>
        <script>
            var phone=document.GetElementById("phone").value;
            if (lenght(phone)!= 10){
                window.alert("Invalid phone number");
            }
        </script>

        <label>Email:</label><br>
        <input type="text" name="email" required><br>

        <input type="submit">

    </form>


    <?php
    $f_name = $l_name = $pass = $address = $phone = $email = NULL;

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $f_name = test_input($_POST["first_name"]);
    $l_name = test_input($_POST["last_name"]);
    $pass = test_input($_POST["password"]);
    $address = test_input($_POST["address"]);
    $phone = test_input($_POST["phone"]);
    $email = test_input($_POST["email"]);
    }

    function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    if ($f_name!=NULL && $l_name!=NULL && $pass!=NULL && $phone!=NULL && $address!=NULL && $email!=NULL){
        $query = "INSERT INTO customer(id, f_name, l_name, pass, phone, address, email) values(null, '$f_name', '$l_name', '$pass', '$phone','$address', '$email')";
        $run_query = mysqli_query($conn, $query);
    }

    ?>
</div>
    
    <br>
    <br>
    <ul>
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
