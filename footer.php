		<footer>
			<ul class="menu-bottom">
				<a href="#">
					<li>
						Home
					</li>
				</a>
				<a href="page.php">
					<li>
						Shipping
					</li>
				</a>
				<a href="page.php">
					<li>
						Refund and Returns
					</li>
				</a>
				<a href="page.php">
					<li>
						Contact
					</li>
				</a>
				<a href="search.php">
					<li>
						Search
					</li>
				</a>
			</ul>
			<div class="row" style="background: #f0f0f0">
				<div class="container">
					<p style="text-align: right;">
						@2020 J&L Bonsai - Garden Design
					</p>
					<p style="text-align: right;">
						<img style="padding: 0px 10px" src="public/images/paypal.png">
						<img style="padding: 0px 10px" src="public/images/visa.png">
						<img style="padding: 0px 10px" src="public/images/apple-pay.png">
						<img style="padding: 0px 10px" src="public/images/mastercard.png">
					</p>
				</div>
			</div>
		</footer>
	</body>
	<script type="text/javascript">
		$('.remove-product').click(function(){
			$(this).parent().parent().remove();
		})
		$('.show-menu').click(function(){
			$('.menu-mobile-child').css({'left':'0px'})
		})
		$('.close-menu-mobile').click(function(){
			$('.menu-mobile-child').hide();
		})
	</script>
</html>