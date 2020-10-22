<?php
	include ('productCRUD.php');
	
	$obj = new ProductCRUD();
	$success = $obj->updateProduct($_POST['code'], $_POST['name'], $_POST['price'], $_POST['image'], $_POST['details']);
	header('Location: index.php');
?>