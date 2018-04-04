<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Floor Five Bamboo Rug - Anna Kimball</title>
        
		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/html5reset.css" media="all" />
		<link rel="stylesheet" href="css/960.css" media="all" />
		<link rel="stylesheet" href="css/styles.css" media="all" />
		<script type="text/javascript" src="js/process_form.js"></script>	
    </head>
    
    <body>
		<div id="content">
			
			<div class="container_12">
				<!-- Logo -->
				<div class="grid_12">
					<img id="header" src="img/header.png" alt="Floor Five" />
				</div>
				
				<!-- Navigation -->
				<div class="grid_12">
					<div class="space">
						<div class="nav">
							<ul>
								<li><a href="home.php">Home</a></li>
								<li><a href="catalog.php">Catalog</a></li>
								<li><a href="client.php">Account</a></li>
								<li><a href="cart.php">Cart</a><img class="cart" src="img/carticon.png" alt="Cart" /></li>
								<li><p class="form"><input class="searchbox" type="text" name="search" /></p>
								<a href="search.php"><img src="img/searchicon.png" class="searchicon" alt="Search" /></a></li>
							</ul>
						</div>
					</div>
					<img src="img/hr.png" class="navhr" alt="Navigation" />
				</div>
				
				<!-- Content -->
				<div class="grid_12">
					<div class ="grid_9">
						<div id="productsspace">
							<h1>
								<?php 
																							
									$con=mysqli_connect("address","username","password","username");
									// Check connection
									if (mysqli_connect_errno()) {
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
																		
									$result = mysqli_query($con,"SELECT * FROM products");
									
									while($row = mysqli_fetch_array($result)) {
									  if ($row['productsid']=="1"){
										echo $row['productname']; 
										  
									  }
									  else {
									  }
									}
									?>
							</h1>
							<div>
								<div class ="grid_3">
									<?php 
										$result = mysqli_query($con,"SELECT * FROM products");
									
										while($row = mysqli_fetch_array($result)) {
											if ($row['productsid']=="1"){
									?>
												<img id="thumbnailproduct" src="<?php echo $row['productimage'] ?>" alt="Bamboo Rug" />
												<?php
											}
											else {
											}
										}
									?>
								
								</div>
								<div class ="grid_5">
									<div id="productdescrip">
										<h2>Description:</h2>
										<?php 
																												
											$result = mysqli_query($con,"SELECT * FROM products");
									
											while($row = mysqli_fetch_array($result)) {
												if ($row['productsid']=="1"){
													echo $row['description']; 
										  
												}
												else {
												}
											}
										?>
										<br /><br />
										<h2>Product rating:</h2> 
										<img src="img/4stars.jpg" class="stars" alt="Rating" /><br /><br /> 
										<a href="cart.php"><input class="buttoncheckout" type="button" value="Add to cart" /></a>
									</div>
								</div>
								
							</div>
							
						</div>
						<div class = "productsspace">
							<br /><br />
							<div class="productborder">
						
								<h1>Customer Reviews</h1><br />
								<hr />
								<div id="confirmation">
								</div>
								<h2>Posted:</h2> Apr 01, 2014<br />
								<h2>Reviewer:</h2> Joe Dirt<br />
								<h2>Rating:</h2> <img src="img/5stars.jpg" class="stars" alt="Rating" /><br />
								<p>I was wary of ordering hardwood online, but this item was just 
								what I wanted. The color is a warm, medium tone and looks great. 
								It's gotten lots of compliments! My contractor said it was very 
								easy to work with, especially since the planks are relatively 
								wide. It's also holding up very well. However, a small number of 
								pieces do have minor imperfections (bubbles, etc.)</p>
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
										<a href="bamboorug.php"><img id="thumbnails" alt="Bamboo Rug" src="<?php echo $row['productimage'] ?>" /></a><br />
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
						<div id="productsspace3">
							<h1>Related Products</h1>
							<div>
								<!-- Product 1 -->
								<div class ="grid_2">
									<?php 
										$result = mysqli_query($con,"SELECT * FROM products");
									
										while($row = mysqli_fetch_array($result)) {
											if ($row['productsid']=="3"){
									?>
												<a href="safaviehrug.php"><img id="thumbnails1" alt="Safavieh Rug" src="<?php echo $row['productimage'] ?>" /></a>
												<p class="titles"><?php echo $row['productname']; ?></p>
												<?php
											}
											else {
											}
										}
												?>
								</div>
								<!-- Product 2 -->
								<div class ="grid_2">
									<?php 
										$result = mysqli_query($con,"SELECT * FROM products");
									
										while($row = mysqli_fetch_array($result)) {
											if ($row['productsid']=="9"){
									?>
												<a href="tauperug.php"><img id="thumbnails2" alt="Taupe Rug" src="<?php echo $row['productimage'] ?>" /></a>
												<p class="titles"><?php echo $row['productname']; ?></p>
												<?php
											}
											else {
											}
											}
												?>
								</div>
								<!-- Product 3 -->
								<div class ="grid_2">
									<?php 
										$result = mysqli_query($con,"SELECT * FROM products");
									
										while($row = mysqli_fetch_array($result)) {
											if ($row['productsid']=="2"){
									?>
												<a href="tatamimat.php"><img id="thumbnails3" alt="Tatami Mat" src="<?php echo $row['productimage'] ?>" /></a>
												<p class="titles"><?php echo $row['productname']; ?></p>
												<?php
											}
											else {
											}
										}
												?>
								</div>
								<!-- Product 4 -->
								<div class ="grid_2">
									<?php 
										$result = mysqli_query($con,"SELECT * FROM products");
									
										while($row = mysqli_fetch_array($result)) {
											if ($row['productsid']=="8"){
									?>
												<a href="lioragoldfish.php"><img id="thumbnails4" src="<?php echo $row['productimage'] ?>" alt="Liora Goldfish" /></a>
												<p class="titles"><?php echo $row['productname']; ?></p>
												<?php
											}
											else {
											}
										}
												?>
								</div>
								<div class="grid_1">
								</div>
							</div>
						</div>
					</div>
					<div class="grid_3">
					</div>
				</div>
				
				
				<div class="grid_9">
					<div id="footer">
					
					</div>
					<div class="footertext">
						Designed by Anna Kimball<br />
						This site is not official and is an assignment for a UCF Digital Media course.
					</div>
				</div>
				<div class="grid_3">
					<div class="footertext">
						Contact us:<br />
						Phone: 1-800-555-1234<br />
						E-mail: contact@floorfive.com<br /><br />
						<a href="admin.php">Admin login</a>
					</div>
				</div>
			</div>
		</div>	
    </body>
</html>
