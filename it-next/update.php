<?php
	include ('productCRUD.php');
	
	if(isset($_POST['update']))
	{
		try {
			$obj = new ProductCRUD();
			$success = $obj->updateProduct($_POST['code'], $_POST['name'], $_POST['price'], $_POST['image'], $_POST['details']);
			header('Location: index.php');
		} catch(Exception $e) {
			echo $e->getMessage();
		}
		
	}

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update plushie</h2>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <div class="form-group">
      <label for="code">Product code:</label>
      <input type="text" class="form-control" id="code" placeholder="Enter code" name="code">
    </div>
    <div class="form-group">
      <label for="code">Product name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
	<div class="form-group">
      <label for="code">Product price:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
    </div>
	<div class="form-group">
      <label for="code">Product image:</label>
      <input type="text" class="form-control" id="image" placeholder="Enter image" name="image">
    </div>
	<div class="form-group">
      <label for="code">Product details:</label>
      <input type="text" class="form-control" id="details" placeholder="Enter details" name="details">
    </div>
    <button type="submit" class="btn btn-primary" name="update">Update</button>
  </form>
</div>

</body>
</html>
