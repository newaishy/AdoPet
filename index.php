<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body>
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	<div class="content-wrapper">
	    <div class="container">
	
	<section id="slider">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php
					if(isset($_SESSION['error'])){
						echo "
							<div class='alert alert-danger'>
								".$_SESSION['error']."
							</div>
						";
						unset($_SESSION['error']);
					}
				?>
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Ado</span>Pet</h1>
									<h2>Adopt a pet and more!</h2>
									<button type="button" class="btn btn-default get">Look for a new pet!</button>
								</div>
								<div class="col-sm-6">
									<img src="images/slider/pets1.jpg" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Ado</span>Pet</h1>
									<h2>Adopt a pet and more!</h2>
									<button type="button" class="btn btn-default get">Shop</button>
								</div>
								<div class="col-sm-6">
									<img src="images/slider/shop1.jpg" class="img-responsive" alt="" />
									<img src="images/slider/sale.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Ado</span>Pet</h1>
									<h2>Adopt a pet and more!</h2>
									<button type="button" class="btn btn-default get">Mating</button>
								</div>
								<div class="col-sm-6">
									<img src="images/slider/mate1.jpg" class="img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	     
	    </div>
	</div>
  
  	<?php include 'includes/footer.php'; ?>
</div>
</body>
</html>