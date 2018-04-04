<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Floor Five Order Complete - Anna Kimball</title>
        
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
						<div class="completeborder">
							<h1>Your order is complete!</h1><br />
							<div id="confirmation">
								Confirmation number: ES954148<br />
								An email has been sent to: JaneDoe@gmail.com<br />
							</div>
							
								<div id="cartheader">
									Product
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
												<a href="hellokittymat.php"><img id="thumbnailscart" alt="Hello Kitty Mat" src="<?php echo $row['productimage'] ?>" /></a>
												<p id="cartitemtext"><br />
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
								<div id="cartheader2">
									Quantity <br />
									<p id="cartitemquantity"><br />1</p>
								</div>
								<div id="cartheader3">
									Price<br />
									<p id="cartitemquantity2"><br />
										<?php 
								
											$result = mysqli_query($con,"SELECT * FROM products");
											while($row = mysqli_fetch_array($result)) {
												if ($row['productsid']=="5"){
													echo "$ ";
													echo $row['price'];
													echo ".00";
												}
												else {
												}
											}
										?>
									</p>
								</div>
															
							<hr id="carthr" />
							<div class="checkouttotal">
								<?php 
								
									$result = mysqli_query($con,"SELECT * FROM products");
									while($row = mysqli_fetch_array($result)) {
										if ($row['productsid']=="5"){
											$total = $row['price'];
											$tax = .07*$total;
											$shipping = 7;
											$subtotal = ($total + $tax) + $shipping;
											echo "Total: $";
											echo $total;
											echo ".00<br />";
											echo "Tax: $";
											echo $tax;
											echo "<br />";
											echo "Shipping: $";
											echo $shipping;
											echo ".00<br />";
											echo "Subtotal: $";
											echo $subtotal;
											echo "<br /><br />";
										}
										else {
										}
									}
								?>
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
						<div id = "productsspace2">
							<h1>Related Products</h1>
							<div>
								<!-- Product 1 -->
								<div class ="grid_2">
									<?php 
										$result = mysqli_query($con,"SELECT * FROM products");
									
										while($row = mysqli_fetch_array($result)) {
											if ($row['productsid']=="4"){
									?>
												<a href="totoromat.php"><img id="thumbnails1" alt="Totoro Mat" src="<?php echo $row['productimage'] ?>" /></a>
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
											if ($row['productsid']=="1"){
									?>
												<a href="bamboorug.php"><img id="thumbnails2" alt="Bamboo Rug" src="<?php echo $row['productimage'] ?>" /></a>
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
											if ($row['productsid']=="3"){
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
												<a href="lioragoldfish.php"><img id="thumbnails4" alt="LioraGoldfish" src="<?php echo $row['productimage'] ?>" /></a>
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
