<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Floor Five Home - Anna Kimball</title>
        
		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/html5reset.css" media="all" />
		<link rel="stylesheet" href="css/960.css" media="all" />
		<link rel="stylesheet" href="css/styles.css" media="all" />
		<script type="text/javascript" src="js/process_form.js"></script>	
    </head>
    
    <body><form method='post'>

	
	
	

		<div id="content">
			
			<div class="container_12">
				<!-- Logo -->
				<div class="grid_12">
					<img id="header" src="img/header.png" alt="Floor Five" />
				</div>
				
				<!-- Navigation -->
				<div class="grid_12">
					<div class="space">
						<ul>
							<li><a href="home.html">Home</a></li>
							<li><a href="products.html">Catalog</a></li>
							<li><a href="account.html">Account</a></li>
							<li><a href="cart.html">Cart</a><img class="cart" src="img/carticon.png"></li>
							<li><p class="form"><input class="searchbox" type="text" name="search" placeholder=" search" />
							<a href="search.html"><img src="img/searchicon.png" class="searchicon" /></a></li>
						</ul>
					</div>
					<img src="img/hr.png" class="navhr">
				</div>
				
				<!-- Content -->
				<div class="grid_12">
					<div class ="grid_9">
						<div id="productsspace">
							<div>
								<img id="featurehome" src="img/bamboohome.png">
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="featuredproduct">
						<h2>Featured Product</h2>
						
						
								<?php
								
								$con=mysqli_connect("sulley.cah.ucf.edu","an840579","Hatsuharu1!","an840579");
								// Check connection
								if (mysqli_connect_errno()) {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}
								
								$result = mysqli_query($con,"SELECT * FROM products");

								while($row = mysqli_fetch_array($result)) {
								  if ($row['productsid']=="1"){
								  ?>
								  <br />
								  <a href="bamboorug.html"><img id="thumbnails" src="<?php echo $row['productimage'] ?>"></a><br>
								  <?php 
								  echo $row['productname'];
								  echo "<br /><br />";
								  echo "Price: $". $row['price'] .".00";
								  echo "<br /><br /><br />";
								  echo $row['description'];
								  }
								  else {
								  }
								}
							
							?>

						</div>
					</div>
				</div>
				
				<div class="grid_12">
					<div class ="grid_9">
						<div id="productsspace2">
							<h1>Latest Products</h1>
							<div>
								<div class ="grid_2">
								
								<?php 
								while($row = mysqli_fetch_array($result)) {
								  if ($row['productsid']=="6"){
								  ?>
								  <a href="maplehardwood.html"><img id="thumbnails" src="<?php echo $row['productimage'] ?>"></a>
								  <p id="titles"><?php echo $row['productname']; ?></p>
								  <?php
								  }
								  else {
								  }
								}
								?>
								
								
								
								<a href="maplehardwood.html"><img id="thumbnails" src="img/maplehardwood.png"></a>
								<p id="titles">Maple Hardwood</p>
								</div>
								<div class ="grid_2">
								<a href="mazamahardwood.html"><img id="thumbnails" src="img/mazamahardwood.png"></a>
								<p id="titles">Mazama Hardwood</p>
								</div>
								<div class ="grid_2">
								<a href="dantecarpet.html"><img id="thumbnails" src="img/dante_carpet.png"></a>
								<p id="titles">Dante Carpet</p>
								</div>
								<div class ="grid_2">
								<a href="lioragoldfish.html"><img id="thumbnails" src="img/goldfish_thumb.jpg"></a>
								<p id="titles">Liora Goldfish</p>
								</div>
								<div class="grid_1">
								</div>
							</div>
							
						</div>
					</div>
					<div class="grid_3">
						<div id="productsspace2">
							<h1>Floor Five</h1>
							<div>
							&nbsp;&nbsp;Floor Five is full of bullshit

							
							</div>
						</div>
					</div>
				</div>
				
				<div class="grid_12">
					<div class="grid_9">
					<!--<img id="footer" src="img/footer.png" alt="footer" />-->
					<div id="footer">
					
					</div>
					<div id="footertext">
						Designed by Anna Kimball<br>
						This site is not official and is an assignment for a UCF Digital Media course.
					</div>
				</div>
				<div class="grid_3">
					<div id="footertext">
					Contact us:<br>
					Phone: 1-800-555-1234<br>
					E-mail: contact@floorfive.com<br><br>
					<a href="admin.html">Admin login</a>
					</div>
				</div>
				</div>
			</div>
		</div>	
		
	</form></body>
</html>
