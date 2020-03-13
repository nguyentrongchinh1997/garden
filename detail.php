<?php  
require('header.php');
?>
<main>
	<div class="row">
		<div class="container page">
			<h2 class="home-title" style="color: #287d7d">
				COTONEASTER (CT03002)
			</h2>
			<br>
			<!-- <div class="page"> -->
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6">
						<img id="photo-main" src="public/images/tree-category.jpg" width="100%">
						<div class="row owl-carousel" style="margin-top: 20px !important">
							<div>
								<img class="photo-child" src="public/images/cay1.jpg" width="100%">
							</div>
							<div>
								<img class="photo-child" src="public/images/cay.jpg" width="100%">
							</div>
							<div>
								<img class="photo-child" src="public/images/detail.jpg" width="100%">
							</div>
							<div>
								<img class="photo-child" src="public/images/cay1.jpg" width="100%">
							</div>
							<div>
								<img class="photo-child" src="public/images/cay1.jpg" width="100%">
							</div>
							<div>
								<img class="photo-child" src="public/images/cay1.jpg" width="100%">
							</div>
							<div>
								<img class="photo-child" src="public/images/cay1.jpg" width="100%">
							</div>
							<div>
								<img src="public/images/cay1.jpg" width="100%">
							</div>
							<div>
								<img src="public/images/cay1.jpg" width="100%">
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6">
						<h4>
							COTONEASTER (CT03002)
						</h4>
						<p style="text-align: center; font-weight: bold; font-size: 30px; margin: 20px 0px">
							$100.00
						</p>
						<p style="text-align: center;">
							<button class="button-detail">ADD TO CART</button> <button class="button-detail">BUY IT NOW</button>
						</p>
						<p style="font-weight: bold;">
							Description:
						</p>
						<p>
							A Bonsai tree is like a new pet, it requires your attention and caring. We understand you could be new to this so we have prepared a simple caring guide to assist you. Each order comes with a copy of ‘How to look after your pet tree’ 
						</p>
						<p style="font-weight: bold;">
							Age
						</p>
						<p>
							5-6 year
						</p>
						<p style="font-weight: bold;">
							Size
						</p>
						<p>
							50cm
						</p>
						<p style="font-weight: bold;">
							Delivery
						</p>
						<p>
							Your Bonsai tree will arrive potted in the ceramic pot as seen in the photo. Each order is packaged securely to ensure safe delivery. We ship our trees New Zealand wide.
						</p>
					</div>
				</div>
			<!-- </div> -->
		</div>
	</div>
</main>
<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    responsiveClass:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:3,
	            nav:false
	        },
	        1000:{
	            items:3,
	            nav:true,
	            loop:false
	        }
	    }
	})
	$('.photo-child').click(function(){
		src = $(this).attr('src');
		$('#photo-main').attr('src', src);
	})
</script>
<?php  
	require('footer.php');
?>