<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Floor Five Admin - Anna Kimball</title>
        
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
				
					<div class ="grid_12">
						<div id="productsspace">
							<h1>Admin</h1>
								<div class="tableborder">
									
									<table>
										<tr>
											<th>Product</th>
											<th>Category</th>
											<th>Sku</th>
											<th>Stock</th>
											<th>Cost</th>
											<th>Price</th>
											<th>Description</th>
										</tr>
									
									<?php
								
										$con=mysqli_connect("address","username","password","username")
										// Check connection
										if (mysqli_connect_errno()) {
											echo "Failed to connect to MySQL: " . mysqli_connect_error();
										}
								
										$result = mysqli_query($con,"SELECT * FROM products");

										while($row = mysqli_fetch_array($result)) {
										
											echo "<tr>";
											echo "<td>" . $row['productname'] . "</td>";
											echo "<td>" . $row['category'] . "</td>";
											echo "<td>" . $row['sku'] . "</td>";
											echo "<td>" . $row['stock'] . "</td>";
											echo "<td>" . $row['cost'] . "</td>";
											echo "<td>" . $row['price'] . "</td>";
											echo "<td>" . $row['description'] . "</td>";
											echo "</tr>";
										}
									?>
									
									
									
									
										</table>
										
								</div>
								<div>
									<br />
									<br />
								</div>
								<form action="#" id="info" name="info" method="post">
								<a href="home.php"><input class="button" type="button" value="Logout" /></a>
							</form>
						</div>
					</div>
					
				</div>
								
				<div class="grid_12">
					<div class ="grid_9">
				
					</div>
					<div class="grid_3">
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
