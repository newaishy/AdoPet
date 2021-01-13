<?php include 'includes/session.php'; ?>
<?php 	

$id = $_GET["id"];
$conn = $pdo->open();
$stmt = $conn->prepare("SELECT * FROM adopt WHERE id=:id");
			$stmt->execute(['id'=>$id]);
	    $animal = $stmt->fetch();
      $name = $animal['name'];



?>

<?php
  if(!isset($_SESSION['admin'])){
    header('location: login.php');
  }
?>
<?php include 'includes/header.php'; ?>
<body>
<div class="wrapper">
<?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>
		</div>
<div class="content-wrapper">
<div class="container">
<div class="signup-form" id="delete">
          <h4 class="modal-title"><b>Deleting...</b></h4>
          <form class="form-horizontal" method="POST" action="animals_delete.php">
                <input type="hidden" class="prodid" name="id" value=<?php echo $id?>>
                <div class="text-center">
                    <p>DELETE ANIMAL <b><?php echo $name;?></b> ?</p>
                    <h2 class="bold name"></h2>
                </div>
				<button  onclick="history.back()" type="button" class="btn btn-default btn-flat pull-left" ><i class="fa fa-close"></i>Go Back</button>
              <p></p>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
            	</form>
</div>
</div>
</div>
              <hr>
<?php include 'includes/footer.php'; ?>
</body>
</html>