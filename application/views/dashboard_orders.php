<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset = 'UTF=8'>
	<title>Dashboard Orders</title>
</head>
<body>
<!-- get query info here -->
<?php $orders = $this->session->userdata('all_orders');?>
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
	<form>
		<!-- This is the sort-by slector -->
		<select>
			<option value="orderIn">
				Order in
			</option>
			<option value="process">
				Process
			</option>
			<option value="shipped">
				Shipped
			</option>
			<option value="cancelled">
				Cancelled
			</option>
		</select>
	</form>
	<table>
		<tr> <!-- This is the tr for the column names only -->
			<td>
				Order Id
			</td>
			<td>
				Name
			</td>
			<td>
				Date
			</td>
			<td>
				Shipping Address
			</td>
			<td>
				Total
			</td>
			<td>
				Status
			</td>
		</tr>
		<?php foreach ($orders as $order) { ?>
			<tr> <!-- This is an example row -->
				<td>
					<?= $order['id'] ?>
				</td>
				<td>
					<?= $order['first_name'] . " "  . $order['last_name']?>
				</td>
				<td>
					<?php 
						$x = str_split($order['created_at'], 10);
						$x = new DateTime($x[0]);
						$format = 'd / m / Y'; 
						echo date_format($x, $format);
					?>
				</td>
				<td>
					<?= $order['address'] . " " . $order['city'] . " " . $order['state'] ?>
				</td>
				<td>
					<!-- total price -->
				</td>
				<td>
					<form action= <?= "'/Mains/update_order_status/" . $order['id'] . "'" ?> method="post" >	
						<select name="status">
						    <option value="Order in" <?php if ($order['status'] == "Order in"): ?> selected="selected"<?php endif; ?>>Order in</option>
						    <option value="Process" <?php if ($order['status'] == "Process"): ?> selected="selected"<?php endif; ?>>Process</option>
						    <option value="Shipped" <?php if ($order['status'] == "Shipped"): ?> selected="selected"<?php endif; ?>>Shipped</option>
						    <option value="Cancelled" <?php if ($order['status'] == "Cancelled"): ?> selected="selected"<?php endif; ?>>Cancelled</option>
						</select>
				</td>
						<td>
							<input type="submit" value="Update Status">
						</td>
					</form>
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