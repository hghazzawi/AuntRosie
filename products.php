<?php $title="Products"; include("templates/header.php");


$result = pg_query($connection, "SELECT ProductCode, GroupCode, ProductType, ProductName, ProductImageSmall FROM main");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

while ($row = pg_fetch_row($result)) {
  echo "Author: $row[0]  E-mail: $row[1]";
  echo "<br />\n";
}


?>

	<br>


    <div style="margin-left: auto ;margin-right: auto ;width:1500px">
		<ul class="rig columns-4">
			<a href="product-details.php">
				<li>
					<img src="img/pies/pie.jpg" />
					<h3 style="text-align: center">Best PIE</h3>
					
					
				</li>
			</a>
			<a href="product-details.php">
				<li>
					<img src="img/pies/pie.jpg" />
					<h3 style="text-align: center">Best PIE</h3>
					
					
				</li>
			</a>
			<a href="product-details.php">
				<li>
					<img src="img/pies/pie.jpg" />
					<h3 style="text-align: center">Best PIE</h3>
					
					 
				</li>
			</a>
			<a href="product-details.php">
				<li>
					<img src="img/pies/pie.jpg" />
					<h3 style="text-align: center">Best PIE</h3>
					
					 
				</li>
			</a>
			
			
		</ul>
	</div>

<?php include("templates/footer.php"); ?>
