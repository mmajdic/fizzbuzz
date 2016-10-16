<!DOCTYPE html>

<html lang="en">

	<head>
		<title>FizzBuzz</title>		
	</head>
	
	<body>
	
		<form method="post" action="index.php">
			<input type="number" name="value" placeholder="Enter a number..." />
			<input type="submit" name="submit" value="Submit" />
		</form>
		
	</body>

</html>

<?php

if ($_POST) {
	$data = [];
	$value = $_POST['value'];
		for ($i = 1; $i <= $value; $i++)
		{
			if (($i % 3 == 0) && ($i % 5 == 0)) {
				$data[] = "fizzbuzz";
			}
			elseif ($i % 5 == 0) {
				$data[] = "buzz";
			}
			elseif ($i % 3 == 0) {
				$data[] = "fizz";
			}
			else {
				$data[] = $i;
			}
		}
		echo implode($data, ", ");
}