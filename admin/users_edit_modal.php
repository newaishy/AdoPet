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
<div class="signup-form" id="edit">
<h4 class="modal-title"><b>Edit User</b></h4>
<form class="form-horizontal" method="POST" action="users_edit.php">
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="address" name="address"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
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