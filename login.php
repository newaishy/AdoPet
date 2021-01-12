<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: index.php');
  }
?>
<?php include 'includes/header.php'; ?>
<body>
<div class="wrapper">
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
              <?php
            if(isset($_SESSION['user'])){
              $image = (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg';
			  echo "
			  <li><a href='./cart_view.php'><i class='fa fa-shopping-cart'></i> Cart</a></li>
			  <li><a href='./profile.php'>Account</a></li>
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
<div class="content-wrapper">
<div class="container">
<div class="signup-form col-sm-5" >
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
<h2>Login to your account</h2>
    	<form action="verify.php" method="POST">
          <div class="form-group has-feedback">
        		<input type="email" class="form-control" name="email" placeholder="Email" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
      <br>
      <a href="signup.php" class="text-center">Don't have an account?</a><br>
      <a href="index.php"><i class="fa fa-home"></i> Home</a>
</div>
</div>	
<hr>
<?php include 'includes/footer.php'; ?>
</div>	
</div>	
</body>
</html>