	<link rel="stylesheet" href="<?php echo base_url("assets/css/css/carts_css/bootstrap.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/css/carts_css/style.css"); ?>" />
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
	<div class="cart_text">
		<h2>Shopping Cart <?php //add number in php?></h2>
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
							<a href= <?= "'/Clients/remove_item/" . $cart['id'] . "'" ?> onclick= "return confirm ('Are you sure you want to delete this item?')"><img src="http://www2.psd100.com/ppp/2013/09/2601/trash-can-icon-0926014841.png" class="trash_icon" width="13" height="13"></a>
						</td>
						<td><?= money_format('$%i', ($cart['price']/100)*$cart['quantity']) ?></td>
				<?php }; ?>
					</tr>
				</tbody>
			</thead>
		</table>
	</div>	
			
				<a href="/"><button class = "btn" type="submit" name="submit" onclick= "return confirm ('Are you sure you want to empty your cart?)">Continue Shopping</button></a>
				<a href="/Clients/destroy_session"><button class = "btn" type="submit" name="submit">Empty Cart</button></a>
	<div class="shipping_info">
		<h3>Shipping Information</h3>
		<form action="/clients/checkout" method="POST">
			<div class="form-group">
				<input type="text" name="first_name" placeholder="First Name">
			</div>
			<div class="form-group">
				<input type="text" name="last_name" placeholder="Last Name">
			</div>
			<div class="form-group">
				<input type="text" name="address" placeholder="Address">
			</div>
			<div class="form-group">
				<input type="text" name="city" placeholder="City">
			</div>
			<div class="form-group select-style">
				<select name="state">
					<option value="null">State</option>
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District Of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>
				</select>
			</div>
			<div class="form-group">
				<input type="text" name="zipcode" placeholder="Zipcode">
			</div>
			<script
				src="https://checkout.stripe.com/checkout.js" class="stripe-button"
				data-key="pk_test_WgLaJw3sDAQlCw72oqyMefew"
				data-amount= <?= '"' . $cart['price']*$cart['quantity'] . '"' ?>
				data-name="Please Confirm Purchase"
				data-description="Checkout" 
				data-image="http://travelhdwallpapers.com/wp-content/uploads/2014/02/The-Louvre-16.jpg">
			</script>
		</form>
	</div>
	
	</div>
</div>
</body>
</html>