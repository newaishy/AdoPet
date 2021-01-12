
  <?php include 'includes/session.php'; ?>
  <?php 	

$id = $_GET["id"];
$conn = $pdo->open();
$stmt = $conn->prepare("SELECT * FROM products WHERE id=:id");
			$stmt->execute(['id'=>$id]);
	    $product = $stmt->fetch();

      $name = $product['name'];
      $category = $product['category_id'];
      $price = $product['price'];
      $description = $product['description'];
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
              <h4 class="modal-title"><b>Product Description</b></h4>
              <form class="form-horizontal" method="POST" action="products_edit.php">
                <input type="hidden" class="prodid" name="id">
                <div class="form-group">
                  <label for="edit_name" class="col-sm-1 control-label">Name</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="edit_name" name="name" value="<?php echo $name;?>">  </div>

                  <label for="edit_category" class="col-sm-1 control-label">Category</label>

                  <div class="col-sm-5">
                    <select class="form-control" id="edit_category" name="category" value="<?php echo $category;?>">
                      <?php
                        $conn = $pdo->open();

                        $stmt = $conn->prepare("SELECT * FROM category WHERE id=$category");
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
                  <label for="edit_price" class="col-sm-1 control-label">Price</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="edit_price" name="price" value="<?php echo $price;?>">
                  </div>
                </div>
                <p><b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor2" name="description" rows="10" cols="80"><?php echo $description;?></textarea>
                  </div>
                  
                </div>
			      	<button  onclick="history.back()" type="button" class="btn btn-default btn-flat pull-left" ><i class="fa fa-close"></i>Go Back</button>
            	</form>
</div>
</div>
</div>
<hr>
<?php include 'includes/footer.php'; ?>

</body>
</html>