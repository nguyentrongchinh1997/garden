<?php  
require('header.php');
?>
<main style="margin-top: 70px">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6">
				<div class="row" style="margin: 0px -15px !important">
					<div class="col-6 col-lg-6">
						<div style="background: #000;; padding: 10px 0px; text-align: center; color: #fff; font-size: 20px; font-weight: bold; border-radius: 5px">
							GPay
						</div>
					</div>
					<div class="col-6 col-lg-6">
						<div style="background: #ffc439; padding: 10px 0px; text-align: center; color: #fff; font-size: 20px; font-weight: bold; border-radius: 5px">
							PayPal
						</div>
					</div>
				</div>
				<br>
				<div class="form-group">
					<label>
						Contact information
					</label>
					<input type="email" class="form-control" name="">
				</div>
				<label>Shipping address</label>
				<div class="form-group">
					<div class="row" style="margin: 0px -15px !important">
						<div class="col-lg-6">
							<div class="form-group">
								<input required="required" placeholder="First name" type="text" class="form-control" name="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<input required="required" placeholder="Last name" type="text" class="form-control" name="">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<input required="required" placeholder="Company" type="text" class="form-control" name="">
				</div>
				<div class="form-group">
					<input required="required" placeholder="Address" type="text" class="form-control" name="">
				</div>
				<div class="form-group">
					<input required="required" placeholder="Apartment, suite, etc" type="text" class="form-control" name="">
				</div>
				<div class="form-group">
					<input required="required" placeholder="City" type="text" class="form-control" name="">
				</div>
				<div class="form-group">
					<div class="row" style="margin: 0px -15px !important">
						<div class="col-lg-4">
							<div class="form-group">
								<label>Country/Region</label>
								<select class="form-control">
									<option>New Zealand</option>
								</select>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label>Region</label>
								<select class="form-control">
									<option>Region</option>
								</select>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label>Postal code</label>
								<input placeholder="Postal code" type="text" class="form-control" name="">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<input required="required" placeholder="Phone" type="text" class="form-control" name="">
				</div>
				<div class="form-group">
					<p style="text-align: right;">
						<button style="border-radius: 5px; background: #d1d5d1; padding: 20px 20px; border: 0px; font-weight: bold;">Continue to shipping</button>
					</p>
				</div>
				<br>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6">
				<div class="row">
					<div class="d-none d-sm-none d-md-block col-md-3 col-lg-3">
						<img src="public/images/tree-category.jpg" width="75px" height="100px">
					</div>
					<div class="col-7 col-sm-7 col-md-6 col-lg-6">
						<p>
							JAPANESE JUNIPER (JP03021)
						</p>
					</div>
					<div class="col-5 col-sm-5 col-md-3 col-lg-3">
						<p style="text-align: right;">
							$140.00
						</p>
					</div>
				</div> 
				<hr>
				<div class="row">
					<div class="col-6 col-sm-7 col-md-9 col-lg-9">
						<input type="text" placeholder="Discount code" class="form-control" name="">
					</div>
					<div class="col-6 col-sm-5 col-md-3 col-lg-3">
						<p style="text-align: right;">
							<button style="padding: 5px 20px; border: 0px; background: #d1d5d1; font-weight: bold; border-radius: 5px;">Apply</button>
						</p>
						
					</div>
				</div> 
				<hr>
				<div class="row">
					<div class="col-lg-12">
						<table style="width: 100%">
							<tr>
								<td>Shipping</td>
								<td style="text-align: right;">
									$140
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-lg-12">
						<table style="width: 100%">
							<tr>
								<td>Total</td>
								<td style="text-align: right;">
									$140
								</td>
							</tr>
						</table>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>
</main>


<?php  
require('footer.php');
?>