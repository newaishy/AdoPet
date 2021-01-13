<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$category = $_POST['category'];
		$description = $_POST['description'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE adopt SET name=:name, category_id=:category, description=:description WHERE id=:id");
			$stmt->execute(['name'=>$name, 'category'=>$category,  'description'=>$description, 'id'=>$id]);
			$_SESSION['success'] = 'Animal updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit animal form first';
	}

	header('location: animals.php');

?>