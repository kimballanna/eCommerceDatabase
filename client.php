<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Floor Five Account - Anna Kimball</title>
        
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
					<div class ="grid_4">
						<div id="productsspace">
							<p class="profile">Customer Profile</p> <a href="clientedit.php">edit</a><br /><br />
							<div>
								<p class="account">First Name:</p>&nbsp;&nbsp;Jane<br /><br />
							</div>
							<div>
								<p class="account">Last Name:</p>&nbsp;&nbsp;Doe<br /><br />
							</div>
							<div>
								<p class="account">E-mail:</p>&nbsp;&nbsp;JaneDoe@gmail.com<br /><br />							
							</div>
							<div>
								<p class="account">Phone Number:</p>&nbsp;&nbsp;555-555-5555<br /><br />
							</div>
							<div>
								<p class="account">Address:</p>&nbsp;&nbsp;123 Dark Alley Street<br /><br />
							</div>
							<div>
								<p class="account">City:</p>&nbsp;&nbsp;Orlando<br /><br />
							</div>
							<div>
								<p class="account">State:</p>&nbsp;&nbsp;Florida<br /><br />
							</div>
							<div>
								<p class="account">Zipcode:</p>&nbsp;&nbsp;12345<br /><br />
							</div>
							<div>
								<br />
								<br />
							</div>
						</div>
					</div>
					
					<div class="grid_5">
						<div class="customerbilling">
							<div>
								<p class="account">Credit Card #:</p>&nbsp;&nbsp;1234567890<br /><br />
							</div>
							<div>
								<p class="account">Exp:</p>&nbsp;&nbsp;04/15<br /><br />
							</div>
							<div>
								<p class="account">CCV:</p>&nbsp;&nbsp;789<br /><br />							
							</div>
							
							<div id="space">
								&nbsp;
							</div>
						</div>
					</div>
					
					<div class="grid_3">
						<div class="featuredproduct">
							<h2>Featured Product</h2>
							<?php
									
								$con=mysqli_connect("address","username","password","username");
								// Check connection
									if (mysqli_connect_errno()) {
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									
									$result = mysqli_query($con,"SELECT * FROM products");
									while($row = mysqli_fetch_array($result)) {
										if ($row['productsid']=="1"){
							?>
											<br />
											<a href="bamboorug.php"><img id="thumbnails" src="<?php echo $row['productimage'] ?>" alt="Bamboo Rug" /></a><br />
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
