<?php
	include('productCRUD.php');
	
	$obj = new ProductCRUD();
	//read data
	$list = $obj->readProducts();
	if($list)
	{
	/*	foreach($list as $item)
		{
			$content = "";
			foreach($item as $key => $value)
			{
				$content = $content . $key . ": " . $value . "<br>";
			}
			echo $content . "<br>";
		}
	}	*/


?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Plushie Woosh Toys</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body> 
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">Plushie Woosh Toys</a></h1>
      <h2>A website you can use to buy toys, probably</h2>
    </div>
    
    <nav>
      <ul>
        <li><a href="#">Main Page</a></li>
        <li class="last"><a href="products.php">Products</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
    <section id="slider" class="clear">
      <figure><img src="images/Background.jpg" alt="">
        <figcaption>
          <h2>Introduction</h2>
          <p>Founded in 20xx, we Plushie Woosh Store have been trying our best to deliver to customers high-quality toys with the best cost possible.</p>
        </figcaption>
      </figure>
    </section>
    <!-- main content -->
    <div id="intro">
      <section class="clear">
        <!-- article 1 -->
        <article class="two_quarter">
          <h2>About</h2>
          <p>Contact: 09xxxxxxx</p>
          <p>Address: District X, Ho Chi Minh City</p>
        </article>
        <!-- article 2 -->
		
		 
        <article class="two_quarter lastbox">
          <figure>
			<ul class="clear">
				<?php foreach($list as $item) { ?>
				
					<li class="last"><a href="#"><img src="img\<?php echo $item["image"] ?> "width="144" height="144"/></a></li>
					
				<?php } ?>
				<?php } ?>
            </ul>
            <figcaption><a href="products.php">View Our Products Here &raquo;</a></figcaption>
          </figure>
        </article>
		
		
			
      </section>
    </div>
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </footer>
</div>
</body>
</html>
