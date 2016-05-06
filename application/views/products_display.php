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
<h3 id = "ajax_title"></h3>
<?php foreach ($images as $image) { ?>
	<div class = "imgWrap">
		<!-- ECHO OUT FROM DATABASE -->
		<img src= <?php echo '"/assets/' . $image['image'] . '"' ?> height = "420" width = "330">
		<!-- ECHO OUT FROM DATABASE INSTEAD OF DUMMY DATA -->
		<!-- THE LINK GOES TO THE PRODUCT PAGE -->
		<p class = "imgDescription"> <a class="link" name=<?= "'" + $image['name'] + "'"  ?> id=<?= $image['id'] ?>> <?= $image['name'] ?>/ Price: <?= '$' . $image['price']/100 . '.' . $image['price']%10 . $image['price']%100 ?></a></p>
	</div>

<?php } ?>