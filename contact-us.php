<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body>
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
<div class="content-wrapper">

	<div id="contact-page" class="container">
    	<div class="bg">   	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Send us an e-mail</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form action="sendemail.php" id="main-contact-form" class="contact-form row" name="contact-form" method="POST">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>Adopet Inc.</p>
							<p>277 Smart Village Egypt، 1 26 July St, Al Giza</p>
							<p>Giza, Egypt</p>
							<p>Mobile: +201000112233</p>
							<p>Email: info@adopet.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Follow Us</h2>
							<ul>
								<li>
									<a href="www.facebook.com/"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="www.twitter.com/"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="www.google-plus.com/"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="www.youtube.com/"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div>     
</div>
  	<?php include 'includes/footer.php'; ?>
</div>
</body>
</html>