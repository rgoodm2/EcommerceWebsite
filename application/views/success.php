<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>La Mode</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/css/bootstrap.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/css/success_css/style.css"); ?>" />
	<meta name=viewport content='width=700'>

</head>
<body>
<?php 
	/*This will give us the cart count*/
	$quantity = 0;
	if($this->session->userdata('cart') !== null){
		$carts = $this->session->userdata('cart');
		foreach ($carts as $cart) {
			$quantity += $cart['quantity'];
		}
	}	
  ?>
	<div class="container">
		<div>
		<?php  ?>
			<h1>Thank you for shopping with La Mode</h1>
		</div>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>PRODUCT</th>
						<th>PRICE</th>
						<th>QUANTITY</th>
						<th>TOTAL</th>
					</tr>
					<tbody>
				<!-- Let's populate the table with our shopping cart! -->
				<?php foreach ($carts as $cart) { ?>	
					<tr>
						<td><?= $cart['name'] ?></td>
						<td><?= money_format('$%i', ($cart['price']/100)) ?></td>
						<td>
							<span class="item_count"><?= $cart['quantity'] ?></span> 
							<a href="/" onclick= "return confirm ('Are you sure you want to delete this item?')"></a>
						</td>
						<td><?= money_format('$%i', ($cart['price']/100)*$cart['quantity']) ?></td>
				<?php }; ?>
					</tr>
				</tbody>
				</thead>
			</table>
		<a href="/Clients/destroy_session/"><button class="btn">Continue Shopping</button></a>
			<img src="https://thegenealogyofstyle.files.wordpress.com/2014/12/gernsheim300_model_patricia_paris_1955_huth_walde.jpg">
		</div>
	</div>
</body>
</html>