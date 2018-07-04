<?php
	if(!empty($_GET['tid'] && !empty($_GET['product']))) {
		$GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);
		$tid = $GET['tid'];
		$product = $GET['product'];

	} else {
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Success Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" >
</head>
<body>
	<div class="container mt-4">
		<h2>Thank you for Purchasing <?php echo $product; ?></h2>
		<hr>
		<p>Your Transaction Id is <?php echo $tid; ?> </p>
		<p>Check your email for more info</p>
		<p><a href="index.php" class="btn btn-light btn-lg">Go Back</a></p>

	</div>
</body>
</html>