<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Stripe Checkout Payment Gateway</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
	<!-- Api key change-->
	<!-- Composer require stripe/stripe-php -->
	<div class="container">
		<h1 class="my-4 text-center">Laravel Website Just $200</h1>
		<form action="./charge.php" method="post" id="payment-form">
		  	<div class="form-row">
			    	<input type="text" name="first_name" placeholder="First Name" class="form-control mb-3 StripeElement StripeElement--empty">
			    	<input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
			    	<input type="email" class="form-control mb-3 StripeElement StripeElement--empty" name="email" placeholder="email">
				    <div id="card-element" class="form-control mt-4">
				      <!-- A Stripe Element will be inserted here. -->
				    </div>

		    <!-- Used to display form errors. -->
			    	<div id="card-errors" role="alert">
			    		
			    	</div>
		  	</div>

	  		<button>Submit Payment</button>
		</form>
	</div>
	<script src="https://js.stripe.com/v3/"></script>
	<script src="js/charge.js"></script>
</body>
</html>