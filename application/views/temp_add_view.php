<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php $categories = $this->session->userdata('categories');?>
	<a href="/logout">Log off</a>
	<a href="/admindash">Products</a>
	<form action="add" method="post">
		<label>Name <input type="text" name="name"></label>
		<label>Description: <textarea name="description"></textarea></label>
		<label>Categories: 
			<select name="categories">
				<?php foreach ($categories as $category) { ?>
					<option value=<?= '"' . $category['category'] .'"' ?>> <?= $category['category'] ?> </option>
				<?php } ?>
			</select>
		</label> <!-- this will have existing categories in a select/option menu -->
		<label>or add new category: <input type="text" name="add_category"></label> <!-- This will give you the option to choose a new category, which will be etered in the db -->
		<label>Price: <input type="text" name="price"></label>
		<label>Upload Image: <input type="file" name="image"></label>
		<input type="submit" value="add item">
	</form>
</body>
</html>