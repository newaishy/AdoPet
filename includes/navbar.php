<header id="header">
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/logo.png" alt="Adopet" /></a>
						</div>

					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href="./profile.php"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="./checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="./cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="./login.php"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="./index.php" class="active">Home</a></li>

								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Adopt </a>
									<ul class="sub-menu" role="menu">
									<?php
									
										$conn = $pdo->open();
										try{
										$stmt = $conn->prepare("SELECT * FROM category");
										$stmt->execute();
										foreach($stmt as $row){
											echo "
											<li><a href='adopt.php?category=".$row['name']."'>".$row['name']."</a></li>
											";                  
										}
										}
										catch(PDOException $e){
										echo "There is some problem in connection: " . $e->getMessage();
										}

										$pdo->close();

									?>
									</ul>
          						</li>


								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop </a>
									<ul class="sub-menu" role="menu">
									<?php
									
										$conn = $pdo->open();
										try{
										$stmt = $conn->prepare("SELECT * FROM category");
										$stmt->execute();
										foreach($stmt as $row){
											echo "
											<li><a href='category.php?category=".$row['name']."'>".$row['name']."</a></li>
											";                  
										}
										}
										catch(PDOException $e){
										echo "There is some problem in connection: " . $e->getMessage();
										}

										$pdo->close();

									?>
									</ul>
          						</li>

								  <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Mating </a>
									<ul class="sub-menu" role="menu">
									<?php
									
										$conn = $pdo->open();
										try{
										$stmt = $conn->prepare("SELECT * FROM category");
										$stmt->execute();
										foreach($stmt as $row){
											echo "
											<li><a href='mating.php?category=".$row['name']."'>".$row['name']."</a></li>
											";                  
										}
										}
										catch(PDOException $e){
										echo "There is some problem in connection: " . $e->getMessage();
										}

										$pdo->close();

									?>
									</ul>
          						</li>
								
								<li><a href="./vets.php">Vets</a></li> 
								<li><a href="./about.php">About</a></li>
								<li><a href="./contact-us.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>