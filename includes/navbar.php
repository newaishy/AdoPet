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
								<li><a href="./cart_view.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php
            if(isset($_SESSION['user'])){
              $image = (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg';
              echo "
			  <li><a href='logout.php'>Logout</a></li>
			";
            }
            else{
              echo "
                <li><a href='login.php'>Login</a></li>
                <li><a href='signup.php'>SignUp</a></li>
              ";
            }
          ?>
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
					<form method="POST" class="navbar-form navbar-right" action="search.php">
          <div class="input-group">
              <input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Search for Product" required>
              <span class="input-group-btn" id="searchBtn" >
                  <button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i> </button>
              </span>
          </div>
        </form>
					</div>
				</div>
			</div>
		</div>
	</header>