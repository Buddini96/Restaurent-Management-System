<!Doctype html>

<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<head>
	
<title>MFORS</title>

<link rel="stylesheet" href="css/main.css" />

<script src="js/jquery.min.js" ></script>

<script src="js/myscript.js"></script>
	
</head>

<body>
	
<?php require "includes/header.php"; ?>

<div class="parallax_basket" onclick="remove_class()">
	
	<div class="parallax_head_basket">
		
		<h2>Your</h2>
		<h3>Basket</h3>
		
	</div>
	
</div>

<div class="content remove_pad" onclick="remove_class()">
	
	<div class="inner_content on_parallax">
		
		<h2><span class="cart">Food Basket</span></h2>
		
		<div class="order_holder">
			
			<div class="single_order_head">
				
				<h3>Food</h3>
				<h3>Price(N)</h3>
				<h3>Qty</h3>
				<h3>Total</h3>
				<h3>Remove</h3>
				
			</div>
			
			<form style="display: inline; padding: 0; margin: 0;" action="basket.php" method="post">
			
			<div class="single_order">
				
				<p>Food Name</p>
				<p>4000</p>
				<p><select name="amount" id="amount"> 
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				<select/></p>
				<p>4000</p>
				<p><input name="" class="remove" onclick="return verify_choice();" type="submit" value="x" /><input name="index_to_remove" type="hidden" value="" /></p>
				
			</div>
			
			</form>
			
			<form style="display: inline; padding: 0; margin: 0;" action="basket.php" method="post">
			
			<div class="single_order">
				
				<p>Food Name</p>
				<p>4000</p>
				<p><select name="amount" id="amount"> 
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				<select/></p>
				<p>4000</p>
				<p><input name="" class="remove" onclick="return verify_choice();" type="submit" value="x" /><input name="index_to_remove" type="hidden" value="" /></p>
				
			</div>
			
			</form>
			
		</div>
		
		<p class="p_total"><span>Basket Total</span> : #300000</p>
		
		<div class="checkout_section">
			
			<div class="empty_cart">
				
				<a href="#">Empty Basket</a>
				
			</div>
			
			<div class="checkout">
				
				<a href="#" onclick="show_overlay(); return false">Checkout</a>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<div class="content" onclick="remove_class()">
	
	<div class="inner_content">
		
		<div class="contact">
			
			<div class="left">
				
				<h3>LOCATION</h3>
				<p>Buk New Site, New Campus</p>
				<p>Kano State</p>
				
			</div>
			
			<div class="left">
				
				<h3>CONTACT</h3>
				<p>08054645432, 07086898709</p>
				<p>Website@gmail.com</p>
				
			</div>
			
			<p class="left"></p>
			
			<div class="icon_holder">
				
				<a href="#"><img src="image/icons/Facebook.png" alt="image/icons/Facebook.png" /></a>
				<a href="#"><img src="image/icons/Google+.png" alt="image/icons/Google+.png"  /></a>
				<a href="#"><img src="image/icons/Twitter.png" alt="image/icons/Twitter.png"  /></a>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<div class="footer_parallax" onclick="remove_class()">
	
	<div class="on_footer_parallax">
		
		<p>&copy; <?php echo strftime("%Y", time()); ?> <span>MyRestaurant</span>. All Rights Reserved</p>
		
	</div>
	
</div>

<!---------Contact Information---------->

<div class="overlay" id="overlay" onclick="hide_overlay()"></div>
	
	<div class="info_holder">
		
		<p class="close_p"><span class="close_sp" onclick="hide_overlay()"></span></p>
		
		<h2><span class="tag">Complete Your Order</span></h2>
		
		<form method="post" action="" onSubmit="validate_input(); return false">
			
			<div class="form_group">
					 
				<div class="form_group">
					
					<label>Name</label>
					<input type="text" name="name" placeholder="Enter your full name" required>
					
				</div>
				
				<div class="form_group">
					
					<label>Address</label>
					<input type="text" name="phone" placeholder="Enter your address" required>
					
				</div>
				
				<div class="form_group">
					
					<label>Email</label>
					<input type="Email" name="email" placeholder="Enter your email" required>
					
				</div>
				
				<div class="form_group">
					
					<label>Phone Number</label>
					<input type="text" name="phone" placeholder="Enter your phone number" required>
					
				</div>
				
				<div class="form_group">
					
					<input type="submit" class="submit" value="PLACE ORDER" />
					
				</div>
				
			</div>
			
		</form>
		
	</div>

</body>

</html>