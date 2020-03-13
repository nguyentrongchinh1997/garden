<?php  
require('header.php');
?>
<main>
	<div class="row">
		<div class="container">
			<div class="page">
				<h2 class="home-title" style="margin-bottom: 100px">
					Shopping cart
				</h2>
				<div class="row cart-detail">
					<div class="d-none d-sm-none d-md-block col-md-3 col-lg-3">
						<img src="public/images/tree-category.jpg">
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-6">
						<a href="">
							JAPANESE JUNIPER (JP03021)
						</a>
						<p>
							$140.00
						</p>
					</div>
					<div class="col-4 col-sm-4 col-md-2 col-lg-2">
						<input size="4" type="number" name="">
					</div> 
					<div class="col-2 col-sm-2 col-md-1 col-lg-1">
						<i class="remove-product fas fa-times"></i>
					</div>
				</div>
				<div class="row cart-detail">
					<div class="d-none d-sm-none d-md-block col-md-3 col-lg-3">
						<img src="public/images/tree-category.jpg">
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-6">
						<a href="">
							JAPANESE JUNIPER (JP03021)
						</a>
						<p>
							$140.00
						</p>
					</div>
					<div class="col-4 col-sm-4 col-md-2 col-lg-2">
						<input size="4" type="number" name="">
					</div> 
					<div class="col-2 col-sm-2 col-md-1 col-lg-1">
						<i class="remove-product fas fa-times"></i>
					</div>
				</div>
				<br><br><br><br>
				<div class="row">
					<div class="col-lg-6">
						<p>Special instructions for seller</p>
						<textarea class="form-control"></textarea>
					</div>
					<div class="col-lg-6" style="text-align: right;">
						Subtotal <span style="font-weight: bold; color: #287d7d; font-size: 25px">$140.00</span>
						<p>Shipping, taxes, and discounts calculated at checkout.</p>
						<p>
							<button class="checkout">
								<a style="color: #fff" href="checkout.php">Check Out</a>
							</button>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<br>
<?php  
	require('footer.php');
?>