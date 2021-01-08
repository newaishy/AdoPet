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
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Ado</span>Pet</h1>
									<h2>Adopt a pet and more!</h2>
									<button type="button" class="btn btn-default get"><a href="./adopt.php?category=Dogs" style="color:white;">Look for a new pet!</a></button>
								</div>
								<div class="col-sm-6">
									<img src="images/slider/pets1.jpg" class="img-responsive" alt="" />
								</div>
							</div>
						</div>

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