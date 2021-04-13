
    <?php 
              function get_randoms($min,$max,$num){
                     $count = 0;
                     $res = array();
                     while($count<$num){
                            $res[] = rand($min,$max);
                            $res = array_flip(array_flip($res)); 
                            $count = count($res);
                      }
                      return $res;
               }

                $result = get_randoms(1,60,10);
    ?>



<!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="/Project/static/css/confirm.css"  media="screen,projection"/>
      <title>Explore</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <?php
			include ('nav.php');
		?>

    <div class="product">
      <div class="productleft">
        <h4>Confirm Your Order</h4>
        <p>Quantity: <?php echo $_SESSION['payment_qty'] ; ?></p>
        <br>
        <br>
        <p>Order ID: <?php echo $result[1];?></p>
        <h2>Total : <?php echo $_SESSION['payment_price'] ; ?></h2>
        <br>
      </div>
      
      <center style="margin-top: 250px;"><button onclick="window.location='payment.php'">Proceed to Buy</button></center>
          <br><br>
    </div>


    <?php include ('footer.php');?>

    </body>
  </html>
