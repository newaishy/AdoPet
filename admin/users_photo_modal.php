<?php include 'includes/session.php'; ?>
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
<div class="signup-form" id="edit_photo">
<h4 class="modal-title"><b>Edit User Photo</b></h4>
<form class="form-horizontal" method="POST" action="users_photo.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
				<button  onclick="history.back()" type="button" class="btn btn-default btn-flat pull-left" ><i class="fa fa-close"></i>Go Back</button>
              <p></p>
              <button type="submit" class="btn btn-success btn-flat pull-right" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
            	</form>
</div>
</div>
</div>
              <hr>
<?php include 'includes/footer.php'; ?>
</body>
</html>