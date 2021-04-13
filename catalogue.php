<?php include('cartconfig.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>
    <link rel="stylesheet" href="/Project/static/css/cart.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php
			include ('navonlyforsignuppage.php');
		?>
        <?php 
        if (array_key_exists("id", $_SESSION) AND $_SESSION['login_status']) {
      
            $cartuser = "<a href='cart.php'><img src='/Project/static/images/cart.png' height='30px'</a>";

            $addto = '<div class="card-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" style="font-size: 16px;" value="Add to Cart" class="btnAddAction" /></div>';
              
          } else {
      
            $addto = '<div class="card-action"><a href="login_signin.php" style="font-size: 16px; float: none;" class="btnAddAction">Login to Add</a></div>';
              
          }?>
    <main>

        <div id="product-grid">
            <div class="txt-heading" style="color: black;font-size:150%;">ARTS</div>
            <?php
            $product= mysqli_query($con,"SELECT * FROM tblproduct ORDER BY prod_id ASC");
            if (!empty($product)) { 
                while ($row=mysqli_fetch_array($product)) {
                
            ?>
                
                <div class="row">
                <div class="card">
                    <div class="col s12 m">
                    <form method="post" action="cart.php?action=add&pid=<?php echo $row["prod_id"]; ?>">
                    <div class="card-image"><img src="<?php echo $row["image"]; ?>"></div>
                    <div class="card-title" style="padding: 20px; text-align: center;"><?php echo $row["name"]; ?></div>
                    <div class="card-price" style="padding: 20px"><?php echo "Rs. ".$row["price"]; ?></div>
                    <?php echo $addto;?>
                    </form>
                    </div>
                    </div>
                </div>
            <?php
                }
            }  else {
        echo "No Records.";

            }
            ?>
        </div>
<center><a href="cart.php" style="text-decoration: none; padding: 10px 20px; border-radius: 5px; color: #FDB844; border: solid #FDB844 1px; font-size: 20px;">Go To Cart</a></center>
    </main>
    <?php
			include ('footer.php');
		?>
</body>
</html>

