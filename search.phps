<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Floor Five Search - Anna Kimball</title>
        
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
							<h1>You searched for: "mats"</h1><br />
							<p id="result">Top Result:</p>
							<div id="search">
								<?php
								
									$con=mysqli_connect("address","username","password","username");
									// Check connection
									if (mysqli_connect_errno()) {
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									
									$result = mysqli_query($con,"SELECT * FROM products");
									while($row = mysqli_fetch_array($result)) {
										if ($row['productsid']=="5"){
								?>
											<a href="hellokittymat.php"><img class="thumbnailsearch" alt="Hello Kitty Mat" src="<?php echo $row['productimage'] ?>" /></a>
											<p class="cartitemtext"><br />
												<?php 
												echo $row['productname'];
												echo "<br /><br />";
												echo $row['description'];
												echo "<br />";
										}
										else {
										}
									}
												?>
											</p>
								<br />
							</div>
							<div id="search2">
								<?php
								
									$con=mysqli_connect("sulley.cah.ucf.edu","an840579","Hatsuharu1!","an840579");
									// Check connection
									if (mysqli_connect_errno()) {
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									
										$result = mysqli_query($con,"SELECT * FROM products");
										while($row = mysqli_fetch_array($result)) {
											if ($row['productsid']=="4"){
								?>
												<a href="totoromat.php"><img class="thumbnailsearch" alt="Totoro Mat" src="<?php echo $row['productimage'] ?>" /></a>
												<p class="cartitemtext"><br />
													<?php 
														echo $row['productname'];
														echo "<br /><br />";
														echo $row['description'];
														echo "<br />";
											}
											else {
											}
										}
													?>
												</p>
							</div>
							<div id="search3">
								<?php
								
									$con=mysqli_connect("sulley.cah.ucf.edu","an840579","Hatsuharu1!","an840579");
									// Check connection
									if (mysqli_connect_errno()) {
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									
									$result = mysqli_query($con,"SELECT * FROM products");
									while($row = mysqli_fetch_array($result)) {
										if ($row['productsid']=="3"){
								?>
											<a href="tatamimat.php"><img class="thumbnailsearch" alt="Tatami Mat" src="<?php echo $row['productimage'] ?>" /></a>
											<p class="cartitemtext"><br />
												<?php 
													echo $row['productname'];
													echo "<br /><br />";
													echo $row['description'];
													echo "<br />";
										}
										else {
										}
									}
												?>
											</p>
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
				
				<div id="space">
					&nbsp;
				</div>
							
				<div class="grid_12">
					<div class = "grid_2">
						&nbsp;
					</div>
					<div class="grid_10">
						<div>
							<br />
							<br />
						</div>
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
