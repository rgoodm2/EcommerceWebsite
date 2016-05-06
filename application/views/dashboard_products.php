<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset = 'UTF=8'>
	<title>Dashboard Orders</title>
	<!-- And an are your sure aler for deleting -->
</head>
<body>
	<div>  <!-- This is topnav -->
		<a href="admindash">Dashboard</a>
		<a href="admin_orders">Orders</a>
		<a href="admindash">Products</a>
		<a href="logout">Log Off</a>
	</div>
	<form action="" method=""> <!-- This is a search field where admins can search for products or id's or whatever we want her/him to be able to search -->
	<!-- I think the searching and sorting may ultimately be done with ajax/api -->
		<input type="search" name="search" placeholder="search">
		<input type="submit" name="submit" value="search">
	</form>
	<a href="addpage">Add new Product</a> <!-- This links to the add product page -->
	<table>
		<tr> <!-- This is the tr for the column names only -->
			<th>
				Picture
			</th>
			<th>
				ID
			</th>
			<th>
				Name
			</th>
			<th>
				Inventory Count
			</th>
			<th>
				Quantity Sold
			</th>
			<th>
				Action
			</th>
		</tr>
		<?php $products = $this->session->userdata('all_products') ?> <!-- LUKE: resize images -->
		<?php foreach ($products as $product ) { ?>
			<tr>
				<td>
					<img src= <?php echo '"assets/' . $product['image'] . '"' ?> height = '100' width ='150' >
				</td>
				<td>
					<?= $product['product_id'] ?>
				</td>
				<td>
					<?= $product['name'] ?>
				</td>
				<td>
					<?= $product['inventory_count'] ?>
				</td>
				<td>
					<?= $product['quantity_sold'] ?>
				</td>
				<td>
					<?php $url = '/edit/' . $product['product_id'] ?>
					<?php $delete_url = '/delete/' . $product['product_id'] ?>
					<a href= <?= $url ?> >edit</a>
					<a href= <?= $delete_url ?> >delete</a>
				</td>
			</tr>
		<?php } ?>
	</table>
	<div> <!-- this div is the set of links to other pages of orders it should automatically generate the correct number of pages with an option to go to first and last -->
		<ul>
			<li>
				<a href="/">1</a>
			</li>
			<li>
				<a href="/">2</a>
			</li>
		</ul>
	</div>
</body>
</html>