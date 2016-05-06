
<link rel="stylesheet" href="<?php echo base_url("assets/css/css/bootstrap.css"); ?>" />
<link rel="stylesheet" href="<?php echo base_url("assets/css/css/show_css/style.css"); ?>" />


<?php 
	/*This will give us the cart count*/
	/* woah, this needs to be on the backend */
	$quantity = 0;
	if($this->session->userdata('cart') !== null){
		$carts = $this->session->userdata('cart');
		foreach ($carts as $cart) {
			$quantity += $cart['quantity'];
		}
	}	
  ?>
<body  class = "container">
	<!-- ADD PRODUCT STARTS HERE ... DO NOT CHANGE ANYTHING FROM THE ABOVE -->
	<div class="center-block">
		<!-- ADD PRODUCT IMAGE -->
		<div class="img-responzive">
			<img src= <?= "'/assets/" . $image . "'" ?> >
		</div>
		<!-- ADD TITLE OF PRODUCT HERE -->
		<div class="center-block">
			<h4><?= $name ?></h4>
		<!-- ADD DESCRIPTION OF PRODUCT HERE -->
			<p><?= $description ?></p>
			<!-- select quantity you want to buy. The amount of possible purchases should come from backend and be < or = total inventory -->
			<form class="poop">
				<select class="opt" name="quantity"> 
					<?php for($i = 1; $i <= $inventory_count; $i++){?>
						<option value= <?= "'" . $i . "'" ?> >
							<?= $i ?> <?= money_format('$%i', ($price/100 * $i)) ?>
						</option>
						<?php }; ?>
					<input class = "btn" type="submit" name="submit" value="Add to Shopping Cart">
				</select>
				<input type="hidden" name="price" value= <?= "'" . $price . "'" ?> >
				<input type="hidden" name="id" value= <?= "'" . $product_id . "'" ?> >
				<input type="hidden" name="name" value=<?= "'" . $name . "'" ?>>
			</form>
		</div>
	</div>
</body>


