<?php include('cartconfig.php');?>
<HTML>
<HEAD>
<TITLE>Your Cart</TITLE>
<link rel="stylesheet" href="/Project/static/css/cart.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
      
        .footer-distributed {
            position: absolute;
        }
      </style>

</HEAD>
<BODY>
<?php
			include ('navonlyforsignuppage.php');
		?>

<!-- Cart ---->
<main>
<div id="shopping-cart">
<div class="txt-heading" style="color: black;font-size:25px;text-align:center">SHOPPING CART</div>

<a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
   
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="10%">Quantity</th>
<th style="text-align:right;" width="15%">Unit Price</th>
<th style="text-align:right;" width="15%">Price</th>
<th style="text-align:center;" width="10%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "Rs.".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "Rs. ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="/Project/static/images/icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
                $total_price += ($item["price"]*$item["quantity"]);
        }
        if(!empty($_SESSION["cart_item"])){
            $_SESSION['payment_price'] = $total_price;
            $_SESSION['payment_qty'] = $total_quantity;
        }
        
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "Rs. ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>
<a id="chkout" href="confirm.php">Proceed to Checkout</a>	

  <?php
} else {
        $_SESSION['payment_price'] = 0;
        $_SESSION['payment_qty'] = 0;
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>





</main>
<?php
			include ('footer.php');
		?>

</BODY>
</HTML>