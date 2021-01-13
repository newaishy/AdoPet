<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$category = $_POST['category'];
		$description = $_POST['description'];
		$filename = $_FILES['photo']['name'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM adopt WHERE name=:name");
		$stmt->execute(['name'=>$name]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Animal already exist';
		}
		else{
			if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $name.'.'.$ext;
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/animals/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}

			try{
				$stmt = $conn->prepare("INSERT INTO adopt (category_id, name, description, photo) VALUES (:category, :name, :description, :photo)");
				$stmt->execute(['category'=>$category, 'name'=>$name, 'description'=>$description, 'photo'=>$new_filename]);
				$_SESSION['success'] = 'Animal added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up animal form first';
	}

	header('location: animals.php');

?>