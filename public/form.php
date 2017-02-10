<?php 
	var_dump($_GET);
	var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Practice</title>
</head>
<body>
	<h1>Form Practice</h1>

	<form action="form.php" method="POST">
		<!-- toppings with checkboxes -->
		<!-- radio for credit card or cash choice -->
		<!-- single checkbox for "remember my credit" -->
		<label for="crust">Select the crust type</label>
		<select id="crust" name="crust[]" multiple>
			<option>Hand Tossed</option>
			<option>Deep Dish</option>
			<option>Pan</option>
			<option>Flatbread</option>
			<option>No crust, just toppings and cheese</option>
		</select>
		<button type="subtmit">Order!</button>
	</form>
</body>
</html>



