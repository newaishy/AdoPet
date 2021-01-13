<?php include 'includes/session.php'; ?>
<?php
	$conn = $pdo->open();

	$name = $_GET['pet'];

	try{
		 		
	    $stmt = $conn->prepare("SELECT *, adopt.name AS petname, category.name AS catname, adopt.id AS petid FROM adopt LEFT JOIN category ON category.id=adopt.category_id WHERE adopt.name = :name");
	    $stmt->execute(['name' => $name]);
	    $pet = $stmt->fetch();
		
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<div class="callout" id="callout" style="display:none">
	        			<button type="button" class="close"><span aria-hidden="true">&times;</span></button>
	        			<span class="message"></span>
	        		</div>
		            <div class="row">
		            	<div class="col-sm-6">
		            		<img src="<?php echo (!empty($pet['photo'])) ? 'images/animals/'.$pet['photo'] : 'images/noimage.jpg'; ?>" width="100%" class="zoom" data-magnify-src="images/large-<?php echo $pet['photo']; ?>">
		            		<br><br>
		            		<form class="form-inline" id="petForm" action="unavailable.php">
		            			<div class="form-group">
			            			<button type="submit" class="btn btn-primary btn-lg btn-flat"></i>Adopt</button>
			            		</div>
		            		</form>
		            	</div>
		            	<div class="col-sm-6">
		            		<h1 class="page-header"><?php echo $pet['petname']; ?></h1>
		            		<p><b>Description:</b></p>
		            		<p><?php echo $pet['description']; ?></p>
		            	</div>
		            </div>
		            <br>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  	<?php $pdo->close(); ?>
  	<?php include 'includes/footer.php'; ?>
</div>
</body>
</html>