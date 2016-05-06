<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset = 'UTF=8'>
	<title>Dashboard Orders</title>
</head>
<body>
	<div>  <!-- This is topnav -->
		<a href="/">Dashboard</a>
		<a href="/">Orders</a>
		<a href="/">Products</a>
		<a href="/">Log Off</a>
	</div>
	<div> <!-- customer and billing info. Here we need to get all the info via query -->
		<p>Order id: </p>
		<p>Customer Shipping info: </p>
		<p>name: </p>
		<p>address: </p>
		<p>City: </p>
		<p>State: </p>
		<p>Zip:</p>
		<p>Customer Billin Info: </p>
		<p>name: </p>
		<p>address: </p>
		<p>City: </p>
		<p>State: </p>
		<p>Zip: </p>
	</div>
	<table>
		<tr> <!-- This is the tr for the column names only -->
			<td>
				ID
			</td>
			<td>
				Item
			</td>
			<td>
				Price
			</td>
			<td>
				Quantity
			</td>
			<td>
				Total
			</td>
		</tr>
		<tr> <!-- This is an example row -->
			<td>
				12
			</td>
			<td>
				hat
			</td>
			<td>
				$9.99
			</td>
			<td>
				2
			</td>
			<td>
				1998
			</td>
		</tr>
	</table>
		<p>Status: </p> <!-- live updates actual status -->
		<div> <!-- bottom right bogt on erd. contains total/subtotal display info that will be calcualted on backend -->
			<p>Subtotal: </p>
			<p></p>
			<p>Total Price: </p>
		</div>
</body>
</html>