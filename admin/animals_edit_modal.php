
  <?php include 'includes/session.php';
  ?>

<?php 	

$id = $_GET["id"];
$conn = $pdo->open();
$stmt = $conn->prepare("SELECT * FROM adopt WHERE id=:id");
			$stmt->execute(['id'=>$id]);
	    $animal = $stmt->fetch();
      $name = $animal['name'];
      $category = $animal['category_id'];
      $description = $animal['description'];
      $catid = $category;


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
<div class="signup-form" id="edit">
<h4 class="modal-title"><b>Edit Animal</b></h4>
              <form class="form-horizontal" method="POST" action="animals_edit.php">
                <input type="hidden" class="prodid" name="id" value="<?php echo $id;?>">
                <div class="form-group">
                  <label for="edit_name" class="col-sm-1 control-label">Name</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="edit_name" name="name" value="<?php echo $name;?>">  </div>

                  <label for="edit_category" class="col-sm-1 control-label">Category</label>

                  <div class="col-sm-5">
                    <select class="form-control" id="edit_category" name="category" value="<?php echo $category;?>">
                      <option id="catselected">-Select-</option>

                      <?php
                        $conn = $pdo->open();

                        $stmt = $conn->prepare("SELECT * FROM category");
                        $stmt->execute();

                        foreach($stmt as $crow){
                          $selected = ($crow['id'] == $catid) ? 'selected' : ''; 
                          echo "
                            <option value='".$crow['id']."' ".$selected.">".$crow['name']."</option>
                          ";
                        }

                        $pdo->close();
                      ?>


                    </select>
                  </div>
                </div>
                <div class="form-group">
                </div>
                <p><b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor2" name="description" rows="10" cols="80"><?php echo $description;?></textarea>
                  </div>
                  
                </div>
			      	<button  onclick="history.back()" type="button" class="btn btn-default btn-flat pull-left" ><i class="fa fa-close"></i>Go Back</button>
              <p></p>
              <button type="submit" class="btn btn-success btn-flat pull-right" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
            	</form>
</div>
</div>
</div>
<hr>
<?php include 'includes/footer.php'; ?>
</body>
</html>